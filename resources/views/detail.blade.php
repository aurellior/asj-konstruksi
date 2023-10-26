<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
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
 
  <div class="static bg-cover bg-center md:h-[33rem] w-full mb-[60px]" style="background-image: url('images/bannerportofolio2.jpeg')">
    <div class="mx-[60px] md:mx-[192px] text-center h-full ">
        <h1 class="flex justify-center items-center h-full text-white text-[40px] md:text-[64px] font-semibold font-Poppins">Portofolio Proyek</h1>
    </div>
  </div>


  {{-- Card --}}

    <div class="mx-[60px] md:mx-[130px] text-center  relative top-[-170px]">
      <div class="flex mb-[36px] flex-col md:flex-row">
        <div class="md:w-1/4 border-2 border-[#2C302D] rounded bg-[#080808] px-[30px] py-[30px] mx-[10px] flex justify-center items-center flex-col">
          <div class="bg-[#202020] rounded p-[5px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
              <path d="M17.4195 18C18.2179 18 18.9016 17.706 19.4707 17.118C20.0397 16.53 20.3237 15.824 20.3228 15C20.3228 14.175 20.0383 13.4685 19.4692 12.8805C18.9002 12.2925 18.217 11.999 17.4195 12C16.6212 12 15.9374 12.294 15.3684 12.882C14.7994 13.47 14.5154 14.176 14.5163 15C14.5163 15.825 14.8008 16.5315 15.3699 17.1195C15.9389 17.7075 16.6221 18.001 17.4195 18ZM17.4195 33C13.5244 29.575 10.6154 26.394 8.69245 23.457C6.76954 20.52 5.80761 17.801 5.80664 15.3C5.80664 11.55 6.97422 8.5625 9.30938 6.3375C11.6445 4.1125 14.3479 3 17.4195 3C20.4921 3 23.196 4.1125 25.5312 6.3375C27.8663 8.5625 29.0334 11.55 29.0324 15.3C29.0324 17.8 28.0705 20.519 26.1466 23.457C24.2228 26.395 21.3137 29.576 17.4195 33Z" fill="#A6A6A6"/>
              </svg>
          </div>
          <div class="mt-[36px]">
            <h1 class="text-white text-[20px] font-Poppins font-medium">Location</h1>
            <h1 class="text-white text-[16px] font-Poppins font-normal">Kuningan</h1>
          </div>
        </div>
        <div class="md:w-1/4 border-2 border-[#2C302D] rounded bg-[#080808] px-[30px] py-[30px] mx-[10px] flex justify-center items-center flex-col">
          <div class="bg-[#202020] rounded p-[5px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path d="M12 21C11.575 21 11.2185 20.856 10.9305 20.568C10.6425 20.28 10.499 19.924 10.5 19.5C10.5 19.075 10.644 18.7185 10.932 18.4305C11.22 18.1425 11.576 17.999 12 18C12.425 18 12.7815 18.144 13.0695 18.432C13.3575 18.72 13.501 19.076 13.5 19.5C13.5 19.925 13.356 20.2815 13.068 20.5695C12.78 20.8575 12.424 21.001 12 21ZM18 21C17.575 21 17.2185 20.856 16.9305 20.568C16.6425 20.28 16.499 19.924 16.5 19.5C16.5 19.075 16.644 18.7185 16.932 18.4305C17.22 18.1425 17.576 17.999 18 18C18.425 18 18.7815 18.144 19.0695 18.432C19.3575 18.72 19.501 19.076 19.5 19.5C19.5 19.925 19.356 20.2815 19.068 20.5695C18.78 20.8575 18.424 21.001 18 21ZM24 21C23.575 21 23.2185 20.856 22.9305 20.568C22.6425 20.28 22.499 19.924 22.5 19.5C22.5 19.075 22.644 18.7185 22.932 18.4305C23.22 18.1425 23.576 17.999 24 18C24.425 18 24.7815 18.144 25.0695 18.432C25.3575 18.72 25.501 19.076 25.5 19.5C25.5 19.925 25.356 20.2815 25.068 20.5695C24.78 20.8575 24.424 21.001 24 21ZM7.5 33C6.675 33 5.9685 32.706 5.3805 32.118C4.7925 31.53 4.499 30.824 4.5 30V9C4.5 8.175 4.794 7.4685 5.382 6.8805C5.97 6.2925 6.676 5.999 7.5 6H9V3H12V6H24V3H27V6H28.5C29.325 6 30.0315 6.294 30.6195 6.882C31.2075 7.47 31.501 8.176 31.5 9V30C31.5 30.825 31.206 31.5315 30.618 32.1195C30.03 32.7075 29.324 33.001 28.5 33H7.5ZM7.5 30H28.5V15H7.5V30Z" fill="#A6A6A6"/>
              </svg>
          </div>
          <div class="mt-[36px]">
            <h1 class="text-white text-[20px] font-Poppins font-medium">Year</h1>
            <h1 class="text-white text-[16px] font-Poppins font-normal">2023</h1>
          </div>
        </div>
        <div class="md:w-1/4 border-2 border-[#2C302D] rounded bg-[#080808] px-[30px] py-[30px] mx-[10px] flex justify-center items-center flex-col">
          <div class="bg-[#202020] rounded p-[5px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
              <path d="M15.6249 9.37549H34.3743C35.2031 9.37549 35.9979 9.70472 36.5839 10.2907C37.17 10.8768 37.4992 11.6716 37.4992 12.5004V40.6245H12.5V12.5004C12.5 11.6716 12.8292 10.8768 13.4153 10.2907C14.0013 9.70472 14.7961 9.37549 15.6249 9.37549ZM15.6249 37.4996H21.8747V31.2498H28.1245V37.4996H34.3743V12.5004H15.6249V37.4996ZM26.562 15.6253H31.2494V20.3126H26.562V15.6253ZM18.7498 23.4375H23.4371V28.1249H18.7498V23.4375ZM26.562 23.4375H31.2494V28.1249H26.562V23.4375ZM18.7498 15.6253H23.4371V20.3126H18.7498V15.6253Z" fill="#A6A6A6"/>
              </svg>
          </div>
            <div class="mt-[36px]">
              <h1 class="text-white text-[20px] font-Poppins font-medium">Building</h1>
              <h1 class="text-white text-[16px] font-Poppins font-normal">Rumah</h1>
            </div>
        </div>
        <div class="md:w-1/4 border-2 border-[#2C302D] rounded bg-[#080808] px-[30px] py-[30px] ml-[10px] flex justify-center items-center flex-col">
          <div class="bg-[#202020] rounded p-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path d="M18.0177 13.7322C16.9665 13.7322 15.9821 14.14 15.2368 14.8854C14.495 15.6307 14.0837 16.615 14.0837 17.6662C14.0837 18.7174 14.495 19.7018 15.2368 20.4471C15.9821 21.1889 16.9665 21.6002 18.0177 21.6002C19.0688 21.6002 20.0532 21.1889 20.7985 20.4471C21.5403 19.7018 21.9516 18.7174 21.9516 17.6662C21.9516 16.615 21.5403 15.6307 20.7985 14.8854C20.4345 14.5185 20.0012 14.2277 19.5238 14.0297C19.0464 13.8318 18.5345 13.7306 18.0177 13.7322ZM32.5126 22.0115L30.2134 20.0463C30.3223 19.3783 30.3786 18.6963 30.3786 18.0178C30.3786 17.3393 30.3223 16.6537 30.2134 15.9893L32.5126 14.024C32.6863 13.8753 32.8106 13.6773 32.869 13.4562C32.9274 13.2352 32.9171 13.0016 32.8395 12.7865L32.8079 12.6951C32.1751 10.9257 31.227 9.28551 30.0095 7.8541L29.9462 7.78027C29.7983 7.60643 29.6013 7.48147 29.381 7.42185C29.1607 7.36223 28.9275 7.37075 28.7122 7.44629L25.8575 8.4623C24.8028 7.59746 23.6286 6.91543 22.3559 6.44082L21.804 3.45605C21.7623 3.2312 21.6533 3.02434 21.4913 2.86296C21.3292 2.70158 21.122 2.59331 20.897 2.55254L20.802 2.53496C18.9739 2.20449 17.0473 2.20449 15.2192 2.53496L15.1243 2.55254C14.8993 2.59331 14.692 2.70158 14.53 2.86296C14.368 3.02434 14.2589 3.2312 14.2173 3.45605L13.6618 6.45488C12.4012 6.93328 11.2269 7.61365 10.1848 8.46934L7.30906 7.44629C7.09379 7.37015 6.86044 7.36132 6.64002 7.42098C6.41961 7.48063 6.22256 7.60595 6.07508 7.78027L6.0118 7.8541C4.79642 9.28704 3.84853 10.9268 3.21336 12.6951L3.18172 12.7865C3.02352 13.226 3.15359 13.7182 3.50867 14.024L5.83602 16.0104C5.72703 16.6713 5.6743 17.3463 5.6743 18.0143C5.6743 18.6893 5.72703 19.3643 5.83602 20.0182L3.5157 22.0045C3.34202 22.1532 3.21771 22.3512 3.1593 22.5723C3.1009 22.7933 3.11117 23.0269 3.18875 23.242L3.22039 23.3334C3.85672 25.1018 4.79539 26.7365 6.01883 28.1744L6.08211 28.2482C6.22996 28.4221 6.42701 28.547 6.64729 28.6067C6.86757 28.6663 7.10075 28.6578 7.31609 28.5822L10.1919 27.5592C11.2395 28.4205 12.4067 29.1025 13.6688 29.5736L14.2243 32.5725C14.2659 32.7973 14.375 33.0042 14.537 33.1656C14.699 33.3269 14.9063 33.4352 15.1313 33.476L15.2263 33.4936C17.0724 33.8258 18.963 33.8258 20.8091 33.4936L20.904 33.476C21.129 33.4352 21.3363 33.3269 21.4983 33.1656C21.6603 33.0042 21.7694 32.7973 21.811 32.5725L22.363 29.5877C23.6356 29.1096 24.8098 28.4311 25.8645 27.5662L28.7192 28.5822C28.9345 28.6584 29.1678 28.6672 29.3883 28.6075C29.6087 28.5479 29.8057 28.4226 29.9532 28.2482L30.0165 28.1744C31.2399 26.7295 32.1786 25.1018 32.8149 23.3334L32.8466 23.242C32.9977 22.8061 32.8677 22.3174 32.5126 22.0115ZM18.0177 23.8467C14.604 23.8467 11.8372 21.0799 11.8372 17.6662C11.8372 14.2525 14.604 11.4857 18.0177 11.4857C21.4313 11.4857 24.1981 14.2525 24.1981 17.6662C24.1981 21.0799 21.4313 23.8467 18.0177 23.8467Z" fill="#A6A6A6"/>
              </svg>
          </div>
          <div class="mt-[36px]">
            <h1 class="text-white text-[20px] font-Poppins font-medium">Status</h1>
            <h1 class="text-white text-[16px] font-Poppins font-normal">Pekerjaan Rangka</h1>
          </div>
        </div>
      </div>

        {{-- Deskripsi --}}
      <div class="flex justify-center px-[70px] mt-[130px]"> 
        <ul class="list-disc ">
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan rangka CNPGRANIT dan UNP pintu utama dudukan automatic door proyek Wisma Baja.</li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan rangka UNP dan siku sirip proyek Bank JABAR cabang Depok. </li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan Canopy Maintenance, Canopy South Entrance, Banner Hanger, Entrance Cage untuk proyek Mall Cambridge Medan.  </li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan rangka CNP dudukan Wall Apartment Tower : Mozart, Newton, Picasso Condominium Medan.  </li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan Gantungan Pramless untuk proyek Mall Cambridge Medan.  </li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan Cremona Siku 50 x 50 Untuk Panel ACP untuk proyek hotel Swiss Bell Cambridge Medan.  </li>
          <li class="text-white font-Poppins text-[18px] md:text-[20px] font-normal  text-left leading-[44px]" >Pekerjaan rangka besi H. Beam 100 Area Penthouse Condominium, Cambridge Medan Tower, Newton, Picasso, Mozart.  </li>
        </ul>
      </div>
    </div>



  
  {{-- Foto --}}
  <div>
    <div class="flex mb-[36px] flex-col md:flex-row">
      <div class="md:w-1/2 mr-[36px]">
        <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/detailportofolio1.jpeg')"></div>
      </div>
      <div class="md:w-1/2 md:my-0  my-[36px]">
        <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/detailportofolio2.jpeg')"></div>
      </div>
    </div>
    <div class="flex mb-[36px] flex-col md:flex-row mt-[36px]">
      <div class="md:w-1/2 mr-[36px]">
        <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/detailportofolio3.jpeg')"></div>
      </div>
      <div class="md:w-1/2 md:my-0  my-[36px]">
        <div class="bg-cover bg-center h-[352px]" style="background-image: url('images/detailportofolio4.jpeg')"></div>
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