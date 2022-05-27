<?php
include 'navbar.php' ;
include 'connection.php';
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

<!-- Cars -->
<div class="container mt-3">
  <div class="row featurette">
    <div class="col-md-7 order-md-2 mt-3">
      <h2 class="featurette-heading"> Mercedes |<span class="text-danger"> $<?php echo $mercedesPriceCek['price']; ?>/day </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
      <p><a class="btn btn-primary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting"> Rent Mercedes </a></p>
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
      <p><a class="btn btn-primary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting"> Rent BMW </a></p>
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
      <p><a class="btn btn-primary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting"> Rent Mustang </a></p>
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
      <p><a class="btn btn-primary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting"> Rent Honda </a></p>
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
<?php 
include 'footer.php';
?>
<!--footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</php>