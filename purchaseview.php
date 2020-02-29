<?php

session_start();

if (isset($_SESSION["purchased"]) and $_SESSION["purchased"])

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

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
    <div class="row">

        <div class="col-sm-8">
            <h2 align="left">Purchase Details</h2>
            <a href="add.html" class="btn btn-success">Purchase another home</a>

        </div>

    </div>

    <?php

require "config.php";

$sql="SELECT * FROM `purchaseform`";

$result=mysqli_query($link,$sql);

if ($result){

    $num=mysqli_num_rows($result);
    if ($num>0){

        echo "<table class='table table-bordered table-striped'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Payment</th>";
        echo "<th>Location</th>";
        echo "<th>ID Number</th>";
        echo "<th>Phone Number</th>";
        echo "</tr>";

        echo "<tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $row['id']. "</td>";
            echo "<td>". $row['name']. "</td>";
            echo "<td>". $row['email']. "</td>";
            echo "<td>". $row['payment']. "</td>";
            echo "<td>". $row['location']. "</td>";
            echo "<td>". $row['idnumber']. "</td>";
            echo "<td>". $row['phonenumber']. "</td>";

            echo "<td>";
            echo "<a href='delete.php?id='".$row['id']." class='btn btn-danger'>Delete</a>";
            echo "<a href='update.php?id=' class='btn btn-success'>Update</a>";
        }

        echo "</table>";

        echo "There is data";
    }else{
        echo "No records were found";
    }

}else{
    echo "Query was not expected $sql".mysqli_error($link);
}

?>

</div>
</body>
</html>




