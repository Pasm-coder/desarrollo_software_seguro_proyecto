<?php
class Dashboard {

    public function main() {

        if (!isset($_SESSION['session'])) {
            throw new Exception("Sesión no definida");
        }

        $session = basename($_SESSION['session']); // evita path traversal

        $viewPath = "views/roles/" . $session . "/" . $session . ".view.php";

        if (!file_exists($viewPath)) {
            throw new Exception("Vista no encontrada");
        }

        require_once $viewPath;
    }
}
?>