<div class="content-body" style="min-height: 920px;">
  <div class="container-fluid mt-3">


    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="m-3 p-3">
              <h3 class="float-left col-xs-12">My profile</h3>
              <a class="float-right col-xs-12" href="#profileForm" data-toggle="collapse"><i class="ti-pencil"></i> Edit</a>
            </div>
            <hr class="ml-4 mr-4 mt-3"/>

            <!-- Agent Detail -->
            <div class="row">
              <div class="col-md-6">
                <div class="agent-title mt-5 ml-5">
                  <?php if ($user->profile_pic): ?>
                    <div class="agent-photo"><img class="image-adjust" src="<?php echo base_url('assets/uploads/profile/'.$user->profile_pic) ?>" alt=""></div>
                  <?php else: ?>
                    <div class="agent-photo"><img src="<?php echo base_url('assets/img/default-profile-pic.jpg') ?>" alt=""></div>
                  <?php endif; ?>

                  <div class="agent-details top-30 mt-3 mb-3">
                    <h4><a href="#"><?= $user->name ?></a></h4>
                    <span><i class="lni-phone-handset"></i><?= $user->phone ?></span>
                  </div>
                  <div class="clearfix"></div>
                  <a href="javascript:void()">
                    <div class="mt-3">
                      <i class="lni-cloud-upload"></i>
                      <label id="UploadPicButton" class="btn btn-primary orange-primary-button" href="javascript:void(0)"> Edit Picture
                        <form id="profilePicUploadForm" action="" method="post" enctype="multipart/form-data">
                          <input id="profilePic" type="file" class="d-none" onchange="this.form.submit()" name="profile_pic"/>
                        </form>
                      </label>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="block-wrap mt-5 ml-5">
                  <div class="block-header">
                    <h4 class="block-title mb-4">Information</h4>
                  </div>
                  <div class="block-body">
                    <ul class="dw-proprty-info">
                      <li><label class="w-30"><strong>Email</strong></label>: <?= $user->email ?></li>
                      <li><label class="w-30"><strong>Institution</strong></label>: <?= $user->institution ?></li>
                      <li><label class="w-30"><strong>Phone</strong></label>: <?= $user->phone ?></li>
                      <li><label class="w-30"><strong>Address</strong></label>: <?= $user->address ?></li>
                      <li><label class="w-30"><strong>Aadhar number</strong></label>: <?= $user->aadhar_number ?></li>
                      <li><label class="w-30"><strong>Year of passing</strong></label>: <?= $user->year_of_passing ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div id="profileForm" class="row m-3 property_item collapse">

              <div class="m-5">
                <div class="block-wrap">
                  <div class="block-header">
                    <h4 class="block-title">Edit info</h4>
                  </div>
                  <form method="post" action="">

                    <div class="row">

                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="text" name="name" class="form-control <?= (form_error('name')) ? 'invalid-field' : '' ?>" value="<?= $user->name ?>" placeholder="Full Name">
                            <i class="ti-user"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('name'); ?></span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="password" name="password" class="form-control <?= (form_error('password')) ? 'invalid-field' : '' ?>"  value="<?php echo set_value('password'); ?>" placeholder="*******">
                            <i class="ti-unlock"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="text" name="institution" class="form-control <?= (form_error('institution')) ? 'invalid-field' : '' ?>"  value="<?= $user->institution ?>" placeholder="Institution">
                            <i class="ti-world"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('institution'); ?></span>
                        </div>
                      </div>

                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="text" name="phone" class="form-control <?= (form_error('phone')) ? 'invalid-field' : '' ?>" value="<?= $user->phone ?>" placeholder="123 546 5847">
                            <i class="lni-phone-handset"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('phone'); ?></span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="text" name="aadhar_number" class="form-control <?= (form_error('aadhar_number')) ? 'invalid-field' : '' ?>" value="<?= $user->aadhar_number ?>" placeholder="Aadhaar Number">
                            <i class="ti-briefcase"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('aadhar_number'); ?></span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <input type="text" name="year_of_passing" class="form-control <?= (form_error('year_of_passing')) ? 'invalid-field' : '' ?>" value="<?= $user->year_of_passing ?>" placeholder="Year of passing">
                            <i class="ti-notepad"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('year_of_passing'); ?></span>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                          <div class="input-with-icon">
                            <textarea type="text" name="address" class="form-control simple pt-3 <?= (form_error('address')) ? 'invalid-field' : '' ?>"  placeholder="Address"><?= $user->address ?></textarea>
                            <i class="ti-id-badge"></i>
                          </div>
                          <span class="text-danger"><?php echo form_error('address'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <button type="submit" name="edit_form" class="btn btn-primary orange-primary-button">Update</button>
                        </div>
                      </div>
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
  <!-- #/ container -->
</div>
