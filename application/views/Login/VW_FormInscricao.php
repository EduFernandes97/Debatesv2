<table border="0">

<?php
$this->load->helper('url');
$this->load->library('form_validation');

echo form_open("PaginaInicial/Inscrever");?>
  <tr>
    <td>Primeiro Nome: </td><td><input name="Nome1" type="text"></td>
  </tr>
  <tr>
    <td>Ultimo Nome: </td><td><input name="Nome2" type="text"></td>
  </tr>
  <tr>
    <td>Data Nascimento: </td><td><input name="Data" type="date"></td>
  </tr>
  <tr>
    <td>Sexo: </td>
    <td>Masculino: <input type="radio" value="M" name="Sexo"></td>
    <td>Feminino: <input type="radio" value="F" name="Sexo"></td>

  </tr>
  <tr>
    <td>Password: </td><td><input name="PalavraChave" type="password"></td>
  </tr>
  <tr>
    <td>Email: </td><td><input name="Email" type="email"></td>
  </tr>
  <tr>
    <td><input type="submit"></td>
  </tr>



</form>
