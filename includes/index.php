/**
* @version	    $Id: 'index.php(boyeristas)' 21-07-2007 03:10:00 Moises Jafet$
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

<?php $pSufijo=-666 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Mapa Proyectos TIC-RD :: <?php echo $mosConfig_sitename ?>;</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo $css ?>" rel="stylesheet" type="text/css">
</head>
<body>

<?php include ("../configuracion.php"); ?>

	<div id="wrapper-boyeristas<?php echo $pSufijo ?>">

		<div id="boyeristas<?php echo $pSufijo ?>" >

			  <div align="center"><a href="<?php echo $mosConfig_live_site ?>"><?php echo $mosConfig_sitename ?></a></div>

		</div>
	</div>

</body>
</html>