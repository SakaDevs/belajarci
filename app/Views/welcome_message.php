<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PPKD Jakut</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        /* Hapus @import Bootstrap Icons di sini karena sudah ada di <link> di atas */
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        /* Your existing list item hover effect */
        li {
            --b: 0.1em;
            --c: #81beffff;
            color: #0000;
            padding-block: var(--b);
            background:
            linear-gradient(var(--c) 50%,#000 0) 0% calc(100% - var(--_p,0%))/100% 200%,
            linear-gradient(var(--c) 0 0) 0% var(--_p,0%)/var(--_p,0%) var(--b) no-repeat;
            -webkit-background-clip: text,padding-box;
            background-clip: text,padding-box;
            transition: .3s var(--_s,0s) linear,background-size .3s calc(.3s - var(--_s,0s));
        }

        li:hover {
            --_p: 100%;
            --_s: .3s;
        }

        /* Basic styling for the dropdown menu */
        .dropdown-menu {
            display: none; /* Hidden by default */
            position: absolute;
            top: 100%; /* Position below the parent */
            left: 0;
            background-color: white; /* Or any background you prefer */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 1000; /* Ensure it's above other content */
            border-radius: 0.375rem; /* rounded-md */
            overflow: hidden; /* For rounded corners on children */
        }

        .dropdown-menu.active {
            display: block; /* Show when active */
        }

        .dropdown-menu li {
            padding: 0; /* Reset padding for dropdown list items */
            background: none; /* Remove background effect for dropdown items */
            color: inherit; /* Inherit text color */
            transition: none; /* Remove transition for dropdown items */
        }

        .dropdown-menu li a {
            padding: 0.75rem 1rem; /* Padding for dropdown links */
            display: block;
            white-space: nowrap; /* Prevent wrapping */
            color: #333; /* Darker text for dropdown links */
            transition: background-color 0.2s ease;
        }

        .dropdown-menu li a:hover {
            background-color: #f0f0f0; /* Light gray on hover */
            color: #000; /* Darker text on hover */
        }

        @-webkit-keyframes bounce {
            0% { transform: translateY(-5px)  }
            50% { transform: translateY(10px) }
            100% { transform: translateY(-5px) }
        }

        @keyframes bounce {
            0% { transform: translateY(-5px)  }
            50% { transform: translateY(10px) }
            100% { transform: translateY(-5px) }
        }

        #images {
            -webkit-animation: bounce 7s infinite ease-in-out;
            -o-animation: bounce 7s infinite ease-in-out;
            -ms-animation: bounce 7s infinite ease-in-out;
            -moz-animation: bounce 7s infinite ease-in-out;
            animation: bounce 7s infinite ease-in-out;
        }

        #navbar{
            box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);
            background-color: white;
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <!-- NAVBAR -->
    <header class="fixed top-0 left-0 w-full z-50 fixed-header" id="navbar">
        <div class="flex justify-between m-6 px-1 md:px-6 items-center">
            
            <a href="#" class="flex gap-3 items-center">
                <img src="https://ppkdju.com/static/img/logo.png" alt="" class="h-10" >
                <h1 class="text-3xl font-extralight">PPKD Jakut</h1>
            </a>
            <nav>
                <ul class="flex gap-8 font-light">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">Tentang</a></li>
                    <li><a href="/#services">Layanan</a></li>
                    <li><a href="/lowongan/">Lowongan</a></li>
                    <li><a href="/jadwal/">Jadwal</a></li>
                    
                    <li class="relative">
                        <a href="#" class="dropdown-toggle" id="pelatihanDropdownToggle">
                            <span>Pelatihan</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/regular">Regular</a></li>
                            <li><a href="/mtu">Mobile Training Unit</a></li>
                        </ul>
                    </li>
                    
                    <li class="relative">
                        <a href="#" class="dropdown-toggle" id="pendaftaranDropdownToggle">
                            <span>Pendaftaran</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/pendaftaran">Regular</a></li>
                            <li><a href="/pendaftaran-mtu">Mobile Training Unit</a></li>
                            <li><a href="#">Kolaborasi Pelatihan</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
            <a class="bg-blue-400 py-2 px-6 rounded-md text-white hover:bg-[#81beffff] transition" href="/#services">Mulai</a>
        </div>
    </header>
    <!-- END NAVBAR -->

    <!-- WELCOME -->
    <div class="hero flex justify-center items-center h-screen flex-col">
        <img src="https://ppkdju.com/static/img/hero.jpg" alt="Hero Image" id="images" class="h-100">
        <h1 class="mt-20 text-4xl font-light">Selamat datang <span class="text-cyan-300 font-light">Jaknaker</span></h1>
        <h1 class="mt-5 text-xl font-light">Tingkatkan kompetensi mu untuk raih karir yang kamu inginkan, <strong>GRATIS!</strong></h1>
        <div class="mt-5 flex flex-row items-center gap-2">
            <a class="bg-blue-400 py-2 px-6 rounded-md text-white hover:bg-[#81beffff] transition" href="/#services">Mulai</a>
            <div class="playbutton">
                <a href="#" class="py-2 px-6 rounded-md text-blue-400 hover:text-[#81beffff] transition flex items-center gap-2">
                    <i class="bi bi-play-circle text-2xl"></i>
                    <span>Tonton Video</span>
                </a>
            </div>
        </div>
    </div>
    <!-- END WELCOME -->


    <div class="bg-gray-700 grid grid-cols-1 p-10 gap-8 sm:grid-cols-3 text-white justify-items-center transition delay-150 duration-300 ease-in-out">
    <!-- ITEM 1 -->
    <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-duration="1000">
        <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
            <i class="bi bi-person-workspace text-5xl group-hover:scale-110 transition-transform duration-300"></i>
        </div>
        <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Pelatihan Berbasis Kompetensi</a>
        <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Pelatihan kerja yang menitikberatkan pada penguasaan kemampuan kerja. Kemampuan kerja tersebut mencakup pengetahuan, keterampilan, dan sikap sesuai standar yang ditetapkan di tempat kerja.</p>
    </div>

    <!-- ITEM 2 -->
    <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-duration="1500">
        <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
            <i class="bi bi-award text-5xl group-hover:scale-110 transition-transform duration-300"></i>
        </div>
        <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Sertifikasi</a>
        <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Sertifikasi Badan Nasional Standardisasi Profesi (BNSP) melalui Uji Kompetensi yang dilaksanakan oleh Lembaga Sertifikasi Profesi di PPKD Jakarta Utara.</p>
    </div>

    <!-- ITEM 3 -->
    <div class="cursor-pointer max-w-sm p-6 rounded-lg flex flex-col items-center text-center transition-transform duration-300 ease-in-out hover:-translate-y-2 hover:shadow-2xl hover:bg-gray-600 group" data-aos="fade-up" data-aos-duration="2000">
        <div class="mb-4 text-blue-400 transition-colors duration-300 group-hover:text-blue-300">
            <i class="bi bi-briefcase text-5xl group-hover:scale-110 transition-transform duration-300"></i>
        </div>
        <a href="#" class="block text-xl font-semibold mb-2 text-white transition-colors duration-300 group-hover:text-[#81beff]">Pemasaran Kerja</a>
        <p class="text-sm leading-relaxed text-gray-300 transition-colors duration-300 group-hover:text-white">Proses pelaksanaan penempatan tenaga kerja dengan bekerja sama dengan berbagai industri untuk penyampaian informasi lowongan kerja.</p>
    </div>
</div>


    <!-- ABOUT SECTION -->
<div class="about pt-20 pb-10"> <h1 class="text-4xl text-center font-light text-gray-800 mb-10" data-aos="fade-up" data-aos-duration="2000">Tentang PPKD JAKUT</h1>
</div>

<div class="flex flex-col lg:flex-row justify-center items-start mx-auto px-4 md:px-8 lg:px-16 max-w-7xl gap-8 mb-20">
    <div class="w-full lg:w-1/2 flex justify-center lg:justify-end" data-aos="fade-right" data-aos-duration="1000">
        <img src="https://ppkdju.com/static/img/ppkd-potrait.jpg" alt="Gedung PPKD Jakut" class="w-full h-auto max-w-lg rounded-lg shadow-lg">
    </div>

    <div class="w-full lg:w-1/2" data-aos="fade-left" data-aos-duration="1000">
        <h1 class="text-3xl font-light text-gray-800 mb-4 max-w-full">
            Pusat Pelatihan Kerja Daerah Jakarta Utara, Dinas Tenaga Kerja Transmigrasi dan Energi Provinsi DKI Jakarta
        </h1>

        <div x-data="{ activeTab: 'profil' }" class="mt-4">
            <div class="flex border-b border-gray-300 mb-6">
                <button
                    @click="activeTab = 'profil'"
                    :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'profil', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'profil' }"
                    class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none"
                >
                    Profil
                </button>
                <button
                    @click="activeTab = 'visi'"
                    :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'visi', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'visi' }"
                    class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none"
                >
                    Visi
                </button>
                <button
                    @click="activeTab = 'misi'"
                    :class="{ 'border-blue-500 text-blue-600 font-medium': activeTab === 'misi', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'misi' }"
                    class="py-2 px-4 border-b-2 transition-colors duration-200 focus:outline-none"
                >
                    Misi
                </button>
            </div>

            <div class="tab-content text-gray-700 text-base leading-relaxed">
                <div x-show="activeTab === 'profil'" x-transition:enter.duration.500ms>
                    <p class="mb-4">Pusat Pelatihan Kerja Daerah merupakan Unit Pelaksanan Teknis (UPT) Dinas Tenaga Kerja dan Transmigrasi Provinsi DKI Jakarta.</p>

                    <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800">
                        <i class="bi bi-check-lg text-blue-500 mr-2"></i> Tugas dan Fungsi
                    </h3>
                    <p class="mb-4">Berdasarkan Peraturan Gubernur Provinsi DKI Jakarta 57 Tahun 2022 tentang Organisasi dan Tata Kerja Pusat Pelatihan Kerja Daerah, PPKD Jakarta Utara mempunyai tugas utama melaksanakan pelatihan di berbagai kejuruan.</p>

                    <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800">
                        <i class="bi bi-check-lg text-blue-500 mr-2"></i> Sejarah
                    </h3>
                    <p class="mb-4">Pusat Pelatihan Kerja Daerah Jakarta Utara berdiri pada tahun 1989 dengan nama Balai Latihan Kerja Daerah (BLKD) Jakarta Utara, kemudian berganti nama menjadi Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Utara.</p>

                    <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800">
                        <i class="bi bi-check-lg text-blue-500 mr-2"></i> Lokasi
                    </h3>
                    <p class="mb-4">PPKD Jakarta Utara terletak di Jl. Gereja Tugu Semper No. 20 Kel. Semper Barat, Kec. Cilincing, Jakarta Utara.</p>
                </div>

                <div x-show="activeTab === 'visi'" x-transition:enter.duration.500ms>
                    <p class="mb-4">Visi PPKD Jakarta Utara</p>
                    <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800">
                        <i class="bi bi-check-lg text-blue-500 mr-2"></i> Visi
                    </h3>
                    <p class="mb-4">Menciptakan peserta pelatihan berkarakter kebangsaan dan siap berkompetisi di dunia kerja.</p>
                </div>

                <div x-show="activeTab === 'misi'" x-transition:enter.duration.500ms>
                    <p class="mb-4">Misi PPKD Jakarta Utara</p>
                    <h3 class="flex items-center text-lg font-semibold mb-2 text-gray-800">
                        <i class="bi bi-check-lg text-blue-500 mr-2"></i> Misi
                    </h3>
                    <p class="mb-4">Memberikan pelayanan pelatihan dan keterampilan bagi masyarakat.
                        <br>Meningkatkan kompetensi dengan melaksanakan Uji Kompetensi.
                        <br>Memasarkan calon tenaga kerja di sektor industri.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    
        AOS.init({
            offset: 120,
            delay: 0,
            duration: 400,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });

        document.addEventListener('DOMContentLoaded', function() {
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(event) {
                    event.preventDefault();
                    const parentLi = this.closest('li.relative');
                    const dropdownMenu = parentLi.querySelector('.dropdown-menu');

                    dropdownMenu.classList.toggle('active');

                    dropdownToggles.forEach(otherToggle => {
                        const otherParentLi = otherToggle.closest('li.relative');
                        const otherDropdownMenu = otherParentLi.querySelector('.dropdown-menu');
                        if (otherDropdownMenu !== dropdownMenu && otherDropdownMenu.classList.contains('active')) {
                            otherDropdownMenu.classList.remove('active');
                        }
                    });
                });
            });

            document.addEventListener('click', function(event) {
                dropdownToggles.forEach(toggle => {
                    const parentLi = toggle.closest('li.relative');
                    if (!parentLi.contains(event.target)) {
                        const dropdownMenu = parentLi.querySelector('.dropdown-menu');
                        if (dropdownMenu.classList.contains('active')) {
                            dropdownMenu.classList.remove('active');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>