<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->include('layout/navbar') ?>
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-50 items-center text-center">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" /></a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?=$detail['judul_lowongan'] ?></h5></a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?=$detail['detail_lengkap'] ?></p>
        
            </div>
        </div>
</body>
</html>