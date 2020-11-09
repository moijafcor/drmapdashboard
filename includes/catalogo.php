<?php
/**
* @version      $Id: 'catalogo.php' 13-08-2007 06:50:00 Moises Jafet$
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

//Control de acceso directo al fichero. (Moises)
defined( '_VALID_CPTICRD' ) or die( 'Prohibido el Acesso a este Recurso [Error #00CAT00]' );

define ('AT_INCLUDE_PATH', 'includes/');

require_once "configuracion.php";

switch ($version) {
case 10:
    require_once "$rutaCMS/configuration.php";

    $website     = $mosConfig_sitename;

    $db_conector = mysql_connect ("$mosConfig_host","$mosConfig_user","$mosConfig_password");
    $css         = "css/css.css";
    $js          = "js/";
break;
case 15:
    require_once "$rutaCMS/configuration.php";

    $version             = new JConfig;
    $host                = $version->host;
    $user                = $version->user;
    $password            = $version->password;
    $mosConfig_db        = $version->db;
    $website             = $version->sitename;

    $db_conector = mysql_connect ($host, $user, $password);
    $css         = "css/css.css";
    $js          = "js/";
break;
case xx:
    $host                = $host;
    $user                = $user;
    $password            = $password;
    $mosConfig_db        = $db;
    $mosConfig_sitename  = $website;

    $db_conector = mysql_connect ($host, $user, $password);
    $css         = "css/css.css";
    $js          = "js/";
break;
case mos:
    require_once "$rutaCMS/configuration.php";

    $website     = $mosConfig_sitename;

    $db_conector = mysql_connect ("$mosConfig_host","$mosConfig_user","$mosConfig_password");
    $css         = "css/aplicacion-mapa-tic-cnsic.css";
    $js          = "js/";
break;
}

// Verificador de Instalacion | Install checker

if (!db_conector) die ('...Pendiente de INSTALACION/CONFIGURACION... | ...Pending INSTALL/CONFIGURATION...');


//Inicializador de la base de datos | Database starter

mysql_select_db("$mosConfig_db", $db_conector);


// Verificador de que la instalacion ha sido completada | Installation verifier

$db_nombre   = "provincia_intervenida"; //Nombre de la tabla de las provincias
$db          = $db_prefijo.$db_nombre; //Articula el prefijo a la tabla.
$verificador = mysql_query("SELECT * FROM  $db WHERE id = 1 ");
if (!$verificador) die ('...Pendiente de INSTALACION/CONFIGURACION... | ...Pending INSTALL/CONFIGURATION...');


//Armador del Front End

require_once (AT_INCLUDE_PATH. 'calculador.php');

class GUI {

    var $mapa;
    var $cajetin;
    var $buscador;
    var $tablaresumen;

    function Mapa()
    {
    	global $pSufijo;

    	global $altagraciaIDtabla;
    	global $azuaIDtabla;
    	global $bahorucoIDtabla;
    	global $barahonaIDtabla;
    	global $dajabonIDtabla;
    	global $distritonacionalIDtabla;
    	global $duarteIDtabla;
    	global $eliaspinaIDtabla;
    	global $elseyboIDtabla;
    	global $espaillatIDtabla;
    	global $hatomayorIDtabla;
    	global $independenciaIDtabla;
    	global $laromanaIDtabla;
    	global $lavegaIDtabla;
    	global $mariatrinidadsanchezIDtabla;
    	global $monsnouelIDtabla;
    	global $montecristiIDtabla;
    	global $monteplataIDtabla;
    	global $pedernalesIDtabla;
    	global $peraviaIDtabla;
    	global $puertoplataIDtabla;
    	global $salcedoIDtabla;
    	global $samanaIDtabla;
    	global $sanchezramirezIDtabla;
    	global $sancristobalIDtabla;
    	global $sanjoseocoaIDtabla;
    	global $sanjuanmaguanaIDtabla;
    	global $sanpedromacorisIDtabla;
    	global $santiagoIDtabla;
    	global $santiagorodriguezIDtabla;
    	global $santodgoIDtabla;
    	global $valverdemaoIDtabla;

    	global $altagracia;
    	global $azua;
    	global $bahoruco;
    	global $barahona;
    	global $dajabon;
    	global $distritonacional;
    	global $duarte;
    	global $eliaspina;
    	global $elseybo;
    	global $espaillat;
    	global $hatomayor;
    	global $independencia;
    	global $laromana;
    	global $lavega;
    	global $mariatrinidadsanchez;
    	global $monsnouel;
    	global $montecristi;
    	global $monteplata;
    	global $pedernales;
    	global $peravia;
    	global $puertoplata;
    	global $salcedo;
    	global $samana;
    	global $sanchezramirez;
    	global $sancristobal;
    	global $sanjoseocoa;
    	global $sanjuanmaguana;
    	global $sanpedromacoris;
    	global $santiago;
    	global $santiagorodriguez;
    	global $santodgo;
    	global $valverdemao;


        $this->mapa = require (AT_INCLUDE_PATH. 'mapa.php');
        return $this->mapa;
    }

    function Cajetin()
    {
    	global $pSufijo;
        $this->cajetin = require (AT_INCLUDE_PATH. 'cajetin.php');
        return $this->cajetin;
    }

    function Buscador()
    {
    	global $pSufijo;
        $this->mapa = require (AT_INCLUDE_PATH. 'buscador.php');
        return $this->buscador;
    }

    function TablaResumen()
    {
    	global $pSufijo;

    	global $altagraciaIDtabla;
    	global $azuaIDtabla;
    	global $bahorucoIDtabla;
    	global $barahonaIDtabla;
    	global $dajabonIDtabla;
    	global $distritonacionalIDtabla;
    	global $duarteIDtabla;
    	global $eliaspinaIDtabla;
    	global $elseyboIDtabla;
    	global $espaillatIDtabla;
    	global $hatomayorIDtabla;
    	global $independenciaIDtabla;
    	global $laromanaIDtabla;
    	global $lavegaIDtabla;
    	global $mariatrinidadsanchezIDtabla;
    	global $monsnouelIDtabla;
    	global $montecristiIDtabla;
    	global $monteplataIDtabla;
    	global $pedernalesIDtabla;
    	global $peraviaIDtabla;
    	global $puertoplataIDtabla;
    	global $salcedoIDtabla;
    	global $samanaIDtabla;
    	global $sanchezramirezIDtabla;
    	global $sancristobalIDtabla;
    	global $sanjoseocoaIDtabla;
    	global $sanjuanmaguanaIDtabla;
    	global $sanpedromacorisIDtabla;
    	global $santiagoIDtabla;
    	global $santiagorodriguezIDtabla;
    	global $santodgoIDtabla;
    	global $valverdemaoIDtabla;
    	global $pSufijo;
    	global $altagraciaIDtabla;

    	global $altagracia;
    	global $azua;
    	global $bahoruco;
    	global $barahona;
    	global $dajabon;
    	global $distritonacional;
    	global $duarte;
    	global $eliaspina;
    	global $elseybo;
    	global $espaillat;
    	global $hatomayor;
    	global $independencia;
    	global $laromana;
    	global $lavega;
    	global $mariatrinidadsanchez;
    	global $monsnouel;
    	global $montecristi;
    	global $monteplata;
    	global $pedernales;
    	global $peravia;
    	global $puertoplata;
    	global $salcedo;
    	global $samana;
    	global $sanchezramirez;
    	global $sancristobal;
    	global $sanjoseocoa;
    	global $sanjuanmaguana;
    	global $sanpedromacoris;
    	global $santiago;
    	global $santiagorodriguez;
    	global $santodgo;
    	global $valverdemao;

        $this->mapa = require (AT_INCLUDE_PATH. 'tablaresumen.php');
        return $this->tablaresumen;
    }

}


?>