<div class="container mt-5">
  <?php if (!empty($_SESSION['success'])): ?>
    <div class="alert text-center alert-success">
      <?php echo $this->session->flashdata('success'); ?>
    </div>
  <?php endif; ?>
</div>

<div class="container">
  <?php if (!empty($_SESSION['msg_err'])): ?>
    <div class="alert text-center alert-danger">
      <?php echo $this->session->flashdata('msg_err'); ?>
    </div>
  <?php endif; ?>
</div>


<div class="container sec-spacer" id="leadsform">
  <div class="sec-title text-center">
    <h2>INTEREST FORM</h2>
  </div>
  <form method="post" action="interested" name="contact-form" id="contact-form">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group position-relative mb-4">
          <i class="mdi mdi-account ml-3 icons"></i>
          <input name="fname" id="fname" type="text" class="form-control pl-3" placeholder="Full Name :">
          <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
        </div>
      </div><!--end col-->
      <div class="col-md-6">
        <div class="form-group position-relative mb-4">
          <i class="mdi mdi-email ml-3 icons"></i>
          <select class="form-control pl-3" name="select">
            <option value="">---SELECT COURSE--- </option>
            <option value="Job-Training">Job Training </option>
            <option value="Fullstack-Web-Development">Fullstack Web Development </option>
            <option value="Python-Bundle">Python Bundle </option>
            <option value="Machine-Learning">Machine Learning </option>
          </select>
          <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
        </div>
      </div>
    </div><!--end col-->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group position-relative mb-4">
          <i class="mdi mdi-book ml-3 icons"></i>
          <input type="text" name="phone" id="phone" class="form-control pl-3" placeholder="Your Phone Number :"/>
          <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
        </div>
      </div><!--end col-->
      <div class="col-md-6">
        <div class="form-group position-relative mb-4">
          <i class="mdi mdi-book ml-3 icons"></i>
          <input type="email" name="email" id="email" class="form-control pl-3" placeholder="Your Email :"/>
          <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
        </div>
      </div><!--end col-->
    </div><!--end row-->
    <div class="col-md-12">
      <div class="form-group position-relative mb-4">
        <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
        <textarea name="comments" id="comments" rows="4" class="form-control pl-3" placeholder="Your Message :"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-center">
        <input type="submit" id="submit" name="send" class=" btn-success btn" value="Send Message">
        <div id="simple-msg"></div>
      </div><!--end col-->
    </div><!--end row-->
  </form>
</div>
