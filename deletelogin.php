<?php

require "config.php";

if (isset($_POST["id"]) and !empty($_POST["id"])){

    $idvalue=$_POST["id"];

    $sql="DELETE FROM `loginform` WHERE id='$idvalue'";

    $deleterecord=mysqli_query($link,$sql);

    if ($deleterecord){
        echo "User is deleted";
        header("location:loginview.php");
    }else{
        echo "User not deleted";
    }

}else{

    if (empty($_GET["id"])){
        echo "URL does not contain id value";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">

        <h1 style="text-align: center">Are You Sure You Want To Delete User?</h1>

        <form action="deletelogin.php" method="post">

            <div class="alert alert-danger">
                <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
                <p style="text-align: center">Are you sure you want the record deleted?</p>
                <div style="text-align: center">
                <input type="submit" value="Yes" class="btn bg-danger">
                <a href="welcome.php" class="btn btn-warning">No</a>
            </div>
            </div>

        </form>

</div>

</body>
</html>

