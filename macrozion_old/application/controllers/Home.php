<?php
	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('assets');
			$this->load->library('form_validation');
		}


		function index()
		{	
			$data['_view'] = 'home/index';
			$this->load->view('layouts/main',$data);
		}


	}


?>