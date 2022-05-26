<?php
include 'admin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM customers where email=:email");
$kullanicisor->execute(array(
  'email' => $_SESSION['kullanici_email']
		));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="chartjs-size-monitor">
    <div class="chartjs-size-monitor-expand">
      <div class=""></div>
    </div>
    <div class="chartjs-size-monitor-shrink">
      <div class=""></div>
    </div>
  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile</h1>
    <?php /*Başarılı kayıt */ if ($_GET['addStock']=="bilgi_duzenlendi") {?>
                    <div class="alert alert-success">
                      <strong>Your informations changed successfully</strong>
                      
                    </div>
                    <?php }?>
          <?php /*Başarılı kayıt */ if ($_GET['addStock']=="bilgi_duzenlenemedi") {?>
                    <div class="alert alert-danger">
                      <strong>ERROR! Your information could not be changed.</strong> Please contact us from the 'Contact Us' page. 
                    </div>
                    <?php }?>
                    <?php /*Başarılı kayıt */ if ($_GET['addStock']=="gecersiz_phoneNumber") {?>
                    <div class="alert alert-danger">
                      <strong>ERROR!</strong> Please enter invalid phone number. (ex: 5542071777)
                    </div>
                    <?php }?>
    
  </div>

  <h2>Change Profile Settings</h2>
  <div class="table-responsive">
  <form action="islem_admin_reservations.php" method="POST">
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
</main>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>