<?php
include 'admin_navbar.php';
$kullanicisor=$conn->prepare("SELECT * FROM customers where id=:id");
$kullanicisor->execute(array(
  'id' => $_GET['kullanici_id']
  ));

$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
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
  
  <form action="islem.php" method="POST" id="demo-form2" data-parsley-validate
    class="form-horizontal col-md-12 mb-5">

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname"><b>Registeration Time </b> <span
          class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="" id="firstname" name="registeration_time" disabled=""
          value="<?php echo $kullanicicek['registeration_time']?>" required="required"
          class="form-control col-md-7 col-xs-12">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname"><b>Name </b><span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="firstname" name="firstname" value="<?php echo $kullanicicek['firstname'] ?>"
          required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname"><b>Surname </b> <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="surname" name="surname" value="<?php echo $kullanicicek['surname'] ?>"
          required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><b>E-mail </b> <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="email" disabled="" value="<?php echo $kullanicicek['email'] ?>"
          required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><b>Number </b> <span class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="email" name="phoneNumber" value="<?php echo $kullanicicek['phoneNumber'] ?>"
          required="required" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="situation"><b>Situation </b><span
          class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="heard" class="form-control" name="situation" required>
          <?php 

       if ($kullanicicek['situation']=='offline') {?>


          <option value="offline">Offline</option>
          <option value="online">Online</option>


          <?php } else {?>

          <option value="online">Online</option>
          <option value="offline">Offline</option>

          <?php  }

       ?>


        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="authority"><b> Authority</b> <span
          class="required">*</span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <select id="heard" class="form-control" name="authority" required>
          <?php 

       if ($kullanicicek['yetki']==1) {?>


          <option value="1(Admin)">1</option>
          <option value="0(Member)">0</option>


          <?php } else {?>

          <option value="0(Member)">0</option>
          <option value="1(Admin)">1</option>

          <?php  }

       ?>

        </select>
      </div>
    </div>
    <span><b>(1:Admin / 0:Member)</b> </span>


    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['id'] ?>">


    <div class="ln_solid"></div>
    <div class="form-group">
      <div align="right" class="col-md-4 col-sm-6 col-xs-12 col-md-offset-3 mt-4">
        <button type="submit" name="kullaniciduzenle" class="btn btn-success">Güncelle</button>
      </div>
    </div>

  </form>
 

  <!-- CONTENT BİTİŞ -->

</main>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php include 'footer.php'; ?>
</body>

</html>