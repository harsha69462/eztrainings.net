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
<div class="container pt-5 pb-5">
  <div class="login-form-bg h-100">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-xl-12">
          <div class="form-input-content">
            <div class="card login-form mb-0">
              <div class="card-body pt-5">

                <a class="text-center" href="index.html"> <h4>Add Candidate</h4></a>

                <form class="mt-5 mb-5 login-input" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control <?= (form_error('name')) ? 'invalid-field' : 'name' ?>" name="name" value="<?php echo set_value('name'); ?>"  placeholder="Name">
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control <?= (form_error('email')) ? 'invalid-field' : 'email' ?>" name="email" value="<?php echo set_value('email'); ?>"  placeholder="Email">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control <?= (form_error('phone')) ? 'invalid-field' : 'phone' ?>" name="phone" value="<?php echo set_value('phone'); ?>"  placeholder="Phone">
                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control <?= (form_error('doj')) ? 'invalid-field' : 'doj' ?>" name="doj" value="<?php echo set_value('doj'); ?>" placeholder="Date of joining" id="mdate">
                    <span class="text-danger"><?php echo form_error('doj'); ?></span>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control <?= (form_error('amount')) ? 'invalid-field' : 'amount' ?>" name="amount" value="<?php echo set_value('amount'); ?>" placeholder="Amount" id="mdate">
                    <span class="text-danger"><?php echo form_error('amount'); ?></span>
                  </div>
                  <div class="form-group">
                    <select type="text" class="form-control <?= (form_error('package')) ? 'invalid-field' : 'package' ?>" name="package" value="<?php echo set_value('package'); ?>"  id="mdate">
                      <option value="">Select Package</option>
                      <option>Monthly</option>
                      <option>Quarterly</option>
                      <option>Half Yearly</option>
                      <option>Annually</option>
                    </select>
                    <span class="text-danger"><?php echo form_error('package'); ?></span>
                  </div>
                  <div class="form-group">
                    <label for="">Id Proof</label>
                    <input type="file" class="form-control <?= (form_error('id_proof')) ? 'invalid-field' : 'id_proof' ?>" name="id_proof" value="<?php echo set_value('id_proof'); ?>"  placeholder="Id Proof">
                    <span class="text-danger"><?php echo form_error('id_proof'); ?></span>
                  </div>
                  <div class="form-group">
                    <label for="">Address proof</label>
                    <input type="file" class="form-control <?= (form_error('address_proof')) ? 'invalid-field' : 'address_proof' ?>" name="address_proof" value="<?php echo set_value('address_proof'); ?>"  placeholder="Address proof">
                    <span class="text-danger"><?php echo form_error('address_proof'); ?></span>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control <?= (form_error('address')) ? 'invalid-field' : 'address' ?>" name="address"  placeholder="Address"><?php echo set_value('address'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('address'); ?></span>
                  </div>
                  <div class="col-md-3 float-right">
                    <button class="btn login-form__btn submit w-100">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
