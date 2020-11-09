<?php
/**
* @version     $Id: 'administrador/demon-protic.php' 08-08-2007 11:27:00 Moises Jafet$
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
  <meta http-equiv="refresh" content="3; URL=index2.php?admin=protic">
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php

      $demon = $_POST["proyecto"];

      if (!$demon) {
      	die('Prohibido el acesso directo a este Recurso');
      	}

      if (!$db_conector) {
      	die('NO conecta; alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla = "catalogo";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;


              $sql="INSERT INTO `$db_tabla` ( `Proyecto` , `descripcion`,`id_Provincia_Intervenida` , `id_Institucion_Patrocina`,
              `id_Estatus_Implementacion`, `id_Area_Desarrollo`, `id_ClasificacionEDom`, `id_Alcance_Sectorial`,
              `id_Alcance_Tipo`, `id_Publico_Blanco`, `ObjetivosProyecto`, `FechaInicio`, `FechaFin`, `website`, `eMail`,
              `DireccionPostal`, `ciudad`, `telefonoprotic` )
              VALUES
              ('$_POST[proyecto]','$_POST[descripcion]','$_POST[provincia]','$_POST[institucion]','$_POST[estatus]',
              '$_POST[adesarrollo]','$_POST[clasedom]','$_POST[alcance]','$_POST[tiposdistedom]','$_POST[blanco]',
              '$_POST[objetivos]','$_POST[fechainicio]','$_POST[fechafin]','$_POST[website]','$_POST[eMail]',
              '$_POST[postal]','$_POST[ciudad]','$_POST[telefonoprotic]')";
              if (!mysql_query($sql,$db_conector)) {
                  die('Error: ' . mysql_error());
              }
                       echo '¡Completado! <img name="Completado" src="../imagenes/completado.gif"><br>';
                       echo 'Ser&aacute;s regresad@ en pocos segundos...';
          mysql_close($db_conector);

      ?>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
