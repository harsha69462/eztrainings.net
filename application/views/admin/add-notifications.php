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
<div class="content-body" style="min-height: 920px;">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="col-xs-12">Raise Request</h3>
            <div class="basic-form">
              <form action="" method="post">
                <div class="form-group">
                  <textarea class="form-control h-150px" rows="6" id="comment" name="message" required placeholder="Enter you request"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="request" class="btn btn-primary orange-primary-button">Request</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h3 class="col-xs-12">Your Requests</h3>
            <div class="basic-list-group">
              <ul class="list-group">
                <?php foreach ($requests as $request): ?>
                  <li class="list-group-item"><?= $request->message ?><span class="float-right"><?= date("d/M/Y g:i a",strtotime($request->created_at)) ?></span></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
