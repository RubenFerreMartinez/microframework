<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'viaduct.proxy.rlwy.net:53723');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'beBBB6C2HH-B3C3A52FbdBbFad64BED2');

//mysql://root:beBBB6C2HH-B3C3A52FbdBbFad64BED2@viaduct.proxy.rlwy.net:53723/railway
?>