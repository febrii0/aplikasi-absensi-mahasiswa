<?php $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Mahasiswa</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="class-header">
                    <div class="row">
                    </div>
                </div>

                <div class="card-body">
                    <form action="/kelas/store" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kelas" class="form-label">Nama Kelas</label>
                                <input type="text"
                                    class="form-control <?= isset($errors['kelas']) ? 'is-invalid ' : ''; ?>" id="kelas"
                                    name="kelas" value="<?= old('kelas'); ?>">
                                <?php if (isset($errors['kelas'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['kelas'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                            </div>
                            <div class="col-md-1 mt-4 m-1">
                                <a href="/kelas" class="btn btn-dark mt-4 m-4">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>