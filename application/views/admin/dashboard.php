<div class="content-body">
  <div class="container-fluid mt-3">


    <?php // TODO: list customers ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="active-member">
              <div class="table-responsive">
                <table class="table table-xs mb-0">
                  <thead>
                    <tr>
                      <th>Customers</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Status</th>
                      <th>Course</th>
                      <th>Amount</th>
                      <th>Registered at</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($all as $candidate): ?>
                      <tr>
                        <td><?= $candidate->name ?></td>
                        <td><?= $candidate->email ?></td>
                        <td>
                          <?= $candidate->phone ?>
                        </td>
                        <td>
                          <?= $candidate->status ?>
                        </td>
                        <td><i class="fa fa-circle-o text-success  mr-2"></i> <?=  $candidate->course ?></td>
                        <td>&#8377; <?= $candidate->amount ?></td>
                        <td><?= date("d/M/Y g:i a", strtotime($candidate->created_at)); ?></td>
                        <form action="" method="post">
                          <input type="hidden" name="activate_member" value="<?= $candidate->id ?>">
                          <td><?php if ($candidate->status === "activated"): ?>
                            <button type="submit" name="activate" disabled class="btn btn-muted">Activated</button>
                          <?php else: ?>
                            <button type="submit" name="activate" class="btn btn-primary">Activate</button>
                          <?php endif; ?>
                        </td>
                      </form>
                      <td>
                        <form id="deleteForm<?= $candidate->id ?>" action="" method="post">
                          <input type="hidden" name="delete_member" value="<?= $candidate->id ?>">
                          <button type="button" name="delete" class="btn btn-danger delete-member">Delete</button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- #/ container -->
</div>
