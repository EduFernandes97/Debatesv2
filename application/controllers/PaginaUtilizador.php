<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaUtilizador extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	  $this->load->helper('url');
	  $this->load->library('session');

    if($this->session->userdata('Id') == NULL)
		{
			redirect("PaginaInicial/index");
			return;
		}

	}

  public function index()
  {
				//$this->load->view("PaginaInicialUtilizador/EditarUtilizador.php");
				redirect("PaginaUtilizador/EditarUtilizador");
  }

	public function EditarUtilizador()
	{
			$this->load->model('PaginaUtilizadorModel');

			$registo=$this->PaginaUtilizadorModel->DadosUtilizador($this->session->userdata('Id'));

			if($registo==NULL)
			{
				redirect("PaginaInicial/index");
				return;
			}

			$dados[PrimeiroNome]=$registo[0]->PrimeiroNome;
			$dados[UltimoNome]=$registo[0]->UltimoNome;
			$dados[Sexo]=$registo[0]->Sexo;
			$dados[DataNascimento]=$registo[0]->DataNascimento;
			$dados[Telefone]=$registo[0]->Telefone;
			$dados[Cidade]=$registo[0]->Cidade;
			$dados[Pais]=$registo[0]->Pais;

			$this->load->view("PaginaInicialUtilizador/EditarUtilizador.php", $dados);

	}
}
