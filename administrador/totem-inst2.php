<?php
/**
* @version    $Id: 'administrador/totem-inst2.php' 07-08-2007 04:43:00 Moises Jafet$
* @package    "[:DRmap(WebGUI):]"
* @copyright  Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license    GNU/GPL, see LICENSE.TXT
*
* [:DRmap(WebGUI):] is free software; you can redistribute it and/or modify it under the
* terms of the GNU General Public License as published by the Free Software Foundation;
* either version 3 of the License, or any later version. As distributed it includes or
* is derivative of works licensed under the GNU General Public License or other free
* or open source software licenses.
*
* [:DRmap(WebGUI):] is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
* PARTICULAR PURPOSE.  See the GNU General Public License for more details and
* COPYRIGHT.TXT for copyright notices and details.
*/

define( '_VALID_CPTICRD', 1 );

require_once "includes/mantenimientos.php";

$pSufijo="-inst";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>Administraci&oacute;n | <?php echo $titulo ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $js ?>/gen_validatorv2.js">
</script>
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php

      $editar = $_POST["editar"];

      if (!$editar) {die ('Prohibido el accesso directo a este recurso');

      }

      if (!$db_conector) {
          die('NO conecta, ¡Alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla = "institu_patrocinadora";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;

                
      $result = mysql_query("SELECT * FROM `$db_tabla` WHERE id = '$editar'")
                or die("Favor elegir un Item para editar");
      while ($rows = mysql_fetch_array($result)) {

      $id          = $rows['id'];
      $institucion = $rows['institucion'];
      $direccion   = $rows['direccion'];
      $ciudad      = $rows['ciudad'];
      $website     = $rows['website'];
      $email       = $rows['email'];
      $telefono    = $rows['telefono'];


      }
      ?>

      <div id="cabezote" title="::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::">
        <div id="Titulo">
          <h1>::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::</h1>
        </div>

        <div id="Etiqueta">
          <h2>Editor de Instituci&oacute;n Patrocinadora</h2>
        </div>

        <div class="cuba<?php echo $pSufijo ?>">
          <div id="ventana" title="Instituci&oacute;n Patrocinadora">
            <!-- Forma Ingreso de Institucion -->

            <form name="inst" action="demon-inst2.php?id=<?php echo $editar ?>" method="post" id="inst">
              <fieldset>
                <legend>Instituci&oacute;n Patrocinadora</legend>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Nombre (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><input type="text" name=
                  "institucion" value="<?php echo $institucion ?>" size="39" maxlength="150"></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Direcci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
                  <textarea name="direccion" cols="30" rows="3">
<?php echo $direccion ?>
</textarea></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Ciudad:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="ciudad" value=
                  "<?php echo $ciudad ?>" size="39" maxlength="150"></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Provincia (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>">
                  <?php

                  $nombre_tabla2 = "provincia_intervenida";

                  //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
                  $db_tabla2     = $db_prefijo.$nombre_tabla2;

//Este 'drop down' lo alimenta la tabla '-prefijo-_provincia_intervenida' 

                  print '<select name="provincia">';

                  $result = mysql_query("SELECT id,provincia FROM $db_tabla2 ORDER BY id ASC");

                  if(mysql_num_rows($result)) {

                  $select = mysql_query("SELECT id,id_provincia FROM $db_tabla WHERE id = $editar ");
				  $selected = mysql_fetch_row($select);

                  while($row = mysql_fetch_row($result)) {
                  echo "<option value='";echo $row[0]; echo "'";
                  if($row[0]==$selected[1]) {echo " SELECTED";} echo ">"; echo $row[1];
                  echo "</option>";
                  }
                  }

                  else {

                  print("<option value=''>No hay Items creados aun</option>");

                  }

                  print '</select>';

                  ?>
                  </span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Website:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="website" value=
                  "<?php echo $website ?>" size="39" maxlength="150"></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>eMail:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="Email" value=
                  "<?php echo $email ?>" size="39" maxlength="150"></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Tel&eacute;fono:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="telefono"
                  value="<?php echo $telefono ?>" size="39" maxlength="150"></span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <span class="etiqueta<?php echo $pSufijo ?>"><label>Naturaleza o Tipo de Instituci&oacute;n (obligatorio):</label></span> <span class=
                  "colcampoformaob<?php echo $pSufijo ?>">
                  <?php

                  $nombre_tabla3 = "institu_tipo";

                  //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
                  $db_tabla3     = $db_prefijo.$nombre_tabla3;

//Este 'drop down' lo alimenta la tabla '-prefijo-_institu_tipo' 

                  print '<select name="instipo">';

                  $result = mysql_query("SELECT id,instipo FROM $db_tabla3 ORDER BY id ASC");

                  if(mysql_num_rows($result)) {

                  $select = mysql_query("SELECT id,id_Institu_Tipo FROM $db_tabla WHERE id = $editar ");
				  $selected = mysql_fetch_row($select);

                  while($row = mysql_fetch_row($result)) {
                  echo "<option value='";echo $row[0]; echo "'";
                  if($row[0]==$selected[1]) {echo " SELECTED";} echo ">"; echo $row[1];
                  echo "</option>";
                  }
                  }

                  else {

                  print("<option value=''>No hay Items creados aun</option>");

                  }

                  print '</select>';
                  ?>
                  </span>
                </div>

                <div class="col1form<?php echo $pSufijo ?>">
                  <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>"> <input type="button" name="Cancelar" value="Cancelar" class=
                  "botones<?php echo $pSufijo ?>" onclick="history.go(-1)"> <input type="submit" name="grabar" value="Grabar" class="botones<?php echo $pSufijo ?>">
                </div>
              </fieldset>
            </form><script language="JavaScript" type="text/javascript">
var frmvalidator  =
new Validator("inst");
frmvalidator.addValidation("institucion","req","Introduzca el nombre de la Institucion");
frmvalidator.addValidation("telefono","maxlen=12","Formato de teléfono incorrecto (Use el formato XXX-XXX-XXXX)");
frmvalidator.addValidation("Email","email","Use un eMail válido");
</script>
          </div><!-- Fin de la ventana -->
        </div><!-- Fin de la cuba -->
      </div><!-- Fin del Core -->
    </div><!-- Fin del Wrapper -->
  </div>
</body>
</html>
