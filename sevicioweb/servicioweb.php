<!-- integrantes 
Raziel Job Vieyra Andrade 21200992
Miguel Ángel Camargo Chavarria 21200587
Angel Eduardo Lugo Lopez 21200612
Alef David Esparza Diaz 21200591 -->
<?php
//SE COLOCA EL NOMBRE DE LA PÁGINA QUE CONTIENE LOS MÉTODOS DEL SERVICIO WEB
include 'clsservicios.php';

//SE HACE USO DEL PROTOCOLO SOAPSERVER PARA ESTABLECER LA CONEXIÓN CON EL HOSTING
$soap = new SoapServer(null, array('uri' => 'http://localhost/'));
//SE EJECUTA LA CLASE QUE CONTIENE LOS MÉTODOS
$soap->setClass('clsservicios');
//SE EJECUTA LA CLASE
$soap->handle();
