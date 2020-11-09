<?php
/**
* @version         $Id: 'administrador/index.php' 29-07-2007 21:50:00 Moises Jafet$
* @package         "[:DRmap(WebGUI):]"
* @copyright       Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license         GNU/GPL, see LICENSE.TXT
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

// Define a ../administrador/index2.php como fichero raiz de la aplicacion. (Moises)
define( '_VALID_CPTICRD', 1 );

require_once "includes/mantenimientos.php";

$pSufijo="-2";


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>Administraci&oacute;n :

          <?php
        $subtitulo = $_GET["admin"];
        switch ($subtitulo) {
        case NULL:
            echo "Proyectos";
            break;
        case protic:
            echo "Proyectos";
            break;
        case alcance:
            echo "Alcance Sectorial";
            break;
        case areas:
            echo "Areas de Desarrollo (Indotel)";
            break;
        case blanco:
            echo "Publico blanco beneficiario del proyecto";
            break;
        case tipos:
            echo "Tipos de Areas de Distribucion segun eDominicana";
            break;
        case clas:
            echo "Clasificacion segun eDominicana";
            break;
        case dist:
            echo "Distribución por Areas de Desarrollo (eDom)";
            break;
        case estatus:
            echo "Estatus del avance de la Implementación";
            break;
        case inst:
            echo "Lista de Instituciones involucradas";
            break;
        case instipo:
            echo "Tipos de instituciones patrocinadoras";
            break;
        case provincia:
            echo "Listado de las provincias";
            break;
        case region:
            echo "Regiones a las que pertenecen las provincias";
            break;
        }
        ?>
        | <?php echo $titulo ?>
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $js ?>/organizador.js">
</script>
<script type="text/javascript" src="<?php echo $js ?>/gen_validatorv2.js">
</script>
<script type="text/javascript" src="<?php echo $js ?>/calendar3.js">
</script>
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php include("includes/cabezote.php"); ?>

      <div>
        <?php
        $admin = $_GET["admin"];
        switch ($admin) {
        case NULL:
            require_once ("totem-protic.php");
            break;
        case protic:
            require_once ("totem-protic.php"); //Catalogo de proyectos (x)
            break;
        case alcance:
            require_once ("totem-alcance.php"); //Area de alcance geografico (x)
            break;
        case areas:
            require_once ("totem-areas.php"); // Areas de Desarrollo (Indotel) (x)
            break;
        case blanco:
            require_once ("totem-blanco.php"); //Publico blanco beneficiario del proyecto (x)
            break;
        case tipos:
            require_once ("totem-tipos.php"); //Tipos de Areas de Distribucion segun eDominicana (x)
            break;
        case clas:
            require_once ("totem-clas.php"); //Clasificacion segun eDominicana  (x)
            break;
        case dist:
            require_once ("totem-dist.php"); //Distribución por Areas de Desarrollo (eDom) (x)
            break;
        case estatus:
            require_once ("totem-estatus.php"); //Estatus del avance de la Implementación (x)
            break;
        case inst:
            require_once ("totem-inst.php"); //Lista de Instituciones involucradas (x)
            break;
        case instipo:
            require_once ("totem-instipo.php"); //Tipos de instituciones patrocinadoras (x)
            break;
        case provincia:
            require_once ("totem-provincia.php"); //Listado de las provincias (x)
            break;
        case region:
            require_once ("totem-region.php"); //Regiones a quienes pertenecen las provincias (x)
            break;
        }
        ?>
        <?php include("includes/footer.php"); ?>
      </div>
    </div><!-- Fin del Core -->
  </div><!-- Fin del Wrapper -->
</body>
</html>
