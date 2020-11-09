<?php
/**
* @version    $Id: 'administrador/totem-protic2.php' 10-08-2007 12:36:00 Moises Jafet$
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

$pSufijo="-protic";

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
<script type="text/javascript" src="<?php echo $js ?>/calendar3.js">
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

      $nombre_tabla  = "catalogo";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos.
      $db_tabla      = $db_prefijo.$nombre_tabla;

      $nombre_tabla1 = "provincia_intervenida";
      $db_tabla1     = $db_prefijo.$nombre_tabla1;

      $nombre_tabla2 = "institu_patrocinadora";
      $db_tabla2     = $db_prefijo.$nombre_tabla2;

      $nombre_tabla3 = "estatus_implementacion";
      $db_tabla3     = $db_prefijo.$nombre_tabla3;

      $nombre_tabla4 = "areas_desarrollo";
      $db_tabla4     = $db_prefijo.$nombre_tabla4;

      $nombre_tabla5 = "tipos_distribucion_areas_edom";
      $db_tabla5     = $db_prefijo.$nombre_tabla5;

      $nombre_tabla6 = "clasificacion_edom";
      $db_tabla6     = $db_prefijo.$nombre_tabla6;

      $nombre_tabla7 = "alcance_tipo";
      $db_tabla7     = $db_prefijo.$nombre_tabla7;

      $nombre_tabla8 = "publico_blanco";
      $db_tabla8     = $db_prefijo.$nombre_tabla8;


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
              . " LEFT JOIN $db_tabla8 i ON (a.id_Publico_Blanco = i.id)"
              . " WHERE (a.id=$editar) " ) or die ('Prohibido el acesso directo a este Recurso');

      while ($rows = mysql_fetch_array($result)) {

      $proyecto          = $rows['1'];
      $descripcion       = $rows['2'];
      $provincia         = $rows['provincia'];
      $institucion       = $rows['27'];
      $estatus           = $rows['estatus'];
      $adesarrollo       = $rows['adesarrollo'];
      $clasedom          = $rows['clasedom'];
      $alcance           = $rows['alcance'];
      $tiposdistedom     = $rows['tiposdistedom'];
      $blanco            = $rows['blanco'];
      $objetivos         = $rows['12'];
      $fechainicio       = $rows['13'];
      $fechafin          = $rows['14'];
      $website           = $rows['15'];
      $email             = $rows['16'];
      $postal            = $rows['17'];
      $ciudad            = $rows['18'];
      $telefonoprotic    = $rows['19'];
      }

      ?>

      <div id="cabezote" title="::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::">
        <div id="Titulo">
          <h1>::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::</h1>
        </div>

        <div id="Etiqueta">
          <h2>Formulario Edici&oacute;n Proyecto TIC Rep&uacute;blica Dominicana</h2>
        </div>

        <div class="cuba<?php echo $pSufijo ?>">
          <div id="ventana" title="Instituci&oacute;n Patrocinadora">
            <!-- Forma Ingreso de Proyecto -->

            <form name="protic" action="demon-protic2.php?id=<?php echo $editar ?>" method="post" id="protic">
              <fieldset>
                <legend>Proyecto TIC Rep&uacute;blica Dominicana</legend>

                <div id="proticcol1">
                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Proyecto (obligatorio)</label></span>
                    <span class="colcampoformaob<?php echo $pSufijo ?>"><input type="text" name="proyecto" value="<?php echo $proyecto ?>" size="37" maxlength="150">
                    </span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Descripci&oacute;n</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>">
                    <textarea name="descripcion" cols="30" rows="3"><?php echo $descripcion ?></textarea></span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Objetivos del proyecto</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>">
                    <textarea name="objetivos" cols="30" rows="6"><?php echo $objetivos ?></textarea></span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Website</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="website" value="<?php echo $website ?>" size="37" maxlength="150">
                    </span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>eMail</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="eMail" value="<?php echo $email ?>" size="37" maxlength="150">
                    </span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Direcci&oacute;n Postal</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>">
                    <textarea name="postal" cols="30" rows="2"><?php echo $postal ?></textarea></span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Ciudad</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="ciudad" value="<?php echo $ciudad ?>" size="37" maxlength="150">
                    </span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Telefono</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="telefonoprotic" value="<?php echo $telefonoprotic ?>" size="12" maxlength="12">
                    </span>
                  </div>
                </div>

                <div id="proticcol2">
                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Fecha de Inicio</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="fechainicio" value="<?php echo $fechainicio ?>" size="10" maxlength="10">
                    <span>&nbsp; <a href="javascript:cal1.popup();"><img src="../imagenes/cal.gif" alt="Calendario" border="0"></a></span></span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Fecha de Finalizaci&oacute;n</label></span>
                    <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="fechafin" size="10" value="<?php echo $fechafin ?>" maxlength="10">&nbsp;
                    <span><a href="javascript:cal2.popup();"><img src="../imagenes/cal.gif" alt="Calendario" border="0"></a></span>
                    </span>
                  </div><?php //Provincia ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Provincia (obligatorio)</label></span>
                    <span class="colcampoformaob<?php echo $pSufijo ?>">

                    <?php

//Este 'drop down' lo alimenta la tabla '-prefijo-_Provincia_Intervenida'

                    print '<select name="provincia">';

                    $result = mysql_query("SELECT id,provincia FROM $db_tabla1 ORDER BY provincia ASC") or die("NO conecta, ¡Alerta al Webmaster2!");

					if(mysql_num_rows($result)) {

					$select = mysql_query("SELECT id,id_Provincia_Intervenida FROM $db_tabla WHERE id = $editar ");
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
                  </div><?php //Provincia ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Instituci&oacute;n Patrocinadora (obligatorio)</label></span> <span class=
                    "colcampoformaob<?php echo $pSufijo ?>">
                    <?php

                    print '<select name="institucion">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Institucion_Patrocina'

                    $result = mysql_query("SELECT id,institucion FROM $db_tabla2 ORDER BY id ASC") or die("NO conecta, ¡Alerta al Webmaster2!");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Institucion_Patrocina FROM $db_tabla WHERE id = $editar ");
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
                  </div><?php //Estatus de la Implementacion ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Estatus del desarrollo</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>">
                    <?php

                    print '<select name="estatus">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Estatus_Implementacion

                    $result = mysql_query("SELECT id,nombre FROM $db_tabla3 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Estatus_Implementacion FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div><?php //Area de Desarrollo ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Area de Desarrollo clas. Indotel (obligatorio)</label></span>
                    <span class="colcampoformaob<?php echo $pSufijo ?>"><?php //Obligatorio para el uso Indotel ?>
                    <?php

                    print '<select name="adesarrollo">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Area_Desarrollo'

                    $result = mysql_query("SELECT id,nombre FROM $db_tabla4 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Area_Desarrollo FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div><?php //Areas distribucion (edom) ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Distribución por Areas de Desarrollo (eDominicana)</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
                    <?php

                    print '<select name="tiposdistedom">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Clasificacion_Tipos_EDom'

                    $result = mysql_query("SELECT id,nombre FROM $db_tabla5 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Alcance_Tipo FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div><?php //Clasificacion eDom ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Clasificacion (eDom)</label></span>
                    <span class="colcampoformaob<?php echo $pSufijo ?>"><?php //Obligatorio para el uso eDominicana ?>
                    <?php

                    print '<select name="clasedom">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Alcance_Sectorial'

                    $result = mysql_query("SELECT id,clasificacion FROM $db_tabla6 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_ClasificacionEDom FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div><?php //Alcance ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Alcance Sectorial</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
                    <?php

                    print '<select name="alcance">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_Alcance_Tipo'

                    $result = mysql_query("SELECT id,nombre FROM $db_tabla7 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Alcance_Sectorial FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div><?php //Publico Blanco ?>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <span class="etiqueta<?php echo $pSufijo ?>"><label>Publico Blanco</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
                    <?php

                    print '<select name="blanco">';

//Este 'drop down' lo alimenta la tabla '-prefijo-_publico_blanco'

                    $result = mysql_query("SELECT id,nombre FROM $db_tabla8 ORDER BY id ASC");

                    if(mysql_num_rows($result)) {

                    $select = mysql_query("SELECT id,id_Publico_Blanco FROM $db_tabla WHERE id = $editar ");
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

                    ?></span>
                  </div>

                  <div class="col1form<?php echo $pSufijo ?>">
                    <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>"> <input type="button" name="Cancelar" value="Cancelar" class=
                    "botones<?php echo $pSufijo ?>" onclick="history.go(-1)"> <input type="submit" name="grabar" value="Grabar" class="botones<?php echo $pSufijo ?>">
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
      </div><!-- Fin del Core -->
    </div><!-- Fin del Wrapper -->
  </div>
</body>
</html>
