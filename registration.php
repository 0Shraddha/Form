<?php
require_once('config.php');
?>

<?php

if(isset($_POST['create'])){

	$firstname 	= $_POST['firstname'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	$password 	= sha1($_POST['password']);

		$sql = "INSERT INTO users (firstname, lastname, emailid, phonenumber, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="registration.css">
</head>
<body>



<div>
	<form action="registration.php" method="post">

	<div id="login-box">
    <div class="left-box">
      <h1> Sign Up </h1>
      <input type="text" id="firstname" name="firstname" placeholder="Firstname" required/>
	  <input type="text" id="lastname" name="lastname" placeholder="Lastname" required/>
      <input type="email" id="email" name="email" placeholder="Email" required/>
	  <input type="phonenumber" id="phonenumber" name="phonenumber" placeholder="Phone Number" required/>
      <input type="password" id="password" name="password" placeholder="Password" required/>
      <input type="submit" id="regiter" name="create" placeholder="Sing Up"/>
    </div>
    <div class="right-box"></div>
</div>
	</form>
</div>

</body>
</html>

 