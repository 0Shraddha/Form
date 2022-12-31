<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>

     <form action="login.php" method="post">
     <div id="login-box">
     <div class="box">
        <h1>LOGIN</h1> 

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <input type="text" id="firstname" name="firstname" placeholder="User Name"><br>
        <input type="password" id="password" name="password" placeholder="Password"><br> 

        <input type="submit" id="regiter" name="create" placeholder="Log in"/>
    </div>
        </div>
     </form>

</body>

</html>