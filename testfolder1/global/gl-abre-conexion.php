<?php
/*=============================================
 CONEXION BASE DE DATOS 
============================================= */
$servidor="localhost";
$usuario="natoo";
$password="Toon@378!";
$base="bd_opportom";

$apimap = "ABQIAAAAvNyOdalIc3kDtpnJQQTenRS9f5DXOWNszskVFPsaGutvTvqVJxQh5hXzTh14Zeq4LxsoASQ67B94Fg";

$link_base=mysql_connect($servidor,$usuario,$password) or die(mysql_error("Error al Conectar con la Base de Datos, intente nuevamente..."));
mysql_select_db($base,$link_base);
                 
?>