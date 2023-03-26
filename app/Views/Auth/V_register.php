<?= $this->extend('Auth/v_template') ?>
<?= $this->section('main-authregister') ?>
<section class="px-3 py-3" style="
background-color: #85FFBD;
background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
">
    <!-- <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black">
                <div class="d-flex align-items-center px-5 ms-xl-4 mt-xl-3">
                    <form method="POST" style="width: 23rem;" action="<?= base_url('') ?>/register/save">
                        <?= csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert-warning alert-dismissible fade show" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Formulir Registrasi User</h3>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nama Lengkap</label>
                            <input type="text" placeholder="isi nama lengkap anda" autofocus name="nama" id="nama" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Username</label>
                            <input type="username" placeholder="isi username anda" autofocus name="username" id="username" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Alamat Email</label>
                            <input type="email" placeholder="isi email anda" autofocus id="email" name="email" class="form-control form-control-lg" required />
                        </div>

                        <label class="form-label" for="password">Password</label>
                        <div class="form-outline mb-4 d-flex">
                            <input name="password" type="password" value="" class="form-control form-control-lg col-10" id="password" placeholder="masukan password" required="true" aria-label="password aria-describedby=" basic-addon1" />
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" aria-placeholder="isi jenis kelamin" class="form-control form-control-lg" required>
                                <option value="" selected hidden disabled>pilih jenis kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Alamat Lengkap</label>
                            <input type="text" placeholder="isi alamat lengkap anda" autofocus name="alamat" id="alamat" class="form-control form-control-lg" required />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="jenis_kelamin">Divisi Pelayanan</label>
                            <select name="role" id="role" class="form-control form-control-lg" required>
                                <option value="" selected hidden disabled>pilih divisi anda</option>
                                <option value="pelayanan A">Pelayanan A</option>
                                <option value="pelayanan B">Pelayanan B</option>
                                <option value="pelayanan C">Pelayanan C</option>
                                <option value="pelayanan D">Pelayanan D</option>
                            </select>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Daftarkan Akun</button>
                        </div>
                        <p>Sudah Punya Akun? <a href="<?= base_url('') ?>/" class="link-info">Login Disini</a></p>
                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block align-self-center">
                <div class="mb-5">
                    <i class="fa-regular fa-hospital fa-2x me-3" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-2">Puskesweb Seroja</span>
                </div>
                <img src="<?= base_url(); ?>img/cr1.svg" class="w-100 v-100" style="border-radius:5%; object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>