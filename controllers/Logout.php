<?php

class Logout
{
    public function main(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $_SESSION = [];
        session_destroy();

        header("Location: ?");
        exit();
    }
}