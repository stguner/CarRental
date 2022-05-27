<?php
include 'loggedin_navbar.php' ;
$kullanicisor=$conn->prepare("SELECT * FROM customers where email=:email");
$kullanicisor->execute(array(
  'email' => $_SESSION['kullanici_email']
		));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)
?>


<section class="main-section container">
  <div class="card border-0">
    <div class="row card-body">
      <form action="islem_reservation.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="card container shadow">
              <div class="card-title text-orange text-center fw-bold" style="font-size: 25px;"> <u> Customer
                  Information </u>
                <hr>
              </div>

              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="fname" class="text-orange text-uppercase">First Name</label>
                    <input type="text" name="firstname" id="fname" placeholder="Enter your first name" class="form-control" value="<?php echo $kullanicicek['firstname'] ?>"
                    disabled >
                  </div>
                  <div class="form-group col">
                    <label for="lname" class="text-orange text-uppercase">Last Name</label>
                    <input type="text" name="surname" id="fname" placeholder="Enter your last name" class="form-control" value="<?php echo $kullanicicek['surname'] ?>"
                    disabled>
                  </div>
                  <div class="form-group col">
                    <label for="phonenumber" class="text-orange text-uppercase">Phone Number</label>
                    <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Enter your phone number" value="<?php echo $kullanicicek['phoneNumber'] ?>"
                    class="form-control" disabled>
                  </div>
                  <div class="form-group col">
                    <label for="email" class="text-orange text-uppercase">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" value="<?php echo $kullanicicek['email'] ?>"
                    disabled>
                  </div>
                  <div class="text-center">To change informations: <a href="user_account.php?durum=ok">CLICK HERE </a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card container shadow ">
              <div class="card-title text-orange text-center fw-bold" style="font-size: 25px;"> <u> Credit
                  Card
                  Information </u>
                <hr>
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col">
                    <label for="cardnumber" class="text-orange text-uppercase"> Card number</label>
                    <input type="number" name="cardnumber" id="cardnumber" placeholder="Enter your card number"
                      class="form-control">
                  </div>
                  <div class="form-group col">
                    <label for="nameoncard" class="text-orange text-uppercase">Name on card</label>
                    <input type="text" name="nameoncard" id="nameoncard" placeholder="Enter the name on card"
                      class="form-control">

                  </div>

                  <div class="form-group col">
                    <label for="expirationdate" class="text-orange text-uppercase">Expiration date</label>
                    <input type="date" name="expirationdate" id="expirationdate" placeholder="Enter expiration date"
                      class="form-control">
                  </div>
                  <div class="form-group col">
                    <label for="expirationdate" class="text-orange text-uppercase">CVV</label>
                    <input type="number" name="cvc" id="cvc" placeholder="Enter the CVV" class="form-control">
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">

          <div class="card container shadow ">
            <div class="card-title text-orange text-center fw-bold " style="font-size: 25px;"> <u> Reservation
                Details</u>
            </div>
            <hr>
            <div class="card-body">
              <div class="row">
                <div class="col-6 text-orange text-uppercase">Rent Date: </div>
                <input type="date" name="startDate" required>
                <hr>
              </div>
              <div class="row">
                <div class="col-6 text-orange text-uppercase">Return Date: </div>
                <input type="date" name="endDate" required>
                <hr>
              </div>
              <div class="row">
                <div class="col-6 text-orange text-uppercase">Select Car: </div>
                <select id="heard" class="form-control" name="car" required>
                
                <?php 
                if ($_GET['selectedCar']=='MERCEDES') {?>
                <option value="MERCEDES">MERCEDES</option>
                <option value="BMW">BMW</option>
                <option value="MUSTANG">MUSTANG</option>
                <option value="HONDA">HONDA</option>
                <?php }?>

                <?php 
                if ($_GET['selectedCar']=='HONDA') {?>
                <option value="HONDA">HONDA</option>
                <option value="MERCEDES">MERCEDES</option>
                <option value="BMW">BMW</option>
                <option value="MUSTANG">MUSTANG</option>
                <?php }?>

                <?php 
                if ($_GET['selectedCar']=='MUSTANG') {?>
                <option value="MUSTANG">MUSTANG</option>
                <option value="MERCEDES">MERCEDES</option>
                <option value="BMW">BMW</option>
                <option value="HONDA">HONDA</option>
                <?php }?>

                <?php 
                if ($_GET['selectedCar']=='BMW') {?>
                <option value="BMW">BMW</option>
                <option value="MERCEDES">MERCEDES</option>
                <option value="MUSTANG">MUSTANG</option>
                <option value="HONDA">HONDA</option>
                <?php }?>

          



                <hr>
              </div>
              <input type="submit" name="continue_renting" class="btn btn-orange w-100 mt-3" value="Continue">
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>
</section>

<?php 
include 'footer.php';
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>