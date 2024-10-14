<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage-Neobilling</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-orange-500 fixed w-full z-10">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- Logo Section with Circle Icon -->
    <a href="#" class="flex items-center">
      <!-- Circle Wrapper for Logo -->
      <div class="logo-circle bg-white rounded-full flex justify-center items-center" style="height: 50px; width: 50px;">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo" style="height: 30px; width: 30px;">
      </div>
      <span class="text-white text-2xl font-bold ml-3">NEOBILLING</span>
    </a>

    <!-- Hamburger Button for Mobile View -->
    <button id="hamburger" class="block md:hidden text-white focus:outline-none">
      <i class="bx bx-menu text-4xl"></i>
    </button>

    <!-- Navbar Links for Desktop View -->
    <ul id="navbar-links" class="hidden md:flex space-x-8 items-center">
      <li><a href="#beranda" class="{{ request()->is('/') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Beranda</a></li>
      <li><a href="#tentang" class="{{ request()->is('tentang') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Tentang</a></li>
      <li><a href="#layanan" class="{{ request()->is('layanan') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Layanan</a></li>
      <li><a href="#harga" class="{{ request()->is('harga') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Harga</a></li>
      <li><a href="#kontak" class="{{ request()->is('kontak') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Kontak</a></li>

      <!-- Button Group: Akun Saya and Chat WhatsApp (Aligned) -->
      <li class="flex space-x-2 items-center">
        <a href="https://my.idneobilling.com/auth/login" class="bg-blue-500 text-white text-md py-2 px-4 rounded-lg">
          Akun Saya
        </a>
        <a href="https://wa.me/6289506418632" class="bg-white text-orange-500 text-md py-2 px-4 rounded-lg flex items-center">
          <!-- WhatsApp Icon with Green Color -->
          <i class="fab fa-whatsapp text-lg mr-1" style="color: #25D366;"></i>Chat Di WhatsApp
        </a>
      </li>
    </ul>

    <!-- Mobile Navbar Links (Initially Hidden) -->
    <ul id="mobile-menu" class="md:hidden hidden flex-col space-y-2 mt-4 absolute top-16 left-0 w-full bg-orange-500 p-4">
      <li><a href="#beranda" class="{{ request()->is('/') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Beranda</a></li>
      <li><a href="#tentang" class="{{ request()->is('tentang') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Tentang</a></li>
      <li><a href="#layanan" class="{{ request()->is('layanan') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Layanan</a></li>
      <li><a href="#harga" class="{{ request()->is('harga') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Harga</a></li>
      <li><a href="#kontak" class="{{ request()->is('kontak') ? 'text-orange-700' : 'text-white' }} text-lg hover:text-orange-700">Kontak</a></li>
      <li>
        <a href="https://my.idneobilling.com/auth/register" class="bg-blue-500 text-white text-md py-2 px-4 rounded-lg block text-center">
          Akun Saya
        </a>
      </li>
      <li>
        <a href="https://wa.me/6289506418632" class="bg-white text-orange-500 text-md py-2 px-4 rounded-lg block text-center flex items-center justify-center">
          <i class="fab fa-whatsapp text-lg mr-1" style="color: #25D366;"></i>Chat Di WhatsApp
        </a>
      </li>
    </ul>
  </div>
</nav>



<script>
// Smooth scrolling
document.querySelectorAll('.nav-link').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const targetSection = document.querySelector(this.getAttribute('href'));
        const headerOffset = 85; // Sesuaikan dengan tinggi navbar
        const elementPosition = targetSection.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});

</script>


<!-- Beranda Section -->
<section id="beranda" class="min-h-[85vh] bg-orange-500 flex items-center justify-center" data-aos="zoom-in">
  <div class="container mx-auto px-4 text-center md:text-left md:flex items-center">
    <div class="md:w-1/2 mb-8 md:mb-0" data-aos="fade-up">
      <div class="md:hidden mb-6 pt-24">
        <img src="{{ asset('assets/img-1.png') }}" alt="Descriptive Text" class="img-fluid animate-float">
      </div>
      <h1 class="text-white text-4xl font-bold mb-4">ID NeoBilling</h1>
      <p class="text-white text-lg mb-6">
        IDNeobilling adalah aplikasi manajemen yang dirancang untuk pengusaha ISP atau mini ISP dalam mengelola pelanggan. 
        Aplikasi ini juga dapat terintegrasi dengan MikroTik, seperti PPPoE dan Hotspot, untuk Network Access.
      </p>      
      <div class="flex justify-center md:justify-start space-x-4">
        <a href="#tentang" id="getStartedBtn" class="bg-blue-400 text-white py-2 px-6 rounded-full">Mulai Sekarang</a>
        <button class="text-white flex items-center" onclick="toggleModal(true)">
          <i class="fas fa-play-circle text-2xl mr-2"></i> Tonton Video
        </button>
      </div>
    </div>
    <div class="md:w-1/2 hidden md:block" data-aos="zoom-in">
      <div class="col-lg-6 col-md-12 order-1 order-lg-2 home-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('assets/img-1.png') }}" alt="Descriptive Text" class="img-fluid animate-float">
      </div>
    </div>
  </div>
</section>

<script>
// Mobile menu toggle
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');

hamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

</script>

<!-- Modal Web -->
 <div id="webModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-100">
    <!-- Close Button Positioned on the Overlay -->
    <button class="absolute top-10 right-10 text-white hover:text-gray-300 z-50" onclick="toggleModal(false)">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Modal Content -->
    <div class="relative bg-white rounded-sm shadow-lg max-w-4xl w-full h-4/5">
        <div class="w-full h-full">
            <iframe id="webIframe" class="w-full h-full" src="" frameborder="0"></iframe>
        </div>
    </div>
</div>

<script>
    function toggleModal(show) {
        const modal = document.getElementById('webModal');
        const iframe = document.getElementById('webIframe');
        if (show) {
            // Ganti dengan URL web yang ingin ditampilkan
            iframe.src = "http://127.0.0.1:8000/";
            modal.classList.remove('hidden');
        } else {
            iframe.src = "";
            modal.classList.add('hidden');
        }
    }
</script>

<style>
@keyframes float {
  0% {
      transform: translateY(0);
  }
  50% {
      transform: translateY(-10px); /* Naik 10px */
  }
  100% {
      transform: translateY(0);
  }
}

.animate-float {
  animation: float 3s ease-in-out infinite; /* Durasi 3 detik, efek lembut */
}
</style>

<!-- Tentang Section -->
<section id="tentang" class="py-16 bg-white" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-orange-500">TENTANG</h2>
      <div class="border-b-4 border-orange-500 w-20 mx-auto my-2"></div>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-8">
        <p class="mb-4">IDNeobilling adalah aplikasi manajemen pelanggan ISP/mini ISP dengan berbagai fitur unggulan.</p>
        <ul class="list-inside list-disc">
          <li class="flex items-center mb-2">
            <i class="fas fa-check-circle text-blue-500 mr-2"></i>
            Radius mengelola akses jaringan
          </li>
          <li class="flex items-center mb-2">
            <i class="fas fa-check-circle text-blue-500 mr-2"></i>
            Mendukung enkripsi CHAP, MSCHAP, dan PAP
          </li>
          <li class="flex items-center mb-2">
            <i class="fas fa-check-circle text-blue-500 mr-2"></i>
            Aman dan memudahkan pengelolaan data pengguna
          </li>
        </ul>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0">
        <p class="mb-4">Selain untuk manajemen pelanggan, IDNeobilling juga dapat digunakan untuk Manajemen Keuangan (Billing).</p>
        <a href="https://my.idneobilling.com/auth/register" class="bg-blue-500 text-white py-2 px-4 rounded-full">Free Trial</a>
      </div>
    </div>
  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const getStartedBtn = document.getElementById('getStartedBtn');
  
  getStartedBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah perilaku default anchor link
    
    // Ambil posisi dari section "Tentang"
    const tentangSection = document.querySelector('#tentang');
    const offset = tentangSection.getBoundingClientRect().top + window.scrollY;

    // Tambahkan offset sesuai tinggi navbar atau jarak yang diinginkan
    const offsetPosition = offset - 150; // Sesuaikan angka dengan tinggi navbar atau jarak yang diinginkan
    
    // Scroll halus ke posisi yang diinginkan
    window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth' // Gulir halus
    });
  });
});

// Smooth scroll with offset
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    
    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    
    // Calculate the offset
    const navbarHeight = 64; // Replace with your navbar height
    const elementPosition = targetElement.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - navbarHeight;

    // Smooth scroll to the target element
    window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
    });
  });
});

</script>


<!-- Layanan Section -->
<section id="layanan" class="py-16 bg-yellow-100" data-aos="fade-up">
  <div class="container mx-auto px-4">
      <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-orange-500">SOLUSI MANAJEMEN PELANGGAN</h2>
          <div class="border-b-4 border-orange-500 w-20 mx-auto my-2"></div> <!-- Garis bawah -->
          <p class="text-lg">IDNeobilling terintegrasi dengan MikroTik dan dapat digunakan untuk manajemen pelanggan dan keuangan.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Container card -->
          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-router.png') }}" alt="Router" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Router</h4>
              <p>Tambahkan beberapa router mikrotik dalam 1 sistem tanpa batasan.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-monitoring.png') }}" alt="Monitoring" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Monitoring</h4>
              <p>Monitoring traffic, users online/offline, dan lainnya.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-maps.png') }}" alt="ODP Maps" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">ODP Maps</h4>
              <p>Pantau port ODP dan petakan lokasinya.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-wa.png') }}" alt="WhatsApp Notifikasi" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">WhatsApp Notifikasi</h4>
              <p>Broadcast Tagihan Pelanggan, Info gangguan dan lain-lain hanya sekali klik.</p>
          </div>

          <!-- Tambahkan class flex flex-col dan justify-between -->
          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-diskon.png') }}" alt="Biaya Dan Diskon" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Biaya Dan Diskon</h4>
              <p>Setting Tambahan Biaya dan Diskon pelanggan.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-tiket.png') }}" alt="Tiket Support" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Tiket Support</h4>
              <p>Management Ticket Komplain Terstruktur dan lebih rapi.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-auto isolir.png') }}" alt="Auto Isolir" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Auto Isolir</h4>
              <p>Otomatis disable atau ganti profiles ketika suspend.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-tagihan.png') }}" alt="Tagihan" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Tagihan</h4>
              <p>Pembayaran Tagihan sangat mudah dan otomatis membuka isolir, support print bluetooth.</p>
          </div>

          <div class="bg-white p-6 rounded-lg shadow-md text-center flex flex-col justify-between h-full">
              <img src="{{ asset('assets/icon-pengeluaran.png') }}" alt="Pengeluaran" class="w-14 mx-auto mb-4">
              <h4 class="text-xl font-bold">Pengeluaran</h4>
              <p>Rekap semua pengeluaran usahamu agar lebih termanagement untuk mengatur keuangan.</p>
          </div>
      </div>
  </div>
</section>



<!-- ======= Cta Section ======= -->
<section id="cta" class="bg-orange-500 py-16">
  <div class="container mx-auto px-6" data-aos="zoom-in">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-9/12 text-center lg:text-left">
        <h3 class="text-3xl font-bold text-white">Trial 100% Gratis</h3>
        <p class="mt-4 text-lg text-white">
          Ingin mencoba? Silahkan daftar hari ini juga, gratis selama 1 minggu, bayar hanya jika lanjut berlangganan. Nikmati semua fitur yang sudah kami siapkan.
        </p>
      </div>
      <div class="lg:w-3/12 cta-btn-container text-center mt-6 lg:mt-0">
        <a class="cta-btn inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200" href="https://my.idneobilling.com/auth/register">Try Free</a>
      </div>
    </div>
  </div>
</section>
<!-- End Cta Section -->

<!-- ======= Harga Section ======= -->
<section id="harga" class="harga py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12" data-aos="fade-up">
      <h2 class="text-3xl font-bold text-orange-500">HARGA</h2>
      <div class="border-b-4 border-orange-500 w-20 mx-auto my-2"></div>
      <h3 class="text-xl font-semibold mt-4 text-orange-800">Pilih paket yang sesuai dengan kebutuhan anda</h3>
    </div>
    <div class="flex flex-wrap justify-center space-x-4">
      @if (isset($packages) && count($packages) > 0)
        @foreach ($packages as $index => $package)
          <div class="relative bg-white rounded-lg shadow-lg w-80 mb-6 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <div class="p-6 rounded-t-lg"> 
              <h2 class="text-xl font-bold text-orange-500 text-center">{{ $package['name'] }}</h2>
              <p class="text-4xl font-bold text-orange-800 mt-4 text-center">Rp{{ number_format($package['tariff'], 0, ',', '.') }}</p>
              <p class="text-sm text-orange-500 text-center">
                @if ($package['is_trial'])
                  7 hari
                @else
                  per bulan
                @endif
              </p>
            </div>
            <div class="p-6 flex flex-col flex-grow">
              <ul class="mt-4 space-y-2 text-gray-700">
                @if ($package['description'] && !$package['is_trial'])
                  {!! str_replace('<li>', '<li class="flex items-center text-gray-700"><i class="fas fa-check text-green-500 mr-2"></i>', $package['description']) !!}
                @endif
              </ul>
            </div>
            <div class="flex justify-center mt-2"> <!-- Reduced margin-top to mt-2 for less spacing -->
              <a href="http://my.idneobilling.com/auth/register"
                 class="flex items-center justify-center bg-orange-500 text-white border border-orange-500 px-6 py-3 hover:bg-orange-600 transition duration-300 w-80">
                Beli Sekarang
              </a>
            </div>
          </div>
          @if ($index === 2) 
            </div>
            <div class="flex flex-wrap justify-center space-x-4">
          @endif
        @endforeach
      @else
        <p class="text-center text-gray-500">Tidak ada paket yang tersedia saat ini.</p>
      @endif
    </div>
  </div>
</section>


<!-- ======= Kontak Section ======= -->
<section id="kontak" class="kontak py-16 bg-yellow-100">
  <div class="container mx-auto px-6" data-aos="fade-up">
    <div class="section-title text-center mb-12">
      <h2 class="text-3xl font-bold text-orange-500">KONTAK</h2>
      <div class="border-b-4 border-orange-500 w-20 mx-auto my-2"></div> <!-- Garis bawah -->
      <p class="mt-4 text-gray-600">Jangan sungkan, untuk pertanyaan terkait layanan atau informasi tambahan silahkan hubungi kami melalui contact dibawah ini
      <p class="mt-4 text-gray-600">Data pribadi anda di jamin kerahasiaan nya.</p>
    </div>

    <div class="flex flex-col md:flex-row md:space-x-8">
      <div class="info flex-1 bg-gray-100 p-6 rounded-lg shadow-md mb-6 md:mb-0 shadow-orange-800/50">
        <div class="address mb-4 flex items-start">
          <div class="bg-orange-500 rounded-full p-3 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>            
          </div>
          <div>
            <h4 class="font-semibold">Neobilling</h4>
            <p class="text-gray-600">
              <span class="font-semibold">PT. Qelopak Teknologi Indonesia</span><br>
              Jl Wangun Jaya Rt.02 RW.07 Desa Ciaruteun Ilir Kec Cibungbulang Kab Bogor 16630 Pakuan Regency, Jl. Amparan Jati Blok A2 No 11, RT.01/RW.07, Margajaya
              Bogor Barat
              Kota Bogor
            </p>
          </div>
        </div>
        <div class="email mb-4 flex items-start">
          <div class="bg-orange-500 rounded-full p-3 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>            
          </div>
          <div>
            <h4 class="font-semibold">Email:</h4>
            <p class="text-gray-600">admin@neobilling.com</p>
          </div>
        </div>
      </div>

      <div class="info flex-1 bg-gray-100 p-6 rounded-lg shadow-md shadow-orange-800/50">
        <div class="clock mb-4 flex items-start">
          <div class="bg-orange-500 rounded-full p-3 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>            
          </div>
          <div>
            <h4 class="font-semibold">Open Hours:</h4>
            <p class="text-gray-600">Senin s.d Jum'at 09:00 - 17:00 WIB</p>
          </div>
        </div>
        <div class="phone flex items-start">
          <div class="bg-orange-500 rounded-full p-3 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">
              <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"></path>
          </svg>
          </div>
          <div>
            <h4 class="font-semibold">Telepon/WhatsApp:</h4>
            <p class="text-gray-600"><a href="https://wa.me/6289506418632" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline"> +6289</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

<!-- Footer -->
<footer class="text-center py-4 bg-orange-500 px-4">
  <div class="container mx-auto">
    <p class="mb-0 text-white">&copy; 2024 NeoBilling. All rights reserved.</p>
  </div>
</footer>
</body>

</html>
