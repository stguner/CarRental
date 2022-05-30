<?php
include 'loggedin_navbar.php' ;
$arabasor=$conn->prepare("SELECT * FROM cars where name=:carName");
$arabasor->execute(array(
  'carName' => $_SESSION['selectedCar']
		));
$arabacek=$arabasor->fetch(PDO::FETCH_ASSOC)
?>
<br>
<div class="card container shadow ">
  <form action="islem_reservation.php" method="POST">
  <div class="card-title text-orange text-center fw-bold " style="font-size: 25px;"> <u>Reservation Details</u>
  </div>
  <hr>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <?php /*Başarılı kayıt */ if ($_SESSION['selectedCar']=="MERCEDES") {?>
        <div class="">
          <img src="../img/mercedes-2.png" class="rounded mx-auto" alt="mercedes" width="300" height="250">
        </div>
        <?php }?>
        <?php /*Başarılı kayıt */ if ($_SESSION['selectedCar']=="BMW") {?>
        <div class="">
          <img src="../img/bmw-2.png" alt="bmw" width="300" height="300">
        </div>
        <?php }?>
        <?php /*Başarılı kayıt */ if ($_SESSION['selectedCar']=="HONDA") {?>
        <div class="">
          <img src="../img/honda-2.png" alt="honda" width="300" height="300">
        </div>
        <?php }?>
        <?php /*Başarılı kayıt */ if ($_SESSION['selectedCar']=="MUSTANG") {?>
        <div class="">
          <img src="../img/mustang-2.png" alt="mustang" width="300" height="300">
        </div>
        <?php }?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="text-orange text-uppercase">Rent Date: </div>
              <input type="date" name="startDate" disabled value="<?php echo $_SESSION['startDate']; ?>">
              <hr>
              
            </div>
            <div class="col-6">
              <div class="text-orange text-uppercase">Return Date: </div>
              <input type="date" name="endDate" disabled value="<?php echo $_SESSION['endDate']; ?>">
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="text-orange text-uppercase">Selected Car: </div>
              <input type="text" value="<?php echo $_SESSION['selectedCar']; ?>" disabled>
            </div>
            <div class="col-6">
              <div class="text-orange text-uppercase">Total Price: </div>
              <input type="text" value="<?php echo $_SESSION['price']; ?>$" disabled>
            </div>
          </div>
          <input type="hidden" name="carid" value="<?php echo $arabacek['car_id'];?>">
          <input type="hidden" name="carName" value="<?php echo $arabacek['name'];?>">
          <input type="hidden" name="stock" disabled value="<?php echo $arabacek['stock'];?>">
          <input type="submit" name="make_reservation" class="btn btn-orange w-100 mt-3" value="Confirm and Make Reservation">
          <p class="text-center mt-3"><span class="text-danger">!!!</span> You still will be able to cancel and edit reservation informations after this progress. Go to 
          <a href="user_account.php?durum=ok" class="text-success text-decoration-none font-weight-bold">'Reservations'</a> page to edit your reservation informations...</p>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>


<!--footer-->
<?php
include 'fixed-footer.php' ;
?>
<!--footer-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</php>