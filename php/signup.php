<?php 
include 'navbar.php'; 
include 'islem.php';
?>

<section class="vh-100 gradient-custom" style="background-image: linear-gradient(rgba(0,0,0, .2),rgba(0,0,0, .9)), url(../img/mercedes_bg.jpg); background-size: cover; 
background-position: center center; background-attachment: fixed; ; height: 100vh;">
  <div class="container-fluid py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body px-4 text-center">

            <div class="mb-1 mt-md-2 pb-1">
              <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
              <p class="text-white-50">Please enter the informations to signup!</p>
              <?php 

                  if ($_GET['durum']=="farklisifre") {?>

              <div class="alert alert-danger">
                <strong>Error!</strong> Password does not match!
              </div>

              <?php }?>

              <?php if ($_GET['durum']=="eksiksifre") {?>

              <div class="alert alert-danger">
                <strong>Error!</strong> Password must at least 6 characters!
              </div>
              <?php }?>

              <?php if ($_GET['durum']=="kayitli") {?>

              <div class="alert alert-danger">
                <strong>Error!</strong> You tried to register with an already registered email!
              </div>
              <?php }?>
              <?php if ($_GET['durum']=="basarisiz") {?>

              <div class="alert alert-danger">
                <strong>Error!</strong> You could not register. Contact the administrator.
              </div>

              <?php }
                  ?>

              <hr>
              <form method="POST" action="islem.php">
                <div class="row">
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text">First Name</span>
                      <input type="text" name="firstname" class="form-control" placeholder="Enter your name"
                        aria-label="username" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text">Surname</span>
                      <input type="text" name="surname" class="form-control" placeholder="Enter your surname"
                        aria-label="surname" required>
                    </div>
                  </div>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">E-mail</span>
                  <input type="email" name="email" class="form-control" placeholder="Enter E-mail" aria-label="email"
                    required>
                </div>

                <div class="input-group mb-4">
                  <span class="input-group-text">Phone Number</span>
                  <input type="number" name="phoneNumber" pattern="[0-9]{10}" class="form-control" placeholder="2422424242"
                    aria-label="phoneNumber" required>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">Password</span>
                  <input type="password" name="password" class="form-control" placeholder="Enter password"
                    aria-label="password" required>
                </div>

                <div class="input-group mb-4">
                  <span class="input-group-text">Password</span>
                  <input type="Password" name="confirmPassword" class="form-control" placeholder="Enter password again"
                   aria-label="password" required>
                </div>
                <br>
                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="signup">Sign Up</button>
                <p class="mt-2">Do you have an account? <a href="login_register.php?durum=ok&kullanicisil=waiting&deleteMessage=waiting"
                  class="text-white-50 fw-bold">Login</a>
              </p>
              </form>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php 
include 'fixed-footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>