<?php
/**
* @version    $Id: 'administrador/index3.php' 10-08-2007 10:00:00 Moises Jafet$
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
/**
 Define a estatus-implementacion.php como fichero raiz de la aplicacion. (Moises)
 Control de acceso directo al fichero. (Moises)
*/
define( '_VALID_CPTICRD', 1 );

require_once "includes/mantenimientos.php";
include ("../includes/calculador.php");


$pSufijo="-3";

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
  <title>Administraci&oacute;n | <?php echo $titulo ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
  <link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="wrapper" align="center">
    <div id="core">
      <?php
	  $ok      = $_GET["ok"];
	  $retorno = $_GET["buscar"];
      $protic  = $_GET["protic"];
      if (!$db_conector)

      {

      die('NO conecta, �Alerta al Webmaster!: ' . mysql_error());

      }

      $nombre_tabla       = "catalogo";

      //Articula el nombre local de la tabla con el prefijo general en la base de datos.
      $db_tabla           =  $db_prefijo.$nombre_tabla;

      $nombre_tabla1      = "provincia_intervenida";
      $db_tabla1          = $db_prefijo.$nombre_tabla1;

      $nombre_tabla2      = "institu_patrocinadora";
      $db_tabla2          = $db_prefijo.$nombre_tabla2;

      $nombre_tabla3      = "estatus_implementacion";
      $db_tabla3          = $db_prefijo.$nombre_tabla3;

      $nombre_tabla4      = "areas_desarrollo";
      $db_tabla4          = $db_prefijo.$nombre_tabla4;

      $nombre_tabla5      = "tipos_distribucion_areas_edom";
      $db_tabla5          = $db_prefijo.$nombre_tabla5;

      $nombre_tabla6      = "clasificacion_edom";
      $db_tabla6          = $db_prefijo.$nombre_tabla6;

      $nombre_tabla7      = "alcance_tipo";
      $db_tabla7          = $db_prefijo.$nombre_tabla7;

      $nombre_tabla8      = "publico_blanco";
      $db_tabla8          = $db_prefijo.$nombre_tabla8;

      $nombre_tabla9      = "institu_tipo";
      $db_tabla9          = $db_prefijo.$nombre_tabla9;


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
              . " LEFT JOIN $db_tabla9 j ON (c.id_Institu_Tipo = j.id)"
              . " WHERE (a.id=$protic) "

              ) or die("<div id='aviso' class='aviso-3'>
                       <div id='augur'>
                       Debe elegir un Item para ver su correspondiente Ficha de Proyecto. <br>
                       Por favor regrese a la pantalla de origen. <br>
                       Clique <a href='index2.php'>AQUI</a> para regresar.
                       </div>
                       </div>") ;

      while ($rows = mysql_fetch_array($result))
              {
      $id                     = $rows['0'];
      $proyecto               = $rows['1'];
      $descripcion            = $rows['2'];
      $provincia              = $rows['21'];
      $idprovincia            = $rows['20'];
      $institucion            = $rows['28'];
      $estatus                = $rows['35'];
      $adesarrollo            = $rows['38'];
      $clasedom               = $rows['44'];
      $alcance                = $rows['47'];
      $tiposdistedom          = $rows['41'];
      $blanco                 = $rows['50'];
      $objetivos              = $rows['12'];
      $fechainicio            = $rows['13'];
      $fechafin               = $rows['14'];
      $website                = $rows['15'];
      $email                  = $rows['16'];
      $postal                 = $rows['17'];
      $ciudad                 = $rows['18'];
      $telefonoprotic         = $rows['19'];
      $websiteinstitucion     = $rows['31'];
      $icon                   = $rows['3'];
      $instipo                = $rows['53'];
      }
      ?>

      <div id="cabezote" title="::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::">
        <div id="Titulo">
          <h1>::Consola de Administraci&oacute;n [:DRmap(WebGUI):]::</h1>
        </div>

        <div id="Etiqueta">
          <h2>Ficha de Proyecto</h2>
        </div>

        <div id="menu">
          <h2><a href='index2.php?provincia=<?php echo $idprovincia ?>'>Cat&aacute;logo de Proyectos</a></h2>
		  <?php if ($ok == 1) echo "<h2><a href='buscador.php?buscar=$retorno'>Regresar a la tabla de resultados</a></h2>" ?>
        </div><?php
        if ($id < 1) echo
           "<div id='aviso' class='aviso-3'>
                         <div id='augur'>
                         Debe elegir un Item para ver su correspondiente Ficha de Proyecto. <br>
                         Por favor regrese a la pantalla de origen. <br>
                         Clique <a href='index2.php?provincia=<?php echo $idprovincia ?>AQUI</a> para regresar.
      </div>
    </div>" ?>

    <div id="cuba" class="cuba<?php echo $pSufijo ?>" style='<?php if ($id < 1) echo "display: none;" ?>'>
      <div id="intro">
        <div id="icono" class="icono<?php echo $pSufijo ?>">
          <?php
          switch ($icon)
                           {
                  case $altagraciaIDtabla:
                  echo "<img src='../imagenes/altagracia_0.gif' width='52px' height='68px' alt='Provincia La Altagracia' border='0'>";
                  break;
                  case $azuaIDtabla:
                  echo "<img src='../imagenes/azua_0.gif' width='60px' height='68px' alt='Provicia Azua' border='0'>";
                  break;
                  case $bahorucoIDtabla:
                  echo "<img src='../imagenes/bahoruco_0.gif' width='70px' height='38px' alt='Provincia Bahoruco' border='0'>";
                  break;
                  case $barahonaIDtabla:
                  echo "<img src='../imagenes/barahona_0.gif' width='57px' height='75px' alt='Provincia Barahona' border='0'>";
                  break;
                  case $dajabonIDtabla:
                  echo "<img src='../imagenes/dajabon_0.gif' width='55px' height='70px' alt='Provincia Dajab�n' border='0'>";
                  break;
          /*      case $distritonacionalIDtabla:
                  echo "<img src='../imagenes/_0.gif' width='60px' height='70%' alt='' border='0'>";
                  break; */
                  case $duarteIDtabla:
                  echo "<img src='../imagenes/duarte_0.gif' width='70px' height='45px' alt='Provincia Duarte' border='0'>";
                  break;
                  case $eliaspinaIDtabla:
                  echo "<img src='../imagenes/eliaspina_0.gif' width='56px' height='75px' alt='Provincia Elias Pi�a' border='0'>";
                  break;
                  case $elseyboIDtabla:
                  echo "<img src='../imagenes/elseybo_0.gif' width='70px' height='66px' alt='Provincia El Seybo' border='0'>";
                  break;
                  case $espaillatIDtabla:
                  echo "<img src='../imagenes/espaillat_0.gif' width='70px' height='48px' alt='Provincia Espaillat' border='0'>";
                  break;
                  case $hatomayorIDtabla:
                  echo "<img src='../imagenes/hatomayor_0.gif' width='55px' height='70px' alt='Provincia Hato Mayor' border='0'>";
                  break;
                  case $independenciaIDtabla:
                  echo "<img src='../imagenes/independencia_0.gif' width='70px' height='50px' alt='Provincia Independencia' border='0'>";
                  break;
                  case $laromanaIDtabla:
                  echo "<img src='../imagenes/laromana_0.gif' width='64px' height='70px' alt='Provincia La Romana' border='0'>";
                  break;
                  case $lavegaIDtabla:
                  echo "<img src='../imagenes/lavega_0.gif' width='64px' height='70px' alt='Provincia La Vega' border='0'>";
                  break;
                  case $mariatrinidadsanchezIDtabla:
                  echo "<img src='../imagenes/mariatrinidadsanchez_0.gif' width='63px' height='70px' alt='Provincia Mar�a Trinidad S�nchez' border='0'>";
                  break;
                  case $monsnouelIDtabla:
                  echo "<img src='../imagenes/monsnouel_0.gif' width='61px' height='70px' alt='Monse�or Nouel' border='0'>";
                  break;
                  case $montecristiIDtabla:
                  echo "<img src='../imagenes/montecristi_0.gif' width='70px' height='45px' alt='Provincia Montecristi' border='0'>";
                  break;
                  case $monteplataIDtabla:
                  echo "<img src='../imagenes/monteplata_0.gif' width='70px' height='42px' alt='Provincia Monteplata' border='0'>";
                  break;
                  case $pedernalesIDtabla:
                  echo "<img src='../imagenes/pedernales_0.gif' width='49px' height='70px' alt='Provincia Pedernales' border='0'>";
                  break;
                  case $peraviaIDtabla:
                  echo "<img src='../imagenes/peravia_0.gif' width='70px' height='56px' alt='Provincia Peravia' border='0'>";
                  break;
                  case $puertoplataIDtabla:
                  echo "<img src='../imagenes/puertoplata_0.gif' width='70px' height='32px' alt='Provincia Puerto Plata' border='0'>";
                  break;
                  case $salcedoIDtabla:
                  echo "<img src='../imagenes/salcedo_0.gif' width='39px' height='67px' alt='Provincia Salcedo' border='0'>";
                  break;
                  case $samanaIDtabla:
                  echo "<img src='../imagenes/samana_0.gif' width='70px' height='40px' alt='Provincia Saman�' border='0'>";
                  break;
                  case $sanchezramirezIDtabla:
                  echo "<img src='../imagenes/sanchezramirez_0.gif' width='70px' height='43px' alt='Provincia S�nchez Ramirez' border='0'>";
                  break;
                  case $sancristobalIDtabla:
                  echo "<img src='../imagenes/sancristobal_0.gif' width='43px' height='70px' alt='Provincia San Crist�bal' border='0'>";
                  break;
                  case $sanjoseocoaIDtabla:
                  echo "<img src='../imagenes/sanjoseocoa_0.gif' width='63px' height='69px' alt='San Jos� de Ocoa' border='0'>";
                  break;
                  case $sanjuanmaguanaIDtabla:
                  echo "<img src='../imagenes/sanjuanmaguana_0.gif' width='70px' height='57px' alt='Provincia San Juan de la Maguana' border='0'>";
                  break;
                  case $sanpedromacorisIDtabla:
                  echo "<img src='../imagenes/sanpedromacoris_0.gif' width='70px' height='54px' alt='San Pedro de Macoris' border='0'>";
                  break;
                  case $santiagoIDtabla:
                  echo "<img src='../imagenes/santiago_0.gif' width='70px' height='63px' alt='Provincia Santiago' border='0'>";
                  break;
                  case $santiagorodriguezIDtabla:
                  echo "<img src='../imagenes/santiagorodriguez_0.gif' width='70px' height='68px' alt='Santiago Rodr�guez' border='0'>";
                  break;
                  case $santodgoIDtabla:
                  echo "<img src='../imagenes/santodgo_0.gif' width='70px' height='37px' alt='Provincia Santo Domingo' border='0'>";
                  break;
                  case $valverdemaoIDtabla:
                  echo "<img src='../imagenes/valverdemao_0.gif' width='66px' height='68px' alt='Provincia Valverde' border='0'>";
                  break;
                            }
          ?>
        </div>

        <div id="descriptor" class="descriptor<?php echo $pSufijo ?>">
          <?php

          echo "<div class='etiqueta$pSufijo'><h3>Provincia $provincia </h3></div>";
          echo "<div class='etiqueta$pSufijo'><h4>$proyecto</h4></div>";

          ?>
        </div>
      </div><!-- Fin del Intro -->

      <div id="colder" class="colizq<?php echo $pSufijo ?>">
        <div id="data1" class="data1<?php echo $pSufijo ?>">
          <?php

          if ($estatus)         echo "<div class='etiqueta$pSufijo'><h4>Estatus Actual</h4></div>";
          if ($estatus)         echo "<div class='etiqueta$pSufijo'><blockquote>$estatus</blockquote></div>";

          if ($blanco)          echo "<div class='etiqueta$pSufijo'><h4>P&uacute;blico Blanco</h4></div>";
          if ($blanco)          echo "<div class='etiqueta$pSufijo'><blockquote>$blanco</blockquote></div>";

          if ($institucion)     echo "<div class='etiqueta$pSufijo'><h4>Instituci&oacute;n Patrocinadora</h4></div>";
          if ($institucion)     echo "<div class='etiqueta$pSufijo'><blockquote><a href='http://$websiteinstitucion'>$institucion</a></blockquote></div>";

          if ($instipo)         echo "<div class='etiqueta$pSufijo'><h4>Tipo de Instituci&oacute;n</h4></div>";
          if ($instipo)         echo "<div class='etiqueta$pSufijo'><blockquote>$instipo</blockquote></div>";

          if ($adesarrollo)     echo "<div class='etiqueta$pSufijo'><h4>&Aacute;rea de Desarrollo</h4></div>";
          if ($adesarrollo)     echo "<div class='etiqueta$pSufijo'><blockquote>$adesarrollo</blockquote></div>";

          if ($clasedom)        echo "<div class='etiqueta$pSufijo'><h4>Clasificaci&oacute;n E-Dominicana</h4></div>";
          if ($clasedom)        echo "<div class='etiqueta$pSufijo'><blockquote>$clasedom</blockquote></div>";

          if ($tiposdistedom)   echo "<div class='etiqueta$pSufijo'><h4>Tipo de Proyecto</h4></div>";
          if ($tiposdistedom)   echo "<div class='etiqueta$pSufijo'><blockquote>$tiposdistedom</blockquote></div>";

          if ($telefonoprotic)  echo "<div class='etiqueta$pSufijo'><h4>Tel&eacute;fono</h4></div>";
          if ($telefonoprotic)  echo "<div class='etiqueta$pSufijo'><blockquote>$telefonoprotic</blockquote></div>";

          if ($postal)          echo "<div class='etiqueta$pSufijo'><h4>Direcci&oacute;n Postal</h4></div>";
          if ($postal)          echo "<div class='etiqueta$pSufijo'><blockquote>$postal</blockquote></div>";

          if ($ciudad)          echo "<div class='etiqueta$pSufijo'><h4>Ciudad:</h4></div>";
          if ($ciudad)          echo "<div class='etiqueta$pSufijo'><blockquote>$ciudad</blockquote></div>";


          ?>
        </div>
      </div>

      <div id="colder" class="colder<?php echo $pSufijo ?>">
        <div id="data2" class="data2<?php echo $pSufijo ?>">
          <?php

          if ($fechainicio != 0000-00-00) echo "<div class='etiqueta$pSufijo'>Fecha de Inicio: $fechainicio</div>";

          if ($fechafin != 0000-00-00)    echo "<div class='etiqueta$pSufijo'>Fecha de Finalizaci&oacute;n: $fechafin </div>";

          if ($website)                   echo "<div class='etiqueta$pSufijo'><h4>Sede en Internet:</h4></div>";
          if ($website)                   echo "<div class='etiqueta$pSufijo'><blockquote><a href='http://$website'>Visite el Website clicando aqu&iacute;</a></blockquote></div>";

          if ($email)                     echo "<div class='etiqueta$pSufijo'><h4>Correo Electr&oacute;nico </h4></div>";
          if ($email)                     echo "<div class='etiqueta$pSufijo'><a href='mailto:$email'><blockquote>$email</blockquote></a></div>";

          if ($descripcion)               echo "<div class='etiqueta$pSufijo'><h4>Descripci&oacute;n</h4></div>";
          if ($descripcion)               echo "<div class='etiqueta$pSufijo'><blockquote>$descripcion </blockquote></div>";

          if ($objetivos)                 echo "<div class='etiqueta$pSufijo'><h4>Objetivos generales</h4></div>";
          if ($objetivos)                 echo "<div class='etiqueta$pSufijo'><blockquote>$objetivos</blockquote></div>";

          if ($alcance)                   echo "<div class='etiqueta$pSufijo'><h4>Alcance</h4></div>";
          if ($alcance)                   echo "<div class='etiqueta$pSufijo'><blockquote>$alcance</blockquote></div>";

          ?>
        </div>
      </div>
    </div><!-- Fin de la cuba -->
  </div><!-- Fin del Core -->
  <!-- Fin del Wrapper -->
</body>
</html>
