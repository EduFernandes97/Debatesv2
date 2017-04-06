<?php if( !defined("BASEPATH")) exit("No direct acess allowed!");

class PaginaUtilizadorModel extends CI_Model
{
    function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->database();
    }
    function DadosUtilizador($id)
    {
      $sql= "SELECT * FROM Utilizador WHERE idUtilizador= ".$id.";";

	    return $this->db->query($sql)->row();
    }
}
