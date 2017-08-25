<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="#login">
    <div class="container">
        <div class="row ver-parent">
            <div class="col-md-4 col-md-offset-4 ver-center">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger"><?= validation_errors() ?></div>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
				<?php endif; ?>
                <div class="panel panel-default"><div style="text-align:center;"><a href="http://tinypic.com?ref=16gcq6c" target="_blank"><img src="http://i66.tinypic.com/16gcq6c.gif" border="0" alt="Image and video hosting by TinyPic"></a>
                    <div class="panel-heading"><marquee behavior="alternate"><a href="http://tinypic.com?ref=9usmty" target="_blank"><img src="http://vpn989.com/989/ocs.png" widht="150" height="200"></a></marquee>
                        <h3 class="panel-title"><i class="fa fa-sign-in fa-fw"></i> <FONT COLOR="#ff0000"><b><u><i>Please Login to OcsPanel Reborn</i></u></b></FONT COLOR</h3>
                    </div>
                    <div class="panel-body">
                        <?= form_open() ?>
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input class="form-control" placeholder="UserNaMe" name="username" type="text" autofocus required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                        <input class="form-control" placeholder="PassWord" name="password" type="password" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login"></input>
                            </fieldset>
                        </form>
                    </div>
                 
                </div>
                <marquee><p><b><i>ingin Jadi Reseller ?</marquee></i></b> <a href="<?= base_url('panel/register') ?>"><i>Register Now</i></a></p>
            </div>
          
        </div>
  
    </div>
     
</section>
