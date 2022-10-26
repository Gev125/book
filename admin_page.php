<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gradaran</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

 <div class="form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

     <div class="content">
        <h3>hi,<span>admin</span></h3>
        <h1>welcome<span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>this is an admin page</p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <a href="logout.php" class="btn">logout</a>
    </div> 

</div>




<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom script file link -->
    <script src="script/script.js"></script>


</body>

</html>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom script file link -->
    <!-- <script src="script/script.js"></script>  -->