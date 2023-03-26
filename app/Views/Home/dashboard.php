<?= $this->extend('Home/Template/view_layout') ?>
<?= $this->section('main-dashboard') ?>

<!-- bungkus utama -->
<div class="container-fluid">
    <div class="container row d-flex align-self-center">
        <!-- Headernya -->
        <img src="<?= base_url('/') ?>img/cr1.svg" alt="thumbnail" width="250px">
        <div class="align-self-center mx-2 my-4">
            <h1 class="h3 mb-4 text-end text-gray-800">Halo,Selamat Datang Kembali Surya Alif</h1>
        </div>
    </div>

    <div class="container row d-flex-column">
        <div class="container mt-4 px-3 py-3 shadow">
            <!-- banner - banner digital -->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url() ?>img/cr1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>img/cr2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url() ?>img/cr3.jpg" class="d-block w-100">
                    </div>
                </div>
            </div>
            <!-- informasi website -->
            <div class="card mt-5 px-3 py-3">
                <p class="ml-2">
                    <a class="btn btn-primary" data-toggle="collapse" href="#info1" aria-expanded="false" aria-controls="info1">
                        Informasi Tentang Website
                    </a>
                </p>
                <div class="collapse" id="info1">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit quaerat voluptatum laborum eligendi dolor, ratione distinctio libero, iusto et iste mollitia nobis repellat eius est, quidem quibusdam odit commodi dicta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint reprehenderit assumenda dicta totam adipisci nisi exercitationem perspiciatis earum placeat quisquam, voluptate quis eveniet, modi praesentium sequi cumque corporis illo quaerat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat quis sequi eaque minus. Tempore non rem, fugiat inventore soluta ut minus saepe architecto esse iure voluptates dolores! Fugiat, perferendis beatae?
                </div>
            </div>
        </div>
        <!-- panel informasi -->
        <div class="container mt-3 px-2 py-5 shadow">
            <h4 class="text-center">Total Sasaran Seluruh Pelayanan Puskesmas Seroja</h4>
            <h5 class="text-center">Tahun 2023</h5>
            <div class="row mt-3">
                <!-- Pelayanan A Card-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div id="pnl-card" class="card shadow h-100 py-2">
                        <div class="card-body text-center">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-uppercase text-wrap text-end mb-1">
                                        Pelayanan
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-a fa-2x"></i>
                                    </div>
                                    <div class="h5 mb-0 mt-2 font-weight-bold"><?= $Sm_pelA; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pelayanan B Card-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div id="pnl-card" class="card shadow h-100 py-2">
                        <div class="card-body text-center">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-uppercase text-wrap text-end mb-1">
                                        Pelayanan
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-b fa-2x"></i>
                                    </div>
                                    <div class="h5 mb-0 mt-2 font-weight-bold"><?= $Sm_pelB; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pelayanan C Card-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div id="pnl-card" class="card shadow h-100 py-2">
                        <div class="card-body text-center">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-uppercase text-wrap text-end mb-1">
                                        Pelayanan
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-c fa-2x"></i>
                                    </div>
                                    <div class="h5 mb-0 mt-2 font-weight-bold"><?= $Sm_pelC; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pelayanan D Card-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div id="pnl-card" class="card shadow h-100 py-2">
                        <div class="card-body text-center">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-uppercase text-wrap text-end mb-1">
                                        Pelayanan
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-d fa-2x"></i>
                                    </div>
                                    <div class="h5 mb-0 mt-2 font-weight-bold"><?= $Sm_pelD; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- panel tabel secara keseluruhan -->
        <div class="container-fluid mt-3 px-3 py-2 shadow">
            <div class="card px-4 py-4">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th>No.</th>
                            <th>Kategori Pelayanan</th>
                            <th>Upaya Kesehatan</th>
                            <th>Capaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($all_datas as $row) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['pelayanan']; ?></td>
                                <td><?= $row['upaya']; ?></td>
                                <td><?= $row['pencapaian']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

    <?= $this->endSection() ?>