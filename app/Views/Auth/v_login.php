<?= $this->extend('Auth/v_template') ?>
<?= $this->section('main-authlogin') ?>
<!-- section baru -->
<section class="" style="
background-color: #85FFBD;
background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block" id="bg-sidelogin">
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="POST" action="auth/loginprocess">
                                    <?= csrf_field() ?>
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-regular fa-hospital fa-2x me-3" style="color: #00b32e;"></i>
                                        <span class="h3 fw-bold mb-0 ml-2">PuskesWeb Seroja</span>
                                    </div>
                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Silahkan Login</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="email">Alamat Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                                    </div>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum memiliki akun? <a href="<?= base_url('') ?>/register" style="color: #393f81;">Registrasi Disini</a></p>
                                    <a href="#!" class="small text-muted">Ketentuan Pengguna.</a>
                                    <a href="#!" class="small text-muted">Kebijakan Privasi</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>