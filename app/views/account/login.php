
<h1>CAMAGRU</h1>
<h2>Sign in</h2>

<div class="resultInfoBlock"></div>

<div class="loginBlock">
	<form class="account_form" name="login_form">
		<div class="form-group">
			<label for="inputEmail3" class="form-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com" name="email">
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
				<button id="loginForm_submit" type="submit" class="btn btn-center confirmBtn" name="submit" value="login">Sign in</button>
		</div>
	</form>
	<form class="account_form" name="apiAuthorization_form">
		<div class="authorization_api_form">
			<a href="https://www.google.com/"><div type="button" class="authorization_api-btn" name="google_api"><img src="/public/images/1004px-Google__G__Logo.svg.webp" alt=""> Login with Google</div></a>
			<a href="https://www.facebook.com/"><div type="button" class="authorization_api-btn" name="Facebook_api"><img src="/public/images/Facebook_Logo_(2019).png" alt=""> Login with Facebook</div></a>
		</div>
	</form>

	<div class="form_change_password">
		<a href="password_reset"><button class="btn btn-center resetBtn" id="btn_change_password">Forgot password</button></a>
	</div>

	<div class="form_change_password">
		<a href="registration"><button class="btn btn-center resetBtn" id="btn_change_password">Create account</button></a>
	</div>
</div>
<div class="b-popup disabled">
	<div class="b-popup-content">
		<a href="/"><img src="/public/images/delete-cross.svg" id="popUp-cross"></a>
			<p>You succesufully Logged in</p>
			<a href="/"><div type="button" class="confirmBtn" id="poUp-btn">Join CAMAGRU</div></a>
	</div>
</div>