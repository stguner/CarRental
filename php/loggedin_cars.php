<?php
include 'loggedin_navbar.php' ;
$mustangPriceSor=$conn->prepare("SELECT price FROM cars where name='MUSTANG'");
$mustangPriceSor->execute();
$mustangPriceCek=$mustangPriceSor->fetch(PDO::FETCH_ASSOC);

$bmwPriceSor=$conn->prepare("SELECT price FROM cars where name='BMW'");
$bmwPriceSor->execute();
$bmwPriceCek=$bmwPriceSor->fetch(PDO::FETCH_ASSOC);

$mercedesPriceSor=$conn->prepare("SELECT price FROM cars where name='MERCEDES'");
$mercedesPriceSor->execute();
$mercedesPriceCek=$mercedesPriceSor->fetch(PDO::FETCH_ASSOC);

$hondaPriceSor=$conn->prepare("SELECT price FROM cars where name='HONDA'");
$hondaPriceSor->execute();
$hondaPriceCek=$hondaPriceSor->fetch(PDO::FETCH_ASSOC);
?>
<?php /*Başarılı kayıt */ if ($_GET['durum']=="outOfStock") {?>
      <div class="alert alert-danger text-center">
        <strong >The car which is you selected is out of stock.</strong> Please choose another car.
        </div>
    <?php }?>
    <?php /*Başarılı kayıt */ if ($_GET['durum']=="false_rentDate") {?>
  <div class="alert alert-danger text-center">
    <strong>Invalid time intervals.</strong>Please fill the form carefully.
  </div>
<?php }?>
<?php /*Başarılı kayıt */ if ($_GET['durum']=="past_rentDate") {?>
  <div class="alert alert-danger text-center">
    <strong>You cannot make a reservation on a past date.</strong>Please fill the form carefully.
  </div>
<?php }?>
<?php /*Başarılı kayıt */ if ($_GET['durum']=="so_far") {?>
  <div class="alert alert-danger text-center">
    <strong>You cannot make a reservation on selected dates.</strong>Try to make reservation for a closer time.
  </div>
<?php }?>
<?php /*Başarılı kayıt */ if ($_GET['durum']=="so_much_time_interval") {?>
  <div class="alert alert-danger text-center">
    <strong>Time interval is so long.</strong> If you want to make long time reservations: <a href="loggedin_contactus.php?durum=ok">Contact Us</a>
  </div>
<?php }?>
<!-- Cars -->
<div class="container mt-3">
  <div class="row featurette">
    <div class="col-md-7 order-md-2 mt-3">
      <h2 class="featurette-heading"> Mercedes |<span class="text-danger"> $<?php echo $mercedesPriceCek['price']; ?>/day </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
      <p><a class="btn btn-primary" href="../php/checkout.php?durum=ok&selectedCar=MERCEDES"> Rent Mercedes </a></p>
    </div>
    <div class="col-md-5 order-md-1 mt-3">
      <img src="../img/mercedes.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
        width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
        focusable="false">
      </img>

    </div>
  </div>
  <hr>
  <div class="row featurette">
    <div class="col-md-7 order-md-2 mt-3">
      <h2 class="featurette-heading">BMW |<span class="text-danger"> $<?php echo $bmwPriceCek['price']; ?>/day </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
      <p><a class="btn btn-primary" href="../php/checkout.php?durum=ok&selectedCar=BMW"> Rent BMW </a></p>
    </div>
    <div class="col-md-5 order-md-1 mt-3">
      <img src="../img/bmw.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
        width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
        focusable="false">
      </img>

    </div>
  </div>

  <hr>
  <div class="row featurette">
    <div class="col-md-7 order-md-2 mt-3">
      <h2 class="featurette-heading">Mustang |<span class="text-danger"> $<?php echo $mustangPriceCek['price']; ?>/day </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
      <p><a class="btn btn-primary" href="../php/checkout.php?durum=ok&selectedCar=MUSTANG"> Rent Mustang </a></p>
    </div>
    <div class="col-md-5 order-md-1 mt-3">
      <img src="../img/fast_car_mustang.jpg"
        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"
        role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

    </div>
  </div>

  <hr>
  <div class="row featurette">
    <div class="col-md-7 order-md-2 mt-3">
      <h2 class="featurette-heading">Honda |<span class="text-danger"> $<?php echo $hondaPriceCek['price']; ?>/day </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
      <p><a class="btn btn-primary" href="../php/checkout.php?durum=ok&selectedCar=HONDA"> Rent Honda </a></p>
    </div>
    <div class="col-md-5 order-md-1 mt-3">
      <img src="../img/honda.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
        width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice"
        focusable="false">
      </img>

    </div>
  </div>
</div>

<!-- Cars -->


<!--footer-->
<div class="text-center p-2 mt-5 bg-dark text-muted" style="background-color: rgba(88, 88, 88, 0.181);">
  © 2022 Copyright:
  <span class="fw-bold">Süleyman Türker Güner</span>
</div>
<!--footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</php>