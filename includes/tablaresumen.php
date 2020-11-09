<?php
/**
* @version	    $Id: 'includes/tablaresumen.php' 20-07-2007 10:40:00 Moises Jafet$
* @package	    "[:DRmap(WebGUI):]"
* @copyright	Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license	    GNU/GPL, see LICENSE.TXT
*
* [:DRmap(WebGUI):] is free software you can redistribute it and/or modify it under the
* terms of the GNU General Public License as published by the Free Software Foundation
* either version 3 of the License, or any later version. As distributed it includes or
* is derivative of works licensed under the GNU General Public License or other free
* or open source software licenses.
*
* [:DRmap(WebGUI):] is distributed in the hope that it will be useful, but WITHOUT ANY
* WARRANTY without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
* PARTICULAR PURPOSE.  See the GNU General Public License for more details and
* COPYRIGHT.TXT for copyright notices and details.
*/

//Control de acceso directo al fichero. (Moises)
defined( '_VALID_CPTICRD' ) or die( 'Prohibido el Acesso a este Recurso' )

/**
* Si se editan los configuraciones del sufijo de pagina ( '<?php echo $pSufijo ?>' )
* y se sustituyen por el valor correspondiente en el css ( 'tablaresumen.css' ) es
* perfectamente posible cargar esta tabla como HTML puro y duro, sin necesidad de un
* webserver con PHP instalado, por ejemplo para usarse en un CD-ROM.
*
* La idea del sufijo de pagina + css es poder cargar la tabla en diferentes lugares de la
* aplicacion por via de un 'include' o 'require', reduciendo la redundancia de codigo
* Favor ver el comentario en la linea no.35 en 'index.php' para mayor claridad. (Moises)
*/

?>

<div id="resumenproyectos<?php echo $pSufijo ?>" title="Tabla de Resumen: Proyectos por Provincias">  <!-- Tabla de Resumen -->

<table class="resumen" border="0">

<tr>
       <td><!-- Columna 1 -->

	   <table class="columnasiz" border="0">
<tr class="impar">
       <td><strong><u>Provincia </strong></u></td>
       <td><strong><u>Clasificaci&oacute;n</strong></u></td>
       <td><strong><u>Total</strong></u></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $altagraciaIDtabla ?>">Altagracia</a></td> <?php // Esta variable proviene desde 'includes/calculador.php' ?>
       <td>
       <?php echo calculadorBanderillas($altagraciaIDtabla) ?> <?php // Esta funcion proviene desde 'includes/calculador.php' ?>
	   </td>
       <td><?php echo $altagracia ?></td> <?php // Esta variable proviene desde 'includes/calculador.php' ?>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $azuaIDtabla ?>">Azua</a></td>
       <td>
       <?php echo calculadorBanderillas($azuaIDtabla) ?>
	   </td>
       <td><?php echo $azua ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $bahorucoIDtabla ?>">Bahoruco</a></td>
       <td>
       <?php echo calculadorBanderillas($bahorucoIDtabla) ?>
	   </td>
       <td><?php echo $bahoruco ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $barahonaIDtabla ?>">Barahona</a></td>
       <td>
       <?php echo calculadorBanderillas($barahonaIDtabla) ?>
	   </td>
       <td><?php echo $barahona ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $dajabonIDtabla ?>">Dajab&oacute;n</a></td>
       <td>
       <?php echo calculadorBanderillas($dajabonIDtabla) ?>
	   </td>
       <td><?php echo $dajabon ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $duarteIDtabla ?>">Duarte</a></td>
       <td>
       <?php echo calculadorBanderillas($duarteIDtabla) ?>
	   </td>
       <td><?php echo $duarte ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $eliaspinaIDtabla ?>">El&iuml;as Pi&ntilde;a</a></td>
       <td>
       <?php echo calculadorBanderillas($eliaspinaIDtabla) ?>
	   </td>
       <td><?php echo $eliaspina ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $elseyboIDtabla ?>">El Seybo</a></td>
       <td>
       <?php echo calculadorBanderillas($elseyboIDtabla) ?>
	   </td>
       <td><?php echo $elseybo ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $espaillatIDtabla ?>">Espaillat</a></td>
       <td>
       <?php echo calculadorBanderillas($espaillatIDtabla) ?>
	   </td>
       <td><?php echo $espaillat ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $hatomayorIDtabla ?>">Hato Mayor</a></td>
       <td>
       <?php echo calculadorBanderillas($hatomayorIDtabla) ?>
	   </td>
       <td><?php echo $hatomayor ?></td>
</tr>
</table>
</td><!-- Fin de columna 1 -->
       <td><!-- Columna 2 -->
	   <table class="columnascen" border="0">

<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $salcedoIDtabla ?>">Hnas. Mirabal (Salcedo)</a> </td>
       <td>
       <?php echo calculadorBanderillas($salcedoIDtabla) ?>
	   </td>
       <td><?php echo $salcedo ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $independenciaIDtabla ?>">Independencia</a> </td>
       <td>
       <?php echo calculadorBanderillas($independenciaIDtabla) ?>
	   </td>
       <td><?php echo $independencia ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $laromanaIDtabla ?>">La Romana</a></td>
       <td>
       <?php echo calculadorBanderillas($laromanaIDtabla) ?>
	   </td>
       <td><?php echo $laromana ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $lavegaIDtabla ?>">La Vega</a></td>
       <td>
       <?php echo calculadorBanderillas($lavegaIDtabla) ?>
	   </td>
       <td><?php echo $lavega ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $mariatrinidadsanchezIDtabla ?>">Mar&iacute;a Trinidad S&aacute;nchez</a></td>
       <td>
       <?php echo calculadorBanderillas($mariatrinidadsanchezIDtabla) ?>
	   </td>
       <td><?php echo $mariatrinidadsanchez ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $monsnouelIDtabla ?>">Monse&ntilde;or Nouel</a></td>
       <td>
       <?php echo calculadorBanderillas($monsnouelIDtabla) ?>
	   </td>
       <td><?php echo $monsnouel ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $montecristiIDtabla ?>">Montecristi</a></td>
       <td>
       <?php echo calculadorBanderillas($montecristiIDtabla) ?>
	   </td>
       <td><?php echo $montecristi ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $monteplataIDtabla ?>">Monteplata</a></td>
       <td>
       <?php echo calculadorBanderillas($monteplataIDtabla) ?>
	   </td>
       <td><?php echo $monteplata ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $pedernalesIDtabla ?>">Pedernales</a></td>
       <td>
       <?php echo calculadorBanderillas($pedernalesIDtabla) ?>
	   </td>
       <td><?php echo $pedernales ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $peraviaIDtabla ?>">Peravia</a></td>
       <td>
       <?php echo calculadorBanderillas($peraviaIDtabla) ?>
	   </td>
       <td><?php echo $peravia ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $puertoplataIDtabla ?>">Puerto Plata</a></td>
       <td>
       <?php echo calculadorBanderillas($puertoplataIDtabla) ?>
	   </td>
       <td><?php echo $puertoplata ?></td>
</tr>


</table>
	   </td><!-- Fin de columna 2 -->
       <td><!-- Columna 3 -->
	   <table class="columnasder" border="0">
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $samanaIDtabla ?>">Saman&aacute;</a></td>
       <td>
       <?php echo calculadorBanderillas($samanaIDtabla) ?>
	   </td>
       <td><?php echo $samana ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $sanchezramirezIDtabla ?>">S&aacute;nchez Ram&iacute;rez</a></td>
       <td>
       <?php echo calculadorBanderillas($sanchezramirezIDtabla) ?>
	   </td>
       <td><?php echo $sanchezramirez ?></td>
</tr>

<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $sancristobalIDtabla ?>">San Crist&oacute;bal</a></td>
       <td>
       <?php echo calculadorBanderillas($sancristobalIDtabla) ?>
	   </td>
       <td><?php echo $sancristobal ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $sanjoseocoaIDtabla ?>">San Jos&eacute; de Ocoa</a></td>
       <td>
       <?php echo calculadorBanderillas($sanjoseocoaIDtabla) ?>
	   </td>
       <td><?php echo $sanjoseocoa ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $sanjuanmaguanaIDtabla ?>">San Juan de la Maguana</a></td>
       <td>
       <?php echo calculadorBanderillas($sanjuanmaguanaIDtabla) ?>
	   </td>
       <td><?php echo $sanjuanmaguana ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $sanpedromacorisIDtabla ?>">San Pedro de Macor&iuml;s</a></td>
       <td>
       <?php echo calculadorBanderillas($sanpedromacorisIDtabla) ?>
	   </td>
       <td><?php echo $sanpedromacoris ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $santiagoIDtabla ?>">Santiago de los Caballeros</a></td>
       <td>
       <?php echo calculadorBanderillas($santiagoIDtabla) ?>
	   </td>
       <td><?php echo $santiago ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $santiagorodriguezIDtabla ?>">Santiago Rodr&iuml;guez</a></td>
       <td>
       <?php echo calculadorBanderillas($santiagorodriguezIDtabla) ?>
	   </td>
       <td><?php echo $santiagorodriguez ?></td>
</tr>
<tr class="impar">
       <td><a href="index2.php?provincia=<?php echo $santodgoIDtabla ?>">Santo Domingo</a></td>
       <td>
       <?php echo calculadorBanderillas($santodgoIDtabla) ?>
	   </td>
       <td><?php echo $santodgo ?></td>
</tr>
<tr class="par">
       <td><a href="index2.php?provincia=<?php echo $valverdemaoIDtabla ?>">Valverde</a> </td>
       <td>
       <?php echo calculadorBanderillas($valverdemaoIDtabla) ?>
	   </td>
       <td><?php echo $valverdemao ?></td>
</tr>
<tr class="par">
       <td><font color="#c7f3a9">...</font></td>
       <td></td>
       <td></td>
</tr>
</table>

	   </td><!-- Fin de columna 3 -->
</tr>
</table>
</div> <!-- Fin de Tabla de Resumen -->