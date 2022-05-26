<h1><?php echo lang('reset_password_heading');?></h1>

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
            <?php echo $form->bs3_password(sprintf(lang('reset_password_new_password_label'), $min_password_length), $new_password['name']);?>
            <?php echo $form->bs3_password(lang('reset_password_new_password_confirm_label'), $new_password_confirm['name']);?>
            <?php echo form_input($user_id);?>
            <?php echo form_hidden($csrf); ?>

 			<div class="row">
				<div class="col-6">
					<?php echo $form->bs3_submit('Sign In', 'btn btn-primary btn-block btn-flat'); ?>
				</div>
			</div>
		<?php echo $form->close(); ?>

      <p></p>
      <p class="mb-1">
        <a href="./auth/forgot_password">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="../auth/form" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


