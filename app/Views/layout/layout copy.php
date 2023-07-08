<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <!-- import CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert.min.js.js"></script>
</head>

<body>
    <!-- import JS -->
    <script src="/assets/js/bootstrap.min.js"></script>

    

    <?= $this->renderSection('content') ?>


    <div class="container">
        <!-- <footer class="jumbotron jumbotron-fluid mt-5 mb-0"> -->
        <footer class="row row-cols-5 py-5 my-5 border-top">
            <div class="container text-center">Copyright &copy
                <?= Date('Y') ?> Kelompok 2 - Absensi Mahasiswa
            </div>
        </footer>
    </div>

</body>

</html>