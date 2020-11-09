<?php
/**
* @version     $Id: 'administrador/totem-dist.php' 05-08-2007 06:09:00 Moises Jafet$
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

      if (!$editar) {die ('Prohibido el accesso directo a este recurso');

      }

      if (!$db_conector) {
          die('NO conecta; alerta al Webmaster1!: ' . mysql_error());

      }

      $nombre_tabla = "clasificacion_tipos_edom";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;

      //Fuentes de los 'drop downs' articulados 

      $nombre_tablaAX = "tipos_distribucion_areas_edom";
      $nombre_tablaBX = "clasificacion_edom";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tablaAX     = $db_prefijo.$nombre_tablaAX;
      $db_tablaBX     = $db_prefijo.$nombre_tablaBX;

      ?>

      <div id="Etiqueta" class="cabezote">
        <h2>Editor de Distribuci&oacute;n por Areas de Desarrollo (eDominicana)</h2><!-- Alternador de visibilidad del div de la forma -->
      </div>

      <div id="ventana" class="forma<?php echo $pSufijo ?>" title="Editor de Distribuci&oacute;n por Areas de Desarrollo (eDominicana)">
        <!-- Forma Areas de Desarrollo según Indotel -->

        <form name="dist" action="demon-dist2.php?id=<?php echo $editar ?>" method="post" id="dist">
          <fieldset>
            <legend>Editor de Distribuci&oacute;n por Areas de Desarrollo (eDominicana)</legend>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Tipo (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><?php
//Este 'drop down' lo alimenta la tabla '-prefijo-_tipos_distribucion_areas_edom' 


                    print '<select name="tipo">';

                    $result = mysql_query("SELECT id,nombre FROM $db_tablaAX ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Tipos_Distribucion_Areas_EDom FROM $db_tabla WHERE id = $editar ");
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
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Clasificaci&oacute;n (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><?php
//Este 'drop down' lo alimenta la tabla '-prefijo-_clasificacion_edom' 

                    print '<select name="clasificacion">';

                    $result = mysql_query("SELECT id,clasificacion FROM $db_tablaBX ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Clasificacion_EDom FROM $db_tabla WHERE id = $editar ");
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
    new Validator("dist");
    frmvalidator.addValidation("tipo","req","Campo obligatorio");
    frmvalidator.addValidation("clasificacion","req","Campo obligatorio");
</script>
      </div><?php
      mysql_close($db_conector);
      ?>
    </div>
  </div><!-- Fin del Core -->
  <!-- Fin del Wrapper -->
</body>
</html>
