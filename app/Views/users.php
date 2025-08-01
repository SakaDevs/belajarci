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
    <?php if(session()->getFlashdata('error')): ?>
        <script>
            alert("<?= session()->getFlashdata('error') ?>");
        </script>
    <?php endif; ?>
    <section id="jadwal-pelatihan-section" class="py-12 bg-white  mt-15">
        <div class="container mx-auto px-4 max-w-screen-xl" data-aos="fade-up" data-aos-duration="1000"> 
            <h2 class="text-3xl font-light text-center text-gray-800 mb-8">Users Details</h2>
            <form class="max-w-md mx-auto mb-10" method="get" action="<?= base_url('users/search') ?>">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search... " required name="keyword"/>
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            
            <div class="overflow-x-auto shadow-lg rounded-lg"> 
                <table class="min-w-full divide-y divide-gray-200" id="jadwal-table">
                    <thead class="bg-blue-400 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider rounded-tl-lg">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Nama</th>  
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
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->email ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $user->description ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="<?= base_url('admin/change/'. $user->userid) ?>" method="post">
                                        <?= csrf_field() ?>
                                        <select name="role" class="border rounded px-2 py-1">
                                            <option value="users" <?= $user->name == 'users' ? 'selected' : '' ?>>User</option>
                                            <option value="admin" <?= $user->name == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        </select>
                                        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                            Simpan
                                        </button>
                                    </form>
                                </td>
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