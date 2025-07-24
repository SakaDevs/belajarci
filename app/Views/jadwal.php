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
        <div class="w-3/4 px-4 mx-auto"> 
            <h2 class="text-3xl font-light text-center text-gray-800 mb-4">Daftar Jadwal Pelatihan PPKD Jakut</h2>
            <?php if(in_groups('admin')): ?>
            <div class="text-center my-6">
                <a href="<?= base_url('jadwal/tambah') ?>" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                    + Tambah Jadwal
                </a>
            </div>
            <?php endif; ?>
            <div class="shadow-lg rounded-lg overflow-hidden w-full">
                <table class="w-full divide-y divide-gray-200 text-sm" id="jadwal-table">
                    <thead class="bg-gray-100 text-gray-900">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Program Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Angkatan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Tutup Pendaftaran</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Mulai Seleksi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Seleksi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Mulai Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Pelatihan</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Awal Uji Kompetensi</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Akhir Uji Kompetensi</th>
                            <?php if(in_groups('admin')): ?>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach($model as $index => $jadwal): ?>
                        <tr class="<?= $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' ?>">
                            <td class="px-6 py-4"><?= $jadwal['nama_program'] ?></td>
                            <td class="px-6 py-4"><?= $jadwal['angkatan'] ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['tutup_pendaftaran'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['mulai_seleksi'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['akhir_seleksi'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['mulai_pelatihan'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['akhir_pelatihan'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['awal_kompetensi'])) ?></td>
                            <td class="px-6 py-4"><?= date('d M Y', strtotime($jadwal['akhir_kompetensi'])) ?></td>
                            <?php if(in_groups('admin')): ?>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <form action="/jadwal/delete/<?=$jadwal['id']?>" method="post" onsubmit="return confirm('Apakah kamu yakin ingin menghapus jadwal ini?');">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-sm">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="/jadwal/edit/<?=$jadwal['id']?>" class="bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded text-sm">
                                        Edit
                                    </a>
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
                                
    <?php include('layout/footer.php') ?>
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