<?php  
function login11()
{
    require_once "config.php";
    // username and password sent from form 
    //session_start();
    // Set session variables

    //header("location: index22.html");
    $myusername = mysqli_real_escape_string($conn, $_POST['email']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);

    //$phpVariable = $myusername;
    //$_SESSION["name"] = $myusername;
    $sql = "SELECT userid  FROM registerform WHERE email = '$myusername' and password1 = '" . md5($mypassword) . "'";
	// SELECT userid FROM registerform WHERE email = 'ghoshramprasad123@gmail.com' and password1 = '4641999a7679fcaef2df';
	// SELECT email FROM registerform WHERE email = 'ghoshramprasad123@gmail.com' and password1 = 'dacxz';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
      header("location: index.html");
    } else {
        $error = "Your Login Name or Password is invalid";
		echo "<script>alert('Your Login Name or Password is invalid')</script>";
		// echo $myusername;
		// echo md5($mypassword);
		// echo $count;
    }
	
}
if (array_key_exists('lo', $_POST)) {
    
	login11();
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
	<link rel="stylesheet" href="style1.css">
</head>

<body>
	
	<div>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Login in</h1>
			<span>or use your account</span><br><br>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type='submit'  name="lo">Login In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome to Sirensalert!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<div id="siren">
				<h1>Welcome to Sirensalert!</h1>
				<p>Enter your personal details and start journey with us</p></div>
				<div id="gif">
					<img src="amb.gif" alt=""  width="160" height="160">
				</div>
				<a href="register.php"><button class="ghost" id="signUp">Register</button></a>
			</div>
		</div>
	</div>
</div>


</div>
</body>

</html>