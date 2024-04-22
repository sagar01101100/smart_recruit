<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">


												
</div>

<div class="col-sm-12 col-md-12">


												
</div>
												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>Email Address</label>
<input id="email" class="form-control" placeholder="Enter your email address" name="email" required type="text"> 
<span id="error" class="error"></span>
</div>

</div>

<div class="col-sm-12 col-md-12">
    
    <div class="form-group"> 
        <label>Password</label>
        <input id="password" class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
        <span id="perror" class="error"></span>
    </div>
    
</div>

<div class="col-sm-12 col-md-12">
    
    <div class="form-group"> 
        <label>Password Confirmation</label>
        <input id="cPassword" class="form-control" placeholder="Re-type password again" name="confirmpassword" required type="password"> 
        <span id="pcerror" class="error"></span>
</div>
<div class="g-recaptcha" data-sitekey="6LfAF6opAAAAANJyJRbdaxnSLvu4hm_xwAGySyfx">
</div>											
</div>
												
<input type="hidden" name="acctype" value="102">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">Register</button>
</div>
										
</div>
</form>

<script>
	document.getElementById("email").addEventListener("blur", validateEmail);
	document.getElementById("password").addEventListener("blur", validatePassword);
	document.getElementById("cPassword").addEventListener("blur", validateCPassword);
    function validateEmail() {
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("error");

        // console.log(email)
        if (email.trim() === "") {
            emailError.textContent = "Email is required";
            return false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            emailError.textContent = "Invalid email format";
            return false;
        } else {
            emailError.textContent = "";
            return true;
        }
        // console.log(email)
    }

    function validateCPassword() {
        var password = document.getElementById("cPassword").value;
        var passwordError = document.getElementById("pcerror");

        if (password === "") {
            passwordError.textContent = "Password is required";
            return false;
        } else if (password.length < 8 || password.length > 20) {
            passwordError.textContent = "Password must be between 8 and 20 characters";
            return false;
        } else if (!/[A-Z]/.test(password)) {
            passwordError.textContent = "Password must contain at least one uppercase letter.";
            return false;
        } else if(!/[a-z]/.test(password)){
            passwordError.textContent = "Password must contain at least one lowercase letter.";
            return false;
        } else if(!/\d/.test(password)){
            passwordError.textContent = "Password must contain at least one Digit.";
            return false;
        } else if(!/[!@#$%^&*]/.test(password)){
            passwordError.textContent = "Password must contain at least one Special Character.";
            return false;
        }
        else {
            passwordError.textContent = "";
            return true;
        }
    }


    function validatePassword() {
        var password = document.getElementById("password").value;
        var passwordError = document.getElementById("perror");

        if (password === "") {
            passwordError.textContent = "Password is required";
            return false;
        } else if (password.length < 8 || password.length > 20) {
            passwordError.textContent = "Password must be between 8 and 20 characters";
            return false;
        } else if (!/[A-Z]/.test(password)) {
            passwordError.textContent = "Password must contain at least one uppercase letter.";
            return false;
        } else if(!/[a-z]/.test(password)){
            passwordError.textContent = "Password must contain at least one lowercase letter.";
            return false;
        } else if(!/\d/.test(password)){
            passwordError.textContent = "Password must contain at least one Digit.";
            return false;
        } else if(!/[!@#$%^&*]/.test(password)){
            passwordError.textContent = "Password must contain at least one Special Character.";
            return false;
        }
        else {
            passwordError.textContent = "";
            return true;
        }
    }

</script>