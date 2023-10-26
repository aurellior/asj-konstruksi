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
              <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0">Home</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0">Tentang Kami</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0">Layanan</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-[#C80304] rounded md:bg-transparent md:text-[#C80304] md:p-0" aria-current="page">Portofolio</a>
            </li>
            <li>
                <button type="button" class="text-white bg-[#C80304] hover:bg-red-800 focus:outline-none  font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 ">Contact Us</button>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Banner --}}
  <div>
    <div class="bg-black w-full h-[80px]"></div>
    <div class="static bg-cover bg-center h-[435px] w-full mb-[60px]" style="background-image: url('images/bannerportofolio.jpeg')">
        <div class="mx-[60px] md:mx-[192px] text-center h-full ">
            <h1 class="flex justify-center items-center h-full text-white text-[40px] md:text-[64px] font-semibold font-Poppins">Portofolio Proyek</h1>
        </div>
    </div>
  </div>

  {{-- Deskripsi --}}
  <div class="flex justify-center  mx-[20px]">
    <h1 class="text-white items-center text-center w-[72.5rem] font-Poppins text-[18px] md:text-[20px] font-normal leading-[2,75rem]">
        Berikut merupakan <span class="text-[#C80304]">referensi proyek</span> yang telah kami kerjakan:
    </h1>
  </div>

  {{-- Portofolio --}}
  <div class="mt-[60px] ">
    <div class="flex mb-[36px] flex-col md:flex-row h-[352px]">
        <div class="md:w-1/3  px-[36px] py-[60px]" style="background-image: url('images/portofolio5.jpeg')"></div>
        <div class="md:w-1/3  px-[36px] py-[60px] md:my-0 md:mx-[36px] my-[36px]" style="background-image: url('images/portofolio6.jpeg')"></div>
        <div class="md:w-1/3  px-[36px] py-[60px]" style="background-image: url('images/portofolio7.jpeg')"></div>
    </div>
    <div class="flex mb-[36px] flex-col md:flex-row h-[352px]">
        <div class="md:w-1/3  px-[36px] py-[60px]" style="background-image: url('images/portofolio8.jpeg')"></div>
        <div class="md:w-1/3  px-[36px] py-[60px] md:my-0 md:mx-[36px] my-[36px]" style="background-image: url('images/portofolio9.jpeg')"></div>
        <div class="md:w-1/3  px-[36px] py-[60px]" style="background-image: url('images/portofolio10.jpeg')"></div></div>
  </div>

  {{-- Footer --}}
  <div class="mt-[120px] text-center h-full ">
    <h1 class="flex justify-center items-center h-full text-white text-[14px] md:text-[14px] font-Poppins mb-[40px]">© 2023 PT Anugrah Sahabat Jaya. All rights reserved.</h1>
</div>

  <script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}"></script>
</body>
</html>