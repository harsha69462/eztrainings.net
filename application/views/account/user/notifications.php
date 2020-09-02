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
            <h3 class="col-xs-12">Your notifications</h3>
            <div class="basic-list-group">
              <ul class="list-group">
                <?php foreach ($notifications as $request): ?>
                  <li class="list-group-item"><?= $request->message ?><span class="float-right"><?= date("d/M/Y g:i a",strtotime($request->created_at)) ?></span></li>
                <?php endforeach; ?>
                <?php if ($registered == true): ?>
                  <li class="list-group-item">Your notification's for today. | <a href="https://join.skype.com/Xtw2h4SCsLBC"><span style="color:red">SESSION LINK</span></a><br> Happy Learning! <span class="float-right"><?php echo date("l jS \of F Y"); ?></span></li>

                <?php else: ?>
                  <li class="list-group-item">You have no notification's for today. | <a href="#"><span style="color:red"></span></a><br> Happy Learning! <span class="float-right"><?php echo date("l jS \of F Y"); ?></span></li>

                <?php endif; ?>
                <!-- <li class="list-group-item">You have no notification's for today. | <a href="#"><span style="color:red"></span></a><br> Happy Learning! <span class="float-right"><?php echo date("l jS \of F Y"); ?></span></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
