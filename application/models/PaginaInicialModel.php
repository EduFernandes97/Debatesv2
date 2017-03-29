<?php if( !defined("BASEPATH")) exit("No direct acess allowed!");

class PaginaInicialModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();
  }

  function VerificaEmail($email)
  {
    $sql = "SELECT COUNT(*) as NEmail FROM Utilizador WHERE Email = '".$email."';";
  //  $sql = "SELECT Email FROM utilizador WHERE Email = 'asd'";


    return $this->db->query($sql)->row();
  }

  function InscreverUtilizador($Nome, $Apelido, $Email, $Data, $Sexo, $PalavraChave)
  {

      $sql = "INSERT INTO `utilizador` (`idUtilizador`, `Password`, `DataNascimento`,
        `Sexo`, `DataRegisto`, `Email`, `PrimeiroNome`, `Apelido`, `Telefone`, `Foto`)
        VALUES (NULL, '".sha1($PalavraChave)."', '".$Data."', '".$Sexo."', '2017-03-22', '".$Email."', '".$Nome."', '".$Apelido."',
        NULL, 0)";

        return $this->db->query($sql);

  }

  function ValidaLogin($Email, $Pass)
  {
	$sql="SELECT idUtilizador FROM Utilizador WHERE Email= '".$Email."' AND Password= '".sha1($Pass)."';";

	return $this->db->query($sql);
  }
}
