

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cssjs/style.page.css">
  <title>SIMPEDES</title>
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
          <h2>SIMPEDES</h2>
          <p class="deskripsi">Simpanan Masyarakat Pedesaan</p>
          <p>
            Simpedes adalah simpanan masyarakat dalam bentuk tabungan yang dilayani di BRI Unit, yang penyetorannya dapat dilakukan setiap saat dan frekuensi serta jumlah pengambilan tidak dibatasi sepanjang saldonya mencukupi.

            Keunggulan
            Jaringan yang tersebar luas di seluruh Indonesia dan terhubung secara On Line
            Peluang besar untuk memenangkan hadiah, total Milyaran Rupiah
            Dilengkapi dengan BRI Card (Kartu BRI) yang berfungsi sebagai Kartu ATM dan Kartu Debit dengan fitur transaksi yang lengkap.
            Pembukaan Rekening Tabungan Simpedes BRI yang mudah dan praktis, di seluruh unit kerja BRI.
            Jumlah dan frekuensi setor dan ambil tidak dibatasi, sepanjang memenuhi ketentuan yang berlaku
            Fasilitas
            Fasilitas E-Banking BRI (SMS Banking, Internet Banking, Mobile Banking, SMS Notifikasi, dll.)

          </p>
          <p>
            Fasilitas Transaksi Otomatis, meliputi:
            Automatic Fund Transfer (AFT)
            Fasilitas untuk mentransfer dana dari rekening Simpedes ke rekening simpanan di BRI, baik di Unit Kerja sendiri ataupun di Unit Kerja lain, setiap tanggal tertentu dengan nominal transfer tertentu yang bersifat tetap (secara rutin).
            Account Sweep
            Fasilitas untuk mentransfer dana dari satu rekening ke rekening lainnya di Unit Kerja sendiri ataupun di Unit Kerja lain secara otomatis yang sebelumnya di set up saldo minimal atau saldo maksimalnya. Transfer otomatis terjadi apabila batas saldo minimal atau maksimal tersebut terlampaui. Fasilitas ini dapat digunakan untuk keperluan Simpedes mem-back up giro secara otomatis.
            Automatic Grab Fund (AGF)
            Fasilitas transfer otomatis untuk menarik (mendebet) dana secara otomatis oleh satu rekening dari rekening lainnya, baik di Unit Kerja sendiri maupun Unit Kerja lain. Inisiatif pendebetan berasal dari rekening yang akan mendebet, dengan nominal transaksi yang bersifat tetap. Fasilitas ini dapat digunakan untuk pembayaran angsuran pinjaman secara otomatis, dimana rekening pinjaman akan secara otomatis mendebet rekening Simpedes untuk membayar angsurannya.
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