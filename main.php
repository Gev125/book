<?php
include('server.php');

if(empty($_SESSION['username'])){
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
  
    <!-- header section starts -->

    

<div class="content">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);  
                ?>
            </h3>
        </div>
     <?php endif ?> 
     
     
     <?php if(isset($_SESSION["username"])):?> 
      
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php? logout='1' " style="color: red;">Logout</a></p>
        <?php endif ?>
     
     
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- custom script file link -->
    <script src="script/script.js"></script>

</body>
</html>