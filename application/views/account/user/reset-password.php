
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs banner_custom breadcrumbs-overlay">
  <div class="breadcrumbs-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="page-title">Reset Password</h1>
          <ul>
            <li>
              <a class="active" href="<?php echo base_url(''); ?>">Home</a>
            </li>
            <li>Reset-password</li>
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

    <div class="abt-title"><h2>Reset Password</h2></div>
    <hr>
    <div class="row">
      <div class="col-md-5">
        <div class="form-control">
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password"  class="w-100 <?= (form_error('password')) ? 'invalid-field' : '' ?>" />
          <span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-control">
          <label for="password"><b>Confirm Password</b></label>
          <input type="password" placeholder="Enter Password" name="confirm_password"  class="w-100 <?= (form_error('confirm_password')) ? 'invalid-field' : '' ?>" />
          <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="form-control">
          <button type="submit" name="reset_password" class="custombutton">Update Password</button>
        </div>
      </div>
    </div>
  </form>
</div>
