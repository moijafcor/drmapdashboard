<?php
/**
* @version      $Id: 'INSTALAR.php' 02-09-2007 22:24:00 Moises Jafet$
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
defined( '_VALID_CPTICRD' ) or die( 'Prohibido el Acesso a este Recurso' );
?>

*************************
* Requisitos de Sistema *
*************************
-Apache/IIS webserver
-PHP 3, 4, +
-MySQL database

************************************************
* Procedimiento de Instalacion y Configuracion *
************************************************

Esta aplicacion puede intalarse en dos modalidades distintas:

-Individual, con su propio dominio y base de datos, o
-Rider de los CMS (Content Management System) Joomla!
(Series 1.0.x, 1.5.x o superior) y Mambo CMS.


**************************
* Instalacion Individual *
**************************

1. Mediante el fichero 'DR-map-Web-GUI.sql' localizado en la carpeta raiz instale las
tablas de la base de datos MySQL. Este script de instalación creará tablas con el prefijo
'catics_', sin embargo si es necesario puede configurar cualquier otro editando este script
de instalacion.

Automaticamente seran instaladas las provincias y regiones de la Republica Dominicana,
pero bien puede servir para otros propositos haciendo las ediciones pertinentes.

2. Copie los ficheros de la aplicación en la carpeta destino.

3. Edite el fichero 'configuracion.php', localizado en la carpeta raiz asignando los
 valores a las siguientes variables:

-. $titulo = '';
[Titulo de la aplicacion, segun desea aparezca en las etiquetas y en el navegador.]

-. $db_prefijo = 'catics_';
[Prefijo de las tablas en la base de datos. Si no utiliza uno propio, dejar intacto
este valor.]

$host     = ''; // Servidor de la Base de Datos
$user     = ''; // Usuario para conectar a la Base de Datos
$password = ''; // Password para conectar a la Base de Datos
$db       = ''; // Nombre de la Base de Datos

$version   = 'xx'; // Selector del tipo de instalacion.


**************************
* Rider del CMS          *
**************************

1. Mediante el fichero 'DR-map-Web-GUI.sql' localizado en la carpeta raiz instale las
tablas de la base de datos MySQL dentro de la base de datos de su CMS. Este script de
instalación creará tablas con el prefijo 'catics_', sin embargo si es necesario puede
configurar cualquier otro editando este script de instalacion. Al emplear su propio
prefijo en las tablas, podra facilmente distinguirlas de las demas, y por tanto podra
compartir mas de una aplicacion dentro de una misma base de datos a menor riesgo de
accidentes con la data.

Automaticamente seran instaladas las provincias y regiones de la Republica Dominicana,
pero bien puede servir para otros propositos haciendo las ediciones pertinentes.

2. Copie los ficheros de la aplicación en la carpeta destino, dentro de su instalacion
del CMS.

3. Edite el fichero 'configuracion.php', localizado en la carpeta raiz asignando los
 valores a las siguientes variables:

-. $titulo = '';
[Titulo de la aplicacion, segun desea aparezca en las etiquetas y en el navegador.]

-. $db_prefijo = 'catics_';
[Prefijo de las tablas en la base de datos. Si no utiliza uno propio, dejar intacto
este valor.]

$version   = ''; // Selector del tipo de instalacion.

-Joomla! series 1.0.x: $version = 10
-Joomla! series 1.5.x o superior: $version = 15
-Mambo CMS: $version = mos

$rutaCMS = '..';
[Ruta a la carpeta raiz del CMS. Si por ejemplo la carpeta de la aplicacion se localiza
en 'ficheros del CMS/-[:DRmap(WebGUI):]-' coloque '..' a esta variable; si por el
contrario esta en 'ficheros del CMS/foo/-[:DRmap(WebGUI):]-'
coloque '../..', etcetera. ]


**************************
* Configuracion General  *
**************************

1. Con su navegador, vaya a hasta su instalacion [:DRmap(WebGUI):] para acceder a la
interfaz publica, y ??/administrador para el manejador de contenidos.

2. Debe proveer proteccion de acceso a la carpeta '/administrador'. Una forma
posible y muy eficaz es mediante '.htaccess'. Si necesita proveer control de acceso
mas sofisticado debe agregarle un subsistema de control de acceso, aunque me parece
excesivo para los fines de esta aplicacion.

3. En ciertos formularios, como por ejemplo el de agregar proyectos, requieren
que primero sean alimentados los formularios accesorios, de lo contrario los validadores
no permitiran la carga de fichas.