<?php
include 'loggedin_navbar.php';
  $rezervasyonsor=$conn->prepare("select * from reservations where customerid=:customerid");
	$rezervasyonsor->execute(array(
		'customerid' => $_SESSION['kullanici_id']
		));
?>
    <?php /*Başarılı kayıt */ if ($_GET['rezervasyon_sil']=="no") {?>
      <div class="alert alert-danger text-center">
        <strong >Your reservation could not deleted.</strong> Please contact with admin.
        </div>
    <?php }?>
    <?php /*Başarılı kayıt */ if ($_GET['rezervasyon_sil']=="ok") {?>
      <div class="alert alert-success text-center">
        <strong >You succesfully delete your reservation.</strong>
        </div>
    <?php }?>

<!--Account Dashboard-->
<section class="main-section container mt-5 vh-100">
  <div class="row">
    <nav class="col-md-3 shadow p-0 mx-md-0  mt-5 background-orange user_account" role="tablist"
      aria-orientation="vertical">
      <ul class="nav flex-column list-group">
        <li class="nav-item">
          <a class="nav-link background-orange list-group-item list-group-item-action border-0 text-light" role="tab"
            aria-controls="account-details" aria-selected="false" id="account-details-tab" data-toggle="tab"
            href="../php/user_account.php?durum=ok"><b> Account Details</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light background-orange list-group-item list-group-item-action border-0"
            id="change-password-tab" role="tab" data-toggle="tab" aria-controls="change-password" aria-selected="false"
            href="../php/user_change_password.php?durum=ok"><b> Change Password </b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark active background-orange list-group-item list-group-item-action border-0"
            id="reservations-tab" role="tab" data-toggle="tab" aria-controls="reservations" aria-selected="true"
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
          <span class="font-weight-bold d-block text-center" style="font-size: 50px;"><b> Reservations </b> </span>
          <hr>
          <h2>Reservation History</h2>
          <div class="table-responsive">
          <table id="datatable-responsive" style="table-layout:fixed;width=100%;" class="table table-striped table-bordered dt-responsive nowrap table-sm table-condensed" cellspacing="0">
                <thead>
                  <tr>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Car Name</th>
                    <th>Total Price</th>
                    <th>Situation</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>

                  <?php 

                while($rezervasyoncek=$rezervasyonsor->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $rezervasyoncek['startDate'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $rezervasyoncek['returnDate'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $rezervasyoncek['carName'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $rezervasyoncek['price'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $rezervasyoncek['situation'] ?>
                    
                    <td>
                      <center><a
                          href="islem_reservation.php?reservationid=<?php echo $rezervasyoncek['reservationid']; ?>"><button
                            class="btn btn-primary btn-xs">Edit</button></a></center>
                    </td>
                    <td>
                      <center><a
                          href="islem_reservation.php?reservationid=<?php echo $rezervasyoncek['reservationid']; ?>&price=<?php echo $rezervasyoncek['price']; ?>&carid=<?php echo $rezervasyoncek['carid'] ?>&rezervasyon_sil=ok"><button
                            class="btn btn-danger btn-xs">End Reservation</button></a></center>
                    </td>
                  </tr>
                  <?php } ?>

                </tbody>

          </table>

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