

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssjs/style.page.css">
  <title>Products Peminjaman</title>
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
  <section id="produk2">
    <div class="projects2 container">
      <div class="projects-header2">
        <h1 class="section-title">Products <span>Penyimpanan</span></h1>
      </div>
      <div class="all-projects2">
        <div class="project-item2">
          <div class="project-info2">
            <h1>SIMPEDES</h1>
            <h2>Simpanan Masyarakat Pedesaan</h2>
            <p>Simpedes adalah simpanan masyarakat dalam bentuk tabungan yang dilayani di BRI Unit, yang penyetorannya dapat dilakukan setiap saat dan frekuensi serta jumlah pengambilan tidak dibatasi sepanjang saldonya mencukupi.
              <br>
              <a href="/simpedes" type="button" class="pton">more</a></p>
            </div>
            <div class="project-img2">
              <img src="/img/spd.jpg" alt="img">
            </div>
          </div>
          <div class="project-item2">
            <div class="project-info2">
              <h1>BRITAMA</h1>
              <!-- <h2>Coding is Love</h2> -->
              <p>BritAma adalah salah satu program tabungan milik Bank Rakyat Indonesia (BRI). Sebagai salah satu bank terbesar di Indonesia, BRI menghadirkan ragam pilihan tabungan. Nah, tabungan BritAma hadir buat kamu yang menginginkan kepraktisan dalam bertransaksi.
                <br>
                <a href="/britama" type="button" class="pton">more</a></p>
              </div>
              <div class="project-img2">
                <img src="../img/britama.jpg" alt="img">
              </div>
            </div>
            <div class="project-item2">
              <div class="project-info2">
                <h1>BRITAMA</h1>
                <h2>Bisnis</h2>
                <p>Tabungan BRI BritAma Bisnis menjadi satu dari sejumlah produk keluaran Bank Rakyat Indonesia (BRI) yang bisa diandalkan untuk keperluan transaksi bisnis. Produk simpanan ini menjadi salah satu upaya perseroan dalam mengakomodasi kebutuhan nasabah dari kalangan dunia usaha.
                  <br>
                  <a href="/britamab" type="button" class="pton">more</a></p>
                </div>
                <div class="project-img2">
                  <img src="../img/britama1.jpg" alt="img">
                </div>
              </div>
              <div class="project-item2">
                <div class="project-info2">
                  <h1>DEPOSITO</h1>
                  <p>BRI (Bank Rakyat Indonesia) telah meluncurkan deposito sebagai produk perbankan yang bertujuan menghimpun dana masyarakat untuk peningkatan kualitas pembangunan serta sebagai bentuk investasi yang aman dan minim risiko.<br>
                    <a href="/deposito" type="button" class="pton">more</a></p>
                  </div>
                  <div class="project-img2">
                    <img src="/img/desposit.jpg" alt="img">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Projects Section -->

          <!-- Footer -->
          <section id="footer">
            <div class="footer container">
              <div class="brand">
                <a href="#hero">
                  <h1><img src="../img/logobri.png" alt=""></h1>
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