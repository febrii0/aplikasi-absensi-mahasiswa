<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Form Login</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Login Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="card-body">
                    <form action="/absensi/isiabsen" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama_kelas" class="form-label">Kelas</label>
                                <select name="id_kelas" id="kelas"
                                    class="form-control <?= isset($errors['id_kelas']) ? 'is-invalid' : ''; ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($tambahabsen as $a): ?>
                                        <option value="<?= $a["id_kelas"] ?>" <?= old('id_kelas') == $a["id_kelas"] ? 'selected' : '' ?>>
                                            <?= $a["nama_kelas"] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_kelas'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_kelas'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="col-md-6">
                                <label for="genre" class="form-label">Status</label>
                                <select name="id_genre" id="genre"
                                    class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>"
                                    name="id_genre" value="<?= old('id_genre'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($v_genre as $g): ?>
                                        <option value="<?= $g["id"] ?>"><?= $g["nama_genre"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_genre'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_genre'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="duration" class="form-label">Nama</label>
                                <select name="id_genre" id="genre"
                                    class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>"
                                    name="id_genre" value="<?= old('id_genre'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($v_genre as $g): ?>
                                        <option value="<?= $g["id"] ?>"><?= $g["nama_genre"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_genre'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_genre'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="cover" class="form-label">Mata Kuliah</label>
                                <select name="id_genre" id="genre"
                                    class="form-control <?= isset($errors['id_genre']) ? 'is-invalid ' : ''; ?>"
                                    name="id_genre" value="<?= old('id_genre'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($v_genre as $g): ?>
                                        <option value="<?= $g["id"] ?>"><?= $g["nama_genre"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_genre'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_genre'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>