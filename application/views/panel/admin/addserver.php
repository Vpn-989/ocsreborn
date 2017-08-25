<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
 <FONT COLOR="#FF0000"><u>ADD SERVER</u></COLOR>
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
				<?php if (isset($message)) { echo $message; }?>               
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i> <b><u>Server Settings</u></b>
                </div>
                <div class="panel-body">
                    <form action="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'addserver') ?>" method="POST">
                        <div class="form-group">
                            <label><b>Nama Server</b></label>
                            <input class="form-control" placeholder="Server Demo 1" name="ServerName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label><b>Location</b></label>
                            <select class="form-control" name="Location">
								<?php foreach($this->user_model->get_country() as $row):?>
								<option value="<?= $row['Country'] ?>"><?= $row['Country'] ?></option>
								<?php endforeach;?>
							</select>
                        </div>
                        <div class="form-group">
                            <label><b>Host SerVer</b></label>
                            <input class="form-control" placeholder="192.168.1.1 atau www.example-server.com" name="HostName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label><b>Price Per Month</b></label>
                            <div class="input-group">
                                <span class="input-group-addon"><b>RM</b> </span>
                                <input class="form-control" placeholder="10" name="Price" type="number" step="1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Root Password</b></label>
                            <input class="form-control" placeholder="r0oT_p4s5wo0rD" name="RootPasswd" type="text">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Save">
                        <a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
