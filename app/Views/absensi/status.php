<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Status Kehadiran</h1>
    <table border = "1" colspacing = "0" cellpadding = "5">
        <tr>
            <th>No.</th>
            <th>Status</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_status as $row) :?>
            <tr>
                <td><?= $i++; ?> </td>
                <td><?php echo $row['status']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>