                            <div class="col-md-6">
                                <label for="duration" class="form-label">Nama</label>
                                <select name="id_mhs" id="nama"
                                    class="form-control <?= isset($errors['id_mhs']) ? 'is-invalid ' : ''; ?>"
                                    name="id_mhs" value="<?= old('id_mhs'); ?>">
                                    <option value="">Pilih..</option>
                                    <?php foreach ($mahasiswa as $mhs): ?>
                                        <option value="<?= $mhs["nama"] ?>"><?= $mhs["nama"] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (isset($errors['id_mhs'])): ?>
                                    <div class="invalid-feedback">
                                        <?= $errors['id_mhs'] ?>
                                    </div>
                                <?php endif; ?>
                            </div>