<?php
require_once('connection.php');
?>
<?php
$firstname = "";
$surname = "";
$email = "";
$phoneNumber = "";
$password = "";
$confirmPassword = "";
$errors = array();

  if(isset($_POST['signup'])) {
    $firstname = strip_tags(mysqli_real_escape_string($conn,$_POST['firstname']));
    $surname = strip_tags(mysqli_real_escape_string($conn,$_POST['surname']));
    $email = strip_tags(mysqli_real_escape_string($conn,$_POST['email']));
    $phoneNumber = strip_tags(mysqli_real_escape_string($conn,$_POST['phoneNumber']));
    $password = strip_tags(mysqli_real_escape_string($conn,$_POST['password']));
    $confirmPassword = strip_tags(mysqli_real_escape_string($conn,$_POST['confirmPassword']));

    if (empty($firstname)) {
      array_push($errors, "Firstname is requried!");
    }
    if (empty($surname)) {
      array_push($errors, "Surname is requried!");
    }
    if (empty($email)) {
      array_push($errors, "Email is requried!");
    }
    if (empty($phoneNumber)) {
      array_push($errors, "Phone Number is requried!");
    }
    if (empty($password)) {
      array_push($errors, "Password is requried!");
    }
    if ($password != $confirmPassword) {
      array_push($errors, "Password do not match!!!");
    }
    if (count($errors) == 0) {
      
      $sql = "INSERT INTO customers (firstname, surname, email, phoneNumber, password)
        VALUES ('$firstname', '$surname','$email','$phoneNumber','$password')";
      mysqli_query($conn,$sql);
      header('Location: login_register.php');
    }
  }

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
  <link rel="stylesheet" href="/css/style.css">
  <title>STG - Signup</title>
</head>

<body style="background-image: linear-gradient(rgba(0,0,0, .2),rgba(0,0,0, .9)), url(../img/mercedes_bg.jpg); background-size: cover; 
background-position: center center; background-attachment: fixed; ; height: 100vh;">
  <!-- Navbar başlangıcı-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <a class="navbar-brand" href="../html/index.html"><img src="../img/rent_a_car_logo.jpg" class="rounded-circle" alt="STG Rent a Car"
          height="50px"> STG RENT A CAR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-5" href="../html/index.html"> <img src="../img/home.png" height="25px"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="../html/cars.html"> <img src="../img/traffic-jam.png" height="25px"> Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="../html/contactus.html"> <img src="../img/phone.png" height="25px"> Contact
              Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="../php/login_register.php"> <img src="../img/login.png" height="25px"> Login/Signup</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Navbar bitişi-->

  <section class="vh-100 gradient-custom">
    <div class="container-fluid py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                <hr>
                <form method="POST" action="signup.php">
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">First Name</span>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your name" aria-label="Username" required>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Surname</span>
                            <input type="text" name="surname" class="form-control" placeholder="Enter your surname" aria-label="surname" required>
                          </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">E-mail</span>
                    <input type="email" name="email" class="form-control" placeholder="Enter E-mail" aria-label="Username" required>
                  </div>

                  <div class="input-group mb-4">
                    <span class="input-group-text">Phone Number</span>
                    <input type="number" name="phoneNumber" class="form-control" placeholder="Ener phone number" aria-label="Username" required>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Username" required>
                  </div>

                  <div class="input-group mb-4">
                    <span class="input-group-text">Password</span>
                    <input type="Password" name="confirmPassword" class="form-control" placeholder="Enter password again" aria-label="Username" required>
                  </div>
                <br>
                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="signup">Sign Up</button>
              </form>
              </div>
              
              <div>
                <p class="mb-0">Do you have an account? <a href="../php/login_register.php" class="text-white-50 fw-bold">Login</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <div class="text-center p-2 mt-5 bg-dark text-muted" style="background-color: rgba(88, 88, 88, 0.181);">
    © 2022 Copyright:
    <span class="fw-bold">Süleyman Türker Güner</span>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>