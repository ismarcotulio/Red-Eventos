<?php 
error_reporting(0);
session_start();
date_default_timezone_set('America/Caracas');

//Constantes de la app
define('HTML_DIR','html');
define('APP_TITLE','Magitec');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','mvc:8080');

//Constantes de conexion
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASS','');
define('DB_NAME','mvc');

#Constantes de PHPMailer
define('PHPMAILER_HOST','p3plcpnl0173.prod.phx3.secureserver.net');
define('PHPMAILER_USER','public@ocrend.com');
define('PHPMAILER_PASS','Prinick2016');
define('PHPMAILER_PORT',465);

//Constantes de php
require('core/models/class.Conexion.php');
require('vendor/autoload.php');
require('core/bin/functions/visitas.php');
require('core/bin/functions/encrypt.php');
require('core/bin/functions/users.php');
require('core/bin/functions/emailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');
require('core/bin/functions/sesion.php');

$_users = Users();
$visita = visita();
?>