<?php
/**
* @version     $Id: 'administrador/totem-inst.php' 07-08-2007 02:53:00 Moises Jafet$
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

$pSufijo="-inst";

?>
  <div id="Etiqueta" class="cabezote<?php echo $pSufijo ?>">
    <h2>Instituci&oacute;n Patrocinadora</h2><!-- Alternador de visibilidad del div de la forma -->

    <div id="agregador">
      <a href="#" onclick="showhide('ventana'); return(false);">++Agregar Item</a>
    </div>
  </div>

  <div class="cuba<?php echo $pSufijo ?>">
    <div id="ventana" style="display: none;" title="Institucion">
      <!-- Forma Ingreso de Institucion -->

      <form name="inst" action="demon-inst.php?editar=inst" method="post" id="inst">
        <fieldset>
          <legend>Instituci&oacute;n Patrocinadora</legend>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Nombre (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><input type="text" name=
            "institucion" size="39" maxlength="150"></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Direcci&oacute;n:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>">
            <textarea name="direccion" cols="30" rows="3">
</textarea></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Ciudad:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="ciudad" size="39"
            maxlength="150"></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Provincia (obligatorio):</label></span> <span class="colcampoformaob<?php echo $pSufijo ?>"><?php
            if (!$db_conector) {
                die('NO conecta; alerta al Webmaster1!: ' . mysql_error());

            }

            $nombre_tabla2 = "provincia_intervenida";

            //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
            $db_tabla2     = $db_prefijo.$nombre_tabla2;

            //Este 'drop down' lo alimenta la tabla '-prefijo-_region_geografica' 

            print '<select name="provincia">';

                      
            $result = mysql_query("SELECT id,provincia FROM $db_tabla2 ORDER BY id ASC")
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
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Website:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="website" size="39"
            maxlength="150"></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>eMail:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="Email" size="39"
            maxlength="150"></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Tel&eacute;fono:</label></span> <span class="colcampoforma<?php echo $pSufijo ?>"><input type="text" name="telefono" size=
            "39" maxlength="150"></span>
          </div>

          <div class="col1form<?php echo $pSufijo ?>">
            <span class="etiqueta<?php echo $pSufijo ?>"><label>Naturaleza o Tipo de Instituci&oacute;n (obligatorio):</label></span> <span class=
            "colcampoformaob<?php echo $pSufijo ?>"><?php
            if (!$db_conector) {
                die('NO conecta; alerta al Webmaster2!: ' . mysql_error());

            }

            $nombre_tabla3 = "institu_tipo";

            //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
            $db_tabla3     = $db_prefijo.$nombre_tabla3;

            //Este 'drop down' lo alimenta la tabla '-prefijo-_region_geografica' 

            print '<select name="instipo">';

                      
            $result = mysql_query("SELECT id,instipo FROM $db_tabla3 ORDER BY id ASC")
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
            <input type="reset" name="borrar" value="Deshacer" class="botones<?php echo $pSufijo ?>"> <input type="submit" name="grabar" value="Grabar" class=
            "botones<?php echo $pSufijo ?>">
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

  <div id='Tabla de resultados' title='Tabla de resultados'>
    <?php

    if (!$db_conector) {
        die('NO conecta, ¡Alerta al Webmaster3!: ' . mysql_error());

    }

    $nombre_tabla = "institu_patrocinadora";

    //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
    $db_tabla     =  $db_prefijo.$nombre_tabla;

    //Path hacia el demonio que procesa el comando borrar. 
    $marcadorb = "$mosConfig_live_site/$carp/administrador/demon-inst3.php?borrar=";

              
    $result = mysql_query("SELECT * FROM $db_tabla a , $db_tabla2 b , $db_tabla3 c "
     . ' WHERE a . id_Institu_Tipo = c . id AND a . id_provincia = b . id  ORDER BY a.id ASC ')
    or die("NO conecta, ¡Alerta al Webmaster4!");

    $id          = $rows['id'];
    $nombre      = $rows['nombre'];
    $descripcion = $rows['descripcion'];


    $color="1";

    echo '<table id="institucion" class="institucion" cellpadding="2" cellspacing="0">';
    echo "<tr class='etiqueta'>

    <th class='thlistasiz'>Admin</th><th class='thlistasiz'></th>
    <th class='thlistasiz'>Id</th>
    <th class='thlistasce'>Institucion</th>
    <th class='thlistasce'>Dirección</th>
    <th class='thlistasce'>Ciudad</th>
    <th class='thlistasce'>Provincia</th>
    <th class='thlistasce'>Website</th>
    <th class='thlistasce'>eMail</th>
    <th class='thlistasce'>Teléfono</th>
    <th class='thlistasce'>Tipo</th>

    </tr>";
    while($rows=mysql_fetch_array($result)) {

    if($color==1)

    {

    echo "<tr id='impar'>
    <td class='tdlistased'>

        <form action='demon-inst3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar'  class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-inst2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    </td>
    <td class='tdlistasiz'>
        ".$rows['0']."
    </td>
    <td class='tdlistasce'>
        ".$rows['3']."
    </td>
    <td class='tdlistasce'>
        ".$rows['4']."
    </td>
    <td class='tdlistasce'>
        ".$rows['5']."
    </td>
    <td class='tdlistasce'>
        ".$rows['10']."
    </td>
    <td class='tdlistasce'>
        <a href=http://".$rows['website'].">".$rows['website']."</a>
    </td>
    <td class='tdlistasce'>
        <a href='mailto:".$rows['email']."'>".$rows['email']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['telefono']."
    </td>
    <td class='tdlistasce'>
        ".$rows['instipo']."
    </td>
    </tr>";

    $color="2";

    }

    else {

    echo "<tr id='par'>
    <td class='tdlistased'>

        <form action='demon-inst3.php' method='post'>
            <input type='hidden' name='borrar' value=".$rows['0']." />
            <input type='submit' name='bborrar' value='Borrar'  class='botones$pSufijo' onClick=\"return confirm('Confirmar Borrar');\" />
        </form>

    </td>
    <td class='tdlistased'>

        <form action='totem-inst2.php' method='post'>
            <input type='hidden' name='editar' value=".$rows['0']." />
            <input type='submit' name='eeditar' value='Editar' class='botones$pSufijo' />
        </form>

    <td class='tdlistasiz'>
        ".$rows['0']."
    </td>
    <td class='tdlistasce'>
        ".$rows['3']."
    </td>
    <td class='tdlistasce'>
        ".$rows['4']."
    </td>
    <td class='tdlistasce'>
        ".$rows['5']."
    </td>
    <td class='tdlistasce'>
        ".$rows['10']."
    </td>
    <td class='tdlistasce'>
        <a href=http://".$rows['website'].">".$rows['website']."</a>
    </td>
    <td class='tdlistasce'>
        <a href='mailto:".$rows['email']."'>".$rows['email']."</a>
    </td>
    <td class='tdlistasce'>
        ".$rows['telefono']."
    </td>
    <td class='tdlistasce'>
        ".$rows['instipo']."
    </td>
    </tr>";

    $color="1";

    }

    }
    echo '</table>';

    mysql_close($db_conector);
    ?>
  </div>
