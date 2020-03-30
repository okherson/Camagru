


// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    // navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        // video.srcObject = stream;
        // video.play();
    // });
}


// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
// var context = canvas.getContext('2d');
// var video = document.getElementById('video');

// Trigger photo take
// document.getElementById("snap").addEventListener("click", function() {
// 	context.drawImage(video, 0, 0, 640, 480);
// });


// document.getElementById("btn_account_passwordReset_mailForm").addEventListener("click", function() {
//     alert("click");
//     document.querySelector('.account_passwordReset_mailForm').classList.add('disabled');
//     document.querySelector('.account_passwordReset_passwordForm').classList.remove('disabled');

// });



/*                           forms                       */
/*                     forms_registration               */

var passwordVisibility = document.querySelector(".iC_password");
if (passwordVisibility) {
    document.getElementById("openEye").addEventListener("click", function (){
		document.querySelector("#openEye").classList.add('disabled');
		document.querySelector("#closedEye").classList.remove('disabled');
		var passwordField = document.getElementById("inputPassword");
		passwordField.type = "text";
	});
	document.getElementById("closedEye").addEventListener("click", function (){
		document.querySelector("#openEye").classList.remove('disabled');
		document.querySelector("#closedEye").classList.add('disabled');
		var passwordField = document.getElementById("inputPassword");
		passwordField.type = "password";
	});
}

var btn_element = document.querySelector(".confirmBtn");

if (btn_element && btn_element.id && btn_element.id == 'registrationForm_submit') {
    var servResponse = document.querySelector('.resultInfoBlock');

    document.forms.registration_form.onsubmit = function (e) {
        e.preventDefault(); //відключення дій за умовчанням

        var formData = new FormData(e.target);
        formData.append("action", "registration");

        var confirmationKey = str_rand();
        formData.append('confirmationKey', confirmationKey);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'registration');

        xhr.onreadystatechange = function(){
            if (xhr.readyState === 4 && xhr.status === 200){
                if (xhr.responseText == "Registration success.") {
                    document.querySelector('.resultInfoBlock').classList.add('warningBlock');
                    servResponse.textContent = xhr.responseText + " Please, enter the confirmation key, that was sent into your mail address."+confirmationKey;
    
                    document.querySelector('.registrationBlock').classList.add('disabled');
                    document.querySelector('.emailConfirmationBlock').classList.remove('disabled');

                    document.forms.emailConformation_form.onsubmit = function (e) {
                        e.preventDefault(); //відключення дій за умовчанням
                        var confirmationInput = document.getElementById('confirmationCode');
                        if (confirmationInput['value'] == confirmationKey){
                            document.querySelector('.emailConfirmationBlock').classList.add('disabled');
                            document.querySelector('.resultInfoBlock').classList.add('successBlock');
                            servResponse.textContent = "Congratulations with succesufull email confirmation! Now you may login an join Camagru!";
                        } else {
                            document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                            servResponse.textContent = "Sorry, confirmation key is incorrect";
                        }
                    }
                } else {
                    document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                    servResponse.textContent = xhr.responseText + "Registration was failed. Pleace try again later.";
                }
            }
        }
        xhr.send(formData);
    }
}

/*                     forms_login               */

if (btn_element && btn_element.id && btn_element.id == 'loginForm_submit') {
    var servResponse = document.querySelector('.resultInfoBlock');

    document.forms.login_form.onsubmit = function (e) {
        e.preventDefault(); //відключення дій за умовчанням

        var formData = new FormData(e.target);
        formData.append("action", "login");

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login');

        xhr.onreadystatechange = function(){
            if (xhr.readyState === 4 && xhr.status === 200){
                // servResponse.textContent = "LOGIN RESULT "+xhr.responseText;
                if (xhr.responseText == "Login success.") {
                    // document.querySelector('.resultInfoBlock').classList.add('successBlock');
                    // servResponse.textContent = "You Logged in successfully. Join CAMAGRU.";
                    document.querySelector('.b-popup').classList.remove('disabled');
                } else {
                    document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                    servResponse.textContent = "Unfortunately login or password is wrong, please try again";
                }
            }
        }
        xhr.send(formData);
    }
}

/*                     forms_resetPassword               */

if (btn_element && btn_element.id && btn_element.id == 'btn_account_passwordReset_mailForm') {
    var servResponse = document.querySelector('.resultInfoBlock');

    document.forms.password_reset_emailForm.onsubmit = function (e) {
        e.preventDefault(); //відключення дій за умовчанням

        var formData = new FormData(e.target);
        formData.append("action", "password_reset");

        var confirmationKey = str_rand();
        formData.append('confirmationKey', confirmationKey);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'password_reset');

        xhr.onreadystatechange = function(){
            if (xhr.readyState === 4 && xhr.status === 200){
                if (xhr.responseText == "Email sent successfully") {
                    document.querySelector('.resultInfoBlock').classList.add('warningBlock');
                    servResponse.textContent = " Please, enter the confirmation key, that was sent into your mail address."+confirmationKey;
                    document.querySelector('.emailBlock').classList.add('disabled');
                    document.querySelector('.emailConfirmationBlock').classList.remove('disabled');

                    document.forms.emailConformation_form.onsubmit = function (e) {
                        e.preventDefault(); //відключення дій за умовчанням
                        var confirmationInput = document.getElementById('confirmationCode');
                        if (confirmationInput['value'] == confirmationKey){
                            document.querySelector('.emailConfirmationBlock').classList.add('disabled');
                            document.querySelector('.newPasswordBlock').classList.remove('disabled');
                            document.querySelector('.resultInfoBlock').classList.remove('errorBlock');
                            document.querySelector('.resultInfoBlock').classList.add('warningBlock');
                            servResponse.textContent = "Pleace, enter your NEW password.";

                            document.forms.newPasswordForm.onsubmit = function (e) {
                                e.preventDefault(); //відключення дій за умовчанням
                                var newPasswordInput = document.getElementById('inputPassword');
                                formData.append("password", newPasswordInput.value);

                                var password_xhr = new XMLHttpRequest();
                                password_xhr.open('POST', 'password_reset');
                        
                                password_xhr.onreadystatechange = function(){
                                    if (password_xhr.readyState === 4 && password_xhr.status === 200){
                                            if (password_xhr.responseText == "Password changed succesfully.") {
                                            document.querySelector('.resultInfoBlock').classList.add('successBlock');
                                            servResponse.textContent = password_xhr.responseText;
                                            document.querySelector('.newPasswordBlock').classList.add('disabled');
                                        } else {
                                            document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                                            servResponse.textContent = "Something went wrong. We coud nit reset your password.";
                                        }
                                    }
                                }
                                password_xhr.send(formData);
                            }
                        } else {
                            document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                            servResponse.textContent = "Sorry, confirmation key is wrong.";
                        }
                    }
                } else {
                    document.querySelector('.resultInfoBlock').classList.add('errorBlock');
                    servResponse.textContent = "Sorry. " + xhr.responseText;
                }
            }
        }
        xhr.send(formData);
    }
}

function str_rand() {
    var result       = '';
    var words        = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    var max_position = words.length - 1;
        for( i = 0; i < 5; ++i ) {
            position = Math.floor ( Math.random() * max_position );
            result = result + words.substring(position, position + 1);
        }
    return result;
}


