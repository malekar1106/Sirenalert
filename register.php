<?php
function register()
{
    require_once "config.php";
 
    $username = stripslashes($_REQUEST['fullname']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    
	// Check if username is empty
        // If there were no errors, go ahead and insert into the database
           	$user_avatar = 	"";
            $query    = "INSERT into `registerform` (firstname, email, password1)
            VALUES ('$username','$email', '" . md5($password) . "')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
              //  setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
                header("location: signup.php");
            } else {
                echo "Something went wrong... cannot redirect!";

                echo "$password";
                echo "$username";
                echo "$email";
            }
        
    
    mysqli_close($conn);
}
if (array_key_exists('rege', $_POST)) {
    register();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- bootstrap minified css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<!-- custom stylesheet -->
	<link rel="stylesheet" href="style2.css">
	<script src="pass.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	
	<div>
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Create Account</h1>
		
			<span>or use your email for registration</span><br>
			<input type="text" name="fullname" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" id="password" placeholder="Password" onInput="check()"/><br>
			<button  type='submit' name='rege' onclick="validatePassword()">Register</button>
		</form>
	</div>
	
	

	<div class="form-container sign-up-container">
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <div id="siren1">
                <div id="siren">
				<h1>Welcome to Sirensalert!</h1>
				<p>To keep connected with us please login with your personal info</p></div>
                <div id="gif">
					<img src="truck.gif" alt=""  width="200" height="200">
				</div>
				<a href="signup.php"><button class="ghost" id="signIn">Login In</button></a></div>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome to Sirensalert!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Register</button>
			</div>
		</div>
	</div>
</div>


</div>
</body>

</html>