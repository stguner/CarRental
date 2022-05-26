<?php 
include 'connection.php';
ob_start();
session_start();

$kullanicisor=$conn->prepare("select * from customers where email=:email");
	$kullanicisor->execute(array(
		'email' => $_SESSION['kullanici_email']
		));
    $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


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
  <title>Admin Panel - Cars</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <a class="navbar-brand" href="#"><img src="../img/rent_a_car_logo.jpg" class="rounded-circle" alt="STG Rent a Car"
          height="50px"> STG RENT A CAR</a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../php/admin_dashboard.php">
                <img src="../img/home.png" style="height: 30px;">
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/admin_cars.php?durum=ok&addStock=waiting">
                <img src="../img/traffic-jam.png" style="height: 30px;">
                Cars
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/admin_customers.php?durum=ok">
                <img src="../img/customer.png" style="height: 30px;">
                Customers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/admin_reservations.php?durum=ok&addStock=waiting">
                <img src="../img/reservation.png" style="height: 30px;">
                Reservations
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../php/admin_messages.php?deleteMessage=waiting&message=waiting">
                <img src="../img/messages.png" style="height: 30px;">
                Messages
              </a>
            </li>
          </ul>
          <hr class="mb-0">
          <div class="dropdown sticky-bottom">
            <a href="#" style="font-size:20px;" class="d-block p-3 text-decoration-none dropdown-toggle" id="dropdownUser1"
              data-bs-toggle="dropdown">
              <strong class="">| <?php echo $kullanicicek['firstname']; ?></strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="admin_profile.php?addStock=none">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>