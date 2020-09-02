<div class="content-body" style="min-height: 920px;">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <h4 class="mb-5">My Courses</h4>
              <ul class="list-group">
                <?php foreach ($coursesList as $courses): ?>
                  <li class="list-group-item"><a href="<?= base_url("user/my-courses/?coursename=".$courses); ?>"><?= ucfirst(str_replace("-"," ",$courses)) ?></a></li>
                <?php endforeach; ?>
              </ul>
              <?php if (isset($_GET['coursename'])): ?>                
                <?php $this->load->view("account/user/courses/".$this->input->get("coursename")); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
