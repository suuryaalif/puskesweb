<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- css font google-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- css sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <!-- css startbootstrap-->
    <link href="<?= base_url(''); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- css font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css bootstrap 5 -->

</head>
<style>
    #bg-sidelogin {
        background-image: url(/img/bg_login.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 1rem 0 0 1rem;
    }
</style>

<body>
    <!-- main content -->
    <div class="section">
        <?= $this->renderSection('main-authlogin') ?>
        <?= $this->renderSection('main-authregister') ?>
    </div>
    <!-- sintaks java script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
        $(function() {
            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session("success") ?>'
                })
            <?php } elseif (session()->has("Caution")) { ?>
                Swal.fire({
                    icon: 'warning',
                    title: 'Mohon Maaf',
                    text: '<?= session("Caution") ?>'
                })
            <?php } elseif (session()->has("error")) { ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Waduh, Maaf',
                    text: '<?= session("error") ?>'
                })
            <?php } ?>

        });
    </script>
    </script>
    <!-- js bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery js -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- js sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <!-- jeasing query -->
    <!-- <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(''); ?>js/sb-admin-2.min.js"></script>
</body>

</html>