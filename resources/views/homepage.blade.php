<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
  <script src="{{ URL::asset('js/script.js') }}"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body class="bg-black">
  <nav class="bg-transparent border-gray-200 fixed w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
          <img src="{{URL('images/logo.png')}}" class="h-8 mr-3" alt="ASJ Logo" />
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto " id="navbar-default">
        <ul class="items-center font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-[#C80304] rounded md:bg-transparent md:text-[#C80304] md:p-0 font-Poppins" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0 font-Poppins">Tentang Kami</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0 font-Poppins">Layanan</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0 font-Poppins">Portofolio</a>
          </li>
          <li>
            <button type="button" class="text-white bg-[#C80304] hover:bg-red-800 focus:outline-none  font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 font-Poppins ">Contact Us</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  {{-- Carousel --}}
  <div class="absolute z-30 text-center w-full mt-[6rem] md:mt-[18rem] text-white text-[20px] md:text-[64px] font-semibold font-Poppins">
    <h1>Jasa konstruksi</h1>
    <h1>terbaik untuk anda</h1>
  </div>

  <div id="default-carousel" class="relative w-full z-20" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="z-19 w-full relative h-[16rem] overflow-hidden rounded-lg  md:h-[33rem] xl:h-[46.75rem]  ">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out " data-carousel-item>
            <img src="{{URL('images/carousel1.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL('images/carousel2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL('images/carousel3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL('images/carousel4.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{URL('images/carousel5.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-2 h-2 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-2 h-2 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
  </div>

  {{-- Deskripsi --}}
  <div class="flex justify-center mt-[50px] md:mt-[100px] mx-[20px]">
    <h1 class="text-white items-center text-center w-[72.5rem] font-Poppins text-[18px] md:text-[24px] font-normal leading-[2,75rem]">
      Kami telah berdiri sejak 15 Desember 2010 dengan melayani berbagai bidang usaha yang kami tangani adalah pekerjaan khusus yang meliputi pemasangan Konstruksi baja, Pekerjaan Sipil, Desain interior, Arsitektur, Mekanikal, Elektrikal dan Plumbing
    </h1>
  </div>

  {{-- Tentang Kami --}}
  <div class="mt-[50px] md:mt-[12.313rem] ml-[3.75rem] mr-[3.75rem] mb-[50px] md:mb-[100px] flex justify-center flex-col md:flex-row">
    <div class="bg-cover bg-center h-[26.5rem] w-full md:w-[18.813rem] rounded-sm" style="background-image: url('images/aboutus.jpeg')">
    </div>
    <div class=" md:ml-[5rem] md:h-[26.5rem]">
      <div class="">
        <h1 class="text-white text-[32px] font-semibold font-Poppins">Tentang Kami</h1>
        <h2 class="text-[#AAADA9] text-[20px] font-normal font-Poppins">Portofolio Kami</h2>
      </div>
      <div class="flex my-[24px] flex-col md:flex-row">
        <div class="text-white w-full md:w-[453px] md:mr-[1.75rem] p-[2.5rem] border-2 border-[#2C302D] rounded">
          <h2 class="text-[24px] mb-[20px] font-Poppins">Visi</h2>
          <h3 class="text-[16px] text-[#AAADA9] font-Poppins">Menjadi Perusahaan Jasa Konstruksi yang terkemuka & terpercaya dengan menyediakan produk-produk berkualitas dan menciptakan nilai yang optimal bagi pelanggan, pemegang</h3>
        </div>
        <div class="text-white my-[36px] md:my-0 w-full md:w-[453px] p-[2.5rem] border-2 border-[#2C302D] rounded">
          <h2 class="text-[24px] mb-[20px] font-Poppins">Misi</h2>
          <h3 class="text-[16px] text-[#AAADA9] font-Poppins">PT. Anugrah Sahabat Jaya mendukung kemajuan pembangunan Bangsa Indonesia melalui pembangunan proyek berskala kecil maupun besar, untuk memberikan Kepuasan Pelanggan melalui...</h3>
        </div>
      </div>
      <div class="flex md:justify-end">
        <button type="button" class="text-white rounded-3xl text-[14px] px-5 py-2.5 text-center inline-flex items-center font-Poppins border-2 border-[#2C302D]">
          Lihat Detail
          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
      </button>
      </div>
    </div>
  </div>

  {{-- Klien, Proyek, Ulasan --}}
  <div>
    <div class="static bg-cover bg-center h-[246px] w-full mb-[100px]" style="background-image: url('images/background.jpeg')">
      <div class="flex justify-between mx-[60px] md:mx-[192px] text-center h-full items-center">
        <div>
          <h1 class="text-white text-[40px] md:text-[80px] font-semibold font-Poppins">20+</h1>
          <h2 class="text-white text-[12px] md:text-[24px] text-center font-Poppins">Klien</h2>
        </div>
        <div class="">
          <h1 class="text-white text-[40px] md:text-[80px] font-semibold font-Poppins">100+</h1>
          <h2 class="text-white text-[12px] md:text-[24px] text-center">Proyek</h2>
        </div>
        <div>
          <h1 class="text-white text-[40px] md:text-[80px] font-semibold font-Poppins">50+</h1>
          <h2 class="text-white text-[12px] md:text-[24px] text-center font-Poppins">Ulasan</h2>
        </div>
      </div>
    </div>
  </div>

  {{-- Layanan Kami --}}
  <div class="mx-[60px]">
    <div class="mb-[36px]">
      <h1 class="text-white text-[32px] font-semibold font-Poppins">Layanan Kami</h1>
      <h2 class="text-[#AAADA9] text-[20px] font-normal font-Poppins">Portofolio Kami</h2>
    </div>
    <div class="flex mb-[36px] flex-col md:flex-row">
      <div class="md:w-1/3 border-2 border-[#2C302D] rounded bg-[#080808] px-[36px] py-[60px]">
        <h1 class="text-[#C80304] mb-[60px] text-[24px] font-Poppins">01</h1>
        <h1 class="text-white  text-[24px] font-Poppins">Konstruksi Teknis</h1>
        <h1 class="text-[#AAADA9] text-[16px] leading-[25.6px] font-Poppins">Perencanaan desain konstruksi Baja maupun Sipil berdasarkan fungsi, dimensi, serta penyesuaian dengan anggaran.</h1>
      </div>
      <div class="md:w-1/3 border-2 border-[#2C302D] rounded bg-[#080808] px-[36px] py-[60px] md:my-0 md:mx-[36px] my-[36px]">
        <h1 class="text-[#C80304] mb-[60px] text-[24px] font-Poppins">02</h1>
        <h1 class="text-white ] text-[24px] font-Poppins">Metode Kerja</h1>
        <h1 class="text-[#AAADA9] text-[16px] leading-[25.6px] font-Poppins">Metode Kerja yang disesuaikan antara jenis pekerjaan dengan keadaan konstruksi di lapangan.</h1>
      </div>
      <div class="md:w-1/3 border-2 border-[#2C302D] rounded bg-[#080808] px-[36px] py-[60px]">
        <h1 class="text-[#C80304] mb-[60px] text-[24px] font-Poppins">03</h1>
        <h1 class="text-white  text-[24px] font-Poppins">Desain Interior</h1>
        <h1 class="text-[#AAADA9] text-[16px] leading-[25.6px] font-Poppins">Salah satu elemen penting dalam suatu proses rancang bangun yang diharapkan mampu mengoptimalkan suatu produk rancang bangun secara optimal.</h1>
      </div>
    </div>
    <div class="flex justify-center flex-col md:flex-row">
      <div class="md:w-1/3 border-2 border-[#2C302D] rounded bg-[#080808] px-[36px] py-[60px] md:mb-0 md:mr-[18px] mb-[36px]">
        <h1 class="text-[#C80304] mb-[60px] text-[24px] font-Poppins">04</h1>
        <h1 class="text-white  text-[24px] font-Poppins">Arsitektur</h1>
        <h1 class="text-[#AAADA9] text-[16px] leading-[25.6px] font-Poppins">Seni rancang bangun yang membutuhkan keahlian yang tinggi dan terperinci di dalam menghasilkan design rancang bangun.</h1>
      </div>
      <div class="md:w-1/3 border-2 border-[#2C302D]  rounded bg-[#080808] px-[36px] py-[60px] md:mr-[18px]">
        <h1 class="text-[#C80304] mb-[60px] text-[24px] font-Poppins">05</h1>
        <h1 class="text-white ] text-[24px] font-Poppins">Mekanikal, Elektrikal dan Plumbing</h1>
        <h1 class="text-[#AAADA9] text-[16px] leading-[25.6px] font-Poppins">Rangkaian kerja yang tidak dapat dipisahkan dalam konstruksi bangunan dan mempunyai peranan yang sangat penting.</h1>
      </div>
    </div>
  </div>

  {{-- Portofolio Kami --}}
  <div class="mt-[100px] mx-[60px] flex mb-[100px]">
    <div class="w-[500px] flex-row h-[829px] ">
      <div class="h-[295px] rounded bg-gradient-to-t from-black from-0%  to-[#2B2A2A] to-100% pl-[40px] pt-[60px] border-2 border-[#2C302D]">
        <h1 class="text-white text-[32px] font-Poppins ">Portofolio Kami</h1>
        <h2 class="text-[#AAADA9] text-[20px] font-Poppins">Portofolio Kami</h2>
        <button type="button" class="text-white rounded-3xl text-[14px] py-[10px] px-[28px] text-center inline-flex items-center font-Poppins border-2 border-[#2C302D] mt-[50px]">
          Lihat Semua
          <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
      </button>
      </div>
      <div class="bg-cover bg-center h-[495px] w-full mt-[39px]" style="background-image: url('images/portofolio1.jpeg')"></div>
    </div>

    <div class="w-full h-[829px] ml-[36px]">    
      <div class="bg-cover bg-center h-[438px]" style="background-image: url('images/portofolio2.jpeg')"></div>  

      <div class="flex mb-[36px] flex-col md:flex-row mt-[36px]">
        <div class="md:w-1/2 mr-[36px]">
          <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/portofolio3.jpeg')"></div>
        </div>
        <div class="md:w-1/2 md:my-0  my-[36px]">
          <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/portofolio4.jpeg')"></div>
        </div>
      </div>
    </div> 
  </div>

  {{-- Footer --}}
  <div class="mt-[120px] text-center h-full ">
    <h1 class="flex justify-center items-center h-full text-white text-[14px] md:text-[14px] font-Poppins mb-[40px]">© 2023 PT Anugrah Sahabat Jaya. All rights reserved.</h1>
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}"></script>
</body>
</html>