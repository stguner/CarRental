
<?php
/*
$servername = "localhost";
$username = "root";
$pw = "";
$dbname = "car_rent";

// Create connection
$conn = mysqli_connect($servername, $username, $pw,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
*/
?>


<?php 

try {

	$conn=new PDO("mysql:host=localhost;dbname=car_rent;charset=utf8",'root','');
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>