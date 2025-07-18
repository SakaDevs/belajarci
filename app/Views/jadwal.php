<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Pelatihan - PPKD Jakut</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?= $this->include('layout/navbar') ?>

    <section id="jadwal-pelatihan-section" class="py-12 bg-white  mt-15">
        <div class="container mx-auto px-4 max-w-screen-xl"> 
            <h2 class="text-3xl font-light text-center text-gray-800 mb-8">Daftar Jadwal Pelatihan PPKD Jakut</h2>
            
            <div class="overflow-x-auto shadow-lg rounded-lg"> 
                <table class="min-w-full divide-y divide-gray-200" id="jadwal-table">
                    <thead class="bg-blue-400 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider rounded-tl-lg">Program Pelatihan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Angkatan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tutup Pendaftaran</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Mulai Seleksi</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Akhir Seleksi</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Mulai Pelatihan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Akhir Pelatihan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Awal Uji Kompetensi</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider rounded-tr-lg">Akhir Uji Kompetensi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">CYBER SECURITY</td>
                            <td class="px-6 py-4 whitespace-nowrap">II</td>
                            <td class="px-6 py-4 whitespace-nowrap">12 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">16 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">17 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">08 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">11 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">12 Aug 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TIK - JUNIOR WEB DEVELOPER</td>
                            <td class="px-6 py-4 whitespace-nowrap">I</td>
                            <td class="px-6 py-4 whitespace-nowrap">23 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">03 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">04 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jun 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">08 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">11 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">12 Aug 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">OPERATOR FORKLIFT</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">02 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">03 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">04 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">10 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jul 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">OPERATOR EXCAVATOR</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">02 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">07 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">08 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">10 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jul 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">OPERATOR FORKLIFT</td>
                            <td class="px-6 py-4 whitespace-nowrap">IV</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">31 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">01 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">07 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">26 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Aug 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">OPERATOR EXCAVATOR</td>
                            <td class="px-6 py-4 whitespace-nowrap">IV</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Jul 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">04 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">05 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">07 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">26 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Aug 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TIK - JUNIOR ANDROID DEVELOPER</td>
                            <td class="px-6 py-4 whitespace-nowrap">I</td>
                            <td class="px-6 py-4 whitespace-nowrap">12 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">13 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">14 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Sep 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">30 Sep 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">01 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">SERVICE SEPEDA MOTOR INJEKSI / TEKNIK SEPEDA MOTOR</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">TEKNISI KOMPUTER DAN JARINGAN</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">DESAINER GRAFIS MADYA</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">PEMASANGAN INSTALASI OTOMASI LISTRIK INDUSTRI / TEKNIK LISTRIK</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">BAHASA INGGRIS UNTUK TENAGA ADMINISTRASI PROFESIONAL</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">DATA MANAGEMENT STAFF / OPERATOR KOMPUTER</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">PERAWATAN KECANTIKAN / TATA RIAS</td>
                            <td class="px-6 py-4 whitespace-nowrap">III</td>
                            <td class="px-6 py-4 whitespace-nowrap">15 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">18 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">21 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">25 Aug 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">27 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">28 Oct 2025</td>
                            <td class="px-6 py-4 whitespace-nowrap">29 Oct 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                offset: 120,
                delay: 0,
                duration: 400,
                easing: 'ease',
                once: false,
                mirror: false,
                anchorPlacement: 'top-bottom',
            });
        });
    </script>
</body>
</html>