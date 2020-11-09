<?php
/**
* @version      $Id: 'INSTALL.php' 29-08-2007 16:40:00 Moises Jafet$
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

***********************
* System Requirements *
***********************
-Apache/IIS webserver
-PHP 3, 4, +
-MySQL database

************************************************
* Installation and Configuration               *
************************************************

This application can be installed on two different setups:

-Stand alone, inside its own domain name and database, or
-As a rider for the popular CMS (Content Management System) Joomla!
(Series 1.0.x, 1.5.x, and up ) and Mambo CMS.


**************************
* Stand alone install    *
**************************

1. Run the SQL script file named 'DR-map-Web-GUI.sql', localized inside the root folder,
in order to install the application MySQL tables on its database. This file will create
'catics_' prefixed tables, but you can set your own prefix by editing this file.

Dominican Republic provinces and regions' tables will be automatically populated, but you
can edit this file to suit other purposes.

2. Upload the application files to its webserver web-public folder.

3. Edit the 'configuracion.php' file, right inside the root folder, to set these variables:

-. $titulo = '';
[The application title, as will appear on labels and the browser.]

-. $db_prefijo = 'catics_';
[Database table' prefix. Leave as is if you are not setting your own one.]

$host     = ''; // Database server
$user     = ''; // Database username
$password = ''; // Database password
$db       = ''; // Database name

$version   = 'xx'; // Installation type selector.


**************************
* CMS Rider              *
**************************

1. Run the SQL script file named 'DR-map-Web-GUI.sql', localized inside the root folder,
in order to install the application tables on the CMS database. This file will create
'catics_' prefixed tables, but you can set your own prefix by editing this file. Using an
specific tables' prefix you can differentiate them from other applications tables, facilitating
maintenance and general manipulations tasks.

Dominican Republic provinces and regions' tables will be automatically populated, but you
can edit this file to suit other purposes.

2. Upload the application files to its webserver web-public folder.

3. Edit the 'configuracion.php' file, right inside the root folder, to set these variables:

-. $titulo = '';
[The application title, as will appear on labels and the browser.]

-. $db_prefijo = 'catics_';
[Database table' prefix. Leave as is if you are not setting your own one.]

$version   = ''; // Installation type selector.

-Joomla! series 1.0.x: $version = 10
-Joomla! series 1.5.x o superior: $version = 15
-Mambo CMS: $version = mos

$rutaCMS = '..';

[Path to your CMS root files. If it is running from 'CMS path/[:DRmap(WebGUI):]' put '..';
if 'CMS path/foo/[:DRmap(WebGUI):]' put '../..', and so on. ]


**************************
* General Configuration  *
**************************

1. Using your browser, go to your installation URL in order to load the front end; and
'/administrador' to access its content management system (the back end).

2. You shall provide adequate protection to the '/administrador' folder. A easy and
pretty secure way is using a '.htaccess' mechanism. If you need a more advanced ACL system,
you have to add one to the code base, but I honestly think this is too excessive for
this application purposes.

3. Some forms on the content management system, e.g. the Projects Form, require some
drop down menus to be populated first; by the contrary, the form validators wont allow
data insertion.