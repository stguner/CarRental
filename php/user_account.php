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
          <a class="nav-link text-dark active background-orange list-group-item list-group-item-action border-0"
            role="tab" aria-controls="account-details" aria-selected="true" id="account-details-tab" data-toggle="tab"
            href="../php/user_account.php?durum=ok"><b> Account Details</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light background-orange list-group-item list-group-item-action border-0"
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
            aria-controls="reservations" aria-selected="false" href="../php/logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </nav>
    <div class="col-md-9 mt-3 mt-md-5">
      <div class="tab-content card shadow p-3 ">
        <div class="tab-pane fade show active" id="account-details" role="tabpanel"
          aria-labelledby="account-details-tab">
          <span class="font-weight-bold d-block text-center" style="font-size: 50px;"><b> Account Details</b></i></span>
          <?php /*Başarılı kayıt */ if ($_GET['durum']=="bilgi_duzenlendi") {?>
                    <div class="alert alert-success">
                      <strong>Your informations changed successfully</strong>
                      
                    </div>
                    <?php }?>
          <?php /*Başarılı kayıt */ if ($_GET['durum']=="bilgi_duzenlenemedi") {?>
                    <div class="alert alert-danger">
                      <strong>Your information could not be changed.</strong> Please contact us from the 'Contact Us' page. 
                    </div>
                    <?php }?>
          <hr>
          <div class="align-items-center flex-column">
            <!-- Account Details Form -->
            
            <div class="mb-md-5 mt-md-4 pb-5">
              <form action="islem.php" method="POST">
                <div class="input-group mb-3">
                  <span class="input-group-text">First Name</span>
                  <input type="text" class="form-control" name="firstname"  value="<?php echo $kullanicicek['firstname'] ?>" aria-label="Username" required>
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text">Surname</span>
                  <input type="text" class="form-control" name="surname" value="<?php echo $kullanicicek['surname'] ?>" aria-label="lname" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">Phone Number</span>
                  <input type="number" class="form-control" name="phoneNumber"  value="<?php echo $kullanicicek['phoneNumber'] ?>" aria-label="tel" required>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text">E-mail Adress</span>
                  <input type="email" class="form-control" name="email"  value="<?php echo $kullanicicek['email'] ?>" aria-label="email" disabled>
                </div>
                <div class="input-group mb-0 justify-content-center">
                  <button type="submit" class="btn background-orange mt-3 shadow text-light  "
                    style="width: 50%;" name="bilgi_duzenleme"><b>Save</b></button>
                </div>
                

              </form>
            </div>


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