<?php
/**
* @version    $Id: 'administrador/totem-region2.php' 05-08-2007 03:02:00 Moises Jafet$
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

      if (!$editar) {die ('Prohibido el accesso directo a este recurso');

      }

      if (!$db_conector) {
          die('NO conecta, ¡Alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla = "region_geografica";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;

                
      $result = mysql_query("SELECT * FROM `$db_tabla` WHERE id = '$editar'")
                or die("Favor elegir un Item para editar");
      while ($rows = mysql_fetch_array($result)) {

      $id          = $rows['id'];
      $region      = $rows['region'];
      $descripcion = $rows['descripcion'];

      }
      ?>

      <div id="cabezote" title="::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::">
        <div id="Titulo">
          <h1>::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::</h1>
        </div>

        <div id="Etiqueta">
          <h2>Editor de Regi&oacute;n Geogr&aacute;fica al que pertenece la Provincia</h2>
        </div>

        <div id="editor" class="forma<?php echo $pSufijo ?>" title="Formulario Edicion Regi&oacute;n Geogr&aacute;fica al que pertenece la Provincia">
          <!-- Forma Región Geográfica al que pertenece la Provincia -->

          <form name="region" action="demon-region2.php?id=<?php echo $editar ?>" method="post" id="region">
            <fieldset>
              <legend>Regi&oacute;n Geogr&aacute;fica al que pertenece la Provincia</legend>

              <div class="col1form<?php echo $pSufijo ?>">
                <span class="etiqueta<?php echo $pSufijo ?>"><label>Regi&oacute;n (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><input type="text"
                name="region" size="39" value="<?php echo $region ?>" maxlength="150"></span>
              </div>

              <div class="col1form<?php echo $pSufijo ?>">
                <span class="etiqueta<?php echo $pSufijo ?>"><label>Descripci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
                <textarea name="descripcion" cols="30" rows="10">
<?php echo $descripcion ?>
</textarea></span>
              </div>

              <div class="col1form<?php echo $pSufijo ?>">
                <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>"> <input type="button" name="Cancelar" value="Cancelar" class=
                "botones<?php echo $pSufijo ?>" onclick="history.go(-1)"> <input type="submit" name="grabar" value="Grabar" class="botones<?php echo $pSufijo ?>">
              </div>
            </fieldset>
          </form><script language="JavaScript" type="text/javascript">
    var frmvalidator  = new Validator("region");
    frmvalidator.addValidation("region","req","El nombre es obligatorio");
</script>
        </div>
      </div>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
