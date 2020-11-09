<?php
/**
* @version    $Id: 'administrador/demon-tipos2.php' 05-08-2007 01:13:00 Moises Jafet$
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
  <meta http-equiv="refresh" content="3; URL=index2.php?admin=tipos">
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php

      $demon = $_POST["nombre"];

      if (!$demon) {
      	die('Prohibido el acesso directo a este Recurso');
      	}


      if (!$db_conector) {
          die('NO conecta; alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla = "tipos_distribucion_areas_edom";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos. 
      $db_tabla     =  $db_prefijo.$nombre_tabla;

      
      $sql = 'UPDATE '.$db_tabla.' SET
      `nombre` = \''.$_POST['nombre'].'\', `descripcion` = \''.$_POST['descripcion'].'\'
      WHERE `id` = \''.$_GET['id'].'\'
      LIMIT 1;';
      $result = mysql_query($sql, $db_conector);
      if (!$result) {
          echo("<p>Error en la operacion; alerta al Webmaster: " . mysql_error() . "</p>");
          exit();

      }

      echo '¡Completado! <img name="Completado" src="../imagenes/completado.gif"><br>';
      echo 'Ser&aacute;s regresad@ en pocos segundos...';

      mysql_close ($db_conector);

       ?>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
