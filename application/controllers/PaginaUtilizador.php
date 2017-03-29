<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaUtilizador extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	  $this->load->helper('url');
	  $this->load->library('session');

    if($this->session->userdata('FezLogin') != TRUE)
		{
			redirect("Login/index");
			return;
		}

	}

  public function index()
  {
      if($this->session->userdata('fez_login') === TRUE)
    		{
    			redirect("Gerir/index");
    			return;
    		}
  }


}
