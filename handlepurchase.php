<?php

require "config.php";

if (isset($_POST["name"],
    $_POST["email"],
    $_POST["payment"],
    $_POST["location"],
    $_POST["idnumber"],
    $_POST["phonenumber"]
)){
    echo "Values picked for".$_POST["purchaseform"]."<br>";

    $name=$_POST["name"];
    $email=$_POST["email"];
    $payment=$_POST["payment"];
    $location=$_POST["location"];
    $idnumber=$_POST["idnumber"];
    $phonenumber=$_POST["phonenumber"];

    $sql="INSERT INTO purchaseform(name,email,payment,location,idnumber,phonenumber) VALUES ('$name','$email','$payment','$location','$idnumber','$phonenumber');";

    $addrecord=mysqli_query($link,$sql);

    if ($addrecord){
        echo "Purchase successful";
        header("location:purchasehome.php");
    }

}else{
    echo "Values not picked";
}
