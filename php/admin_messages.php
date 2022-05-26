<?php
include 'admin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM contactus");
$kullanicisor->execute();
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
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Messages</h1>
          <?php /*Başarılı kayıt */ if ($_GET['deleteMessage']=="successfull_deleteMessage") {?>
      <div class="alert alert-success text-center">
        <strong >SUCCESS!</strong> Deleting message done successfully.
        </div>
    <?php }?>
    <?php /*Başarılı kayıt */ if ($_GET['deleteMessage']=="error_deleteReservation") {?>
      <div class="alert alert-success text-center">
        <strong >ERROR!</strong> Something going wrong while deleting message.
        </div>
    <?php }?>
        </div>

        <div class="x_content">


              <!-- Div İçerik Başlangıç -->
                
              <table id="datatable-responsive" style="table-layout:fixed;width=100%;" class="table table-striped table-bordered dt-responsive nowrap table-sm table-condensed" cellspacing="0">
                <thead>
                  <tr>
                    <th>PostingDate</th>
                    <th>Name</th>
                    <th>E-mail Adress</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>

                  <?php 

                while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) {?>


                  <tr>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['PostingDate'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['name'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['Email'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['ContactNumber'] ?>
                    </td>
                    <td>
                      <?php echo $kullanicicek['Message'] ?>
                    </td>
                    <td>
                      <center><a
                          href="islem.php?kullanici_id=<?php echo $kullanicicek['id']; ?>&deleteMessage=ok"><button
                            class="btn btn-danger btn-xs">Delete</button></a></center>
                    </td>
                  </tr>



                  <?php  }

                ?>


                </tbody>
              </table>
              
              <!-- Div İçerik Bitişi -->


            </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <?php include 'fixed-footer.php'; ?>
</body>

</html>