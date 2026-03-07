<?php

class Landing
{
    public function main(): void
    {
        $viewPath = "views/company/index.view.php";

        if (!file_exists($viewPath)) {
            throw new RuntimeException("La vista no existe.");
        }

        require_once $viewPath;
    }
}