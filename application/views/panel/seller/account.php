<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               <FONT COLOR="#ff0000"><u>Premium Account</u></FONT COLOR>
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 hidden-print">                    
                <?= $user['message']?>
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> <b><u>Account Details</u></b>
                </div>
                <div class="panel-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>UserNaMe</td><td>:</td><td><?= $user['username']?></td>
                        </tr>
                        <tr>
                            <td>PassWord</td><td>:</td><td><?= $user['password']?></td>
                        </tr>
                        <tr>
                            <td>Host</td><td>:</td><td><?= $user['hostname']?></td>
                        </tr>
                        <tr>
                            <td>Location</td><td>:</td><td><?= $user['location']?></td>
                        </tr>
                        <tr>
                            <td>Openssh</td><td>:</td><td><?= $user['openssh']?></td>
                        </tr>
                         <tr>
                            <td>Dropbear</td><td>:</td><td><?= $user['dropbear']?></td>
                        </tr>
                         <tr>
                            <td>Price</td><td>:</td><td><?= $user['price']?></td>
                        </tr>
                        <tr>
                            <td>Expired</td><td>:</td><td><?= date("Y-m-d H:i:s",strtotime("+".$user['expired']." days", time() ) )?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted">
					Notice:<br>
					× No Torrent
        <p>× No ddos</p>
        <p>× No Abuse</p>
                </p>
					<div class="hidden-print">
					<a href="#" class="btn btn-primary" onclick="print_report()">Print</a>
					<a href="<?= base_url('panel/reseller/'.$_SESSION['username'].'/server') ?>" class="btn btn-default">Kembali</a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
