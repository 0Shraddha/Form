<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">
<style>
     body{
         margin:0;
     }
    .info{
          background:#38A88F;
          color: #fff;
          margin:0px;
          padding: 10px 50px;
     }
    a{
          background:#38A88F;
          margin: 10px 0 0 50px;
          color: #fff;
          padding: 10px 50px;
          text-decoration:none;
          position: absolute;
    }
    a:hover{
          background:#298b76;
          transition: 0.2s ease;
    }
</style>
</head>

<body>
<div class="info">
     <h1>Hello, <?php echo $_SESSION['firstname']; ?></h1>
     <p>Have a great day!</p>
     </div>
     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>