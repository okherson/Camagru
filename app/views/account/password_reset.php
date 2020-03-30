<h1>CAMAGRU</h1>
<h2>Change password</h2>

<div class="resultInfoBlock"></div>

<div class="emailBlock">
	<form id="account_passwordReset_mailForm" class="account_form account_passwordReset_mailForm" name="password_reset_emailForm">
		<p> Enter email, that was used for the registration.</p>
		<div class="form-group">
			<label for="inputEmail3" class="form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com" name="email">
			</div>
		</div>
		<div class="form-group">
				<button id="btn_account_passwordReset_mailForm" type="submit" class="btn btn-center confirmBtn" name="submit" value="submit">Submit</button>
		</div>
	</form>
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
	</form>
</div>

<div class="newPasswordBlock disabled">
	<form name="newPasswordForm" id="newPasswordForm" class="account_form account_passwordReset_passwordForm">
		<div class="form-group">
			<label for="inputPassword3" class="form-label">New password</label>
			<div class="passwordEye_block">
				<input type="password" class="form-control" id="inputPassword" name="password">
				<div id="openEye" class="openEye iC_password"><img src="/public/images/open_eye.svg" alt=""></div>
				<div id="closedEye" class="closedEye iC_password disabled"><img src="/public/images/closed_eye.svg" alt=""></div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10">
				<button name="submit" value="submit" type="submit" class="btn btn-center confirmBtn">Confirm</button>
			</div>
		</div>
	</form>
</div>

<script>

</script>