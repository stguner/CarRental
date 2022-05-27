<?php
include 'admin_navbar.php';
$rezervasyonsor=$conn->prepare("select * from reservations");
	$rezervasyonsor->execute();
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
    <h1 class="h2">Reservations</h1>
    <?php /*Başarılı kayıt */ if ($_GET['addStock']=="successfull_deleteReservation") {?>
    <div class="alert alert-success text-center">
      <strong>SUCCESS!</strong> Deleting reservation done successfully.
    </div>
    <?php }?>
    <?php /*Başarılı kayıt */ if ($_GET['addStock']=="error_deleteReservation") {?>
    <div class="alert alert-danger text-center">
      <strong>ERROR!</strong> Something going wrong while deleting reservation.
    </div>
    <?php }?>
  </div>


  <h2>Reservation History</h2>
  <div class="table-responsive">
    <table id="datatable-responsive" style="table-layout:fixed;width=100%;"
      class="table table-striped table-bordered dt-responsive nowrap table-sm table-condensed" cellspacing="0">
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
          <td>
            <?php echo $rezervasyoncek['startDate'] ?>
          </td>
          <td>
            <?php echo $rezervasyoncek['returnDate'] ?>
          </td>
          <td>
            <?php echo $rezervasyoncek['carName'] ?>
          </td>
          <td>
            $<?php echo $rezervasyoncek['price'] ?>
          </td>
          <td>
            <?php echo $rezervasyoncek['situation'] ?>
          <td>
            <center><a
                href="#"><button
                  class="btn btn-primary btn-xs">Edit</button></a></center>
          </td>
          <td>
            <center><a href="islem_admin_reservations.php?reservationid=<?php echo $rezervasyoncek['reservationid']; ?>&carid=<?php echo $rezervasyoncek['carid'] ?>&addStock=deleteReservation"><button
                  class="btn btn-danger btn-xs">End Reservation</button></a></center>
          </td>
        </tr>
        <?php } ?>
        

      </tbody>

    </table>
  </div>
</main>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>