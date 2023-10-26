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

    {{-- Navbar --}}
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
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-[#C80304] rounded md:bg-transparent md:text-[#C80304] md:p-0" aria-current="page">Tentang Kami</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0">Layanan</a>
            </li>
            <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#C80304] md:p-0">Portofolio</a>
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
    <div class="mx-[80px] my-[40px]">
        <div class="absolute bg-cover bg-center w-[900px] h-[450px] top-[200px] left-[400px]" style="background-image: url('images/bannerabout2.jpeg')"></div>
        <div class="relative bg-cover bg-center w-[900px] h-[450px]" style="background-image: url('images/bannerabout.jpeg')">
            <div class="mx-[60px] md:mx-[192px] text-center h-full ">
                <h1 class="flex justify-center items-center h-full text-white text-[40px] md:text-[64px] font-semibold font-Poppins">PT. Anugrah Sahabat Jaya</h1>
            </div>
        </div>
    </div>
  </div>

  {{-- Deskripsi --}}
  <div class="flex justify-center mt-[50px] md:mt-[100px] mx-[20px] pt-[130px] pb-[80px]">
    <h1 class="text-white items-center text-center w-[72.5rem] font-Poppins text-[18px] md:text-[24px] font-normal leading-[2,75rem]">
      Kami telah berdiri sejak 15 Desember 2010 dengan melayani berbagai bidang usaha yang kami tangani adalah pekerjaan khusus yang meliputi pemasangan Konstruksi baja, Pekerjaan Sipil, Desain interior, Arsitektur, Mekanikal, Elektrikal dan Plumbing
    </h1>
  </div>

  {{-- Card --}}
  <div class="md:mt-[50px] mr-[3.75rem] md:mb-[50px] flex justify-center flex-col md:flex-row">
    <div class="md:h-[26.5rem]">
      <div class="flex my-[24px] flex-col md:flex-row">
        <div class="text-white w-full md:w-[500px] md:mr-[1.75rem] p-[2.5rem] border-2 border-[#2C302D] rounded bg-[#080808]">
          <h2 class="text-[24px] mb-[20px] font-Poppins">Visi</h2>
          <h3 class="text-[16px] text-[#AAADA9] font-Poppins">Menjadi Perusahaan Jasa Konstruksi yang terkemuka & terpercaya dengan menyediakan produk-produk berkualitas dan menciptakan nilai yang optimal bagi pelanggan, pemegang</h3>
        </div>
        <div class="text-white my-[36px] md:my-0 w-full md:w-[500px] p-[2.5rem] border-2 border-[#2C302D] rounded bg-[#080808]">
          <h2 class="text-[24px] mb-[20px] font-Poppins">Misi</h2>
          <h3 class="text-[16px] text-[#AAADA9] font-Poppins">PT. Anugrah Sahabat Jaya mendukung kemajuan pembangunan Bangsa Indonesia melalui pembangunan proyek berskala kecil maupun besar, untuk memberikan Kepuasan Pelanggan melalui...</h3>
        </div>
      </div>
    </div>
  </div>

  {{-- icon --}}
  <div class="flex justify-between w-full">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="113" viewBox="0 0 93 113" fill="none">
            <g opacity="0.3">
            <rect width="112.112" height="112.112" transform="translate(-20)" fill="#181818"/>
            <rect x="2.98243" y="21.8618" width="52.6925" height="52.6925" stroke="url(#paint0_linear_407_151)" stroke-width="1.12112"/>
            <rect x="-0.560559" y="0.560559" width="52.6925" height="52.6925" transform="matrix(-1 0 0 1 61.8418 29.1489)" stroke="url(#paint1_linear_407_151)" stroke-width="1.12112"/>
            <rect x="16.4356" y="37.5574" width="52.6925" height="52.6925" stroke="url(#paint2_linear_407_151)" stroke-width="1.12112"/>
            </g>
            <defs>
            <linearGradient id="paint0_linear_407_151" x1="29.3287" y1="21.3013" x2="29.3287" y2="75.1149" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint1_linear_407_151" x1="26.9068" y1="0" x2="26.9068" y2="53.8137" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint2_linear_407_151" x1="42.7818" y1="36.9968" x2="42.7818" y2="90.8105" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            </defs>
        </svg>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="113" viewBox="0 0 113 113" fill="none">
            <g clip-path="url(#clip0_407_149)">
            <rect width="112.112" height="112.112" transform="translate(0.111328)" fill="#181818"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M84.1952 56.0559H74.1051V0H72.984V56.0559H68.4995V0H67.3784V56.0559H62.8939V0H61.7728V56.0559H57.2883V0H56.1672V56.0559H0.111328V57.177H56.1672V61.6615H0.111328V62.7826H56.1672V67.2671H0.111328V68.3882H56.1672V72.8727H0.111328V73.9938H56.1672V84.0839C56.1672 99.5633 68.7158 112.112 84.1952 112.112C99.6746 112.112 112.223 99.5633 112.223 84.0839C112.223 68.6044 99.6746 56.0559 84.1952 56.0559ZM61.7728 61.6615H57.2883V57.177H61.7728V61.6615ZM62.8939 61.6615H67.3784V57.177H62.8939V61.6615ZM68.4995 61.6615H72.984V57.177H68.4995V61.6615ZM74.1051 61.6615V57.177H84.1952C99.0554 57.177 111.102 69.2236 111.102 84.0839C111.102 98.9441 99.0554 110.991 84.1952 110.991C69.335 110.991 57.2883 98.9441 57.2883 84.0839V73.9938H61.7728V84.0839C61.7728 96.4674 71.8117 106.506 84.1952 106.506C96.5787 106.506 106.618 96.4674 106.618 84.0839C106.618 71.7003 96.5787 61.6615 84.1952 61.6615H74.1051ZM61.7728 72.8727H57.2883V68.3882H61.7728V72.8727ZM62.8939 73.9938V84.0839C62.8939 95.8482 72.4308 105.385 84.1952 105.385C95.9595 105.385 105.496 95.8482 105.496 84.0839C105.496 72.3195 95.9595 62.7826 84.1952 62.7826H74.1051V67.2671H84.1952C93.4828 67.2671 101.012 74.7962 101.012 84.0839C101.012 93.3715 93.4828 100.901 84.1952 100.901C74.9075 100.901 67.3784 93.3715 67.3784 84.0839V73.9938H62.8939ZM68.4995 67.2671H72.984V62.7826H68.4995V67.2671ZM67.3784 62.7826V67.2671H62.8939V62.7826H67.3784ZM67.3784 68.3882V72.8727H62.8939V68.3882H67.3784ZM68.4995 84.0839V73.9938H72.984V84.0839C72.984 90.2756 78.0034 95.295 84.1952 95.295C90.3869 95.295 95.4064 90.2756 95.4064 84.0839C95.4064 77.8921 90.3869 72.8727 84.1952 72.8727H74.1051V68.3882H84.1952C92.8637 68.3882 99.8908 75.4154 99.8908 84.0839C99.8908 92.7523 92.8637 99.7795 84.1952 99.7795C75.5267 99.7795 68.4995 92.7523 68.4995 84.0839ZM74.1051 84.0839C74.1051 89.6564 78.6226 94.1739 84.1952 94.1739C89.7678 94.1739 94.2852 89.6564 94.2852 84.0839C94.2852 78.5113 89.7678 73.9938 84.1952 73.9938H74.1051V84.0839ZM72.984 72.8727V68.3882H68.4995V72.8727H72.984ZM61.7728 67.2671H57.2883V62.7826H61.7728V67.2671Z" fill="url(#paint0_linear_407_149)"/>
            </g>
            <defs>
            <linearGradient id="paint0_linear_407_149" x1="102.133" y1="105.946" x2="0.111333" y2="-2.24223" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <clipPath id="clip0_407_149">
            <rect width="112.112" height="112.112" fill="white" transform="translate(0.111328)"/>
            </clipPath>
            </defs>
        </svg>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="113" viewBox="0 0 113 113" fill="none">
            <rect width="112.112" height="112.112" transform="translate(0.222656)" fill="#181818"/>
            <rect x="12.2273" y="55.605" width="61.6615" height="61.6615" transform="rotate(-45 12.2273 55.605)" stroke="url(#paint0_linear_407_141)" stroke-width="1.12112"/>
            <rect x="18.9539" y="56.0559" width="52.6925" height="52.6925" transform="rotate(-45 18.9539 56.0559)" stroke="url(#paint1_linear_407_141)" stroke-width="1.12112"/>
            <rect x="25.6804" y="56.5068" width="43.7236" height="43.7236" transform="rotate(-45 25.6804 56.5068)" stroke="url(#paint2_linear_407_141)" stroke-width="1.12112"/>
            <rect x="32.407" y="56.9575" width="34.7547" height="34.7547" transform="rotate(-45 32.407 56.9575)" stroke="url(#paint3_linear_407_141)" stroke-width="1.12112"/>
            <rect x="39.1345" y="57.4084" width="25.7857" height="25.7857" transform="rotate(-45 39.1345 57.4084)" stroke="url(#paint4_linear_407_141)" stroke-width="1.12112"/>
            <rect x="45.8601" y="57.8591" width="16.8168" height="16.8168" transform="rotate(-45 45.8601 57.8591)" stroke="url(#paint5_linear_407_141)" stroke-width="1.12112"/>
            <rect x="51.7949" y="58.3098" width="8.96894" height="8.96894" transform="rotate(-45 51.7949 58.3098)" fill="url(#paint6_diamond_407_141)"/>
            <defs>
            <linearGradient id="paint0_linear_407_141" x1="42.8259" y1="55.605" x2="42.8259" y2="118.388" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint1_linear_407_141" x1="45.068" y1="56.0559" x2="45.068" y2="109.87" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint2_linear_407_141" x1="47.3101" y1="56.5068" x2="47.3101" y2="101.352" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint3_linear_407_141" x1="49.5521" y1="56.9575" x2="49.5521" y2="92.8333" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint4_linear_407_141" x1="51.7952" y1="57.4084" x2="51.7952" y2="84.3153" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <linearGradient id="paint5_linear_407_141" x1="54.0363" y1="57.8591" x2="54.0363" y2="75.797" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.96"/>
            <stop offset="1" stop-color="white" stop-opacity="0.35"/>
            </linearGradient>
            <radialGradient id="paint6_diamond_407_141" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.2794 62.7943) rotate(90) scale(4.48447)">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0.1"/>
            </radialGradient>
            </defs>
        </svg>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="113" viewBox="0 0 113 113" fill="none">
            <rect width="112.112" height="112.112" transform="translate(0.333984)" fill="#181818"/>
            <path d="M96.1892 56.0559C96.1892 72.9603 78.5096 86.8866 56.3895 86.8866C34.2695 86.8866 16.5899 72.9603 16.5899 56.0559C16.5899 39.1514 34.2695 25.2251 56.3895 25.2251C78.5096 25.2251 96.1892 39.1514 96.1892 56.0559Z" stroke="url(#paint0_linear_407_131)" stroke-width="1.12112"/>
            <circle cx="56.3903" cy="56.0559" r="30.8307" stroke="url(#paint1_linear_407_131)" stroke-width="1.12112"/>
            <path d="M78.2519 56.0559C78.2519 64.621 75.7713 72.3518 71.789 77.927C67.8059 83.5033 62.3539 86.8866 56.3901 86.8866C50.4264 86.8866 44.9744 83.5033 40.9913 77.927C37.009 72.3518 34.5283 64.621 34.5283 56.0559C34.5283 47.4907 37.009 39.7599 40.9913 34.1847C44.9744 28.6084 50.4264 25.2251 56.3901 25.2251C62.3539 25.2251 67.8059 28.6084 71.789 34.1847C75.7713 39.7599 78.2519 47.4907 78.2519 56.0559Z" stroke="url(#paint2_linear_407_131)" stroke-width="1.12112"/>
            <path d="M69.2818 56.0559C69.2818 64.667 67.7849 72.4364 65.3867 78.032C64.1872 80.8309 62.7733 83.06 61.2319 84.5813C59.6928 86.1002 58.0569 86.8866 56.389 86.8866C54.721 86.8866 53.0851 86.1002 51.546 84.5813C50.0046 83.06 48.5907 80.8309 47.3912 78.032C44.9931 72.4364 43.4961 64.667 43.4961 56.0559C43.4961 47.4447 44.9931 39.6753 47.3912 34.0797C48.5907 31.2809 50.0046 29.0517 51.546 27.5304C53.0851 26.0115 54.721 25.2251 56.389 25.2251C58.0569 25.2251 59.6928 26.0115 61.2319 27.5304C62.7733 29.0517 64.1872 31.2809 65.3867 34.0797C67.7849 39.6753 69.2818 47.4447 69.2818 56.0559Z" stroke="url(#paint3_linear_407_131)" stroke-width="1.12112"/>
            <path d="M56.3898 31.3914L57.3731 35.7443L61.1463 33.3616L58.7636 37.1348L63.1165 38.1181L58.7636 39.1013L61.1463 42.8746L57.3731 40.4919L56.3898 44.8448L55.4065 40.4919L51.6333 42.8746L54.016 39.1013L49.6631 38.1181L54.016 37.1348L51.6333 33.3616L55.4065 35.7443L56.3898 31.3914Z" fill="url(#paint4_radial_407_131)"/>
            <path d="M56.3898 49.3291L57.3731 53.682L61.1463 51.2993L58.7636 55.0726L63.1165 56.0558L58.7636 57.0391L61.1463 60.8123L57.3731 58.4296L56.3898 62.7825L55.4065 58.4296L51.6333 60.8123L54.016 57.0391L49.6631 56.0558L54.016 55.0726L51.6333 51.2993L55.4065 53.682L56.3898 49.3291Z" fill="url(#paint5_radial_407_131)"/>
            <path d="M56.3898 67.2671L57.3731 71.62L61.1463 69.2373L58.7636 73.0105L63.1165 73.9938L58.7636 74.9771L61.1463 78.7503L57.3731 76.3676L56.3898 80.7205L55.4065 76.3676L51.6333 78.7503L54.016 74.9771L49.6631 73.9938L54.016 73.0105L51.6333 69.2373L55.4065 71.62L56.3898 67.2671Z" fill="url(#paint6_radial_407_131)"/>
            <defs>
            <linearGradient id="paint0_linear_407_131" x1="56.3895" y1="24.6646" x2="56.3895" y2="87.4472" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint1_linear_407_131" x1="56.3903" y1="24.6646" x2="56.3903" y2="87.4472" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint2_linear_407_131" x1="56.3901" y1="24.6646" x2="56.3901" y2="87.4472" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint3_linear_407_131" x1="56.389" y1="24.6646" x2="56.389" y2="87.4472" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <radialGradient id="paint4_radial_407_131" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.3898 38.1181) rotate(90) scale(6.72671)">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0"/>
            </radialGradient>
            <radialGradient id="paint5_radial_407_131" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.3898 56.0558) rotate(90) scale(6.72671)">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0"/>
            </radialGradient>
            <radialGradient id="paint6_radial_407_131" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.3898 73.9938) rotate(90) scale(6.72671)">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0"/>
            </radialGradient>
            </defs>
        </svg>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="113" viewBox="0 0 113 113" fill="none">
            <g opacity="0.3">
            <rect width="112.112" height="112.112" transform="translate(0.445312)" fill="#181818"/>
            <path d="M25.9932 38.4417L56.502 20.8275L87.0107 38.4417V73.6702L56.502 91.2845L25.9932 73.6702V38.4417Z" stroke="url(#paint0_linear_407_124)" stroke-width="1.12112"/>
            <path d="M29.876 40.6838L56.5011 25.3118L83.1262 40.6838V71.4279L56.5011 86.7999L29.876 71.4279V40.6838Z" stroke="url(#paint1_linear_407_124)" stroke-width="1.12112"/>
            <path d="M33.7598 42.926L56.5012 29.7962L79.2427 42.926V69.1855L56.5012 82.3153L33.7598 69.1855V42.926Z" stroke="url(#paint2_linear_407_124)" stroke-width="1.12112"/>
            <path d="M37.6445 45.1684L56.5023 34.2808L75.3601 45.1684V66.9434L56.5023 77.831L37.6445 66.9434V45.1684Z" stroke="url(#paint3_linear_407_124)" stroke-width="1.12112"/>
            <path d="M41.5274 47.4105L56.5015 38.7652L71.4756 47.4105V64.7011L56.5015 73.3464L41.5274 64.7011V47.4105Z" stroke="url(#paint4_linear_407_124)" stroke-width="1.12112"/>
            <path d="M56.5006 42.6025L68.1516 49.3292V62.7827L56.5006 69.5094L44.8496 62.7827V49.3292L56.5006 42.6025Z" fill="url(#paint5_radial_407_124)"/>
            </g>
            <defs>
            <linearGradient id="paint0_linear_407_124" x1="44.7302" y1="20.1802" x2="71.6371" y2="91.9317" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint1_linear_407_124" x1="46.2008" y1="24.6645" x2="69.7443" y2="87.4472" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint2_linear_407_124" x1="47.6724" y1="29.1489" x2="67.8525" y2="82.9626" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint3_linear_407_124" x1="49.145" y1="33.6335" x2="65.9617" y2="78.4783" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="paint4_linear_407_124" x1="50.6156" y1="38.1179" x2="64.069" y2="73.9937" gradientUnits="userSpaceOnUse">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <radialGradient id="paint5_radial_407_124" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.5006 56.056) rotate(90) scale(13.4534 13.4534)">
            <stop stop-color="white" stop-opacity="0.9"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </radialGradient>
            </defs>
        </svg>
    </div>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="113" height="113" viewBox="0 0 113 113" fill="none">
            <rect width="112.112" height="112.112" transform="translate(0.556641)" fill="#181818"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M56.6119 26.907L83.5187 75.5129H77.1123L83.5187 87.0857H77.1123L83.5187 98.6586H29.7051L36.1115 87.0857H29.7051L36.1115 75.5129H29.7051L56.6119 26.907ZM37.3929 75.5129L31.6071 85.9646H36.7321L42.5179 75.5129H37.3929ZM43.1385 74.3918H38.0135L56.6119 40.7947L75.2103 74.3918H70.0853L56.6119 50.0527L43.1385 74.3918ZM43.7993 75.5129L38.0135 85.9646H75.2103L69.4245 75.5129H43.7993ZM68.8039 74.3918H44.4199L56.6119 52.3675L68.8039 74.3918ZM70.706 75.5129L76.4917 85.9646H81.6167L75.8309 75.5129H70.706ZM76.4917 74.3918L56.6119 38.4798L36.7321 74.3918H31.6071L56.6119 29.2218L81.6167 74.3918H76.4917ZM31.6071 97.5374L37.3929 87.0857H75.8309L81.6167 97.5374H31.6071Z" fill="url(#paint0_linear_407_121)"/>
            <path d="M56.6115 13.4534L57.5947 17.8063L61.368 15.4236L58.9853 19.1968L63.3382 20.1801L58.9853 21.1633L61.368 24.9366L57.5947 22.5539L56.6115 26.9068L55.6282 22.5539L51.855 24.9366L54.2377 21.1633L49.8848 20.1801L54.2377 19.1968L51.855 15.4236L55.6282 17.8063L56.6115 13.4534Z" fill="url(#paint1_radial_407_121)"/>
            <defs>
            <linearGradient id="paint0_linear_407_121" x1="56.6119" y1="26.907" x2="56.3117" y2="117.754" gradientUnits="userSpaceOnUse">
            <stop stop-color="white" stop-opacity="0.9"/>
            <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
            <radialGradient id="paint1_radial_407_121" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(56.6115 20.1801) rotate(90) scale(6.72671)">
            <stop stop-color="white"/>
            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0"/>
            </radialGradient>
            </defs>
        </svg>
    </div>
  </div>

  {{-- Mengapa Memilih Kami --}}
  <div class="md:mt-[150px] mr-[3.75rem] mb-[50px] md:mb-[100px] flex justify-center">
    <div class="">
        <div class="">
            <h1 class="text-white text-[32px] font-normal font-Poppins items-center text-center">Mengapa Memilih Kami?</h1>
        </div>
      <div class="flex my-[24px] flex-col mt-[48px]">
        <div class="text-white w-full md:w-[894px] md:mr-[1.75rem] p-[2.5rem] border-2 border-[#2C302D] rounded bg-[#080808] inline-flex items-center">
            <div class="mr-[40px]">
                <svg class="bg-[#202020] rounded-2xl"  xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                    <path d="M23.2502 14.0842H50.7493C51.9648 14.0842 53.1306 14.5671 53.9901 15.4266C54.8496 16.2861 55.3325 17.4519 55.3325 18.6674V59.9161H18.667V18.6674C18.667 17.4519 19.1499 16.2861 20.0094 15.4266C20.8689 14.5671 22.0346 14.0842 23.2502 14.0842ZM23.2502 55.3329H32.4165V46.1665H41.5829V55.3329H50.7493V18.6674H23.2502V55.3329ZM39.2913 23.2506H46.1661V30.1254H39.2913V23.2506ZM27.8334 34.7086H34.7081V41.5833H27.8334V34.7086ZM39.2913 34.7086H46.1661V41.5833H39.2913V34.7086ZM27.8334 23.2506H34.7081V30.1254H27.8334V23.2506Z" fill="#A6A6A6"/>
                </svg>
            </div>
            <div>
                <h2 class="text-[20px] mb-[8px] font-Poppins">Perusahaan PT</h2>
                <h3 class="text-[16px] text-[##E9E9EB] font-Poppins">PT. ANUGRAH SAHABAT JAYA merupakan perusahaan konstruksi bidang Pelaksanaan dengan bentuk PT</h3>
            </div>
        </div>

        <div class="text-white w-full md:w-[894px] md:mr-[1.75rem] p-[2.5rem] border-2 border-[#2C302D] rounded bg-[#080808] inline-flex items-center my-[28px]">
            <div class="mr-[40px]">
                <svg class="bg-[#202020] rounded-2xl"  xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                    <path d="M23.2502 14.0842H50.7493C51.9648 14.0842 53.1306 14.5671 53.9901 15.4266C54.8496 16.2861 55.3325 17.4519 55.3325 18.6674V59.9161H18.667V18.6674C18.667 17.4519 19.1499 16.2861 20.0094 15.4266C20.8689 14.5671 22.0346 14.0842 23.2502 14.0842ZM23.2502 55.3329H32.4165V46.1665H41.5829V55.3329H50.7493V18.6674H23.2502V55.3329ZM39.2913 23.2506H46.1661V30.1254H39.2913V23.2506ZM27.8334 34.7086H34.7081V41.5833H27.8334V34.7086ZM39.2913 34.7086H46.1661V41.5833H39.2913V34.7086ZM27.8334 23.2506H34.7081V30.1254H27.8334V23.2506Z" fill="#A6A6A6"/>
                </svg>
            </div>
            <div>
                <h2 class="text-[20px] mb-[8px] font-Poppins">Kualifikasi K1</h2>
                <h3 class="text-[16px] text-[##E9E9EB] font-Poppins">Mefruadan usaha jasa pelaksana konstruksi atau KONTRAKTOR yang mampu melaksanakan pekerjaan dengan resiko kecil, berteknologi sederhana dan biaya yang kecil.</h3>
            </div>
        </div>
        <div class="text-white w-full md:w-[894px] md:mr-[1.75rem] p-[2.5rem] border-2 border-[#2C302D] rounded bg-[#080808] inline-flex items-center">
            <div class="mr-[40px]">
                <svg class="bg-[#202020] rounded-2xl"  xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                    <path d="M23.2502 14.0842H50.7493C51.9648 14.0842 53.1306 14.5671 53.9901 15.4266C54.8496 16.2861 55.3325 17.4519 55.3325 18.6674V59.9161H18.667V18.6674C18.667 17.4519 19.1499 16.2861 20.0094 15.4266C20.8689 14.5671 22.0346 14.0842 23.2502 14.0842ZM23.2502 55.3329H32.4165V46.1665H41.5829V55.3329H50.7493V18.6674H23.2502V55.3329ZM39.2913 23.2506H46.1661V30.1254H39.2913V23.2506ZM27.8334 34.7086H34.7081V41.5833H27.8334V34.7086ZM39.2913 34.7086H46.1661V41.5833H39.2913V34.7086ZM27.8334 23.2506H34.7081V30.1254H27.8334V23.2506Z" fill="#A6A6A6"/>
                </svg>
            </div>
            <div>
                <h2 class="text-[20px] mb-[8px] font-Poppins">Portofolio Proyek</h2>
                <h3 class="text-[16px] text-[##E9E9EB] font-Poppins">PT. ANUGRAH SAHABAT JAYA dapat mengerjakan proyek-proyek dengan sub klasifikasi:</h3>
                <div class="flex justify-center"> 
                    <ul class="list-disc ml-[18px]">
                      <li class="text-[##E9E9EB] font-Poppins text-[16px] md:text-[16px] font-normal  text-left" >BG007 Jasa Pelaksana Untuk Konstruksi Bangunan Pendidikan</li>
                      <li class="text-[##E9E9EB] font-Poppins text-[16px] md:text-[16px] font-normal  text-left" >BG009 Jasa Pelaksana Untuk Konstruksi Bangunan Gedung Lainnya</li>
                      <li class="text-[##E9E9EB] font-Poppins text-[16px] md:text-[16px] font-normal  text-left" >SI001 Jasa Pelaksana Untuk Konstruksi Saluran Air, Pelabuhan, Dam, dan Prasarana Sumber Daya Air Lainnya</li>
                      <li class="text-[##E9E9EB] font-Poppins text-[16px] md:text-[16px] font-normal  text-left" >SI003 Jasa Pelaksana Untuk Konstruksi Jalan Raya (kecuali jalan layang), jalan, rel kereta api, dan landas pacu bandara</li>
                    </ul>
                  </div>
            </div>
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