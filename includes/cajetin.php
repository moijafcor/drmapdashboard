<?php
/**
* @version     $Id: 'includes/cajetin.php' 19-07-2007 09:20:00 Moises Jafet$
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

?>
  <div id="cajetin<?php echo $pSufijo ?>" title="Leyenda de Colores por Provincia">
    <!-- Cajetin -->

    <table class="cajetin" border="0">
      <tr class="uno">
        <td class="colorverde">.</td>

        <td class="descriptor">Igual o menos de 5 Proyectos</td>
      </tr>

      <tr class="dos">
        <td class="colornaranja">.</td>

        <td class="descriptor">Entre 6 y 10 Proyectos</td>
      </tr>

      <tr class="uno">
        <td class="colorturquesa">.</td>

        <td class="descriptor">M&aacute;s de 10 Proyectos</td>
      </tr>

      <tr class="dos">
        <td class="bandera"><img src="imagenes/pt_1.gif"></td>

        <td class="descriptor">Acceso y Conectividad (TIC)</td>
      </tr>

      <tr class="uno">
        <td class="bandera"><img src="imagenes/pt_2.gif"></td>

        <td class="descriptor">De apoyo a la salud</td>
      </tr>

      <tr class="dos">
        <td class="bandera"><img src="imagenes/pt_3.gif"></td>

        <td class="descriptor">De apoyo a la educaci&oacute;n</td>
      </tr>

      <tr class="uno">
        <td class="bandera"><img src="imagenes/pt_4.gif"></td>

        <td class="descriptor">De apoyo al gobierno electr&oacute;nico</td>
      </tr>

      <tr class="dos">
        <td class="bandera"><img src="imagenes/pt_5.gif"></td>

        <td class="descriptor">De apoyo a la competitividad</td>
      </tr>
    </table>
  </div><!-- Fin del Cajetin -->