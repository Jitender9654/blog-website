<?php

    $connection = mysqli_connect('localhost','root');

    
    mysqli_select_db($connection, "userinformation");

    $user = $_POST['user'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    
    $query = "INSERT INTO userdata(`username`, `mobile`,`email`, `comment`) VALUES ('$user', '$mobile', '$email', '$comments')";
        
    echo "$query";

    mysqli_query($connection,$query);
    
    header('location:contact.php');
?>