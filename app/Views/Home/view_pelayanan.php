<?= $this->extend('Home/Template/view_layout') ?>
<?= $this->section('main-pelayananA') ?>

<!-- bungkus utama -->
<div class="container-fluid">
    <div class="container row d-flex align-self-center">
        <!-- bungkus utama -->
        <div class="container-fluid">
            <div class="container row d-flex px-3 py-3 shadow">
                <div class="justify-content-center mt-3 my-3 px-2 py-2">
                    <h5 class="text-lg">Data Tabel <?= $pelayanan; ?></h5>
                </div>
                <!-- tabel data pelayanan A -->
                <table class="table table-striped table-inverse table-bordered table-responsive" style="font-size:14px;">
                    <thead class="thead-inverse">
                        <tr style="text-align: center;">
                            <th class="align-middle">No.</th>
                            <th class="align-middle">Kode Upaya</th>
                            <th class="align-middle">Upaya Kesehatan</th>
                            <th class="align-middle">Penanggung Jawab</th>
                            <th class="align-middle">Definisi Pekerjaan</th>
                            <th class="align-middle">Target</th>
                            <th class="align-middle">Pencapaian</th>
                            <th class="align-middle">Sasaran</th>
                            <th class="align-middle">Update Terakhir</th>
                            <th class="align-middle">Persentase Cakupan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- forech ini untuk ngelempar data tampungan array -->
                        <?php
                        $no = 1;
                        foreach ($data as $row) :
                        ?>
                            <tr>
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $row['kode_upaya']; ?></td>
                                <td><?= $row['upaya']; ?></td>
                                <td><?= $row['pj']; ?></td>
                                <td><?= $row['definisi']; ?></td>
                                <td><?= round($row['target_capai'], 0) . "%"; ?></td>
                                <td><?= $row['sasaran']; ?></td>
                                <td><?= $row['pencapaian']; ?></td>
                                <td><?= date('d-m-Y H-i-s', strtotime($row['updated_at'])); ?></td>
                                <?php if ($row['cakupan'] < $row['target_capai']) : ?>
                                    <td class="text-white bg-warning"><?= round($row['cakupan'], 0) . "%"; ?></td>
                                <?php elseif ($row['cakupan'] >= $row['target_capai']) : ?>
                                    <td class="text-white bg-success"><?= round($row['cakupan'], 0) . "%"; ?></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <!-- end table -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>