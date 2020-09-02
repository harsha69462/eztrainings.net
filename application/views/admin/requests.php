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
            <h3 class="col-xs-12">Your Requests</h3>
            <div class="basic-list-group">
              <ul class="list-group">
                <?php foreach ($requests as $request): ?>
                  <li class="list-group-item" id="<?php echo $request->id ?>">
                    <label class="w-250">
                      <?= $request->email ?>
                    </label>
                    <?= $request->message ?>
                    <span class="float-right ml-3">
                      <button type="button" class="btn btn-danger btn-sm" name="button" data-toggle="collapse" data-target="<?php echo "#".$request->id ?>">reply</button>
                    </span>
                    <span class="float-right">
                      <?= date("d/M/Y g:i a",strtotime($request->created_at)) ?>
                    </span>
                    <div id="<?php echo $request->id ?>" class="">
                      <input type="text" class="form-control p-3">
                    </div>

                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
