<html>
    <head>
      <script src="<?php echo base_url()?>JavaScript/jquery.js" type="text/javascript"></script>
      <script src="<?php echo base_url()?>JavaScript/JavaScriptPaginaInicial.js" type="text/javascript"></script>
      <link href="<?php echo base_url()?>CSS/css_PaginaInscricao.css" rel="stylesheet" type="text/css">
    </head>
    <body>

      <?php
      $this->load->helper('url');
      $this->load->library('form_validation');?>

      <div id = "header">
        <div id = "content">
          <ul id="menu">
            <li>Home</li>
            <li>blabla</li>
          </ul>


          <div id = "sign">
            <h1>Login</h1>
            <?php
            $attributes = array('id' => 'Login');

            echo form_open_multipart('PaginaInicial/Login', $attributes);?>
            <table border="0">

            <tr>
              <td>Email: </td><td><input name="Email" type="email" required></td>
            </tr>
            <tr>
              <td>Password </td><td><input name="PalavraChave" type="password" required></td>
            </tr>
              <tr>
                <td><input type="submit" value="Login"></td>
              </tr>


            </table>
          </form>

          </div>
        </div>
      </div>
      <h1>Registar</h1>


    <?php
    $attributes = array('id' => 'Registo');

    echo form_open_multipart('PaginaInicial/Inscrever', $attributes);?>

      <table border="0">

          <tr>
           <td>Primeiro Nome: </td><td><input name="Nome1" type="text" minlength="2" maxlength="20" ></td>
          </tr>
          <tr>
            <td>Email: </td><td><input name="Email" type="email" required></td>
          </tr>
  		 <tr>
            <td>Password: </td><td><input name="PalavraChave" type="password" minlength="5" maxlength="40" required></td>
            <td><div id = "QualidadePassword"></div></td>

            <td>Confirmar: </td><td><input name="ConfirmarPalavraChave" type="password" minlength="5" maxlength="40" required></td>
          </tr>
            <td><input type="submit" value="Registar"></td>
          </tr>
      </table>
    </form>


    </body>
</html>
