<?php

require "config.php";

if (isset($_POST["address"],
    $_POST["employment"],
    $_POST["propertydoc"],
    $_POST["passportno"],
    $_POST["idnumber"]
)){
    echo "Values picked for".$_POST["address"]."<br>";

    $address=$_POST["address"];
    $employment=$_POST["employment"];
    $propertydoc=$_POST["propertydoc"];
    $passportnp=$_POST["passportno"];
    $idnumber=$_POST["idnumber"];

    $sql="INSERT INTO loanform(address,employment,propertydoc,passportno,idnumber) VALUES ('$address','$employment','$propertydoc','$passportnp','$idnumber');";

    $addrecord=mysqli_query($link,$sql);

    if ($addrecord){
        echo "Loan sent successfully";
        header("location:loanhome.php");
    }else{
        echo "Error in sending loan $sql".mysqli_error($link);
    }

}else{
    echo "Values not picked";
}
