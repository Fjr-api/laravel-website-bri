

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssjs/style.page.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <img src="img/logobri.png">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
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


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>WELCOME</h1>
        <h1><span></span></h1>
        <h1>BANK RAKYAT INDONESIA<br>UNIT PASAR BARU<span></span></h1>
        <a href="#services" type="button" class="cta">Service</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
        <p>BRI Pasar Baru juga melayani anda untuk melakukan 
          Peminjaman dan Penyimpanan
        </p>
      </div>
      <div class="service-bottom">
        <a href="/pjm">
          <div class="service-item">
            <a href="/pjm">
              <div class="icon"><img src="https://img.icons8.com/external-nawicon-mixed-nawicon/64/null/external-Loan-money-management-nawicon-mixed-nawicon.png" /></div>
              <h2>Peminjaman</h2>
              <p>Pinjaman adalah suatu jenis hutang yang dapat melibatkan semua jenis benda berwujud walaupun biasanya lebih sering diidentikkan dengan pinjaman moneter.Pinjaman BRI Pasar Baru ada 4 product yaitu Kur,Kupedes,Kupra dan kemitraan</p>
            </a>
          </div>
          <div class="service-item">
            <a href="/pym">
              <div class="icon"><img src="https://img.icons8.com/external-smashingstocks-detailed-outline-smashing-stocks/66/null/external-investment-digital-marketing-smashingstocks-detailed-outline-smashing-stocks.png" /></div>
              <h2>Penyimpanan</h2>
              <p>Penyimpanan adalah salah satu bentuk tindakan pengamanan yang selalu terkait dengan waktu yang bertujuan untuk mempertahankan dan menjaga komoditi yang disimpan dengan cara menghindari, menghilangkan berbagai faktor yang dapat menurunkan kualitas dan kuantitas komoditi tersebut.BRI Pasar Baru memiliki 4 product penyimpanan yaitu Simpedes,Britama,Britama Bisnis dan Deposito</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->


    <!-- About Section -->
    <section id="about">
      <div class="about container">
        <div class="col-left">
          <div class="about-img">
            <img src="./img/foto2.jpg" alt="img">
          </div>
        </div>
        <div class="col-right">
          <h1 class="section-title">About <span>BRI</span></h1>
          <h2>Front End Developer</h2>
          <p>Lorem ipsum, dolor sit aamet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque
            repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt
            exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni!
            Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt
          reprehenderit libero enim!</p>
          <a href="https://bri.co.id/" class="cta">OFFICIAL WEBSITE</a>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
      <div class="contact container">
        <div>
          <h1 class="section-title">Contact <span>info</span></h1>
        </div>
        <div class="contact-items">
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
            <div class="contact-info">
              <h1>Phone</h1>
              <h2>0812-12-14017</h2>
              <h2>14017/1500017</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
            <div class="contact-info">
              <h1>Email</h1>
              <h2>callbri@bri.co.id</h2>
            </div>
          </div>
          <div class="contact-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
            <div class="contact-info">
              <h1>Address</h1>
              <h2>Gedung BRI I & II, Jalan Jendral Sudirman Kav. 44 - 46, Jakarta, Indonesia, 10210</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

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