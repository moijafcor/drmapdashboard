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

defined( '_VALID_CPTICRD' ) or die( 'Prohibido el Acesso a este Recurso' );

$pSufijo="-2";

?><?php


if (!$db_conector) {
    die('NO conecta; alerta al Webmaster1!: ' . mysql_error());

}
//Fuentes de los 'drop downs' articulados 

$nombre_tablaAX = "tipos_distribucion_areas_edom";
$nombre_tablaBX = "clasificacion_edom";

//Articula el nombre local de la tabla con el prefijo general en la base de datos. 
$db_tablaAX =  $db_prefijo.$nombre_tablaAX;
$db_tablaBX =  $db_prefijo.$nombre_tablaBX;



?>
  <div id="Etiqueta" class="cabezote">
    <h2>Distribuci&oacute;n por Areas de Desarrollo (eDominicana)</h2><!-- Alternador de visibilidad del div de la forma -->

    <div id="agregador">
      <a href="#" onclick="showhide('ventana'); return(false);">++Agregar Item</a>
    </div>
  </div>

  <div id="ventana" style="display: none;" class="forma<?php echo $pSufijo ?>" title="Distribuci&oacute;n por Areas de Desarrollo (eDominicana)">
    <!-- Forma Areas de Desarrollo según Indotel -->

    <form name="dist" action="demon-dist.php?editar=dist" method="post" id="dist">
      <fieldset>
        <legend>Distribuci&oacute;n por Areas de Desarrollo (eDominicana)</legend>

        <div class="col1form<?php echo $pSufijo ?>">
          <span class="etiqueta<?php echo $pSufijo ?>"><label>Tipo (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><?php

//Este 'drop down' lo alimenta la tabla '-prefijo-_tipos_distribucion_areas_edom' 

          print '<select name="tipo">';


          $result = mysql_query("SELECT id,nombre FROM $db_tablaAX ORDER BY id ASC")
                    or die("NO conecta, ¡Alerta al Webmaster2!");

          if (mysql_num_rows($result))
          while($row = mysql_fetch_row($result)) {
              print("<option value=\"$row[0]\">$row[1]</option>");
          }
          else {
              print("<option value=\"\">No hay Items creados aun</option>");
          }

          print '</select>';

          ?></span>
        </div>

        <div class="col1form<?php echo $pSufijo ?>">
          <span class="etiqueta<?php echo $pSufijo ?>"><label>Clasificaci&oacute;n (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>">
          <?php

//Este 'drop down' lo alimenta la tabla '-prefijo-_clasificacion_edom' 

          print '<select name="clasificacion">';


          $result = mysql_query("SELECT id,clasificacion FROM $db_tablaBX ORDER BY id ASC")
                    or die("NO conecta, ¡Alerta al Webmaster2!");

          if (mysql_num_rows($result))
          while($row = mysql_fetch_row($result)) {
              print("<option value=\"$row[0]\">$row[1]</option>");
          }
          else {
              print("<option value=\"\">No hay Items creados aun</option>");
          }

          print '</select>';


          ?></span>
        </div>

        <div class="col1form<?php echo $pSufijo ?>">
          <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>"> <input type="submit" name="grabar" value="Grabar" class=
          "botones<?php echo $pSufijo ?>">
        </div>
      </fieldset>
    </form><script language="JavaScript" type="text/javascript">
var frmvalidator  =
new Validator("dist");
frmvalidator.addValidation("tipo","req","Campo obligatorio");
frmvalidator.addValidation("clasificacion","req","Campo obligatorio");
</script>
  </div>

  <div id='Tabla de resultados' title='Tabla de resultados'>
    <?php

    if (!$db_conector) {
        die('NO conecta, ¡Alerta al Webmaster!: ' . mysql_error());

    }

    $nombre_tabla = "clasificacion_tipos_edom";

    //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
    $db_tabla     =  $db_prefijo.$nombre_tabla;


    $result = mysql_query("SELECT * FROM $db_tabla a, $db_tablaBX b, $db_tablaAX c
                           WHERE a . id_Clasificacion_EDom = b . id
                           AND a . id_Tipos_Distribucion_Areas_EDom = c . id
                           ORDER BY nombre ASC")
                           or die("NO conecta, ¡Alerta al Webmaster1!");

    $color="1";

    echo '<table cellpadding="2" cellspacing="0">';
    echo "<tr class='etiqueta'><th class='thlistasiz'>Admin</th><th class='thlistasiz'></th>
    <th class='thlistasiz'>Id</th><th class='thlistasce'>Tipo</th>
    <th class='thlistasde'>Clasificacion</th></tr>";
    while ($rows=mysql_fetch_array($result)) {

    if ($color==1) {

    echo "<tr id='impar'>
    <td class='tdlistased'>

        <form action='demon-dist3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar'  class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-dist2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    </td>
    <td class='tdlistasiz'>
    ".$rows['0']."
    </td>
    <td class='tdlistasce'>
    ".$rows['nombre']."
    </td>
    <td class='tdlistasde'>
    ".$rows['clasificacion']."
    </td>
    </tr>";

    $color="2";

    }

    else {

    echo "<tr id='par'>
    <td class='tdlistased'>

        <form action='demon-dist3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar'  class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-dist2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    <td class='tdlistasiz'>
    ".$rows['0']."
    </td>
    <td class='tdlistasce'>
    ".$rows['nombre']."
    </td>
    <td class='tdlistasde'>
    ".$rows['clasificacion']."
    </td>
    </tr>";

    $color="1";

    }

    }
    echo '</table>';

    mysql_close($db_conector);
    ?>
  </div>

