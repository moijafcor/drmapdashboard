<?php
/**
* @version     $Id: 'includes/calculador.php' 20-07-2007 03:10:00 Moises Jafet$
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

//Control de acceso directo al fichero. (Moises)
defined( '_VALID_CPTICRD' ) or die( 'Prohibido el Acesso a este Recurso' );


if (!$db_conector)
{
        die('NO conecta. Alerta al Webmaster!: ' . mysql_error());
}


/**
 * Poner aqui el ID de la provincia segun aparece en la tabla '$db_prefijo_provincia_intervenida'
 * Lamentablemente esta es una operacion manual, a menos que se prepare un instalador que pueble la
 * tabla de provincias con ID preestablecidos. (Moises)


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
*/
/**
 * Empaquetado de los ID de las Provincias para ser evaluadas bis a bis por
 * la funciones 'function calculadorNumeroProyectos($provincias)' y
 * 'function calculadorBanderillas($provincias)'. (Moises)
*/

$provincias = array("$altagraciatabla","$azuatabla","$bahorucoIDtabla","$barahonaIDtabla",
              "$dajabonIDtabla","$distritonacionalIDtabla","$duarteIDtabla",
              "$eliaspinaIDtabla","$elseyboIDtabla","$espaillatIDtabla","$hatomayorIDtabla",
              "$independenciaIDtabla","$laromanaIDtabla","$lavegaIDtabla",
              "$mariatrinidadsanchezIDtabla","$monsnouelIDtabla","$montecristiIDtabla",
              "$monteplataIDtabla","$pedernalesIDtabla","$peraviaIDtabla",
              "$puertoplataIDtabla","$salcedoIDtabla","$samanaIDtabla","$sanchezramirezIDtabla",
              "$sancristobalIDtabla","$sanjoseocoaIDtabla","$sanjuanmaguanaIDtabla",
              "$sanpedromacorisIDtabla","$santiagoIDtabla","$santiagorodriguezIDtabla",
              "$santodgoIDtabla","$valverdemaoIDtabla");

/************
* Calculador del total de Proyectos por cada Provincia.
*/

/**
 * Esta funcion computa el total de veces que cada una de las provincias en el array aparece
 * en la tabla $db_prefijo_proyectos-tic_rd. Ese valor entonces se utiliza para determinar el
 * color de la provincia en el mapa. (Moises)
*/

$db_nombre  = "catalogo"; //Nombre de la tabla de los Proyectos
$db         = $db_prefijo.$db_nombre; //Articula el prefijo a la tabla.
$registro   = "id_Provincia_Intervenida"; //Columna que controla el id de la provincia por cada proyecto

function calculadorNumeroProyectos($provincias)
{
        $filas = mysql_query("SELECT * FROM  $GLOBALS[db]
        WHERE $GLOBALS[registro] = $provincias");
        $num_rows = mysql_num_rows($filas);

        return $num_rows;
}

/**
 * Caray!, me hubiese gustado que este tocho de codigo se comprimiera mas razonablemente
 * quizas en una clase o algo mas elegante, pero este proyecto hay que terminarlo ya!  (Moises)
*/

$altagracia             = calculadorNumeroProyectos($altagraciaIDtabla);
$azua                   = calculadorNumeroProyectos($azuaIDtabla);
$bahoruco               = calculadorNumeroProyectos($bahorucoIDtabla);
$barahona               = calculadorNumeroProyectos($barahonaIDtabla);
$dajabon                = calculadorNumeroProyectos($dajabonIDtabla);
$distritonacional       = calculadorNumeroProyectos($distritonacionalIDtabla);
$duarte                 = calculadorNumeroProyectos($duarteIDtabla);
$eliaspina              = calculadorNumeroProyectos($eliaspinaIDtabla);
$elseybo                = calculadorNumeroProyectos($elseyboIDtabla);
$espaillat              = calculadorNumeroProyectos($espaillatIDtabla);
$hatomayor              = calculadorNumeroProyectos($hatomayorIDtabla);
$independencia          = calculadorNumeroProyectos($independenciaIDtabla);
$laromana               = calculadorNumeroProyectos($laromanaIDtabla);
$lavega                 = calculadorNumeroProyectos($lavegaIDtabla);
$mariatrinidadsanchez   = calculadorNumeroProyectos($mariatrinidadsanchezIDtabla);
$monsnouel              = calculadorNumeroProyectos($monsnouelIDtabla);
$montecristi            = calculadorNumeroProyectos($montecristiIDtabla);
$monteplata             = calculadorNumeroProyectos($monteplataIDtabla);
$pedernales             = calculadorNumeroProyectos($pedernalesIDtabla);
$peravia                = calculadorNumeroProyectos($peraviaIDtabla);
$puertoplata            = calculadorNumeroProyectos($puertoplataIDtabla);
$salcedo                = calculadorNumeroProyectos($salcedoIDtabla);
$samana                 = calculadorNumeroProyectos($samanaIDtabla);
$sanchezramirez         = calculadorNumeroProyectos($sanchezramirezIDtabla);
$sancristobal           = calculadorNumeroProyectos($sancristobalIDtabla);
$sanjoseocoa            = calculadorNumeroProyectos($sanjoseocoaIDtabla);
$sanjuanmaguana         = calculadorNumeroProyectos($sanjuanmaguanaIDtabla);
$sanpedromacoris        = calculadorNumeroProyectos($sanpedromacorisIDtabla);
$santiago               = calculadorNumeroProyectos($santiagoIDtabla);
$santiagorodriguez      = calculadorNumeroProyectos($santiagorodriguezIDtabla);
$santodgo               = calculadorNumeroProyectos($santodgoIDtabla);
$valverdemao            = calculadorNumeroProyectos($valverdemaoIDtabla);

$color = array("$altagracia","$azua","$bahoruco","$barahona","$dajabon","$distritonacional",
         "$duarte","$eliaspina","$elseybo","$espaillat","$hatomayor","$independencia",
         "$laromana","$lavega","$mariatrinidadsanchez","$monsnouel","$montecristi",
         "$monteplata","$pedernales","$peravia","$puertoplata","$salcedo","$samana",
         "$sanchezramirez","$sancristobal", "$sanjoseocoa","$sanjuanmaguana",
         "$sanpedromacoris","$santiago","$santiagorodriguez", "$santodgo","$valverdemao");

function selectorSufijo($color)
{
        if ($color>=6&&$color<=10) echo 1;
        elseif ($color>=11) echo 2;
        else echo 0;
}

/**
 * Calculador del sufijo del icono del Mapa de Provincias
 * 'if ($_variableX>=6&&$_variableX<=10) echo 1; elseif ($_variableX>=11) echo 2; else echo 0; '
 * '$_variableX' = una por cada provincia en el mapa, empaquetadas en el array "$color".
 *
 * (1) 'if ($_variableX>=6&&$_variableX<=10) echo 1;' = Si el valor de la variable se encuentra
 * entre 6 y 10, imprime 1. (2) 'elseif ($_variableX>=11) echo 2;' = si el valor de la variable
 * es mayor a 11, imprime 2. (3) 'else echo 0;' = Si ambos casos 1 y 2 no se cumplen, imprime 0.
 *
 * Estas operaciones se compilan en la funcion "selectorSufijo($color)"
 *
 * Cada imagen en el repositorio tiene un sufijo del 0 al 2, y x para el efecto de rollover.
 * El calculador altera 'on the fly' el valor del sufijo en funcion de las variables producidas
 * al computar el numero de proyectos en la base de datos por cada una de las provincias. De
 * esta manera se le provee al visionante del mapa pistas visuales de la distribucion de
 * proyectos TIC a traves del territorio dominicano. (Moises)
*/

/**************
* Calculador de la Bandera por Tipo Proyecto
*/

//Columna que controla el id del Tipo Proyecto por cada proyecto
//$bandera    = "id_ClasificacionEDom"; //Caso E-Dominicana
$bandera    = "id_Area_Desarrollo"; //Caso Indotel

$provincia  = "id_Provincia_Intervenida"; //Columna que controla el id de la provincia por cada proyecto

function calculadorBanderillas($provincias)
{
        $trinquete = mysql_query("SELECT DISTINCT $GLOBALS[bandera] FROM  $GLOBALS[db]
        WHERE $GLOBALS[provincia] = $provincias");
        while($iconos = mysql_fetch_array($trinquete, MYSQL_NUM))
        {
        echo "<img src='imagenes/pt_$iconos[0].gif'>&nbsp";
        }
}

?>