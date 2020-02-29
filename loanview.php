<?php

session_start();

if (isset($_SESSION["loan sent"]) and $_SESSION["loan sent"])

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

<?php

require "config.php";

$sql="SELECT * FROM `loanform`";

$result=mysqli_query($link,$sql);

if ($result){

    $num=mysqli_num_rows($result);
    if ($num>0){

        echo "<table class='table table-bordered table-striped'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Address</th>";
        echo "<th>Employment</th>";
        echo "<th>Property Doc</th>";
        echo "<th>Passport Number</th>";
        echo "<th>Id Nummer</th>";
        echo "</tr>";

        echo "<tr>";
        while ($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $row['id']. "</td>";
            echo "<td>". $row['address']. "</td>";
            echo "<td>". $row['employment']. "</td>";
            echo "<td>". $row['propertydoc']. "</td>";
            echo "<td>". $row['passportno']. "</td>";
            echo "<td>". $row['idnumber']. "</td>";
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

