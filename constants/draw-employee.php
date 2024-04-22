<form name="frm" action="app/create-account.php" method="POST" autocomplete="off">
<div class="login-box-wrapper">
							
<div class="modal-header">
<h4 class="modal-title text-center">Create your account for free</h4>
</div>

<div class="modal-body">
																
<div class="row gap-20">
											

												

												
<div class="col-sm-12 col-md-12">

<div class="form-group"> 
<label>First Name</label>
<input id ="fname" class="form-control" placeholder="Enter your first name" name="fname" required type="text"> 
<span id="ferror" class="error"></span>
</div>

</div>

<div class="col-sm-12 col-md-12">
    
    <div class="form-group"> 
        <label>Last Name</label>
        <input id ="lname" class="form-control" placeholder="Enter your last name" name="lname" required type="text"> 
        <span id="lerror" class="error"></span>
    </div>
    
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
        <input id = "password" class="form-control" placeholder="Min 8 and Max 20 characters" name="password" required type="password"> 
        <span id="perror" class="error"></span>
    </div>
    
</div>

<div class="col-sm-12 col-md-12">
    
    <div class="form-group"> 
        <label>Password Confirmation</label>
        <input id="cpassword" class="form-control" placeholder="Re-type password again" name="confirmpassword" required type="password"> 
        <span id="pcerror" class="error"></span>

</div>
<div class="g-recaptcha" data-sitekey="6LfAF6opAAAAANJyJRbdaxnSLvu4hm_xwAGySyfx">
    
</div>										
</div>
												
<input type="hidden" name="acctype" value="101">
												
												
</div>

</div>

<div class="modal-footer text-center">
<button  onclick="return val();" type="submit" name="reg_mode" class="btn btn-primary">Register</button>
</div>
										
</div>
</form>





<script>
		document.getElementById("fname").addEventListener("blur", validateFName);
		document.getElementById("lname").addEventListener("blur", validateLName);
		document.getElementById("email").addEventListener("blur", validateEmail);
		document.getElementById("password").addEventListener("blur", validatePassword);
		document.getElementById("cpassword").addEventListener("blur", validateCPassword);

        // Function to validate name input
        function validateFName() {
            var name = document.getElementById("fname").value;
            var nameError = document.getElementById("ferror");
            if (name.trim() === "") {
                nameError.textContent = "Name is required";
                // lNameError.textContent = "Name is required";
                return false;
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                nameError.textContent = "Invalid name. Only letters and spaces allowed.";
                // lNameError.textContent = "Invalid name. Only letters and spaces allowed.";
                return false;
            } else {
                nameError.textContent = "";
                return true;
            }
        }
        function validateLName() {
            var name = document.getElementById("lname").value;
            var nameError = document.getElementById("lerror");
            if (name.trim() === "") {
                nameError.textContent = "Name is required";
                // lNameError.textContent = "Name is required";
                return false;
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                nameError.textContent = "Invalid name. Only letters and spaces allowed.";
                // lNameError.textContent = "Invalid name. Only letters and spaces allowed.";
                return false;
            } else {
                nameError.textContent = "";
                return true;
            }
        }

        // Function to validate email input
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
		function validateCPassword() {
            var password = document.getElementById("cpassword").value;
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

        // Event listener for form submission
        document.getElementById("myForm").addEventListener("submit", function(event) {
            if (!validateName() || !validateEmail()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>


<script>
    function send_otp() {
        var email = document.getElementById('mymail').value;
        window.location.href = 'send_otp.php?email=' + email;
    }
</script>