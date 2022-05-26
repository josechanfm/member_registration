<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {
	public function __construct()
	{
		$this->load->model('forums_model','forums');
		parent::__construct();
	}

	public function index()
	{
		$this->render($this->mModule.'/home');;
	}

}

