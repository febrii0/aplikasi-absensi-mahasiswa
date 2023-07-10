<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Dosen</h1>
    <table border = "1" colspacing = "0" cellpadding = "5">
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>Mata Kuliah</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_dosen as $row) :?>
            <tr>
                <td><?= $i++; ?> </td>
                <td><?php echo $row['nip']?></td>
                <td><?php echo $row['nama_dosen']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['matkul']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>