<?php
    include_once 'db.php';
    include_once 'operations.php';

    $con = new DBConnector();
    $pdo = $con->connectToDB();

   $full_name = $_POST['fullname'];
   $email = $_POST['email'];
   $city = $_POST['city'];
   $password = $_POST['password'];


   $user = new User();
   //set the member variable
   $user->setFullName($full_name);
   $user->setEmail($email);
   $user->setCity( $city);
   $user->setPassword($password);

   echo $user->signup($pdo);
?>
