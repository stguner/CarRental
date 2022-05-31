<?php
include 'admin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM reservations where customerid=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
  ));

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
    <h1 class="h2">Edit Customer Informations</h1>
    <?php /*Başarılı kayıt */ if ($_GET['guncellendi']=="ok") {?>
      <div class="alert alert-success text-center">
        <strong >SUCCESS!</strong> Customer information changed.
        </div>
    <?php }?>
    <?php /*Başarılı kayıt */ if ($_GET['guncellendi']=="no") {?>
      <div class="alert alert-danger text-center">
        <strong>ERROR!</strong> Something going wrong while changing customer information.
        </div>
    <?php }?>
  </div>
  <!-- CONTENT -->
  
  <table id="datatable-responsive" style="table-layout:fixed;width=100%;" class="table table-striped table-bordered dt-responsive nowrap table-sm table-condensed" cellspacing="0">
                <thead>
                  <tr>
                    <th>Start Date</th>
                    <th>Return Date</th>
                    <th>Customer ID</th>
                    <th>Price</th>
                    <th>Situation</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>

                  <?php 

                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                  <tr>
                      
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['startDate'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['returnDate'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['customerid'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['price'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['situation'] ?>
                    </td>
                  </tr>



                  <?php  }

                ?>


                </tbody>
              </table>
 

  <!-- CONTENT BİTİŞ -->

</main>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php include 'fixed-footer.php'; ?>
</body>

</html>