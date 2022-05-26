<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>
<div class="login-box">
    <?php echo $form->messages(); ?>
    <!-- /.login-logo -->
    <div class="card card-outline card-info">
        <div class="card-header text-center">
                        <h3><b>Become Member</b></h3>
                  </div>
                  <div class="card-body">
                        <?php echo $form->open(); ?>

                              <?php echo $form->bs3_text(lang('create_user_fname_label'), 'first_name'); ?>
                              <?php echo $form->bs3_text(lang('create_user_lname_label'), 'last_name'); ?>
                              <?php
                              if($identity_column!=='email') {
                                  echo $form->bs3_text(lang('create_user_identity_label'),$identity['name']);
                              }?>
                              <?php echo $form->bs3_text('Email', 'email'); ?>
                              <?php echo $form->bs3_text(lang('create_user_company_label'), 'company'); ?>
                              <?php echo $form->bs3_text(lang('create_user_phone_label'), 'phone'); ?>

                              <?php echo $form->bs3_password(lang('create_user_password_label'), 'password'); ?>
                              <?php echo $form->bs3_password(lang('create_user_password_confirm_label'), 'password_confirm'); ?>

                              <?php echo $form->bs3_submit(lang('create_user_submit_btn'),'btn btn-primary btn-block btn-flat'); ?>
                              
                        <?php echo $form->close(); ?>
      <p></p>
      <p class="mb-1">
            <?php echo "<a href='{$ctrler}/login'>I have account</a>"?>
      </p>
      <p class="mb-0">
            <?php echo "<a href='{$ctrler}/forgot_password'>Forgot password</a>"?>
      </p>

                  </div>
            </div>
      </div>
</div>
