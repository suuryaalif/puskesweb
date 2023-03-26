<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="puskeswebsite">
    <meta name="author" content="suryaar">

    <title><?= $title; ?></title>

    <!-- css font google-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- css sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <!-- css startbootstrap-->
    <link href="<?= base_url(''); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <!-- css data tables -->
    <link href="<?= base_url(''); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- css font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css bootstrap 5 -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
</head>
<style>
    #pnl-card {
        transition: ease 1s;
    }

    #pnl-card:hover {
        color: #ffff;
        margin: 13px 12px 0 0;
        background: #00b32e;
    }
</style>

<body id="page-top">
    <div id="wrapper">
        <?= $this->include('Home/Template/sidebar'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?= $this->include('Home/Template/topbar'); ?>
                <!-- section ke view -->
                <?= $this->renderSection('main-dashboard') ?>
                <?= $this->renderSection('main-pelayananA') ?>
                <!-- akhir section -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SAR Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- sintaks java script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        //sweetalert function
        $(function() {
            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Congrats!',
                    text: '<?= session("success") ?>'
                })
            <?php } elseif (session()->has("Caution")) { ?>
                Swal.fire({
                    icon: 'warning',
                    title: 'Oops, Sorry',
                    text: '<?= session("Caution") ?>'
                })
            <?php } elseif (session()->has("error")) { ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops, Sorry',
                    text: '<?= session("error") ?>'
                })
            <?php } ?>
        });
    </script>
    <!-- js bootstrap 5 -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery js -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jeasing query -->
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- js sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <!-- datatable -->
    <script src="<?= base_url(); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>js/demo/datatables-demo.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(''); ?>js/sb-admin-2.min.js"></script>

</body>

</html>