<html>
    <head>
          <script src="<?php echo base_url()?>JavaScript/jquery.js" type="text/javascript"></script>
            <script src="<?php echo base_url()?>JavaScript/JavaScriptPaginaInicial.js" type="text/javascript"></script>
    </head>
    <body>

      <h1>Registar</h1>

      <table border="0">

      <?php
      $this->load->helper('url');
      $this->load->library('form_validation');

      $attributes = array('id' => 'Registo');

      echo form_open_multipart('PaginaInicial/Inscrever', $attributes);?>
        <tr>
         <td>Primeiro Nome: </td><td><input name="Nome1" type="text" minlength="2" maxlength="20" required></td>
      	<td>Ultimo Nome: </td><td><input name="Nome2" type="text" required></td>
        </tr>
        <tr>
          <td>Email: </td><td><input name="EmailRegisto" type="email" required></td>
        </tr>
		 <tr>
          <td>Password: </td><td><input name="PalavraChave" type="password" minlength="8" maxlength="40" required></td>
        </tr>
        <tr>
          <td>Sexo: </td>
          <td>Masculino: <input type="radio" value="M" name="Sexo" checked></td>
          <td>Feminino: <input type="radio" value="F" name="Sexo"></td>
        </tr>
		<tr>
          <td>Data Nascimento: </td><td><input name="Data" type="date" required></td>
        </tr>
         <tr>
          <td>Telefone: </td><td><input name="Telefone" type="tel"></td>
        </tr>
		<tr>
          <td>Cidade </td><td><input name="Cidade" type="text"></td>
		  <td>Pais </td><td><input name="Pais" type="text"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Registar"></td>
        </tr>



      </form>
      </table>


      <h1>Login</h1>
      <table border="0">
      <?php
      echo form_open("PaginaInicial/Login");?>

      <tr>
      	<td>Email: </td><td><input name="EmailLogin" type="email" required></td>
      </tr>
      <tr>
      	<td>Password </td><td><input name="PalavraChave" type="password" required></td>
      </tr>
        <tr>
          <td><input type="submit" value="Login"></td>
        </tr>


      </form>
      </table>
    </body>
</html>
