<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="amature_sardev">
    <link rel="stylesheet" href="<? site_url('') ?>/node_modules/bootstrap/dist/css/bootsrap.min.css">
    <title>Document</title>
</head>
<style>
    #loader {
        border: 12px solid #f3f3f3;
        border-radius: 50%;
        border-top: 12px solid #444444;
        width: 70px;
        height: 70px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        100% {
            transform: rotate(360deg);
        }
    }

    .center {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>
<div id="loader" class="center"></div>
<!-- tabel informasi -->
<div class="table-responsive">
    <button class="btn btn-primary mx-1 my-2 px-1" type="submit">Tambah Data</button>
    <table style="width:auto" class="table table-striped table-bordered table-responsive">
        <thead class="thead-inverse">
            <tr align="center" style="vertical-align: middle;">
                <th>No</th>
                <th>Upaya Kesehatan</th>
                <th>Kegiatan</th>
                <th>Target</th>
                <th>Sasaran</th>
                <th>Pencapaian</th>
                <th>Cakupan</th>
                <th>Update Pencapaian</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data_cakupan as $row) { ?>
                <tr>
                    <td scope="row"><?= $no++; ?></td>
                    <td><?= $row['upkes']; ?></td>
                    <td><?= $row['kegiatan']; ?></td>
                    <td><?= round($row['target_capai'], 0) . "%"; ?></td>
                    <td><?= $row['sasaran']; ?></td>
                    <td><?= $row['pencapaian']; ?></td>
                    <?php if ($row['cakupan'] < $row['target_capai']) : ?>
                        <td class="text-white bg-warning"><?= round($row['cakupan'], 0) . "%"; ?></td>
                    <?php elseif ($row['cakupan'] >= $row['target_capai']) : ?>
                        <td class="text-white bg-success"><?= round($row['cakupan'], 0) . "%"; ?></td>
                    <?php endif; ?>
                    <td style="
                                        display:flex;
                                        flex-direction:row; width:max-content;
                                        gap:2px;">
                        <form method="POST">
                            <?= csrf_field(); ?>
                            <input type="number" name="input_jml">
                            <button class="btn btn-primary fa fa-plus" type="submit" formaction="/tambah_capai/<?= $row['id']; ?>"></button>
                            <button class="btn btn-danger fa fa-minus" type="submit" formaction="/kurang_capai/<?= $row['id']; ?>">
                            </button>
                            <button class="btn btn-secondary fa fa-trash" type="submit" formaction="/hapus_upy/<?= $row['id']; ?>">
                            </button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector(
                "body").style.visibility = "hidden";
            document.querySelector(
                "#loader").style.visibility = "visible";
        } else {
            document.querySelector(
                "#loader").style.display = "none";
            document.querySelector(
                "body").style.visibility = "visible";
        }
    };
</script>

</body>

</html>