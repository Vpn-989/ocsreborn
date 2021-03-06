<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><i class="fa fa-credit-card"></i><b><u> ADD ACCOUNT PAYPAL</u></b></h4>
        </div>
    </div>
    <div class="row">
           <div class="col-lg-6">
			  <?php if (isset($message)) {echo $message;} ?>
			  <?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
			   <?php endif;?>
			   <?= form_open() ?>
					<div class="form-group">
						<label for="rekening"><b>EMAIL</b> </label>
						<input type="text" name="rekening" class="form-control" id="rekening" placeholder="Email Paypal Anda"/>
						<small class="text-muted"><i>Tidak Wajib</i></small>
					</div>
					<div class="form-group">
						<label for="bank"><b>ACCOUNT</b></label>
						<input type="text" name="bank" class="form-control" id="bank" placeholder="PAYPAL"/>
						<small class="text-muted"><i>Tidak Wajib</i></small>
					</div>
					<div class="form-group">
						<label for="pemilik"><b>OWNER</b></label>
						<input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="Chandra989"/>
						<small class="text-muted"><i>Tidak Wajib</i></small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="ADD"/>
					</div>
			   </form>
		   </div>
		   <div class="col-lg-6">
			   
				<?php if (!empty($asset)):?>
					<h4 class="page-header"><u>Paypal Active</u></h4>
					<div class="table-responsive"><table class="table table-hover">
						<thead>
							<tr><th>#</th><th>Account</th><th>Paypal</th><th>Owner</th></tr>
                        </thead>
                        <tbody>
						<?php foreach ($asset as $row): ?>
							<tr>
								
								<?php if (empty($row['nohp'])):?>
									<td><a href="<?=base_url('admin/del_req/'.$row['id'])?>">Delete</a></td>
									<td><?= $row['rekening']?></td>
									<td><?= $row['bank']?></td>
									<td><?= $row['pemilik']?></td>
								<?php endif;?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table></div>
					<?php else: ?>
						<h4 class="page-header"><u><i>You have not added acc paypal</i></u></h4>
				<?php endif; ?>
			</div>
    </div>
</div>
