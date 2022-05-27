<?php
include 'loggedin_navbar_with_bg.php' ;
?>

<section class="vh-100 gradient-custom" style="background-image: linear-gradient(rgba(0,0,0, .2),rgba(0,0,0, .9)), url(../img/mercedes_bg.jpg); background-size: cover; 
background-position: center center; background-attachment: fixed; ; height: 100vh;">
              <?php /*Başarılı kayıt */ if ($_GET['durum']=="basarili_contact_loggedin") {?>
              <div class="alert alert-success text-center">
                <strong>Your message is taken!</strong> We will contact you as soon as possible.
              </div>
              <?php }?>
              <?php /*Kullanıcı Bulunamadı */if ($_GET['durum']=="basarisiz_contact_loggedin") {?>
                <div class="alert alert-danger text-center">
                  <strong>Your message could not be sent.</strong>Please try again later.
                </div>
              <?php }?>
  <!-- Who we are başlangıç-->
  <br> <br>
  <div class="container-fluid">
    <div class="row text-light">
      <div class="col-3"></div>
      <div class="col-6 bg-dark rounded-5">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4 fs-2 text-muted">Who We Are?</div>
          <div class="col-4"></div>
          <hr>
          <div class="row">
            <div class="col-1"></div>
            <div class="col-10 mt-2 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et architecto
              suscipit, consequatur nemo velit,
              voluptatem esse necessitatibus porro dolorem dolorum voluptas consectetur vitae sequi cumque accusamus ab
              labore maiores possimus unde at modi ut odit eum. Quibusdam cum omnis possimus provident libero quaerat
              sunt
              consequatur fugit, doloribus ullam totam ut? Corporis eius, consequatur cumque consectetur dolor quasi
              odio
              quidem perferendis deleniti, fuga sint sapiente dolorem iste enim optio vero aliquid eaque, est inventore
              adipisci. In, nobis! Iste eligendi soluta aperiam, velit ratione natus nobis vero maxime commodi
              architecto
            </div>

            <div class="col-1"></div>
          </div>

        </div>

      </div>

      <div class="col-3"></div>
    </div>
  </div>
  <!-- Who we are bitiş-->

  <!-- Contact Us başlangıç-->
  <div class="container-fluid mb-2">
    <div class="row">
      <div class="col-md-6">
        <section class="main-section container mt-4">
          <div class="row align-items-center flex-column">
            <div class="contact-card card bg-dark text-light">
              <div class="card-body p-1 text-center">
                <div>
                  <h1 class="text-muted">Contact Us</h1>
                </div>
                <hr>
                <div>
                  <img src="../img/phone.png" alt="Telephone Icon" class="mx-auto d-flex" height="50px">
                  <span style="font-size: 2em">+90 242 242 24 24</span>
                </div>
                <div class="mt-4">
                  <img src="../img/email.png" alt="Mail Icon" class="mx-auto d-flex" height="50px">
                  <a href="mailto:gunersuleymanturker@gmail.com"
                    style="font-size: 1.5em">gunersuleymanturker@gmail.com</a>
                </div>
                <div class="mt-4">
                  <img src="../img/location.png" alt="Address Icon" class="mx-auto d-flex" height="50px">
                  <span style="font-size: 1.5em">Muratpaşa, Antalya, TURKEY</span>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-6">
        <div class="card container shadow bg-dark mt-4">
          <div class="card-title text-muted text-center fw-bold" style="font-size: 25px;">
            <h1>Give us a feedback</h1>
            <hr>
          </div>

          <form method="POST" action="islem.php">


            <div class="row">
              <div class="col-md-6">
                <!-- Name input -->
                <div class="mb-1">
                  <label class="form-label text-light"  for="name">Name</label>
                  <input class="form-control" id="name" type="text"  name="kullanici_adi" placeholder="Name" required />
                </div>
              </div>
              <div class="col-md-6">
                <!-- Phone number input -->
            <div class="mb-1">
              <label class="form-label text-light" for="phoneNumber">Phone Number:</label>
              <input class="form-control" id="phoneNumber" type="tel"pattern="[0-9]{10}" name="kullanici_phoneNumber"
                placeholder="ex: 2422422424" required>
            </div>
              </div>
            </div>

            <!-- Email address input -->
            <div class="mb-1">
                  <label class="form-label text-light" for="emailAddress">Email Address</label>
                  <input class="form-control" id="emailAddress" type="email" name="kullanici_email"
                    placeholder="Email Address | ex: stg@gmail.com" required>
                </div>


            <!-- Message input -->
            <div class="mb-1">
              <label class="form-label text-light" for="message">Message</label>
              <textarea class="form-control" id="message" type="text" placeholder="Give us an opinion, feedback about issue etc." name="kullanici_mesaj"
                style="height: 5rem;" required></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
              <button class="btn btn-primary mb-2 mt-2" id="submitButton" name="contact_loggedin" type="submit">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Us bitişi-->

</section>

<?php 
  include 'fixed-footer.php';
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>