<?php
include 'admin_navbar.php';
//total kullanıcı sayısı
$kullanicisor=$conn->prepare("select * from customers");
	$kullanicisor->execute();
    $totalCustomerNumber="0";
    while($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)){
      $totalCustomerNumber = $totalCustomerNumber+1;
    }
    //online kullanıcı sayısı
    $onlinekullanicisor=$conn->prepare("select * from customers WHERE situation='online'");
	$onlinekullanicisor->execute();
    $onlineCustomerNumber="0";
    while($onlinekullanicicek=$onlinekullanicisor->fetch(PDO::FETCH_ASSOC)){
      $onlineCustomerNumber = $onlineCustomerNumber+1;
    }
    //offline kullanıcı sayısı
    $offlineCustomerNumber = $totalCustomerNumber - $onlineCustomerNumber;

    //Mesaj sayısı
    $mesajsayisisor=$conn->prepare("select * from contactus");
	$mesajsayisisor->execute();
    $mesajsayisi="0";
    while($mesajsayisicek=$mesajsayisisor->fetch(PDO::FETCH_ASSOC)){
      $mesajsayisi = $mesajsayisi+1;
    }

    //Toplam Araç Sayısı
    $arabasor=$conn->prepare("select totalCarNumber from cars");
	$arabasor->execute();
    $totalCarNumber = "0";
    while($arabacek=$arabasor->fetch(PDO::FETCH_ASSOC)){
      $totalCarNumber += $arabacek['totalCarNumber'];
    }

    //Uygun Araç Sayısı
    $uygunaraba=$conn->prepare("select stock from cars");
	$uygunaraba->execute();
    $available = "0";
    while($uygunarabacek=$uygunaraba->fetch(PDO::FETCH_ASSOC)){
      $available += $uygunarabacek['stock'];
    }

    //Rented Car Sayısı
    $rezervasyonsayisisor=$conn->prepare("select * from reservations");
	$rezervasyonsayisisor->execute();
    $rezervasyonsayisi="0";
    while($rezervasyonsayisicek=$rezervasyonsayisisor->fetch(PDO::FETCH_ASSOC)){
      $rezervasyonsayisi = $rezervasyonsayisi+1;
    }

    //Gelir Görüntüleme
    $income=$conn->prepare("select total_income from income");
	$income->execute();
  $pullIncome=$income->fetch(PDO::FETCH_ASSOC);

    
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
    <h1 class="h2">Dashboard</h1>
  </div>
  <h2>Incomes/Customer/Cars</h2>
  <div class="table-responsive">
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/customer-admin.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">LIST OF CUSTOMERS</h5>
            <p class="card-text">You can check customers.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Total Customer Number: <?php echo $totalCustomerNumber; ?> </li>
            <li class="list-group-item">Online Customer Number: <?php echo $onlineCustomerNumber; ?></li>
            <li class="list-group-item">Offline Customer Number: <?php echo $offlineCustomerNumber; ?> </li>
          </ul>
          <div class="card-body">
            to see all customers:
            <a href="admin_customers.php?durum=ok" class="card-link">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/message.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">MESSAGES</h5>
            <p class="card-text">You can check messages.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Number of Messages: <?php echo $mesajsayisi; ?> </li>
          </ul>
          <div class="card-body">
            to see all messages:
            <a href="admin_messages.php?durum=ok&deleteMessage=waiting" class="card-link">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/mustang-2.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">LIST OF CARS</h5>
            <p class="card-text">You can see all car informations.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Total Car Number: <?php echo $totalCarNumber; ?></li>
            <li class="list-group-item">Available Cars: <?php echo $available; ?></li>
            <li class="list-group-item">Rented Cars: <?php echo $rezervasyonsayisi; ?></li>
          </ul>
          <div class="card-body">
            to see all cars:
            <a href="admin_cars.php?addStock=waiting" class="card-link">Click Here</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="../img/income.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">INCOMES</h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Income Value: <?php echo $pullIncome['total_income']; ?></li>
          </ul>
        </div>
    </div>
</main>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>