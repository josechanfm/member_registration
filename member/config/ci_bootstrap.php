<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Admin Panel',
	'site_name_mini'=>'Lend',
	
	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),
	
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
/*			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js'
*/

			'assets/plugins/jquery/jquery.min.js',
			'assets/plugins/jquery-ui/jquery-ui.min.js',
			'assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
			'assets/plugins/chart.js/Chart.min.js',
			'assets/plugins/sparklines/sparkline.js',
			'assets/plugins/jqvmap/jquery.vmap.min.js',
			'assets/plugins/jqvmap/maps/jquery.vmap.usa.js',
			'assets/plugins/jquery-knob/jquery.knob.min.js',
			'assets/plugins/moment/moment.min.js',
			'assets/plugins/daterangepicker/daterangepicker.js',
			'assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
			'assets/plugins/summernote/summernote-bs4.min.js',
			'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
			'assets/dist/admin/bootstrap4/js/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js',
			//'assets/grocery_crud/texteditor/ckeditor4/ckeditor.js',

		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			/*'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css'*/

			'assets/plugins/fontawesome-free/css/all.min.css',
			'assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
			'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
			'assets/plugins/jqvmap/jqvmap.min.css',
			'assets/dist/admin/bootstrap4/css/adminlte.min.css',
			'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
			'assets/plugins/daterangepicker/daterangepicker.css',
			'assets/plugins/summernote/summernote-bs4.css',
			
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css',
		)
	),

	// Default CSS class for <body> tag
	'body_class' => 'layout-top-nav',
	
	// Multilingual settings
	'languages' => array(
		'default'		=> 'en',
		'autoload'		=> array('general'),
		'available'		=> array(
			'en' => array(
				'label'	=> 'English',
				'value'	=> 'english'
			),
			'zh' => array(
				'label'	=> '繁體中文',
				'value'	=> 'traditional-chinese'
			),
			'cn' => array(
				'label'	=> '简体中文',
				'value'	=> 'simplified-chinese'
			),
			'es' => array(
				'label'	=> 'Español',
				'value' => 'spanish'
			)
		)
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'discuss' => array(
			'name'		=> 'Discuss',
			'url'		=> 'discuss',
			'icon'		=> 'fa fa-bank',
		),
		'project' => array(
			'name'		=> 'Projects',
			'url'		=> 'project',
			'icon'		=> 'fa fa-bank',
		),
		'members' => array(
			'name'		=> 'Members',
			'url'		=> 'profile/members',
			'icon'		=> 'fa fa-bank',
		),
		'account' => array(
			'name'		=> 'Profile',
			'url'		=> 'profile',
			'icon'		=> 'fa fa-bank',
		),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'profile/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'member/auth/login',

	// Restricted pages
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'skin-red',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
	),

	// Email config
	'email' => array(
		'from_email'		=> 'no-replay@ipm.edu.mo',
		'from_name'			=> 'no-replay',
		'subject_prefix'	=> '(Auto Mailer)',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_yaple';