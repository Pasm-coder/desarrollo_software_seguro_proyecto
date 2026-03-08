<?php
class DataBase {

    // Conexión Local XAMPP (Mac)
    public static function connection() {

        try {
            $hostname = "127.0.0.1";   // IMPORTANTE: no usar localhost en Mac
            $port     = "3306";        // Verifica en XAMPP que sea 3306
            $database = "db_tps_nc_iv_2771440";
            $username = "root";
            $password = "";            // En XAMPP normalmente es vacío

            $pdo = new PDO(
                "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",
                $username,
                $password
            );

            // Manejo de errores con excepciones
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            die("❌ Error de conexión: " . $e->getMessage());
        }
    }
}
