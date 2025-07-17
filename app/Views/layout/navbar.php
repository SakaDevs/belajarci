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
       <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
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