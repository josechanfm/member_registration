<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

<?php echo form_close();?>


<h1><?php echo lang('change_password_heading');?></h1>

<div class="login-box">
  <?php echo $form->messages(); ?>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>WSU Scholar</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
            <?php echo $form->open(); ?>
            <?php echo $form->bs3_password(lang('change_password_old_password_label'), $old_password['name']);?>
            <?php echo $form->bs3_password(sprintf(lang('change_password_new_password_label'), $min_password_length), $new_password['name']);?>
            <?php echo $form->bs3_password(lang('change_password_new_password_confirm_label'), $new_password_confirm['name']);?>
            <?php echo form_input($user_id);?>
            <?php //echo form_hidden($csrf); ?>

                  <div class="row">
                        <div class="col-6">
                              <?php echo $form->bs3_submit(lang('change_password_submit_btn'), 'btn btn-primary btn-block btn-flat'); ?>
                        </div>
                  </div>
            <?php echo $form->close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


