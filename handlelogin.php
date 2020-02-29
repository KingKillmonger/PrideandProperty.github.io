<?php

require "config.php";

if (isset($_POST["username"],
          $_POST["password"]
)){
    echo "Values picked for".$_POST["loginform"]."<br>";

    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="INSERT INTO loginform(username,password) VALUES ('$username','$password');";

    $addrecord=mysqli_query($link,$sql);

    if ($addrecord){
        echo "User Added Successfully";
        header("location:WebHomePage.html");
    }else{
        echo "Error In Adding User $sql".mysqli_error($link);
    }
}else {
    echo "Values Not Picked";
}


