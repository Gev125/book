<?php

@include 'config.php';

session_start();
session_unset();
session_detroy();

header('location:login_form.php');
?>
