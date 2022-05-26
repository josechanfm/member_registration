<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div class="login-box">
  <?php echo $form->messages(); ?>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>WSU Scholar</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
		<?php echo $form->open(); ?>
            <?php
                  if($type=='email'){
                        echo $form->bs3_email(sprintf(lang('forgot_password_email_label'), $identity_label), $identity['name']);
                  }else{
                        echo $form->bs3_text(sprintf(lang('forgot_password_identity_label'), $identity_label), $identity['name']);
                  }
            ?>
			<div class="row">
              <div class="col-6">
                <div class="icheck-primary">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
				<div class="col-6">
					<?php echo $form->bs3_submit('Sign In', 'btn btn-primary btn-block btn-flat'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>

      <p></p>
      <p class="mb-1">
        <?php echo "<a href='{$ctrler}/login'>I have account</a>"?>
      </p>
      <p class="mb-0">
        <?php echo "<a href='{$ctrler}/register'>Register a new membership</a>"?>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


