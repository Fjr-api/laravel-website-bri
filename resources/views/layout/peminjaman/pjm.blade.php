

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
  <section id="produk1">
    <div class="projects1 container">
      <div class="projects-header1">
        <h1 class="section-title">Products <span>Peminjaman</span></h1>
      </div>
      <div class="all-projects1">
        <div class="project-item1">
          <div class="project-info1">
            <h1>KUR</h1>
            <h2>Kredit Usaha Rakyat</h2>
            <p>Program Kredit Usaha Rakyat (KUR) adalah salah satu program pemerintah dalam meningkatkan akses pembiayaan kepada Usaha Mikro, Kecil, dan Menengah (UMKM) yang disalurkan melalui lembaga keuangan dengan pola penjaminan.<br>
              <a href="/kur" type="button" class="pton">more</a></p>

            </div>
            <div class="project-img1">
              <img src="img/kurm.jpg" alt="img">
            </div>
          </div>
          <div class="project-item1">
            <div class="project-info1">
              <h1>KUPEDES</h1>
              <h2>Pelaksanaan Administrasi Kredit Umum Pedesaan</h2>
              <p> Kupedes BRI merupakan salah satu produk pinjaman milik Bank BRI untuk menambah modal kerja atau pun investasi. Berbeda dengan KUR, calon debitur Kupedes BRI boleh mengajukan pinjaman tanpa agunan. Jenis pinjaman ini cocok untuk kamu yang membutuhkan modal usaha namun tidak memiliki agunan yang layak.<br>
                <a href="/kupedes" type="button" class="pton">more</a></p></p>
              </div>
              <div class="project-img1">
                <img src="img/kupedesk.jpg" alt="img">
              </div>
            </div>
            <div class="project-item1">
              <div class="project-info1">
                <h1>KUPRA</h1>
                <h2>Kupedes Rakyat Bank Rakyat Indonesia</h2>
                <p>Kupra BRI adalah singkatan dari Kupedes Rakyat Bank Rakyat Indonesia. Kupra menjadi alternatif selain KUR BRI.
                  <br>
                  <a href="/kupra" type="button" class="pton">more</a></p></p>
                </div>
                <div class="project-img1">
                  <img src="img/kupedesr.jpg" alt="img">
                </div>
              </div>
              <div class="project-item1">
                <div class="project-info1">
                  <h1>Kemitraan</h1>
                  <p>Program kemitraan adalah program pemberian pinjaman usaha dan pembinaan oleh BUMN kepada usaha Mikro, Kecil dan Menengah (UMKM) melalui pemanfaatan dana bergulir dari Perseroan. Program ini bertujuan untuk memberdayakan perekonomian Indonesia, terutama pada UMKM.
                    <br>
                    <a href="/kemitraan" type="button" class="pton">more</a></p>
                  </div>
                  <div class="project-img1">
                    <img src="img/kemitraan.jpg" alt="img">
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