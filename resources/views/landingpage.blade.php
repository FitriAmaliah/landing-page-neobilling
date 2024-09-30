<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage-Neobilling</title>
    <!-- Tautkan file CSS Bootstrap dari CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <!-- AOS Stylesheet -->
      <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
      <link href="resources/views/scss/vendor/navbar.scss" rel="stylesheet">


    </head>
    <body>
    <!-- AOS Script -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,  // Durasi animasi (opsional)
                once: false      // Aktifkan animasi setiap kali elemen terlihat
            });
        });
    </script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar" style="background-color: #f7af46;">
  <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
          <div class="logo-circle">
              <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="height: 40px; width: 40px;">
          </div>
          <span class="text-white ml-2">NEOBILLING</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav mr-3">
              <li class="nav-item">
                  <a class="nav-link scrollto active text-white" href="#home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scrollto text-white" href="#about">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scrollto text-white" href="#services">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scrollto text-white" href="#pricing">Price</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scrollto text-white" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link scrollto text-white" href="#contact">Contact</a>
              </li>
          </ul>
          <!-- My Account & Chat on WhatsApp -->
          <ul class="navbar-nav">
              <li class="nav-item ml-3">
                <a href="https://my.idneobilling.com/auth/login" class="nav-link btn rounded-pill px-4 py-2 text-white border border-blue-500 hover:bg-blue-500 hover:border-blue-500 hover:text-white">
                  My Account              
                  </a>
              </li>
              <li class="nav-item ml-3">
                  <a class="nav-link btn btn-light btn-rounded px-3 py-1 text-orange-500 border-orange-500 hover:bg-orange-500 hover:text-white" href="https://wa.me/6289506418632">
                    <i class="fab fa-whatsapp" style="color: #25D366; margin-right: 3px; font-size: 14px;"></i> Chat On WhatsApp
                  </a>
              </li>
          </ul>
      </div>
  </div>
</nav>

<!-- ======= Home Section ======= -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<section id="home" class="d-flex align-items-center" style="min-height: 85vh; background-color:#f7af46;">
  <div class="container">
    <div class="row">
      <!-- Text and Button Column -->
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1 class="display-4 font-weight-bold mb-3">Welcome to NeoBilling</h1>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula, 
          risus eu scelerisque tristique, lectus eros faucibus tortor, id fringilla 
          est purus in quam.
        </p>
        <div class="d-flex align-items-center mt-3">
          <!-- Get Started Button -->
          <a href="#get-started" class="btn btn-primary rounded-pill px-4 py-2 mr-3" style="background-color: #84bbf7; border-color: #84bbf7;">
            Get Started
          </a>
          <!-- Watch Video -->
          <div class="d-flex align-items-center">
            <i class="fas fa-play-circle" style="font-size: 24px; margin-right: 8px; color: #ffffff;"></i>
            <a href="#watch-video" style="font-size: 16px; color: #ffffff;">Watch Video</a>
          </div>
        </div>
      </div>
      <!-- Image Column -->
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('assets/img-1.png') }}" alt="Descriptive Text" class="img-fluid floating-img">
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->

<!-- About Section -->
<section id="about" class="about py-5" style="background-color:#ffffff;">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.min.css">
  <div class="container" data-aos="fade-up">
    <div class="section-title text-center">
      <h2 class="about-title">ABOUT US</h2>
    </div>
    <div class="row content">
      <div class="col-lg-6">
        <p>
          RadbooX adalah aplikasi Radius Server untuk pengguna Mikrotik yang menerapkan sistem Otentikasi, Otorisasi, dan Akuntansi.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Radius sebagai protokol yang mengelola akses jaringan</li>
          <li><i class="ri-check-double-line"></i> Support enkripsi tipe CHAP, MSCHAP, dan PAP</li>
          <li><i class="ri-check-double-line"></i> Aman dan memudahkan pengolahan data Users</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <p>RadbooX juga dapat digunakan untuk manajemen keuangan (Billing). Cukup satu pintu dengan RadbooX.</p>
        <a href="https://my.idneobilling.com/auth/register" class="btn-learn-more">Free Trial</a>
      </div>
    </div>
  </div>
</section><!-- ======= About Us Section ======= -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us" style="background-color: #fef6e7;">
    <div class="container-fluid" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
          <div class="content">
            <h3>Semua fitur RadbooX tidak perlu join Third Party</h3>
            <p>
              RadbooX dirancang untuk memenuhi kebutuhan di bidang jasa penyedia layanan internet kususnya pengguna
              MikroTik dan kami berikan solusi untuk memudahkan
              manajemen user, keuangan, laporan, tagihan, pemberitahuan/notifikasi. itu semua dapat di kelola oleh
              radboox baik secara otomatis dan manual.
            </p>
          </div>
          <div class="accordion-list">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                  Notifikasi Via WhatsApp Menggunakan Nomor Sendiri <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p>
                    Fitur gratis ini langsung anda bisa gunakan secara penuh tanpa ada biaya tambahan. Dan kami sudah
                    menyediakan Scan QR Code langsung melalui halaman account jika
                    anda ingin menggunakan nomor whatsapp sendiri, namun secara default kami sudah menyiapkan nomor
                    WhatsApp khusus untuk notifikasi bilamana anda tidak ingin menggunakan nomor whatsapp sendiri.
                  </p>
                </div>
              </li>
              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed"><span>02</span>
                  Generate invoice otomatis oleh sistem <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Tagihan pelanggan otomatis akan di buat di setiap tanggal atau pada tiap bulan nya. Pelanggan
                    secara realtime akan mendapatkan notifikasi terkait terbitnya invoice.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>03</span>
                  Support Payment Pascabayar dan Prabayar <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Type pembayaran ada 2 pilihan, Pascabayar (bayar di akhir) dan Prabayar (bayar di awal).
                  </p>
                </div>
              </li>
              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>04</span>
                  Rekap Laporan Harian dan Bulanan <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Semua transaksi akan di rekap dalam harian dan bulanan. Anda tidak perlu repot membuat laporan
                    secara manual, karena system akan membuatkan untuk anda secara otomatis.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>05</span>
                  Support Multi User and Role <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Jika anda memiliki karyawan atau teknisi lainnya, anda cukup bikin user tambahan sebagai Operator
                    dan kasir untuk pencatatan keuangan atau lain nya.
                  </p>
                </div>
              </li>
              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed"><span>06</span> Data
                  Terpusat <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    Dengan menghubungkan seluruh cabang server MikroTik, anda akan lebih mudah untuk manajemen user
                    dan tagihan secara terpusat.
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-9" class="collapsed"><span>07</span>
                  Payment Gateway <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-9" class="collapse" data-bs-parent=".accordion-list">
                  <p>
                    RadbooX telah bekerja sama dengan Xendit untuk mendukung fitur pembayaran pelanggan anda secara online. Daftar fitur ini tanpa ribet dan tidak
                    perlu register di web resmi xendit, cukup melalui web radboox, langsung aktif dan mulai menerima pembayaran secara online. Mendukung metode pembayaran Virtual Account ( Mandiri, BRI, BNI), Alfamart, eWallet (OVO DANA SHOPEEPAY, LINKAJA, QRIS).
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
<!-- Image on the Right -->
<div class="col-lg-5 d-flex align-items-stretch order-2 order-lg-2 md:block">
  <div class="img-container" data-aos="fade-up">  
    <img src="{{ asset('assets/img-2.png') }}" class="img-fluid">
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- ======= Skills Section ======= -->
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <img src="{{ asset('assets/img-3.png') }}" class="img-fluid">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="100">
        <h3 style="color: #f7af46; font-weight: bold;">Hemat Biaya dan Waktu</h3>
        <p>
          Bersama RadbooX anda tidak perlu ada tambahan applikasi atau daftar penyedia lain nya, RadbooX akan
          meringankan pekerjaan anda!.
        </p>

        <p>
          RadbooX berupaya semaksimal mungkin dalam menyajikan fitur dan seringan mungkin hasil kerjaan yang akan
          anda lakukan ketika menggunakan layanan kami.
        </p>
        <p>
          Daftar sekarang juga, gratis 100% selama 1 minggu.
            </p>
            <a href="http://my.idneobilling.com/auth/register" class="btn-learn-3more btn btn-outline-info">Free Trial</a>
          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->
            
<!-- ======= Data Center Section ======= -->
<section id="data-center" class="skills py-4 mb-5"> <!-- Added mb-5 for bottom margin -->
  <div class="container" data-aos="fade-up">
    <div class="row align-items-center">
      <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">
        <img src="{{ asset('assets/img-4.png') }}" class="img-fluid">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Data Center</h3>
        <p>
          Server kami berada di cyber data center Jakarta, sehingga dapat diakses dari manapun secara cepat. Dengan
          dukungan listrik backup jaminan uptime SLA 99%.
        </p>
        <p>
          100% Penyimpanan menggunakan Solid State Drive (SSD) dengan tambahan controller RAID 10. Jaminan query yang
          sangat cepat untuk proses input output data.
        </p>
      </div>
    </div>
  </div>
</section><!-- End Data Center Section -->


 <!-- ======= Services Section ======= -->
 <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
 <section id="services" class="services" style="background-color: #fef6e7">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</h2>
      <p>RadbooX menyediakan paket langganan dengan harga bervariasi. Semua paket mendapatkan performance server
        yang sama. Dengan dukungan tim teknis yang sangat berpengalaman dalam bidang jaringan internet, siap Support
        penuh secara gratis 100% selama berlangganan.

      </p>
    </div>

    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4><a href="">Radius Server</a></h4>
          <p>Support PPPoE dan Hotspot, dengan Protokol CHAP, MSCHAP dan PAP</p>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
      data-aos-delay="200">
      <div class="icon-box">
        <div class="icon"><i class="bx bx-file"></i></div>
        <h4><a href="">Billing</a></h4>
        <p>Manajemen keuangan dan catatan pembayaran pelanggan</p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
      data-aos-delay="300">
      <div class="icon-box">
        <div class="icon"><i class="bx bx-tachometer"></i></div>
        <h4><a href="">Update</a></h4>
        <p>Fitur-fitur akan selalu di update mengikuti kebutuhan dan maintenance.</p>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
      data-aos-delay="400">
      <div class="icon-box">
        <div class="icon"><i class="bx bx-layer"></i></div>
        <h4><a href="">Backup</a></h4>
        <p>Sistem kami sudah auto backup, SLA 99% uptime</p>
      </div>
    </div>
  </div>
</div>
</section><!-- End Services Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta" style="background-color: #f7af46">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Trial 100% Gratis</h3>
            <p> Ingin mencoba?.. Silahkan daftar hari ini juga, gratis selama 1 minggu, bayar hanya jika lanjut
              berlangganan. Nikmati semua fitur yang sudah kami siapkan.</p>
          </div>
       <div class="col-lg-3 cta-btn-container text-center">
  <a class="cta-btn" href="https://my.radboox.com/auth/register">Try Free</a>
</div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
  <h2 class="text-center">Pricing</h2> <!-- Center-align heading -->
      <p class="text-center">Jumlah Users adalah batas pelanggan dalam table baik hotspot dan PPPoE, Ketika sudah mencapai batas maka
  tidak dapat membuat user baru, namun anda bisa menghapus user yang lama atau tidak terpakai kemudian membuat
  user baru, untuk hotspot voucher anda bisa menghapus user yang sudah habis lalu bikin voucher ulang, tidak
  ada batasan untuk membuat ulang user baik hotspot dan PPPoE selama dalam table belum memenuhi batas quota.
</p>

<p class="text-center">Unlimited NAS, tidak ada batasan Router mikrotik yang akan dihubungkan ke Radius, jika anda punya cabang
  lebih dari satu anda dapat menghubungkan semua router.
</p>

<br>
<!-- Section Title for Paket -->
<h3 class="pilih-paket">Pilih paket yang sesuai dengan kebutuhan anda.</h3>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="95">

            <div class="box">
              <h3>Radius Starter</h3>
              <h4><sup>Rp</sup>100.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 200 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 10.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 300 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>

  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Radius Basic</h3>
              <h4><sup>Rp</sup>150.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 300 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 20.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
   <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Premium</h3>
              <h4><sup>Rp</sup>250.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 600 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 35.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 1.000 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
 </div>
        <div class="row">
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Gold</h3>
              <h4><sup>Rp</sup>400.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 1000 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 50.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 1.500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
 <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Corporate</h3>
              <h4><sup>Rp</sup>600.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> 1500 Users PPPoE</li>
                <li><i class="bx bx-check"></i> 100.000 Users Hotspot</li>
                <li><i class="bx bx-check"></i> 2.500 Hotspot Sesi Aktif</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Free Setup</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Order Now</a>
            </div>
          </div>
  <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius VPS-1</h3>
              <h4><sup>Rp</sup>450.000<span>per bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> vCPU 4 - RAM 4GB</li>
                <li><i class="bx bx-check"></i> Unlimited NAS</li>
                <li><i class="bx bx-check"></i> Unlimited Users PPPoE</li>
                <li><i class="bx bx-check"></i> Unlimited Users Hotspot</li>
                <li><i class="bx bx-check"></i> Free VPN</li>
                <li><i class="bx bx-check"></i> Setup Fee 200.000</li>
                <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                <li><i class="bx bx-check"></i> No Additional Fee</li>
              </ul>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Contact Us</a>
            </div>
          </div>

        </div>
  <div class="row justify-content-center">
          <div class="col-12 mt-4 mt-lg-0 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Radius Server Mandiri</h3>
              <h4><sup>Rp</sup>250.000<sup> /bulan</sup><span>Syarat & Ketentuan berlaku</span></h4>
              <div class="row justify-content-center">
                <div class="col-lg-8 mt-4 mt-lg-0">
                  <ul>
                    <li><i class="bx bx-plus text-dark"></i> Pelanggan harus menyiapkan PC/mini PC/Raspbery atau lain
                      nya untuk dijadikan server</li>
                    <li><i class="bx bx-plus text-dark"></i> Instalasi dilakukan oleh tim teknisi kami</li>
                    <li><i class="bx bx-plus text-dark"></i> Sebelum instalasi, semua pembayaran harus sudah selesai
                    </li>
                    <li><i class="bx bx-plus text-dark"></i> Data server termasuk user dan password hanya kami yang
                      pegang</li>
                    <li><i class="bx bx-plus text-dark"></i> Jika system terjadi error kami bertanggung jawab untuk
                      memperbaiki</li>
                    <li><i class="bx bx-plus text-dark"></i> Kerjasama berkelanjutan, selama tiap bulan melakukan
                      perpanjangan licence</li>
                  </ul>
   </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                  <ul>
                    <li><i class="bx bx-check"></i> Unlimited NAS</li>
                    <li><i class="bx bx-check"></i> Unlimited Users PPPoE</li>
                    <li><i class="bx bx-check"></i> Unlimited Users Hotspot</li>
                    <li><i class="bx bx-check"></i> Free VPN</li>
                    <li><i class="bx bx-check"></i> Setup Fee Rp 500.000</li>
                    <li><i class="bx bx-check"></i> Free WhatsApp Notifikasi</li>
                    <li><i class="bx bx-check"></i> No Additional Fee</li>
                  </ul>
                </div>
              </div>
              <a href="http://my.idneobilling.com/auth/register" class="buy-btn">Contact Us</a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq" style="background-color: #fef6e7;">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
 <!-- FAQ Section Title -->
<h2 class="faq-title">Frequently Asked Questions</h2>
      <p>Anda bingung? Coba cari solusinya di sini. Silahkan hubungi kami melalui kontak di bawah ini jika masih ada yang perlu ditanyakan.</p>
    </div>
    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-1" aria-expanded="true" aria-controls="faq-list-1">
            Apakah mendapatkan support teknis?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Ya, selama berlangganan Anda akan mendapatkan full support dari tim teknis kami terkait layanan.
            </p>
          </div>
        </li>
        
        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-2" aria-expanded="false" aria-controls="faq-list-2">
            Untuk terhubung ke Radius server apa butuh VPN?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Ya, untuk berkomunikasi antara NAS dengan Radius Server harus melalui VPN. Kami sudah menyiapkan VPN gratis selama berlangganan, dengan jaringan yang sudah peering dengan ISP besar di Indonesia. Namun, jika Anda memiliki IP publik, Anda tidak butuh VPN. Hubungi tim teknis kami untuk bantu setup.
            </p>
          </div>
        </li>
        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-3" aria-expanded="false" aria-controls="faq-list-3">
            Saya punya cabang 4, apa bisa dihubungkan semua?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Ya, layanan kami memberikan Unlimited NAS. Semua cabang dapat dihubungkan ke Radius Server tanpa biaya tambahan.
            </p>
          </div>
        </li>
        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-4" aria-expanded="false" aria-controls="faq-list-4">
            Saya ingin mengirim notifikasi via WhatsApp, apa saya harus langganan WhatsApp dari pihak lain?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Tidak, kami sudah menyiapkan server WhatsApp sendiri. Anda bisa menggunakan nomor Anda sendiri atau nomor kami. Anda dapat mengaturnya nanti pada halaman Account Area.
            </p>
          </div>
        </li>
        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bx bx-help-circle icon-help"></i>
          <a class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-list-5" aria-expanded="false" aria-controls="faq-list-5">
            Apakah bisa custom template voucher hotspot?
            <i class="bx bx-chevron-down icon-show"></i>
            <i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Ya, kami menyediakan template untuk voucher hotspot. Anda bisa menambahkan atau mengedit sesuai keinginan.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section><!-- End Frequently Asked Questions Section -->    

<!-- ======= Contact Section ======= -->
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<section id="contact" class="contact" style="margin-bottom: 50px;">
  <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Contact</h2>
          <p>Jangan sungkan, untuk pertanyaan terkait layanan atau informasi tambahan silahkan hubungi kami melalui
            contact dibawah ini. Data pribadi anda di jamin kerahasiaan nya.</p>
      </div>

      <div class="row">
          <div class="col-12 d-flex align-items-stretch">
              <div class="info">
                  <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>RadbooX</h4>
                      <p>
                          <span style="font-size:18px">PT.SSR Digital Informatika</span><br>
                          Jl. Raya Karangampel, Kel. Dukuh Jeruk<br>
                          Karangampel, Indramayu 45283<br>
                          Indonesia <br>
                      </p>
                  </div>
                  <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>admin@radboox.com</p>
                  </div>
              </div>
              <div class="info">
                  <div class="clock">
                      <i class="bi bi-clock"></i>
                      <h4>Open Hours:</h4>
                      <p>Senin s.d Sabtu 08:00 - 22:00 WIB<br>Minggu 08:00 - 16:00 WIB</p>
                  </div>
                  <div class="phone">
                      <i class="bi bi-whatsapp"></i>
                      <h4>WhatsApp:</h4>
                      <p><a href="https://wa.me/6282126577254" target="_blank" rel="noopener noreferrer">+62 821-2657-7254</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section><!-- End Contact Section -->

<!-- Footer -->
<footer class="text-center text-white py-4" style="background-color: #f7af46;">
  <p>&copy; 2024 NeoBilling. All rights reserved.</p>
</footer>

 
  <!-- Tautkan file JavaScript Bootstrap dan jQuery dari CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
      // Scroll event for navbar background color change
      window.addEventListener('scroll', function () {
          const navbar = document.getElementById('navbar');
          if (window.scrollY > 50) {
              navbar.classList.add('scrolled');
          } else {
              navbar.classList.remove('scrolled');
          }
      });
  
      $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('#header').addClass('scrolled');
        } else {
          $('#header').removeClass('scrolled');
        }
      });
    });
  
    $(document).ready(function() {
      // Mengatur navbar untuk tetap berwarna saat halaman di-scroll
      $('#header').addClass('scrolled');
  
      // Optional: jika Anda ingin mengubah warna navbar saat scroll ke bawah
      $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('#header').addClass('scrolled');
        } else {
          $('#header').removeClass('scrolled');
        }
      });
    });
  
    // Ambil semua link navbar
  document.querySelectorAll('.navbar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault(); // Mencegah default scroll behavior
  
      // Scroll ke section target dengan offset
      const targetSection = document.querySelector(this.getAttribute('href'));
      const headerOffset = 80; // Sesuaikan dengan tinggi navbar
      const elementPosition = targetSection.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
  
      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth' // Gulir halus
      });
    });
  });
   
  document.addEventListener('DOMContentLoaded', () => {
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navbar = document.getElementById('navbar');
  
    mobileNavToggle.addEventListener('click', () => {
      navbar.querySelector('ul').classList.toggle('show');
    });
  });
  
  document.addEventListener('DOMContentLoaded', () => {
    const mobileNavToggle = document.querySelector('.hamburger');
    const closeNavToggle = document.querySelector('.close-icon');
    const navbar = document.getElementById('navbar');
  
    // Event listener untuk membuka menu dan menampilkan tombol close
    mobileNavToggle.addEventListener('click', () => {
      navbar.querySelector('ul').classList.toggle('show');
      mobileNavToggle.style.display = 'none';
      closeNavToggle.style.display = 'block';
    });
  
    // Event listener untuk menutup menu dan menampilkan tombol hamburger
    closeNavToggle.addEventListener('click', () => {
      navbar.querySelector('ul').classList.toggle('show');
      mobileNavToggle.style.display = 'block';
      closeNavToggle.style.display = 'none';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
      duration: 1000,  // Durasi animasi (opsional)
      once: false      // Aktifkan animasi setiap kali elemen terlihat
    });
  });
  
  module.exports = {
    theme: {
      extend: {
        keyframes: {
          float: {
            '0%, 100%': { transform: 'translateY(0)' },
            '50%': { transform: 'translateY(-20px)' },
          },
        },
        animation: {
          float: 'float 3s ease-in-out infinite',
        },
      },
    },
    plugins: [],
  };
  
    AOS.init();
  </script>
  
  </body>
  </html>