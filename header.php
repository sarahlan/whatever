<?php
    include 'functions/user-functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/3024bfed98.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
    <title>E-commerce</title>
  </head>
  <body>  





  <!---LOGIN SYSTEM--->

<header>
    <nav>
        <a href="#">
            <img src="img/logo.png" alt="logo">        
        </a>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About me</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-sumbit">Login</button>
         </form>
         <a href="signup.php"> Signup</a>
         <form action="includes/logout.inc.php" method="post">
             <button type="submit" name="logout-submit">Logout</button>
         </form>
    </div>
</nav>
</header>






  
<!--Nav Bar-->
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-rgb(95, 81, 172)">
        <div class="container">
            <a href="#" class="navbar-brand"></a>
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a href="index.php" class="nav-link"> Index </a>
            </li>
            <li class="nav-item">
                <a href="array.php" class="nav-link"> Array </a>
            </li>
            <li class="nav-item">
                <a href="switch.php" class="nav-link"> Switch </a>
            </li>
            <li class="nav-item">
                <a href="calculator.php" class="nav-link"> Calculator </a>
            </li>
            <li class="nav-item">
                <a href="calendar.php" class="nav-link"> Calendar </a>
            </li>

        </ul>
    </div>
        </div>
     </nav>
</header>
      <!--End of nav bar-->


      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="contact.php">Contact</a></li>
</ul>

<?php
$_SESSION['username'] = "dani948a";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
echo "You are not logged in!";
}
else{
    echo "You are logged in!";
}

?>

