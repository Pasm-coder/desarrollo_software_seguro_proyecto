<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../models/DataBase.php';
require_once __DIR__ . '/../models/User.php';

class UserTest extends TestCase {

    public function testLoginCorrecto() {

        $user = new User("admin@test.com", "123456");

        $resultado = $user->login();

        $this->assertNotFalse($resultado);
    }

    public function testLoginIncorrecto() {

        $user = new User("admin@test.com", "incorrecta");

        $resultado = $user->login();

        $this->assertFalse($resultado);
    }

    public function testUsuarioInexistente() {
    $user = new User("fake@test.com", "123456");
    $resultado = $user->login();

    $this->assertFalse($resultado);
    }

    public function testRolUsuario() {
    $user = new User("admin@test.com", "123456");
    $resultado = $user->login();

    $this->assertEquals("admin", strtolower($resultado->getRolName()));
}

    // 5 Verificar que el objeto usuario se crea
    public function testObjetoUsuario() {
        $user = new User("admin2@test.com", "123456");

        $this->assertInstanceOf(User::class, $user);
    }

    public function testSQLInjectionLogin() {

    $user = new User("' OR '1'='1", "123456");

    $resultado = $user->login();

    $this->assertFalse($resultado);
}

}