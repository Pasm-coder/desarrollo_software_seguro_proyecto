<?php
require_once "models/DataBase.php";

$conexion = DataBase::connection();

if ($conexion) {
    echo "✅ Conexión exitosa a la base de datos";
}