<?php
include 'navbar_with_bg.php' ;
include 'islem.php'
?>
  
  <section class="vh-100 gradient-custom" style="background-image: linear-gradient(rgba(0,0,0, .2),rgba(0,0,0, .9)), url(../img/mercedes_bg.jpg); background-size: cover; 
background-position: center center; background-attachment: fixed; ; height: 100vh;">
    <div class="container-fluid py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <form method="POST" action="islem.php">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <?php /*Kullanıcı Bulunamadı */if ($_GET['durum']=="no_email") {?>
                  <div class="alert alert-danger">
                    <strong>Kullanıcı Bulunamadı...</strong>
                  </div>
                  <?php }?>
                  <?php /*Çıkış yapılıyor */if ($_GET['durum']=="exit") {?>

                      <div class="alert alert-success">
                        <strong>Başarıyla çıkış yaptınız...</strong>
                      </div>
                      <?php }?>

                    <?php /*Başarılı kayıt */ if ($_GET['durum']=="basarilikayit") {?>
                    <div class="alert alert-success">
                      <strong>Welcome the STG Rent a Car!</strong>Your account has been successfully created!
                    </div>
                    <?php }?>
                    <?php /*Kullanıcı Bulunamadı */if ($_GET['durum']=="no_password") {?>
                  <div class="alert alert-danger">
                    <strong>Wrong Password!</strong>
                  </div>
                  <?php }?>
                  <?php /*Kullanıcı Bulunamadı */if ($_GET['durum']=="needlogin") {?>
                  <div class="alert alert-danger">
                    <strong>Only loggedin users can use renting features!</strong> You have to login first. If you don't have an account,
                    <a href="signup.php?durum=ok&kullanicisil=waiting&deleteMessage=waiting" style="text-decoration:underline; color:#882029;
                    font-weight:bold;" >Click here</a> to create one.
                  </div>
                  <?php }?>

                <p class="text-white-50">Please enter your e-mail and password!</p>
                <hr>
                <div class="input-group mb-3">
                  <span class="mx-4" style="padding-left: 8px;"><h3><b>  E-mail:</b></h3></span>
                  <input type="text" class="form-control" placeholder="Enter e-mail" name="kullanici_email" required>
                </div>

                <div class="input-group mb-3">
                  <span class="mx-2" ><h3><b>Password:</b>  </h3></span>
                  <input type="password" class="form-control" placeholder="Enter password" name="kullanici_password" required>
                </div>
                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
                <p class="medium mb-0 mt-2 pb-lg-2"><a class="text-white-50" href="forgot_password.php?durum=ok&kullanicisil=none&deleteMessage=none">Forgot password?</a></p>
              </form>
              </div>
                <hr>
              <div>
                <p class="mb-0">Don't have an account? <a href="signup.php?durum=ok&kullanicisil=waiting&deleteMessage=waiting" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 



<?php 
include 'footer.php';
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
