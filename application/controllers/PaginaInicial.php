<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaInicial extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	  $this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('/Login/VW_FormInscricao.php');
	}

	public function Inscrever()
	{
		$Nome = $this->input->post("Nome1");
		$Apelido = $this->input->post("Nome2");
		$Data = $this->input->post("Data");
		$Sexo = $this->input->post("Sexo");
		$Email = $this->input->post("Email");
		$Pass = $this->input->post("PalavraChave");

		$this->load->model('PaginaInicialModel');

		$validar = $this->PaginaInicialModel->InscreverUtilizador($Nome, $Apelido, $Email, $Data, $Sexo, $Pass);
		if($validar == NULL)
		{
			 echo "Deu Errado";
		}
		else {
			echo "Deu certo";
		}
	}
}
