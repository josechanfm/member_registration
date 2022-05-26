<?php $this->load->view('email/_header'); ?>
<h3>on Member module</h3>
<h1><?php echo sprintf(lang('email_activate_heading'), $identity);?></h1>
<p><?php echo sprintf(lang('email_activate_subheading'), anchor('registration/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>

<?php $this->load->view('email/_footer'); ?>