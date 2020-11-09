<?php
/**
* @version     $Id: 'administrador/includes/menues.php' 04-08-2007 22:03:00 Moises Jafet$
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
?>
  <div id="puentes">
    <script language="JavaScript" type="text/javascript">
<!--
// original code by Bill Trefzger 12/12/96
function go(){
if (document.selecter.select1.options[document.selecter.select1.selectedIndex].value != "none") {
location = document.selecter.select1.options[document.selecter.select1.selectedIndex].value
                }
        }
//-->
</script> <script language="JavaScript" type="text/javascript">
<!-- 
document.write('<form id="jumps" name="selecter"><select name="select1">');
document.write('<option value=none>Administrador de Formularios');
document.write('<option value="index2.php?admin=protic">Gestión de Proyectos');
document.write('<option value=none>--------------------');
document.write('<option value="index2.php?admin=provincia">Provincias');
document.write('<option value="index2.php?admin=region">Regiónes Geográficas');
document.write('<option value="index2.php?admin=alcance">Alcance Geográfico');
document.write('<option value=none>--------------------');
document.write('<option value="index2.php?admin=estatus">Estatus del avance de la Implementación');
document.write('<option value="index2.php?admin=areas">Areas Desarrollo (Indotel)');
document.write('<option value="index2.php?admin=blanco">Público Blanco');
document.write('<option value=none>--------------------');
document.write('<option value="index2.php?admin=tipos">Tipos de Areas de Distribucion (eDominicana)');
document.write('<option value="index2.php?admin=clas">Clasificación (eDominicana)');
document.write('<option value="index2.php?admin=dist">Distribución por Areas de Desarrollo (eDominicana)');
document.write('<option value=none>--------------------');
document.write('<option value="index2.php?admin=inst">Institución Patrocinadora');
document.write('<option value="index2.php?admin=instipo">Tipos de Instituciones');
document.write('<\/select>');
document.write('<input type="button" class="botones<?php echo $pSufijo ?>" value="Cargar" onclick="go()">');
document.write('<\/form>');
// end hiding contents -->
</script>
  </div>