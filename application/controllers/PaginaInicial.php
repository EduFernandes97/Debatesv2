<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaInicial extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	  $this->load->helper('url');
	  $this->load->library('session');

	}

	public function index()
	{
		$this->load->view('Login/VW_FormInscricao.php');
	}

	public function ValidarEmail()
	{
		if(!isset($_REQUEST["email"]))
		{
				echo "<h1 style='color:red'> ACESSO NEGADO</h1> ";
				return;
		}

		$email = $_REQUEST["email"];

		$this->load->model('PaginaInicialModel');
		$verifica = $this->PaginaInicialModel->VerificaEmail($email);
		echo json_encode($verifica);/*
		if($verifica[0]->NEmail != 0)
			echo json_encode(1);
		else {
			echo json_encode(0);
		}*/

	}

	public function Inscrever()
	{

	$this->load->library('form_validation');

		$Nome = $this->input->post("Nome1");
		$Apelido = $this->input->post("Nome2");
		$Data = $this->input->post("Data");
		$Sexo = $this->input->post("Sexo");
		$Email = $this->input->post("Email");
		$Pass = $this->input->post("PalavraChave");

		$this->load->model('PaginaInicialModel');

		$validar = $this->PaginaInicialModel->InscreverUtilizador($Nome, $Apelido, $Email, $Data, $Sexo, $Pass);
		if($validar == 0)
		{
			 $this->load->view("Login/VW_FormInscricao.php");
		}
		else {
				redirect("PaginaUtilizador/index");
		}


	}

	public function Login()
	{

		$this->load->library("session");

		$Email=$this->input->post('Email');
		$Pass=$this->input->post('PalavraChave');
		$this->load->model('PaginaInicialModel');

		$validou=$this->PaginaInicialModel->ValidaLogin($Email, $Pass);

		if($validou == 0)
		{
			//invalido
			redirect('PaginaInicial/index');
		}
		else
		{
			$dados = array('Id'=>$validou);
			$this->session->set_userdata($dados);
			redirect('PaginaUtilizador/index');
			//valido
		}
	}
}
