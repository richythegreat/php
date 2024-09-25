<?php
$host = "localhost";
$user = "php_app";
$password = "1234";
$database = "sql_hr";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

echo "connection successfull";

$sql = "SELECT employee_id, first_name, last_name FROM employees";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>S
</head>
<body>
    <h2>Customers</h2>

    <?php
        if ($result->num_rows > 0){
            echo "<ul>";
            while($row = $result->fetch_assoc()){


                echo "<li> Employee name: ". $row["first_name"]. " ". $row["last_name"]."</li> \n";
            }
            echo "</ul>";
        }
        else{
            echo "no employees found!";
        }
    ?>


</body>
</html>

