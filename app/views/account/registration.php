<h1>CAMAGRU</h1>
<h2>Registration</h2>
<p>Sign up to view and share cool photos with your friends.</p>

<div class="resultInfoBlock"></div>

<div class="registrationBlock">
	<form name="registration_form" class="account_form">
		<div class="form-group">
			<label for="inputFirstName" class="form-label">First name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="first_name" id="inputFirstName">
			</div>
		</div>
		<div class="form-group">
			<label for="inputSecondName" class="form-label">Second Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="second_name" id="inputSecondName">
			</div>
		</div>	<div class="form-group">
			<label for="inputEmail3" class="form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email" id="inputEmail" placeholder="example@gmail.com">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="form-label">Password</label>
			<div class="passwordEye_block">
				<input type="password" class="form-control" id="inputPassword" name="password">
				<div id="openEye" class="openEye iC_password"><img src="/public/images/open_eye.svg" alt=""></div>
				<div id="closedEye" class="closedEye iC_password disabled"><img src="/public/images/closed_eye.svg" alt=""></div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
				<button id="registrationForm_submit" type="submit" name="submit" class="btn btn-center confirmBtn" value="registration">Confirm</button>
			</div>
		</div>
	</form>

	<form class="account_form">
		<div class="authorization_api_form">
			<a href="https://www.google.com/"><div type="button" class="authorization_api-btn" name="google_api"><img src="/public/images/1004px-Google__G__Logo.svg.webp" alt=""> Login with Google</div></a>
			<a href="https://www.facebook.com/"><div type="button" class="authorization_api-btn" name="Facebook_api"><img src="/public/images/Facebook_Logo_(2019).png" alt=""> Login with Facebook</div></a>
		</div>
	</form>

	<div class="form_change_password">
		<a href="login"><button class="btn btn-center resetBtn" id="btn_change_password">Sign in</button></a>
	</div>
</div>

<div class="emailConfirmationBlock disabled">
	<form name="emailConformation_form" class="account_form">
		<div class="form-group">
			<label for="inputPassword">Email confirmation code</label>
			<input type="password" class="form-control" name="confirmationCode" id="confirmationCode">
		</div>
		<div class="form-group">
			<button id="confirmationSubmit" type="submit" name="confirmationSubmit" class="btn btn-center confirmBtn" value="confirmation">Confirm</button>
		</div>
	</div>
</div>

<script src="/public/js/main.js"></script>
