<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
  <div class="breadcrumbs-inner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="page-title">SIGN UP</h1>
          <ul>
            <li>
              <a class="active" href="<?php echo base_url(''); ?>">Home</a>
            </li>
            <li>SIGN UP</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
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

    <div class="abt-title"><h2>Sign Up</h2></div>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="form-control">
          <label for="name"><b>Full Name</b></label>
          <input type="text" placeholder="Enter Full Name" name="name"  class="w-100 <?= (form_error('name')) ? 'invalid-field' : '' ?>" id="name" />
          <span class="text-danger"><?php echo form_error('name'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-control">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email"  class="w-100 <?= (form_error('email')) ? 'invalid-field' : '' ?>">
          <span class="text-danger"><?php echo form_error('email'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-control">
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password"  class="w-100 <?= (form_error('password')) ? 'invalid-field' : '' ?>">
          <span class="text-danger"><?php echo form_error('password'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-control">
          <label for="confirm"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confirm Password" name="confirm"  class="w-100 <?= (form_error('confirm')) ? 'invalid-field' : '' ?>">
          <span class="text-danger"><?php echo form_error('confirm'); ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-control">
          <label for="phone"><b>Contact Number</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone"  class="w-100 <?= (form_error('phone')) ? 'invalid-field' : '' ?>">
          <span class="text-danger"><?php echo form_error('phone'); ?></span>
        </div>
      </div>
    </div>
    <p>By creating an account you agree to our <a href="<?php echo base_url(''); ?>" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix"><hr>
      <button type="submit" class="custombutton">Sign Up</button>
      <button type="button" class="custombutton">Cancel</button>

    </div>
  </form>
</div>
