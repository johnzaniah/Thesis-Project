<!DOCTYPE html>
<html>
<head>
    <title>Registered Employees</title>
</head>
<body>

<?php
$hostname = "localhost";
$username = "root";
$password ="";
$database = "transport";

$conn = new mysqli($hostname, $username, $password, $database);
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT id_no, licence, plateno, fname, lastname, age, gender, address, contact, email, bdate, nationality, edulevel, vehicletype, yrhired, empname, empadd FROM driver_employee";
$result = $conn->query($sql);

$dwb = $result->fetch_all();    

echo "<ol>";
for($i=0; $i < sizeof($dwb); $i++){
    echo 
    "<li> ID: ".$dwb[$i][0].
    " Licence: ".$dwb[$i][1].
    " Plate Number: ".$dwb[$i][2].
    " First Name: ".$dwb[$i][3].
    " Last Name: ".$dwb[$i][4].
    " Age: ".$dwb[$i][5].
    " Gender: ".$dwb[$i][6].
    " Address: ".$dwb[$i][7].
    " Contact: ".$dwb[$i][8].
    " E-Mail: ".$dwb[$i][9].
    " Birthdate: ".$dwb[$i][10].
    " Nationality: ".$dwb[$i][11].
    " Education Level: ".$dwb[$i][12].
    " Vehicle Type: ".$dwb[$i][13].
    " Year Hired: ".$dwb[$i][14].
    " Employer Name: ".$dwb[$i][15].
    " Employer Address: ".$dwb[$i][16].
    "</li>";
}
echo "</ol>";
?>  
<div style="margin: auto;"><a class="link" href="index.php">Return</a></div>
</body>
</html>