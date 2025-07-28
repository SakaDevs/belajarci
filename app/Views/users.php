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
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider rounded-tl-lg">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Desc</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $id = 1 ?>
                            <?php foreach($users as $user): ?> 
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $id++ ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->username ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->name ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->email ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->description ?></td>
                            </tr>      
                        <?php endforeach; ?>  
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