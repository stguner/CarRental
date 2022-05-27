<?php 
include 'connection.php';
ob_start();
session_start();

$kullanicisor=$conn->prepare("select * from customers where email=:email");
	$kullanicisor->execute(array(
		'email' => $_SESSION['kullanici_email']
		));
    $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
    $_SESSION['kullanici_id']=$kullanicicek['id'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>STG Rent a Car</title>
</head>
<body style="background-color:F9F3EE;">
<!-- Navbar başlangıcı-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="../php/loggedin_index.php?durum=ok"><img src="../img/rent_a_car_logo.jpg" class="rounded-circle"
        alt="STG Rent a Car" height="50px"> STG RENT A CAR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-5" href="../php/loggedin_index.php?durum=ok"> <img src="../img/home.png" height="25px"> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="../php/loggedin_cars.php?durum=ok"> <img src="../img/traffic-jam.png" height="25px"> Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="../php/loggedin_contactus.php?durum=ok"> <img src="../img/phone.png" height="25px"> Contact
            Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="../php/user_reservations.php?durum=ok&rezervasyon_sil=waiting"> <img src="../img/reservation.png" height="25px"> Reservations</a>
        </li>
        <div class="dropdown sticky-bottom d-flex justify-content-center">
          <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown">
          <strong style="font-size:20px;"> | <?php echo $kullanicicek['firstname']; ?></strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-medium" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="../php/user_account.php?durum=ok">Settings</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
          </ul>
        </div>
      </ul>

    </div>
  </div>
</nav>
<!-- Navbar bitişi-->