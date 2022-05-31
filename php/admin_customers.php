<?php
include 'admin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM customers");
$kullanicisor->execute();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customers</h1>
  </div>

  <div class="right_col" role="main">
    <div class="">

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>List of Customers <small>,

                  <?php 

              if ($_GET['durum']=="ok") {?>

                  <b style="color:green;">Listing Successfull...</b>

                  <?php } elseif ($_GET['durum']=="no") {?>

                  <b style="color:red;">Listing Unsuccessfull...</b>

                  <?php }

              ?>


                </small></h2>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">


              <!-- Div İçerik Başlangıç -->
                
              <table id="datatable-responsive" style="table-layout:fixed;width=100%;" class="table table-striped table-bordered dt-responsive nowrap table-sm table-condensed" cellspacing="0">
                <thead>
                  <tr>
                    <th>Registeration Time</th>
                    <th>Firstname</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>Authority</th>
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
                      <?php echo $kullanicicek['registeration_time'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['firstname'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['email'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php echo $kullanicicek['phoneNumber'] ?>
                    </td>
                    <td style="overflow:hidden;
                              white-space:nowrap; ">
                      <?php if($kullanicicek['yetki']==1){
                        echo 'Admin';
                        }else{
                        echo 'Member';
                        }?>
                    </td>
                    <td>
                      <center><a
                          href="admin_edit_customers.php?kullanici_id=<?php echo $kullanicicek['id']; ?>&guncellendi=waiting"><button
                            class="btn btn-primary btn-xs">Edit</button></a></center>
                    </td>
                    <td>
                      <center><a
                          href="admin_see_reservations.php?kullanici_id=<?php echo $kullanicicek['id']; ?>&guncellendi=waiting"><button
                            class="btn btn-primary btn-xs">See all reservations</button></a></center>
                    </td>
                    <td>
                      <center><a
                          href="islem.php?kullanici_id=<?php echo $kullanicicek['id']; ?>&kullanicisil=ok"><button
                            class="btn btn-danger btn-xs">Delete</button></a></center>
                    </td>
                  </tr>



                  <?php  }

                ?>


                </tbody>
              </table>
              
              <!-- Div İçerik Bitişi -->


            </div>
          </div>
        </div>
      </div>




    </div>
  </div>
</main>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>