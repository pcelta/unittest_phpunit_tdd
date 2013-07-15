<?php
require_once 'Divisivel.php';
class DivisivelTest extends PHPUnit_FrameWork_TestCase
{
    
    public function testEDivisivelDeveRetornarTrueQuandoDivisivel()
    {
        $dividendo = 4;
        $divisor = 2;
        $divisivelInstance = new Divisivel();
        $result = $divisivelInstance->eDivisivel($dividendo, $divisor);
        $this->assertTrue($result);
    }

    public function testEDivisivelDeveRetornarFalseQuandoNaoDivisivel()
    {
        $dividendo = 4;
        $divisor = 3;
        $divisivelInstance = new Divisivel();
        $result = $divisivelInstance->eDivisivel($dividendo, $divisor);
        $this->assertFalse($result);
    }

}
