<html>
<body>

<?php

// $dbname = 'example';
// $dbuser = 'root';  
// $dbpass = ''; 
// $dbhost = 'localhost'; 

// $connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// if(!$connect){
// 	echo "Error: " . mysqli_connect_error();
// 	exit();
// }

echo "Connection Success!<br><br>";

$irValue3 = $_GET["irValue3"];
$irValue4 = $_GET["irValue4"]; 

echo '\n $irValue3=';
echo $irValue3;
echo '\n $irValue4=';
echo $irValue4;

// $query = "INSERT INTO iot_project (ir3, ir4) VALUES ('$irValue3', '$irValue4')";
// $result = mysqli_query($connect,$query);

// echo "Insertion Success!<br>";

?>
</body>
</html>