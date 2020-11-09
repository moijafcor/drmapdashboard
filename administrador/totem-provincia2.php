<?php
/**
* @version     $Id: 'administrador/totem-provincia2.php' 06-08-2007 14:41:00 Moises Jafet$
* @package     "[:DRmap(WebGUI):]"
* @copyright   Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license     GNU/GPL, see LICENSE.TXT
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

$pSufijo="-2";
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

      if (!$editar) {die ("Prohibido el acceso directo a este recurso.");
      }

      if (!$db_conector) {
          die('NO conecta, ¡Alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla = "provincia_intervenida";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;


      $result = mysql_query("SELECT * FROM `$db_tabla` WHERE id = '$editar'")
                or die("Favor elegir un Item para editar");
                while ($rows = mysql_fetch_array($result)) {

      $id           = $rows['0'];
      $provincia    = $rows['1'];
      $descripcion  = $rows['2'];
      $poblacion    = $rows['3'];
      $region       = $rows['6'];

      }
      ?>

      <div id="Etiqueta" class="cabezote">
        <h2>Editor de Provincias</h2>
      </div>

      <div id="ventana" class="forma<?php echo $pSufijo ?>" title="Provincias">
        <!-- Forma Ingreso de Provincias -->

        <form name="proform" action="demon-provincia2.php?id=<?php echo $editar ?>" method="post" id="proform">
          <fieldset>
            <legend>Editor de Provincias</legend>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Provincia (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><input type="text" name=
              "provincia" size="39" maxlength="150" value="<?php echo $provincia ?>"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Descripci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <textarea name="descripcion" cols="30" rows="5">
<?php echo $descripcion ?>
</textarea></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Total Poblaci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name=
              "poblacion" size="39" maxlength="150" value="<?php echo $poblacion ?>"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Regi&oacute;n (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla2 = "region_geografica";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
              $db_tabla2     = $db_prefijo.$nombre_tabla2;

//Este 'drop down' lo alimenta la tabla '-prefijo-_region_geografica' 

              print '<select name="region">';

              $result = mysql_query("SELECT id,region FROM $db_tabla2 ORDER BY id ASC");

              if(mysql_num_rows($result)) {

              $select = mysql_query("SELECT id,id_RegionGeografica FROM $db_tabla WHERE id = $editar ");
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
    new Validator("proform");
    frmvalidator.addValidation("provincia","req","La provincia es obligatorio");
    frmvalidator.addValidation("poblacion","numeric");
    frmvalidator.addValidation("region","req","Campo obligatorio");
</script>
      </div>
    </div>
  </div><!-- Fin del Core -->
  <!-- Fin del Wrapper -->
</body>
</html>
