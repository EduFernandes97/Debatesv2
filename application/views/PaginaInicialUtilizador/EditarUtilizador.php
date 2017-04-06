<html>
    <head>
          <script src="<?php echo base_url()?>JavaScript/jquery.js" type="text/javascript"></script>
            <script src="<?php echo base_url()?>JavaScript/JavaScriptPaginaInicial.js" type="text/javascript"></script>
    </head>
    <body>

      <h1>Login Efetuado com sucesso</h1>

      <h2>Editar Perfil</h2>

      <?php
      $this->load->helper('url');
      $this->load->library('form_validation');

      $attributes = array('id' => 'Registo');

      echo form_open_multipart('PaginaUtilizador/EditarUtilizador', $attributes);?>

        <table border="0">

          <tr>
           <td>Primeiro Nome: </td><td><input name="Nome1" value="<?php echo PrimeiroNome ?>" type="text" minlength="2" maxlength="20" required></td>
        	<td>Ultimo Nome: </td><td><input name="Nome2" value="<?php echo UltimoNome ?>" type="text" required></td>
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
            <td><input type="submit" value="Confirmar"></td>
          </tr>
        </table>
      </form>

    </body>
</html>
