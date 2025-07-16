<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    
    <h1>contact</h1>
    <table>
        <?php foreach($contacts as $peserta): ?>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $peserta['Nama'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $peserta['Email'] ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $peserta['Umur'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>