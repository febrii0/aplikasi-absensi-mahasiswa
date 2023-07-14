<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Halaman Login</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://polinela.ac.id/wp-content/uploads/2019/02/Logo-Polinela-New-300x287.png' rel='shortcut icon'>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-signin {
            width: 100%;
            max-width: 310px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>

<body class="text-center">
    <main class="form-signin">
        <form method="POST" action="<?= base_url('login/login_action'); ?>">
            <p>
                <?php if (!empty(session()->getFlashdata('error'))) { ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php } ?>
            </p>
            <img class="mb-4" src="https://polinela.ac.id/wp-content/uploads/2019/02/Logo-Polinela-New-300x287.png"
                alt="" width="142" height="137">
            <h1 class="h3 mb-3 fw-normal">Please Login !</h1>
            <div class="form-floating">
                <input type="email" required name="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Password">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" required class="form-control" name="password" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <!-- <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label> -->
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
            <p class="mt-5 mb-3 text-muted">&copy; Kelompok 2 - Absensi Mahasiswa</p>
        </form>
    </main>

</body>

</html>