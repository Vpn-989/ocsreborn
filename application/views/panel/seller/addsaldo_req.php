<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	 <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Credit (Via-Transfer)</h1>
            <div class="well">Credit Anda RM : <B><?php if (isset($user->saldo)) {echo $user->saldo; }?></B></div>
        </div>
    </div>
    <div class="row">
		  <div class="col-sm-6">
			   <p class="text-muted">Catatan: Jika Sudah Membuat Payment , Sila Tunggu Sampai Admin Sahkan.</p>
			   <p class="text-info">Silakan kirim ke salah satu Account Bank berikut: </p>
			   <?php foreach ($this->user_model->view_asset() as $row): ?>
					<?php if(!empty($row['rekening'])): ?>
						<p class="text-default" align="center"> <?= $row['pemilik']?><br> No.Account: <?= $row['rekening']?> <br>  <?= $row['bank']?></p>
					<?php endif; ?>					
			   <?php endforeach; ?>
		  </div>
           <div class="col-sm-6">
			  <?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($message)) : ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?= $message ?></div>
					</div>
					<?php endif;?>
			   <?= form_open() ?>
					<div class="form-group">
						<label for="sender">Account Pengirim</label>
						<input type="text" name="sender" class="form-control" id="sender" placeholder="No. Account Anda"/>
						<small class="text-muted">Untuk bukti telah membayar</small>
					</div>
					<div class="form-group">
						<label for="username">Atas Nama</label>
						<input type="text" name="username" class="form-control" id="username" placeholder="Owner Bank"/>
						<small class="text-muted">Nama Owner Bank</small>
					</div>
					<div class="form-group">
						<label for="rekening">Kirim ke</label>
						<select name="rekening" id="hp" class="form-control">
							<?php foreach ($this->user_model->view_asset() as $row): ?>
							<?php if(!empty($row['rekening'])): ?>
							<option value="<?= $row['rekening']?>"><?= $row['rekening'].' ('.$row['pemilik'].')'?></option>
							<?php endif; ?>	
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="hp">Jumlah deposit RM</label>
						<input type="number" name="jumlah" class="form-control" id="jumlah" value="20"/>
						<small class="text-muted">Jumlah deposit minimal RM20</small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Confirm"/>
					</div>
			   </form>
            </div>
    </div>
</div>
