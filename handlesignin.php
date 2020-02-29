<?php

require "config.php";

if (isset($_POST["username"],
    $_POST["email"],
    $_POST["password"],
    $_POST["confirm"]
)){
    echo "Values picked for".$_POST["signinform"]."<br>";

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirm=$_POST["confirm"];

    $sql="INSERT INTO signinform(username,email,password,confirm) VALUES ('$username','$email','$password','$confirm');";

    $addrecord=mysqli_query($link,$sql);

    if ($addrecord){
        echo "User Added Successfully";
        header("location:signinhome.php");
    }else{
        echo "Error in adding User $sql".mysqli_error($link);
    }

}else{
    echo "Values not pickekd";
}

