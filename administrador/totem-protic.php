<?php
/**
* @version     $Id: 'administrador/totem-protic.php' 07-08-2007 05:55:00 Moises Jafet$
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

//Control de acceso directo al fichero. (Moises)
defined( '_VALID_CPTICRD' ) or die( 'Prohibido el acesso directo a este Recurso' );

$pSufijo="-protic";

?>
  <div id="Etiqueta" class="cabezote<?php echo $pSufijo ?>">
    <h2>Proyectos TIC Rep&uacute;blica Dominicana</h2><!-- Alternador de visibilidad del div de la forma -->

    <div id="agregador">
      <a href="#" onclick="showhide('ventana'); return(false);">++Agregar Item</a>
    </div>
  </div>

  <div id="cuba" class="cuba<?php echo $pSufijo ?>">
    <div id="ventana" style="display: none;" title="Proyectos TIC-RD">
      <!-- Forma Ingreso de Proyecto -->

      <form name="protic" action="demon-protic.php" method="post" id="protic">
        <fieldset>
          <legend>Proyecto TIC Rep&uacute;blica Dominicana</legend>

          <div id="proticcol1">
            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Proyecto (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>">
              <input type="text" name=
              "proyecto" size="37" maxlength="150"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Descripci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <textarea name="descripcion" cols="30" rows="3"></textarea></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Objetivos del proyecto:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <textarea name="objetivos" cols="30" rows="6"></textarea></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Website:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name="website" size="37" maxlength="150"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>eMail:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name="eMail" size="37" maxlength="150"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Direcci&oacute;n Postal:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <textarea name="postal" cols="30" rows="2"></textarea></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Ciudad:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name="ciudad" size="37" maxlength="150"></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Tel&eacute;fono:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name="telefonoprotic" size="12" maxlength="12"></span>
            </div>
          </div>

          <div id="proticcol2">
            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Fecha de Inicio:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name="fechainicio" size="10" maxlength="10"><span>&nbsp; <a href="javascript:cal1.popup();"><img src="../imagenes/cal.gif" alt=
              "Calendario" border="0"></a></span></span>
            </div>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Fecha de Finalizaci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
              <input type="text" name= "fechafin" size="10" maxlength="10">&nbsp; <span><a href="javascript:cal2.popup();"><img src=
              "../imagenes/cal.gif" alt="Calendario" border="0"></a></span></span>
            </div><?php //Provincia ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Provincia (obligatorio):</label></span>
              <span class="colcampoformaob<?php echo $pSufijo ?>"><?php

              $nombre_tabla1 = "provincia_intervenida";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla1     = $db_prefijo.$nombre_tabla1;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Provincia_Intervenida'

              print '<select name="provincia">';


              $result = mysql_query("SELECT id,provincia FROM $db_tabla1 ORDER BY provincia ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';
              ?></span>
            </div><?php //Institucion ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Instituci&oacute;n Patrocinadora (obligatorio):</label></span>
              <span class="colcampoformaob<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla2 = "institu_patrocinadora";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla2     = $db_prefijo.$nombre_tabla2;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Institucion_Patrocina'

              print '<select name="institucion">';


              $result = mysql_query("SELECT id,institucion FROM $db_tabla2 ORDER BY id ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Estatus de la Implementacion ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Estatus del desarrollo:</label></span>
              <span class="colcampoformaob<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla3 = "estatus_implementacion";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla3     = $db_prefijo.$nombre_tabla3;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Estatus_Implementacion

              print '<select name="estatus">';


              $result = mysql_query("SELECT id,nombre FROM $db_tabla3 ORDER BY id ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Area de Desarrollo ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Area de Desarrollo clas. Indotel (obligatorio):</label></span>
              <span class="colcampoformaob<?php echo $pSufijo ?>"><?php //Obligatorio para el uso Indotel ?>
              <?php

              $nombre_tabla4 = "areas_desarrollo";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla4     = $db_prefijo.$nombre_tabla4;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Area_Desarrollo'

              print '<select name="adesarrollo">';


              $result = mysql_query("SELECT id,nombre FROM $db_tabla4 ORDER BY id ASC")
                        or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Areas distribucion (edom) ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Areas de Distribucion (eDom):</label></span>
              <span class="colcampoforma<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla5 = "tipos_distribucion_areas_edom";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla5     = $db_prefijo.$nombre_tabla5;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Clasificacion_Tipos_EDom'

              print '<select name="tiposdistedom">';


              $result = mysql_query("SELECT id,nombre FROM $db_tabla5 ORDER BY id ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Clasificacion eDom ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Clasificacion (eDom):</label></span>
              <span class="colcampoformaob<?php echo $pSufijo ?>"><?php //Obligatorio para el uso eDominicana ?>
              <?php

              $nombre_tabla6 = "clasificacion_edom";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla6     = $db_prefijo.$nombre_tabla6;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Alcance_Sectorial'

              print '<select name="clasedom">';


              $result = mysql_query("SELECT id,clasificacion FROM $db_tabla6 ORDER BY id ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Alcance ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Alcance:</label></span>
              <span class="colcampoforma<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla7 = "alcance_tipo";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla7     = $db_prefijo.$nombre_tabla7;

//Este 'drop down' lo alimenta la tabla '-prefijo-_Alcance_Tipo'

              print '<select name="alcance">';


              $result = mysql_query("SELECT id,nombre FROM $db_tabla7 ORDER BY id ASC")
              or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
                  while($row = mysql_fetch_row($result)) {
                  print("<option value=\"$row[0]\">$row[1]</option>");
              }
              else {
                  print("<option value=\"\">No hay Items creados aun</option>");
              }

              print '</select>';

              ?></span>
            </div><?php //Publico Blanco ?>

            <div class="col1form<?php echo $pSufijo ?>">
              <span class="etiqueta<?php echo $pSufijo ?>"><label>Publico Blanco:</label></span>
              <span class="colcampoforma<?php echo $pSufijo ?>">
              <?php

              $nombre_tabla8 = "publico_blanco";

              //Articula el nombre local de la tabla con el prefijo general en la base de datos.
              $db_tabla8     = $db_prefijo.$nombre_tabla8;

//Este 'drop down' lo alimenta la tabla '-prefijo-_publico_blanco'

              print '<select name="blanco">';


              $result = mysql_query("SELECT id,nombre FROM $db_tabla8 ORDER BY id ASC")
                                or die("NO conecta, ¡Alerta al Webmaster2!");

              if(mysql_num_rows($result))
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
              <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>">
              <input type="submit" name="grabar" value="Grabar" class=
              "botones<?php echo $pSufijo ?>">
            </div>
          </div>
        </fieldset>
      </form><script language="JavaScript" type="text/javascript">
    var cal1 = new calendar3(document.forms['protic'].elements['fechainicio']);
    cal1.year_scroll = true;
    cal1.time_comp = false;
    var cal2 = new calendar3(document.forms['protic'].elements['fechafin']);
    cal2.year_scroll = true;
    cal2.time_comp = false;
</script> <script language="JavaScript" type="text/javascript">
var frmvalidator  =
    new Validator("protic");
    frmvalidator.addValidation("institucion","req","Introduzca el nombre de la Institucion");
    frmvalidator.addValidation("telefonoprotic","maxlen=12","Formato de teléfono incorrecto (Use el formato XXX-XXX-XXXX)");
    frmvalidator.addValidation("eMail","email","Use un eMail válido");
    frmvalidator.addValidation("fechainicio","maxlen=10","Formato de fecha incorrecta (Use el formato XX-XX-XXXX)");
    frmvalidator.addValidation("fechafin","maxlen=10","Formato de fecha incorrecta (Use el formato XX-XX-XXXX)");
</script>
    </div><!-- Fin de la ventana -->
  </div><!-- Fin de la cuba -->

  <div id='Tabla de resultados' title='Tabla de resultados'>
    <?php

    if (!$db_conector) {
        die('NO conecta, ¡Alerta al Webmaster3!: ' . mysql_error());
    }

    $nombre_tabla = "catalogo";

    //Articula el nombre local de la tabla con el prefijo general en la base de datos.
    $db_tabla     = $db_prefijo.$nombre_tabla;


    $result = mysql_query(

    'SELECT *'
            . " FROM $db_tabla a"
            . " LEFT JOIN $db_tabla1 b ON (a.id_Provincia_Intervenida = b.id)"
            . " LEFT JOIN $db_tabla2 c ON (a.id_Institucion_Patrocina = c.id)"
            . " LEFT JOIN $db_tabla3 d ON (a.id_Estatus_Implementacion = d.id)"
            . " LEFT JOIN $db_tabla4 e ON (a.id_Area_Desarrollo = e.id)"
            . " LEFT JOIN $db_tabla5 f ON (a.id_Clasificacion_Tipos_EDom = f.id)"
            . " LEFT JOIN $db_tabla6 g ON (a.id_ClasificacionEDom = g.id)"
            . " LEFT JOIN $db_tabla7 h ON (a.id_Alcance_Tipo = h.id)"
            . " LEFT JOIN $db_tabla8 i ON (a.id_Publico_Blanco = i.id) ORDER BY `a` . `id` DESC" );


    $color="1";

    echo '<table id="proyectos" class="proyectos" cellpadding="2" cellspacing="0">';
    echo "<tr class='etiqueta'>

        <th class='thlistasiz-protic'>Admin</th><th class='thlistasiz'></th>
        <th class='thlistasiz-protic'>Id</th>
        <th class='thlistasce-protic'>Proyecto</th>
        <th class='thlistasce-protic'>Institución</th>
        <th class='thlistasce-protic'>Provincia</th>
        <th class='thlistasde-protic'>Estatus</th>
        <th class='thlistasce-protic'>Website</th>
        <th class='thlistasce-protic'>Descripcion</th>
        <th class='thlistasce-protic'>Clasificacion (eDom)</th>
        <th class='thlistasde-protic'>Fecha de Inicio</th>

    </tr>";

    while($rows=mysql_fetch_array($result)) {
    if($color==1) {
    echo "<tr id='impar'>
    <td class='tdlistased'>

        <form action='demon-protic3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar'  class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-protic2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    </td>
    <td class='tdlistasiz'>
        ".$rows['0']."
    </td>
    <td class='tdlistaslink'>
        <a href='index3.php?protic=".$rows['0']."'>".$rows['1']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['28']."
    </td>
    <td class='tdlistasce'>
        ".$rows['21']."
    </td>
    <td class='tdlistasce'>
        ".$rows['35']."
    </td>
    <td class='tdlistaslink'>
        <a href=http://".$rows['15'].">".$rows['15']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['2']."
    </td>
    <td class='tdlistasce'>
        ".$rows['44']."
    </td>
    <td class='tdlistasde'>
        ".$rows['13']."
    </td>
    </tr>";

    $color="2";

    }

    else {

    echo "<tr id='par'>
    <td class='tdlistased'>

        <form action='demon-protic3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar' class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-protic2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    </td>
    <td class='tdlistasiz'>
        ".$rows['0']."
    </td>
    <td class='tdlistaslink'>
        <a href='index3.php?protic=".$rows['0']."'>".$rows['1']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['28']."
    </td>
    <td class='tdlistasce'>
        ".$rows['21']."
    </td>
    <td class='tdlistasce'>
        ".$rows['35']."
    </td>
    <td class='tdlistaslink'>
        <a href=http://".$rows['15'].">".$rows['15']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['2']."
    </td>
    <td class='tdlistasce'>
        ".$rows['44']."
    </td>
    <td class='tdlistasde'>
        ".$rows['13']."
    </td>
    </tr>";

    $color="1";

    }

    }
    echo '</table>';

    mysql_close($db_conector);
    ?>
  </div>
