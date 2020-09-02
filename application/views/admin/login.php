
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>eztrainings.net</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <div class="container">
          <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="container">
          <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
        </div>


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>ezTrainings</h4></a>

                                <form action="" class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control <?= (form_error('email')) ? 'invalid-field' : '' ?>" placeholder="Email">
                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control <?= (form_error('password')) ? 'invalid-field' : '' ?>" placeholder="Password">
                                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo base_url('assets/admin/plugins/common/common.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/custom.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/settings.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/gleek.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/styleSwitcher.js'); ?>"></script>
</body>

</html>
