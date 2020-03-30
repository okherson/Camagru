<?php

namespace app\models;

use app\core\Model;

class Account extends Model {

	public function registration($params) {
		$result = $this->db->query('SELECT * FROM users WHERE `email` = :email', ['email' => $_POST['email']]);
		if (!empty($result)) {
			return false;// echo"Email is already used. Try to restore your password or use another email address.";
		} else {
			$request_params = [
				'first_name' => $params['first_name'],
				'second_name' => $params['second_name'],
				'email' => $params['email'],
				'password' => hash('sha256', $params['password'])
			];
			$this->db->query('INSERT INTO users (`first_name`, `second_name`, `email`, `password`) VALUES (:first_name, :second_name, :email, :password)', $request_params);
			$result = $this->db->query('SELECT * FROM users WHERE `email` = :email', ['email' => $_POST['email']]);

if (!empty($result)) { //remove before prodaction.
return true;//////////
}/////////////

			if ($result && $this->sendMail($params)) {
				return true;
			}
		}
		return false;
	}	

	public function login($params) {
		if (!isset($_SESSION['email'])) {
			$user = [
				'email' => $_POST['email'],
				'password' => hash('sha256', $_POST['password'])
			];
		    $get_user = $this->db->query("SELECT * FROM `users` WHERE `email` = :email && `password` = :password", $user);
			if (!empty($get_user)){
				$_SESSION = array();
				$_SESSION['first_name'] = $get_user[0]['first_name'];
				$_SESSION['user_id'] = $get_user[0]['id'];
				$_SESSION['email'] = $get_user[0]['email'];
				return true;
			}
		}
		return false;
	}

	public function passwordReset($params) {
		if (!isset($_POST['password'])) {
			$result = $this->db->query('SELECT * FROM users WHERE `email` = :email', ['email' => $_POST['email']]);
			if (!$result) {
				echo "It is no user with such email address.";
			} else if (!$this->sendMail($params)) {
				echo "We were unable to send a confirmation to your email.";
			} else {
				echo "Email sent successfully";
			}
		} else {

			$request_params = [
				'passwd' => hash('sha256', $params['password']),
				'email' => $params['email']
			];
			$res = $this->db->query('UPDATE users SET `password` = :passwd WHERE `email` = :email', $request_params);
		    $db_passwd = $this->db->query("SELECT password FROM `users` WHERE `email` = :email", ['email' => $params['email']]);
			if ($db_passwd[0]['password'] == hash('sha256', $params['password'])) {
				echo "Password changed succesfully.";
			} else {
				echo "Password does not changed.";
			}
		}


	}


	public function sendMail($params) {
		$to=$params['email'];
		$subject='Camagru email confirmation';
		$message='Enter this key into confirmation form: '.$params['confirmationKey']; 
		$headers='From:okherson@student.unit.ua';
		if (mail($to,$subject,$message,$headers)) {
			return true;
		}
		return false;
	}	

}



?>