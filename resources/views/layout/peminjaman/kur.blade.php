

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssjs/style.page.css">
  <title>Kur </title>
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
          <h2>KUR BRI</h2>
          <p class="deskripsi">Kredit Usaha Rakyat</p>
          <p>
            KUR BRI atau singkatan dari Kredit Usaha Rakyat Bank Republik Indonesia, merupakan program yang menjadi bagian dari langkah memajukan UMKM di Indonesia.

            Kredit Usaha Rakyat secara garis besar adalah program yang ada untuk pembiayaan berupa kredit bersubsidi dari pemerintah. 

            Perbedaan KUR dengan pinjaman yang lain terletak pada bunganya, KUR mematok bunga yang rendah. Kredit Usaha Rakyat ini sendiri 100% menggunakan dana dari Bank atau Lembaga Keuangan Bukan Bank alias LKBB. 
          </p>
          <p>
            Dana ini nantinya akan tersalurkan untuk menunjang berbagai macam keperluan modal kerja sampai investasi.

            Sasaran kredit tersebut biasanya adalah pelaku UMKM individu atau perseorangan, badan usaha atau kelompok usaha dengan pergerakan atau hasil yang produktif. 

            Dengan syarat, pelaku usaha tersebut layak namun tidak memiliki agunan tambahan dalam usahanya tersebut.
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