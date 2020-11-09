<?php
/**
* @version	    $Id: 'includes/mapa.php' 19-07-2007 15:40:00 Moises Jafet$
* @package	    "[:DRmap(WebGUI):]"
* @copyright	Copyright (C) 2007 Moises Jafet Cornelio-Vargas. All rights reserved.
* @license	    GNU/GPL, see LICENSE.TXT
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

/**
* Constructor del cuerpo del mapa. Si se editan los configuraciones del sufijo de pagina
* ( '<?php echo $pSufijo ?>' ) y se sustituyen por el valor correspondiente en el css
* ( 'mapa.css' ) es perfectamente posible cargar el mapa como HTML puro y duro, sin
* necesidad de un webserver con PHP instalado, por ejemplo en un CD-ROM.
*
* La idea del sufijo de pagina + css es poder cargar el mapa en diferentes lugares de la
* aplicacion por via de un 'include' o 'require', reduciendo la redundancia de codigo
* Favor ver el comentario en la linea no.35 en 'index.php' para mayor claridad. (Moises)
*/

?>

<div id="cuerpomapa<?php echo $pSufijo ?>"> <!-- Constructor del Cuerpo Mapa -->
	<!-- <span id="cero"><img src="imagenes/00.png"></span> -->
	<span id="altagracia<?php echo $pSufijo ?>" title="Altagracia">
		  <a href="index2.php?provincia=<?php echo $altagraciaIDtabla ?>" <?php // Esta variable proviene desde 'includes/calculador.php' ?>
		  	 onmouseover="alta.src='imagenes/altagracia_x.gif';"
			 onmouseout="alta.src='imagenes/altagracia_<?php selectorSufijo($altagracia); ?>.gif';">
		  <img name="alta" src="imagenes/altagracia_<?php selectorSufijo($altagracia); ?>.gif" border="0"></a>
	</span>
	<span id="azua<?php echo $pSufijo ?>" title="Azua">
		  <a href="index2.php?provincia=<?php echo $azuaIDtabla ?>"
		  	 onmouseover="azu.src='imagenes/azua_x.gif';"
			 onmouseout="azu.src='imagenes/azua_<?php selectorSufijo($azua); ?>.gif';">
		  <img name="azu" src="imagenes/azua_<?php selectorSufijo($azua); ?>.gif" border="0"></a>
	</span>
	<span id="bahoruco<?php echo $pSufijo ?>" title="Bahoruco">
		  <a href="index2.php?provincia=<?php echo $bahorucoIDtabla ?>"
		  	 onmouseover="bah.src='imagenes/bahoruco_x.gif';"
			 onmouseout="bah.src='imagenes/bahoruco_<?php selectorSufijo($bahoruco); ?>.gif';">
		  <img name="bah" src="imagenes/bahoruco_<?php selectorSufijo($bahoruco); ?>.gif" border="0"></a>
	</span>
	<span id="barahona<?php echo $pSufijo ?>" title="Barahona">
		  <a href="index2.php?provincia=<?php echo $barahonaIDtabla ?>"
		  	 onmouseover="bar.src='imagenes/barahona_x.gif';"
			 onmouseout="bar.src='imagenes/barahona_<?php selectorSufijo($barahona); ?>.gif';">
		  <img name="bar" src="imagenes/barahona_<?php selectorSufijo($barahona); ?>.gif" border="0"></a>
	</span>
	<span id="dajabon<?php echo $pSufijo ?>"  title="Dajab&oacute;n">
		  <a href="index2.php?provincia=<?php echo $dajabonIDtabla ?>"
		  	 onmouseover="daj.src='imagenes/dajabon_x.gif';"
			 onmouseout="daj.src='imagenes/dajabon_<?php selectorSufijo($dajabon); ?>.gif';">
		  <img name="daj" src="imagenes/dajabon_<?php selectorSufijo($dajabon); ?>.gif" border="0"></a>
	</span>
	<!-- <span id="distritonacional<?php echo $pSufijo ?>" title="Distrito Nacional">
		  <a href="<?php echo $mosConfig_live_site ?>/<?php echo $carp ?>/catalogo/index.php?provincia=distrito"
		  	 onmouseover="dis.src='imagenes/distritonacional_x.gif';"
			 onmouseout="dis.src='imagenes/distritonacional_<?php selectorSufijo($distritonacional); ?>.gif';">
		  <img name="dis" src="imagenes/distritonacional_<?php selectorSufijo($distritonacional); ?>.gif" border="0"></a>
	</span> -->
	<span id="duarte<?php echo $pSufijo ?>" title="Duarte">
		  <a href="index2.php?provincia=<?php echo $duarteIDtabla ?>"
		  	 onmouseover="dua.src='imagenes/duarte_x.gif';"
			 onmouseout="dua.src='imagenes/duarte_<?php selectorSufijo($duarte); ?>.gif';">
		  <img name="dua" src="imagenes/duarte_<?php selectorSufijo($duarte); ?>.gif" border="0"></a>
	</span>
	<span id="eliaspina<?php echo $pSufijo ?>" title="El&iuml;as Pi&ntilde;a">
		  <a href="index2.php?provincia=<?php echo $eliaspinaIDtabla ?>"
		  	 onmouseover="eli.src='imagenes/eliaspina_x.gif';"
			 onmouseout="eli.src='imagenes/eliaspina_<?php selectorSufijo($eliaspina); ?>.gif';">
		  <img name="eli" src="imagenes/eliaspina_<?php selectorSufijo($eliaspina); ?>.gif" border="0"></a>
	</span>
	<span id="elseybo<?php echo $pSufijo ?>" title="El Seybo">
		  <a href="index2.php?provincia=<?php echo $elseyboIDtabla ?>"
		  	 onmouseover="els.src='imagenes/elseybo_x.gif';"
			 onmouseout="els.src='imagenes/elseybo_<?php selectorSufijo($elseybo); ?>.gif';">
		  <img name="els" src="imagenes/elseybo_<?php selectorSufijo($elseybo); ?>.gif" border="0"></a>
	</span>
	<span id="espaillat<?php echo $pSufijo ?>" title="Espaillat">
		  <a href="index2.php?provincia=<?php echo $espaillatIDtabla ?>"
		  	 onmouseover="esp.src='imagenes/espaillat_x.gif';"
			 onmouseout="esp.src='imagenes/espaillat_<?php selectorSufijo($espaillat); ?>.gif';">
		  <img name="esp" src="imagenes/espaillat_<?php selectorSufijo($espaillat); ?>.gif" border="0"></a>
	</span>
	<span id="hatomayor<?php echo $pSufijo ?>" title="Hato Mayor">
		  <a href="index2.php?provincia=<?php echo $hatomayorIDtabla ?>"
		  	 onmouseover="hat.src='imagenes/hatomayor_x.gif';"
			 onmouseout="hat.src='imagenes/hatomayor_<?php selectorSufijo($hatomayor); ?>.gif';">
		  <img name="hat" src="imagenes/hatomayor_<?php selectorSufijo($hatomayor); ?>.gif" border="0"></a>
	</span>
	<span id="independencia<?php echo $pSufijo ?>" title="Independencia">
		  <a href="index2.php?provincia=<?php echo $independenciaIDtabla ?>"
		  	 onmouseover="ind.src='imagenes/independencia_x.gif';"
			 onmouseout="ind.src='imagenes/independencia_<?php selectorSufijo($independencia); ?>.gif';">
		  <img name="ind" src="imagenes/independencia_<?php selectorSufijo($independencia); ?>.gif" border="0"></a>
	</span>
	<span id="laromana<?php echo $pSufijo ?>" title="La Romana">
		  <a href="index2.php?provincia=<?php echo $laromanaIDtabla ?>"
		  	 onmouseover="lar.src='imagenes/laromana_x.gif';"
			 onmouseout="lar.src='imagenes/laromana_<?php selectorSufijo($laromana); ?>.gif';">
		  <img name="lar" src="imagenes/laromana_<?php selectorSufijo($laromana); ?>.gif" border="0"></a>
	</span>
	<span id="lavega<?php echo $pSufijo ?>" title="La Vega">
		  <a href="index2.php?provincia=<?php echo $lavegaIDtabla ?>"
		  	 onmouseover="lav.src='imagenes/lavega_x.gif';"
			 onmouseout="lav.src='imagenes/lavega_<?php selectorSufijo($lavega); ?>.gif';">
		  <img name="lav" src="imagenes/lavega_<?php selectorSufijo($lavega); ?>.gif" border="0"></a>
	</span>
	<span id="mariatrinidadsanchez<?php echo $pSufijo ?>" title="Mar&iacute;a Trinidad S&aacute;nchez">
		  <a href="index2.php?provincia=<?php echo $mariatrinidadsanchezIDtabla ?>"
		  	 onmouseover="mar.src='imagenes/mariatrinidadsanchez_x.gif';"
			 onmouseout="mar.src='imagenes/mariatrinidadsanchez_<?php selectorSufijo($mariatrinidadsanchez); ?>.gif';">
		  <img name="mar" src="imagenes/mariatrinidadsanchez_<?php selectorSufijo($mariatrinidadsanchez); ?>.gif" border="0"></a>
	</span>
	<span id="monsnouel<?php echo $pSufijo ?>" title="Monse&ntilde;or Nouel">
		  <a href="index2.php?provincia=<?php echo $monsnouelIDtabla ?>"
		  	 onmouseover="mno.src='imagenes/monsnouel_x.gif';"
			 onmouseout="mno.src='imagenes/monsnouel_<?php selectorSufijo($monsnouel); ?>.gif';">
		  <img name="mno" src="imagenes/monsnouel_<?php selectorSufijo($monsnouel); ?>.gif" border="0"></a>
	</span>
	<span id="montecristi<?php echo $pSufijo ?>" title="Monte Cristi">
		  <a href="index2.php?provincia=<?php echo $montecristiIDtabla ?>"
		  	 onmouseover="mnt.src='imagenes/montecristi_x.gif';"
			 onmouseout="mnt.src='imagenes/montecristi_<?php selectorSufijo($montecristi); ?>.gif';">
		  <img name="mnt" src="imagenes/montecristi_<?php selectorSufijo($montecristi); ?>.gif" border="0"></a>
	</span>
	<span id="monteplata<?php echo $pSufijo ?>" title="Monteplata">
		  <a href="index2.php?provincia=<?php echo $monteplataIDtabla ?>"
		  	 onmouseover="mnp.src='imagenes/monteplata_x.gif';"
			 onmouseout="mnp.src='imagenes/monteplata_<?php selectorSufijo($monteplata); ?>.gif';">
		  <img name="mnp" src="imagenes/monteplata_<?php selectorSufijo($monteplata); ?>.gif" border="0"></a>
	</span>
	<span id="pedernales<?php echo $pSufijo ?>" title="Pedernales">
		  <a href="index2.php?provincia=<?php echo $pedernalesIDtabla ?>"
		  	 onmouseover="ped.src='imagenes/pedernales_x.gif';"
			 onmouseout="ped.src='imagenes/pedernales_<?php selectorSufijo($pedernales); ?>.gif';">
		  <img name="ped" src="imagenes/pedernales_<?php selectorSufijo($pedernales); ?>.gif" border="0"></a>
	</span>
	<span id="peravia<?php echo $pSufijo ?>" title="Peravia">
		  <a href="index2.php?provincia=<?php echo $peraviaIDtabla ?>"
		  	 onmouseover="per.src='imagenes/peravia_x.gif';"
			 onmouseout="per.src='imagenes/peravia_<?php selectorSufijo($peravia); ?>.gif';">
		  <img name="per" src="imagenes/peravia_<?php selectorSufijo($peravia); ?>.gif" border="0"></a>
	</span>
	<span id="puertoplata<?php echo $pSufijo ?>" title="Puerto Plata">
		  <a href="index2.php?provincia=<?php echo $puertoplataIDtabla ?>"
		  	 onmouseover="ppt.src='imagenes/puertoplata_x.gif';"
			 onmouseout="ppt.src='imagenes/puertoplata_<?php selectorSufijo($puertoplata); ?>.gif';">
		  <img name="ppt" src="imagenes/puertoplata_<?php selectorSufijo($puertoplata); ?>.gif" border="0"></a>
	</span>
	<span id="salcedo<?php echo $pSufijo ?>" title="Hnas. Mirabal (Salcedo)">
		  <a href="index2.php?provincia=<?php echo $salcedoIDtabla ?>"
		  	 onmouseover="sal.src='imagenes/salcedo_x.gif';"
			 onmouseout="sal.src='imagenes/salcedo_<?php selectorSufijo($salcedo); ?>.gif';">
		  <img name="sal" src="imagenes/salcedo_<?php selectorSufijo($salcedo); ?>.gif" border="0"></a>
	</span>
	<span id="samana<?php echo $pSufijo ?>" title="Saman&aacute;">
		  <a href="index2.php?provincia=<?php echo $samanaIDtabla ?>"
		  	 onmouseover="sam.src='imagenes/samana_x.gif';"
			 onmouseout="sam.src='imagenes/samana_<?php selectorSufijo($samana); ?>.gif';">
		  <img name="sam" src="imagenes/samana_<?php selectorSufijo($samana); ?>.gif" border="0"></a>
	</span>
	<span id="sanchezramirez<?php echo $pSufijo ?>" title="S&aacute;nchez Ram&iacute;rez">
		  <a href="index2.php?provincia=<?php echo $sanchezramirezIDtabla ?>"
		  	 onmouseover="sra.src='imagenes/sanchezramirez_x.gif';"
			 onmouseout="sra.src='imagenes/sanchezramirez_<?php selectorSufijo($sanchezramirez); ?>.gif';">
		  <img name="sra" src="imagenes/sanchezramirez_<?php selectorSufijo($sanchezramirez); ?>.gif" border="0"></a>
	</span>
	<span id="sancristobal<?php echo $pSufijo ?>" title="San Crist&oacute;bal">
		  <a href="index2.php?provincia=<?php echo $sancristobalIDtabla ?>"
		  	 onmouseover="snc.src='imagenes/sancristobal_x.gif';"
			 onmouseout="snc.src='imagenes/sancristobal_<?php selectorSufijo($sancristobal); ?>.gif';">
		  <img name="snc" src="imagenes/sancristobal_<?php selectorSufijo($sancristobal); ?>.gif" border="0"></a>
	</span>
	<span id="sanjoseocoa<?php echo $pSufijo ?>" title="San Jos&eacute; de Ocoa">
		  <a href="index2.php?provincia=<?php echo $sanjoseocoaIDtabla ?>"
		  	 onmouseover="sjo.src='imagenes/sanjoseocoa_x.gif';"
			 onmouseout="sjo.src='imagenes/sanjoseocoa_<?php selectorSufijo($sanjoseocoa); ?>.gif';">
		  <img name="sjo" src="imagenes/sanjoseocoa_<?php selectorSufijo($sanjoseocoa); ?>.gif" border="0"></a>
	</span>
	<span id="sanjuanmaguana<?php echo $pSufijo ?>" title="San Juan de la Maguana">
		  <a href="index2.php?provincia=<?php echo $sanjuanmaguanaIDtabla ?>"
		  	 onmouseover="sjm.src='imagenes/sanjuanmaguana_x.gif';"
			 onmouseout="sjm.src='imagenes/sanjuanmaguana_<?php selectorSufijo($sanjuanmaguana); ?>.gif';">
		  <img name="sjm" src="imagenes/sanjuanmaguana_<?php selectorSufijo($sanjuanmaguana); ?>.gif" border="0"></a>
	</span>
	<span id="sanpedromacoris<?php echo $pSufijo ?>" title="San Pedro de Macor&iuml;s">
		  <a href="index2.php?provincia=<?php echo $sanpedromacorisIDtabla ?>"
		  	 onmouseover="spm.src='imagenes/sanpedromacoris_x.gif';"
			 onmouseout="spm.src='imagenes/sanpedromacoris_<?php selectorSufijo($sanpedromacoris); ?>.gif';">
		  <img name="spm" src="imagenes/sanpedromacoris_<?php selectorSufijo($sanpedromacoris); ?>.gif" border="0"></a>
	</span>
	<span id="santiago<?php echo $pSufijo ?>" title="Santiago de los Caballeros">
		  <a href="index2.php?provincia=<?php echo $santiagoIDtabla ?>"
		  	 onmouseover="sgo.src='imagenes/santiago_x.gif';"
			 onmouseout="sgo.src='imagenes/santiago_<?php selectorSufijo($santiago); ?>.gif';">
		  <img name="sgo" src="imagenes/santiago_<?php selectorSufijo($santiago); ?>.gif" border="0"></a>
	</span>
	<span id="santiagorodriguez<?php echo $pSufijo ?>" title="Santiago Rodr&iuml;guez">
		  <a href="index2.php?provincia=<?php echo $santiagorodriguezIDtabla ?>"
		  	 onmouseover="sgr.src='imagenes/santiagorodriguez_x.gif';"
			 onmouseout="sgr.src='imagenes/santiagorodriguez_<?php selectorSufijo($santiagorodriguez); ?>.gif';">
		  <img name="sgr" src="imagenes/santiagorodriguez_<?php selectorSufijo($santiagorodriguez); ?>.gif" border="0"></a>
	</span>
	<span id="santodgo<?php echo $pSufijo ?>" title="Santo Domingo">
		  <a href="index2.php?provincia=<?php echo $santodgoIDtabla ?>"
		  	 onmouseover="snd.src='imagenes/santodgo_x.gif';"
			 onmouseout="snd.src='imagenes/santodgo_<?php selectorSufijo($santodgo); ?>.gif';">
		  <img name="snd" src="imagenes/santodgo_<?php selectorSufijo($santodgo); ?>.gif" border="0"></a>
	</span>
	<span id="valverdemao<?php echo $pSufijo ?>" title="Valverde">
		  <a href="index2.php?provincia=<?php echo $valverdemaoIDtabla ?>"
		  	 onmouseover="mao.src='imagenes/valverdemao_x.gif';"
			 onmouseout="mao.src='imagenes/valverdemao_<?php selectorSufijo($valverdemao); ?>.gif';">
		  <img name="mao" src="imagenes/valverdemao_<?php selectorSufijo($valverdemao); ?>.gif" border="0"></a>
	</span>
</div> <!-- Fin del Cuerpo Mapa -->