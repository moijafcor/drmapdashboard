<?php
/**
* @version     $Id: 'index2.php' 13-08-2007 06:36:00 Moises Jafet$
* @package     "Catalogo de los Proyectos TIC en la Republica Dominicana. [:DRmap(WebGUI):]"
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

// Define a index2.php como fichero raiz de la aplicacion. (Moises)
define( '_VALID_CPTICRD', 1 );

require_once "includes/catalogo.php";

$pSufijo="-cat";


function _INPUT($provincia) {
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        return strip_tags($_GET[$provincia]);
}

$provincia = _INPUT('provincia');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title><?php echo $titulo ?> :: <?php echo $website ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link href="css/css.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <div id="Etiqueta" class="cabezote<?php echo $pSufijo ?>">
        <h2>Proyectos TIC Rep&uacute;blica Dominicana</h2><span><a href="index.php">Regresar al Mapa de Provincias</a></span>
      </div><?php
      if ($provincia < 1) echo
         "<div id='aviso' class='aviso-3'>
                       <div id='augur'>
                       Debe elegir una Provincia para ver su Cuadro de Proyectos. <br>
                       Por favor regrese a la pantalla de origen. <br>
                       Clique <a href='index.php'>AQUI</a> para regresar.
                       </div>
              </div>";

      ?>

      <div id='Tabla de resultados' title='Tabla de resultados' style='<?php if ($provincia < 1) echo "display: none;" ?>'>
        <?php



        if (!$db_conector)

                {

        die('NO conecta, ¡Alerta al Webmaster3!: ' . mysql_error());

        }

        $nombre_tabla = "catalogo";

        //Articula el nombre local de la tabla con el prefijo general en la base de datos.
        $db_tabla =  $db_prefijo.$nombre_tabla;

        $nombre_tabla1 = "provincia_intervenida";
        $db_tabla1 = $db_prefijo.$nombre_tabla1;

        $nombre_tabla2 = "institu_patrocinadora";
        $db_tabla2 = $db_prefijo.$nombre_tabla2;

        $nombre_tabla3 = "estatus_implementacion";
        $db_tabla3 = $db_prefijo.$nombre_tabla3;

        $nombre_tabla4 = "areas_desarrollo";
        $db_tabla4 = $db_prefijo.$nombre_tabla4;

        $nombre_tabla5 = "tipos_distribucion_areas_edom";
        $db_tabla5 = $db_prefijo.$nombre_tabla5;

        $nombre_tabla6 = "clasificacion_edom";
        $db_tabla6 = $db_prefijo.$nombre_tabla6;

        $nombre_tabla7 = "alcance_tipo";
        $db_tabla7 = $db_prefijo.$nombre_tabla7;

        $nombre_tabla8 = "publico_blanco";
        $db_tabla8 = $db_prefijo.$nombre_tabla8;




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
                . " WHERE (a.id_Provincia_Intervenida=$provincia) ORDER BY `a` . `id` ASC"

                );

        $color="1";

        echo '<table id="proyectos" class="proyectos" cellpadding="2" cellspacing="0">';
        echo "<tr class='etiqueta'>

        <th class='thlistasiz-protic'>Id</th>
        <th class='thlistasce-protic'>Proyecto</th>
        <th class='thlistasce-protic'>Instituci&oacute;n</th>
        <th class='thlistasce-protic'>Provincia</th>
        <th class='thlistasde-protic'>Estatus</th>
        <th class='thlistasce-protic'>Website</th>
        <th class='thlistasce-protic'>Clasificaci&oacute;n (eDom)</th>
        <th class='thlistasde-protic'>Fecha de Inicio</th>

        </tr>";
        while($rows=mysql_fetch_array($result))



        {

        if($color==1)

        {
        // Token para detectar un result set vacio, en cuyo caso desplegar la alerta al usuario.

        $token = $rows['0'];

        echo "<tr id='impar'>

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
        <a href=http://".$rows['15'].">Visite el Website clicando aqu&iacute;</a>
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
        <a href=http://".$rows['15'].">Visite el Website clicando aqu&iacute;</a>
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

        //Alerta al usuario para el caso en que el 'result set' este vacio.

        if (empty($token)) { echo
           "<div id='aviso2' class='aviso-3'>
                         <div id='augur'>
                         No existen Proyectos registrados para esta Provincia <br>
                         Por favor regrese a la pantalla de origen. <br>
                         Clique <a href='index.php'>AQUI</a> para regresar.
                         </div>
                </div>";}


        mysql_close($db_conector);
        ?>
      </div>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
