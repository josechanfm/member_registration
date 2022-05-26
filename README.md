# member_registration

## ion_auth.php

/* user tables */
$config['tables']['users']           = 'users';
$config['tables']['groups']          = 'groups';
$config['tables']['users_groups']    = 'users_groups';
$config['tables']['login_attempts']  = 'login_attempts';



/* Authentication options. */

$config['site_title']                 = "The WSU Scholar Network"; 
$config['admin_email']                = "mailer.scholar@scholar.thewsu.org"; 
$config['default_group']              = 'members';
$config['admin_group']                = 'staff'; 
$config['identity']                   = 'email'; 
$config['min_password_length']        = 8;
$config['max_password_length']        = 20;
$config['email_activation']           = TRUE;
$config['manual_activation']          = FALSE;



/* Email Option */

$config['use_ci_email'] = true;
$config['email_config'] = array(
	'mailtype' => 'html',
);


/* Email Templates */

$config['email_templates'] = 'member/email/auth/';

