<?php
include 'navbar.php' ;
?>
<!-- Carousel başlangıç-->
<div id="myCarousel" class="carousel slide bg-secondary" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
      aria-current="true"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" class="" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <div class="text-center">
        <img src="../img/mustang-2.png" class="bd-placeholder-img" width="60%" height="500px" aria-hidden="true"
          preserveAspectRatio="xMidYMid slice" focusable="false">
        </img>
      </div>

      <div class="container">
        <div class="carousel-caption text-start">
          <h1 class="text-light">MUSTANG</h1>
          <p class="text-light"> <b>MODEL 2022</b> </p>
          <p><a class="btn btn-lg btn-dark" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent Now</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="text-center">
        <img src="../img/bmw-2.png" class="bd-placeholder-img" width="60%" height="500px" aria-hidden="true"
          preserveAspectRatio="xMidYMid slice" focusable="false">
        </img>
      </div>

      <div class="container">
        <div class="carousel-caption">
          <h1>BMW</h1>
          <p> <b> MODEL 2022</b></p>
          <p><a class="btn btn-lg btn-dark" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent Now</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="text-center">
        <img src="../img/mercedes-2.png" class="bd-placeholder-img" width="60%" height="500px" aria-hidden="true"
          preserveAspectRatio="xMidYMid slice" focusable="false">
        </img>
      </div>

      <div class="container">
        <div class="carousel-caption text-end">
          <h1 class="text-light">MERCEDES</h1>
          <p class="text-light"> <b> MODEL 2020</b></p>
          <p><a class="btn btn-lg btn-dark" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent Now</a></p>
        </div>
      </div>
    </div>

    <div class="carousel-item active">
      <div class="text-center">
        <img src="../img/honda-2.png" class="bd-placeholder-img" width="60%" height="500px" aria-hidden="true"
          preserveAspectRatio="xMidYMid slice" focusable="false">
        </img>
      </div>
      <div class="container">
        <div class="carousel-caption text-end">
          <h1 class="text-light">HONDA</h1>
          <p class="text-light"> <b>MODEL 2021</b> </p>
          <p><a class="btn btn-lg btn-dark" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent Now</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel bitiş-->
<br>
<hr class="featurette-divider">
<br>
<!-- tanıtım alanı başlangıç-->
<div class="container marketing">
  <div class="row">
    <div class="col-lg-4">
      <img src="../img/mercedes.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

      <h2>Mercedes</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut placeat possimus, quis doloribus perspiciatis
        voluptatem dolorem numquam aperiam culpa fuga libero deleniti nesciunt minus quia nostrum vero. Id, eius. Natus
        nesciunt voluptatem minus, autem provident reprehenderit fugiat illum sit saepe repudiandae possimus, modi
        maiores debitis quis! Animi architecto maxime ipsum?</p>
      <p><a class="btn btn-secondary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting"> Rent Mercedes </a></p>
    </div>

    <div class="col-lg-4">
      <img src="../img/bmw.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>
      <h2>BMW</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, corporis molestias facilis explicabo
        aliquid animi magni similique recusandae? Debitis ipsa voluptatibus, explicabo corporis, deleniti amet a quos
        quo provident soluta atque officia deserunt velit ratione delectus? Pariatur sint voluptatem non magnam aliquid,
        incidunt facilis quidem rerum ipsum, delectus, voluptas enim.</p>
      <p><a class="btn btn-secondary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent BMW</a></p>
    </div>
    <div class="col-lg-4">
      <img src="../img/honda.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img"
        aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

      <h2>Honda</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci eos illum perspiciatis, rerum excepturi
        numquam, quae molestiae, nihil voluptatem soluta dolor voluptas quas? Eum libero cumque quia commodi ducimus
        laboriosam architecto quo accusantium odio quaerat corporis itaque ipsum magni quos modi, eligendi et similique
        nobis natus, voluptate mollitia! Repudiandae!</p>
      <p><a class="btn btn-secondary" href="../php/login_register.php?durum=needlogin&kullanicisil=waiting&deleteMessage=waiting">Rent Honda</a></p>
    </div>
  </div>



  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Clean Cars <span class="text-muted"> for your health </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium placeat quisquam cum ea, rerum
        nostrum exercitationem nobis porro ratione aspernatur voluptates a soluta voluptas harum distinctio nam
        veritatis eius deserunt dignissimos cumque reiciendis suscipit. Qui repellendus laboriosam possimus doloremque
        nemo.</p>
    </div>
    <div class="col-md-5">
      <img src="../img/clean_cars.jpg"
        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"
        role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Fast Service <span class="text-muted"> for your time </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, quo repellendus! Similique impedit
        eos autem voluptatum quis fugiat id accusamus blanditiis quaerat voluptate enim deserunt cum quisquam maiores
        iure a, magnam saepe, aliquam eveniet ab! Labore nihil nam dolor fugit.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="../img/fast_service.jpg"
        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"
        role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Affordable Prices <span class="text-muted"> for your pocket </span></h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi dolores enim ut atque autem est
        odio. Esse, autem ut corrupti voluptatum unde sed cumque ullam consequatur ab eum ipsum? Totam, minima. Neque
        delectus accusantium, ipsum corrupti laborum dolorum id voluptate.</p>
    </div>
    <div class="col-md-5">
      <img src="../img/easy_payment.jpg"
        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"
        role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </img>

    </div>
  </div>

  <hr class="featurette-divider">

</div>
<!-- Tanıtım alanı bitiş-->


<?php 
include 'footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</php>