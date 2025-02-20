<?php 
$host= 'mysql-davesito4.alwaysdata.net';
$dbname = 'davesito4_proyectouf3';
$username = 'davesito4';
$password = 'Golden321y123';


$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli -> connect_error){
    die("error de conexion: " . $mysqli-> connect_error);
}else {
    echo 'Conexion Exitosa';
}

?>