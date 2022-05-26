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
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            
                                <h2 class="fw-bold mb-2 text-uppercase">Change Your Password</h2>
                                <?php /*Başarılı kayıt */ if ($_GET['durum']=="sifre_degisti") {?>
                                <div class="alert alert-success">
                                    <strong>Your password changed successfully</strong>

                                </div>
                                <?php }?>
                                <?php /*Başarılı kayıt */ if ($_GET['durum']=="sifre_degistirilemedi") {?>
                                <div class="alert alert-danger text-center">
                                    <strong>Your password could not be changed.</strong> Please contact us from the
                                    'Contact Us' page.
                                </div>
                                <?php }?>
                                <?php /*Başarılı kayıt */ if ($_GET['durum']=="farklisifre") {?>
                                <div class="alert alert-danger text-center">
                                    <strong>The passwords you entered do not match!</strong>
                                </div>
                                <?php }?>
                                <?php /*Başarılı kayıt */ if ($_GET['durum']=="wrongemail") {?>
                                <div class="alert alert-danger text-center">
                                    <strong>There is no user with this e-mail.</strong>
                                </div>
                                <?php }?>
                                <?php if ($_GET['durum']=="eksiksifre") {?>

                                <div class="alert alert-danger text-center">
                                    <strong>Error!</strong> Password must at least 6 characters!
                                </div>
                                <?php }?>
                                <?php if ($_GET['durum']=="limitpassword") {?>

                                <div class="alert alert-danger text-center">
                                    <strong>Error!</strong> Password must at most 20 characters!
                                </div>
                                <?php }?>
                                <p class="text-white-50">Please enter your e-mail and enter your new password!</p>
                                <hr>

                                <form method="POST" action="islem.php">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">E-mail</span>
                                    <input type="email" name="kullanici_email" class="form-control" placeholder="Enter e-mail"
                                        aria-label="email" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Password</span>
                                    <input type="password" name="password1" class="form-control"
                                        placeholder="Enter new password" aria-label="password" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Password</span>
                                    <input type="password" name="password2" class="form-control"
                                        placeholder="Enter new password again" aria-label="password" required>
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5" name="not_loggedin_change_password"
                                    type="submit">Change Password</button>
                                </form>

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