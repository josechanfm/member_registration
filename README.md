# member_registration

ion_auth.php

/*user tables*/
$config['tables']['users']           = 'users';
$config['tables']['groups']          = 'groups';
$config['tables']['users_groups']    = 'users_groups';
$config['tables']['login_attempts']  = 'login_attempts';

/*Authentication options.*/
$config['site_title']                 = "The WSU Scholar Network";       // Site Title, example.com
$config['admin_email']                = "mailer.scholar@scholar.thewsu.org"; // Admin Email, admin@example.com
$config['default_group']              = 'members';             // Default group, use name
$config['admin_group']                = 'staff';             // Default administrators group, use name
$config['identity']                   = 'email';          // You can use any unique column in your table as identity column. The values in this column, alongside password, will be used for login purposes
$config['min_password_length']        = 8;                   // Minimum Required Length of Password
$config['max_password_length']        = 20;                  // Maximum Allowed Length of Password
$config['email_activation']           = TRUE;               // Email Activation for registration
$config['manual_activation']          = FALSE;               // Manual Activation for registration




/*Email Option*/
$config['use_ci_email'] = true; // Send Email using the builtin CI email class, if false it will return the code and the identity
$config['email_config'] = array(
	'mailtype' => 'html',
);


/* Email Templates */
$config['email_templates'] = 'member/email/auth/';

