<?php
/**
* @version      $Id: 'index.php' 19-07-2007 21:10:00 Moises Jafet$
* @package      "Catalogo de los Proyectos TIC en la Republica Dominicana. [:DRmap(WebGUI):]"
* @copyright    Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license      GNU/GPL, see LICENSE.TXT
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

// Define a index.php como fichero raiz de la aplicacion. (Moises)
define( '_VALID_CPTICRD', 1 );

require_once "includes/catalogo.php";


/**
Cada 'pagina' posee un sufijo, el cual permite elegir los selectores CSS que la maquetan.
Favor ver el comentario en los ficheros CSS para mayores detalles. (Moises)
*/
$pSufijo=-1;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title><?php echo $titulo ?> :: <?php echo $website ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link href="css/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/rollovers.js">
</script>
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php

      $mainframe = new GUI ();
      $mainframe->Mapa();
      $mainframe->Cajetin();
      $mainframe->Buscador();
      $mainframe->TablaResumen();

       ?>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
