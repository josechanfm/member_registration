
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
			<?php echo $form->bs3_text(lang('login_identity_label'),$identity['name']); ?>
			<?php echo $form->bs3_password(lang('login_password_label'),$password['name']); ?>

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
					<?php echo $form->bs3_submit(lang('login_submit_btn'), 'btn btn-primary btn-block btn-flat'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>

      <p></p>
      <p class="mb-1">
        <?php echo "<a href='{$ctrler}/forgot_password'>Forgot my password</a>"?>
      </p>
      <p class="mb-0">
        <?php echo "<a href='{$ctrler}/register'>Register a new membership</a>"?>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


