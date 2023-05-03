

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssjs/style.page.css">
  <title>KUPEDES</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="/home">
            <img src="img/logobri.png">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="/home#hero">Home</a></li>
            <li><a href="/home#services" data-after="Service">Services</a></li>
            <li><a href="/home#about" data-after="About">About</a></li>
            <li><a href="/home#contact" data-after="Contact">Contact</a></li>
            <li>
            <form action="/logout" method="POST">
            @csrf
            <button class="submit" type="submit">Logout</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

   <!-- Projects Section -->
    <div class="wrapper">
      <section id="courses" class="seclass">
        <div class="bodykur">
          <div class="kolom">
            <p class="deskripsi">You Will Need This</p>
            <h2>Online Courses</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              deserunt voluptatibus possimus blanditiis reiciendis. Qui,
              facilis! Delectus exercitationem dolores sapiente?

              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              deserunt voluptatibus possimus blanditiis reiciendis. Qui,
              facilis! Delectus exercitationem dolores sapiente?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              deserunt voluptatibus possimus blanditiis reiciendis. Qui,
              facilis! Delectus exercitationem dolores sapiente?
              
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              deserunt voluptatibus possimus blanditiis reiciendis. Qui,
              facilis! Delectus exercitationem dolores sapiente?
            </p>
          </div>
          <div class="img-kur">
            <img
              src="img/gambar1.jpg"
            />
          </div>
        </div>
      </section>
    </div>
    <!-- End Projects Section -->

 <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <a href="#hero">
          <h1><img src="img/logobri.png" alt=""></h1>
        </a>
      </div>
      <h2>BRI Official Sosial Media</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/BRIofficialpage?mibextid=ZbWKwL"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://instagram.com/bankbri_id?igshid=YmMyMTA2M2Y=="><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://bri.co.id/briedukasi"><img src= "https://img.icons8.com/bubbles/50/null/web.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://youtube.com/@BANK_BRI"><img src="https://img.icons8.com/bubbles/100/000000/youtube.png" /></a>
        </div>
      </div>
      <p>Copyright © 2023 BRI. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="cssjs/app.js"></script>
</body>

</html>