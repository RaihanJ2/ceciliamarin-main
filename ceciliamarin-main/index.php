<?php include 'contact.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
  <?php echo $alert; ?>
  <nav>
    <input type="checkbox" id="nav-toggle">
    <div class="logo"><img src="assets/img/logo.JPG"></div>
    <ul class="link">
      <li><a href="index">HOME</a></li>
      <li><a href="about">ABOUT US</a></li>
      <li><a href="service">SERVICES</a></li>
      <li><a href="vacancy">VACANCY</a></li>
      <li><a href="procedure">PROCEDURES</a></li>
      <li><a href="index.php#form">CONTACT</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
  <div class="container-us">
    <div class="wrap-up" style="padding-top: 100px;">
      <div class="grid">

        <div class="grid-item">
          <div class="card-wrap">
            <div class="card">
              <div class="img-container">
                <figure class="figure">
                  <img class="card-img" src="assets/img/office.JPG" />
                </figure>
              </div>
              <div class="card-content">
                <h1 class="card-header">OUR NEW OFFICE</h1>
                <p class="card-text">
                  PT. Cecilia Marin Standar Indonesia is now moving to our new office at
                  <br>Mitra Sunter Unit 105, Jl.Yos Sudarso Kav. 89
                  <br>Boulevar Mitra Sunter Blok C2
                  <br>Jakarta Utara 14350.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="card-wrap">
            <div class="card">
              <div class="img-container">
                <figure class="figure">
                  <img class="card-img" src="assets/img/ship.JPG" />
                </figure>
              </div>
              <div class="card-content">
                <h1 class="card-header">SHIP MANAGEMENT</h1>
                <p class="card-text">
                  Ship Management is committed to operate and maintain all vessels under its management to the highest standard of international practices and meeting the quality requirements of its clients by ensuring that its services meet the criteria as laid down in the SAFETY MANAGEMENT SYSTEM (SMS). Specialties ISM, ISPS, MLC Management, Technical Management, Crew Management, Shipping Agent, ISM, ISPS, MLC Internal Auditor.

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sertif-container">
    <img src="assets/img/sertifgroup.jpg" style="width:100%">
    <button class="btn"><a href="about.html" style="color: white">OUR CERTIFICATES</a></button>
  </div>
  <div class="contact-wrap" id="form">
    <div class="container-us">
      <div class="wrap-up">
        <div class="contact-form">
          <h2>Contact Us</h2>
          <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Name*" required>
            <input type="email" name="email" class="text-box" placeholder="Email*" required>
            <input type="tel" name="phone" class="text-box" placeholder="Phone" required>
            <textarea name="message" rows="5" placeholder="Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="CONTACT US">
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-wrapper">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.425904565613!2d106.883467!3d-6.150595000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2049e29a691eb11f!2sApartemen%20Mitra%20Sunter!5e0!3m2!1sen!2sus!4v1618156344792!5m2!1sen!2sus" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="footer-col">
          <p><strong class="footer-title">ADDRESS</strong></p>
          <p class="footer-text">
            PT. Cecilia Marin Standar
            <br>Indonesia
            <br>Mitra Sunter Unit 105
            <br>Jl.Yos Sudarso Kav. 89
            <br>Boulevar Mitra Sunter Blok C2
            <br>Jakarta Utara 14350
          </p>
          <br>
          <p><strong class="footer-title">CONTACTS</strong></p>
          <p class="footer-text">
            Email. cecilia@ceciliamarin.id
            <br>Website www.ceciliamarin.id
            <br>https://www.facebook.com/ceciliamarinindonesia
            <br>http://www.linkedin.com/in/cecilia-marin-standar-indonesia-79517a212
            <br>Ph. +6221-65306605
            <br>Fax. +6221-65830320
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>