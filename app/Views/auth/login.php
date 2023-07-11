<?= $this->extend('auth/template') ?>
<?= $this->section('main') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <h2 class="card-header">
                    <img src="assets/img/Logo-Polinela-New-300x287.png" alt="">
                    <?= lang('Auth.loginTitle') ?>
                </h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= site_url('login/authenticate') ?>" method="post"> <!-- Mengubah url_to menjadi site_url -->
                        <?= csrf_field() ?>

                        <?php if ($config->validFields === ['NPM']): ?>
                            <div class="form-group">
                                <label for="login">
                                    <?= lang('NPM') ?>
                                </label>
                                <input type="NPM"
                                    class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?= lang('NPM') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="form-group">
                                <label for="login">
                                    <?= lang('NPM') ?>
                                </label>
                                <input type="text"
                                    class="form-control <?php if (session('errors.login')): ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?= lang('NPM') ?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <label for="password">
                                <?= lang('Auth.password') ?>
                            </label>
                            <input type="password" name="password"
                                class="form-control  <?php if (session('errors.password')): ?>is-invalid<?php endif ?>"
                                placeholder="<?= lang('Auth.password') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <?php if ($config->allowRemembering): ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')): ?> checked <?php endif ?>>
                                    <?= lang('Auth.rememberMe') ?>
                                </label>
                            </div>
                        <?php endif; ?>

                        <br>

                        <button type="submit" class="btn btn-primary btn-block">
                            <?= lang('Auth.loginAction') ?>
                        </button>
                    </form>

                    <hr>

                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
