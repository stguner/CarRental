<?php
include 'loggedin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM customers where email=:email");
$kullanicisor->execute(array(
  'email' => $_SESSION['kullanici_email']
		));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)
?>

<!--Account Dashboard-->
<section class="main-section container mt-5 vh-100">
  <div class="row">
    <nav class="col-md-3 shadow p-0 mx-md-0  mt-5 background-orange user_account" role="tablist"
      aria-orientation="vertical">
      <ul class="nav flex-column list-group">
        <li class="nav-item">
          <a class="nav-link background-orange list-group-item list-group-item-action border-0 text-light" role="tab"
            aria-controls="account-details" aria-selected="true" id="account-details-tab" data-toggle="tab"
            href="../php/user_account.php?durum=ok"><b> Account Details</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active background-orange list-group-item list-group-item-action border-0"
            id="change-password-tab" role="tab" data-toggle="tab" aria-controls="change-password" aria-selected="false"
            href="../php/user_change_password.php?durum=ok"><b> Change Password </b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light background-orange list-group-item list-group-item-action border-0"
            id="reservations-tab" role="tab" data-toggle="tab" aria-controls="reservations" aria-selected="false"
            href="../php/user_reservations.php?durum=ok&rezervasyon_sil=waiting"><b>Reservations</b></a>
        </li>
        <hr>
        <li class="nav-item">
          <a class="nav-link text-light background-orange list-group-item list-group-item-action border-0" id="logout"
            aria-controls="reservations" aria-selected="false" href="../php/logout.php" ><b>Logout</b></a>
        </li>
      </ul>
    </nav>
    <div class="col-md-9 mt-3 mt-md-5">
      <div class="tab-content card shadow p-3 ">
        <div class="tab-pane fade show active" id="account-details" role="tabpanel"
          aria-labelledby="account-details-tab">
          <span class="font-weight-bold d-block text-center" style="font-size: 50px;"><b> Change Password</b></i></span>
          <?php /*Başarılı kayıt */ if ($_GET['durum']=="sifre_degisti") {?>
                    <div class="alert alert-success">
                      <strong>Your password changed successfully</strong>
                      
                    </div>
                    <?php }?>
          <?php /*Başarılı kayıt */ if ($_GET['durum']=="sifre_degistirilemedi") {?>
                    <div class="alert alert-danger text-center">
                      <strong>Your password could not be changed.</strong> Please contact us from the 'Contact Us' page. 
                    </div>
                    <?php }?>
          <?php /*Başarılı kayıt */ if ($_GET['durum']=="farklisifre") {?>
                    <div class="alert alert-danger text-center">
                      <strong>The passwords you entered do not match!</strong>
                    </div>
                    <?php }?>
          <?php if ($_GET['durum']=="eksiksifre") {?>

              <div class="alert alert-danger text-center">
                <strong>Error!</strong> Password must at least 6 characters!
              </div>
              <?php }?>
          <hr>
          <div class="mb-md-5 mt-md-4 pb-5">
            <form action="islem_userChangePassword.php" method="POST">
              <div class="input-group mb-3">
                <span class="input-group-text">E-mail</span>
                <input type="email" class="form-control" placeholder="Enter e-mail" aria-label="Username"  value="<?php echo $kullanicicek['email'] ?>"disabled>
              </div>

              <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input type="password" class="form-control" placeholder="Enter new password" aria-label="password" name="password1"
                  required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input type="password" class="form-control" placeholder="Enter new password again" aria-label="password2" name="password2"
                  required>
              </div>
              <div class="input-group mb-0 justify-content-center">
                <button type="submit" class="btn background-orange mt-3 shadow text-light" name="sifre_degistirme"
                  style="width: 50%;"><b>Change Password</b></button>
              </div>
              <div class="input-group mb-3 justify-content-center">
                <input class="btn btn-primary mt-2" type="reset" value="Reset" style="width: 50%;">
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>

</section>

<!--Account Dashboard-->

<?php 
include 'footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</php>