<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DIZGATE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <style>
        #header {
            background-image: url('/assets/images/paisley.png');
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo" id="header">
                            <img src="/assets/images/DIZPOT-Logo.png">  <span style="font-size:25px; color:white">DIZPOT - CMS</span>
                        </div>

                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <?php Messages::displayMessage(); ?>
                        <form class="pt-3" method="post" action="/users/login/">
                            <input type="hidden" name="rbe" value="1" />
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="submit" value="SIGN IN" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="background-color: #53555a"/>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <!--                                <div class="form-check">-->
                                <!--                                    <label class="form-check-label text-muted">-->
                                <!--                                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>-->
                                <!--                                </div>-->
                                <!--                                <a href="/users/passwordReset/" class="auth-link text-black">Forgot password?</a>-->
                            </div>
                            <!--                            <div class="mb-2">-->
                            <!--                                <button type="button" class="btn btn-block btn-facebook auth-form-btn">-->
                            <!--                                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>-->
                            <!--                            </div>-->
                            <!--                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="/users/register/" class="text-primary">Create</a>-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>

