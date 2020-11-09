<?php
/**
* @version      $Id: 'LEAME.php' 29-08-2007 17:17:00 Moises Jafet$
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
*****************
* Observaciones *
*****************

Esta aplicacion infoware fue inspirada en los requerimientos de un cliente quien
necesitaba depleglar una lista de proyectos dentro del contexto de la distribucion
politica del territorio de la Republica Dominicana.

Partiendo de la lista de requerimientos, la he expandido para que fuese atractiva a
otras instituciones publicas o privadas que necesitasen una interfaz apoyada en el
mapa politico del territorio dominicano, como por ejemplo, para proveer listas de
sucursales, divisiones o concesionarios.

Por esta razon, decidi liberarla bajo la licencia GNU General Public License, cosa
de que cualquier persona la pudiese configurar para sus necesidades especificas.

Dado que el proyecto original tenia obvias limitaciones de tiempo, muchas cosas
fueron dejadas de implementar, como por ejemplo, un sistema de control de acceso en la
administracion de la aplicacion, por lo que se requiere proteger el acceso a los
formularios de mantenimiento por via del servidor web, quizas utilizando la combinacion
de .htaccss/.htpassword en el caso funcione desde una plataforma LAMP.

Favor notar que los ficheros de la interfaz tanto del front end como de la
administracion, disponen del mecanismo del $pSufijo. Esto sirve para asignar diferentes
atributos en los selectores de estilo de los ficheros CSS, proveyendole asi de un
mecanismo muy flexible para alterar la apariencia visual de las interfaces, en caso
de que utilice varias instancias de la aplicacion dentro de un mismo website.

Sin embargo, si necesita implementar la aplicacion, especificamente el mapa, dentro
de un entorno no-dinamico, o sea en un website exclusivo en HTML o dentro de un CD-ROM,
solo tiene que eliminar el mecanismo del $pSufijo.

Dentro del espiritu del Open Source, si agregas nuevas funcionalidades o correcciones,
favor contactarme para sumarlas al distro, y asi otros mas tambien podran ser
beneficiados.

Espero que este software le sea de utilidad practica, y de uso amigable a sus
usuarios.

Si necesita mas informacion favor no dude en contarme.

Moises Jafet Cornelio-Vargas
Knowledge Management Consulting Services
webmaster@moisesjafet.com
http://pro.moisesjafet.com