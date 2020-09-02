<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs banner_custom breadcrumbs-overlay">
  <div class="breadcrumbs-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="page-title">Forgot Password</h1>
          <ul>
            <li>
              <a class="active" href="<?php echo base_url(''); ?>">Home</a>
            </li>
            <li>Forgot-password</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumbs End -->
<div class="container mt-5">
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
<div class="container rs-history sec-spacer">
  <form method="post" action="">

    <div class="abt-title"><h2>Forgot Password</h2></div>
    <hr>
    <div class="row">
      <div class="col-md-5">
        <div class="form-control">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email"  class="w-100 <?= (form_error('')) ? 'invalid-field' : '' ?>" />
          <span class="text-danger"><?php echo form_error(''); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-control">
          <button type="submit" name="reset_password" class="custombutton">Reset Password</button>
        </div>
      </div>
    </div>
  </form>
</div>
