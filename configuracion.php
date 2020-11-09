<?php
/**
* @version      $Id: 'configuracion.php' 30-08-2007 11:32:00 Moises Jafet$
* @package      "[:DRmap(WebGUI):]"
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


/**
* Favor ver instrucciones de instalacion en 'INSTALL.php' | For install instructions
* please see 'INSTALL.php'.
*/


/**
 * Titulo de la Aplicacion
 *
 * Application Name
*/

$titulo = 'Cat&aacute;logo de Proyectos';

/**
 * $db_prefijo = prefijo de las tablas en la base de datos, a fin de facilitar la gestion
 * de la aplicacion junto a otras aplicaciones que compartan la misma base de datos.
*/

$db_prefijo = 'catics_';


/**
 * Selector de la version | Version Selector
 *
 * -Joomla! series 1.0.x: $version = 10
 * -Joomla! series 1.5.x o superior: $version = 15
 * -Mambo CMS: $version = mos
 * -Para una instalacion independiente | Stand alone installation : $version = xx
 *
 */

$version   = '';


/**
* En caso de utilizar un CMS | For CMS users.
*/

$rutaCMS = '..'; // Ruta a la carpeta raiz del CMS | Path to the CMS root folder.


/**
 * Si va a instalar la aplicacion independiente de los CMS Joomla! o Mambo
 * debe complimentar los siguientes campos.
 *
 * For an stand alone installation, independent of Joomla! or Mambo CMS
 * please set these parameters.
 *
*/

$host     = ''; // Servidor de la Base de Datos | Database host
$user     = ''; // Usuario para conectar a la Base de Datos | Database username
$password = ''; // Password para conectar a la Base de Datos | Database password
$db       = ''; // Nombre de la Base de Datos | Database name
$website  = ''; // Nombre del Website principal | Main website name



/*******************************************************************************************
 * No editar a menos que sepa lo que hace | Do not edit unless you know what you are doing *
*******************************************************************************************/


$altagraciaIDtabla             = 1;
$azuaIDtabla                   = 2;
$bahorucoIDtabla               = 3;
$barahonaIDtabla               = 4;
$dajabonIDtabla                = 5;
$distritonacionalIDtabla       = 6;
$duarteIDtabla                 = 7;
$eliaspinaIDtabla              = 8;
$elseyboIDtabla                = 9;
$espaillatIDtabla              = 10;
$hatomayorIDtabla              = 11;
$independenciaIDtabla          = 12;
$laromanaIDtabla               = 13;
$lavegaIDtabla                 = 14;
$mariatrinidadsanchezIDtabla   = 15;
$monsnouelIDtabla              = 16;
$montecristiIDtabla            = 17;
$monteplataIDtabla             = 18;
$pedernalesIDtabla             = 19;
$peraviaIDtabla                = 20;
$puertoplataIDtabla            = 21;
$salcedoIDtabla                = 22;
$samanaIDtabla                 = 13;
$sanchezramirezIDtabla         = 24;
$sancristobalIDtabla           = 25;
$sanjoseocoaIDtabla            = 26;
$sanjuanmaguanaIDtabla         = 27;
$sanpedromacorisIDtabla        = 28;
$santiagoIDtabla               = 29;
$santiagorodriguezIDtabla      = 30;
$santodgoIDtabla               = 31;
$valverdemaoIDtabla            = 32;


?>
