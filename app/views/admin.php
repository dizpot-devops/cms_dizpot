<?php
$DIZAUTH = (new Auth())->revive();
if(!$DIZAUTH->isAuthenticated()) {
    header("Location: " . ROOT_URL . "users/login/");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DIZPOT CMS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-colorpicker.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="/assets/js/bootstrap-colorpicker.js"></script>

</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once(__DIR__ . '/../content/header/nav/top.php'); ?>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <?php require_once(__DIR__ . '/../content/header/nav/side.php'); ?>
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
                <?php require($view); ?>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php require_once(__DIR__ . '/../content/footer/footer.php'); ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->

<script src="/assets/vendors/js/vendor.bundle.base.js"></script>

<script src="/assets/vendors/chart.js/Chart.min.js"></script>
<script src="/assets/js/validate.js"></script>
<script src="/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="/assets/js/off-canvas.js"></script>
<script src="/assets/js/hoverable-collapse.js"></script>
<script src="/assets/js/misc.js"></script>

<script src="/assets/js/dashboard.js"></script>



</div>


</body>
</html>


