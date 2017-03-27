<?php if( !defined("BASEPATH")) exit("No direct acess allowed!");

class PaginaInicialModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->database();

  }


  function InscreverUtilizador($Nome, $Apelido, $Email, $Data, $Sexo, $PalavraChave)
  {






      $sql = "INSERT INTO `utilizador` (`idUtilizador`, `Password`, `DataNascimento`,
        `Sexo`, `DataRegisto`, `Email`, `PrimeiroNome`, `Apelido`, `Telefone`, `Foto`)
        VALUES (NULL, '".$PalavraChave."', '".$Data."', '".$Sexo."', '2017-03-22', '".$Email."', '".$Nome."', '".$Apelido."',
        NULL, 0)";

        return $this->db->query($sql);

  }
}
