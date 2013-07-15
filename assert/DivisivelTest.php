<?php
require_once 'Divisivel.php';
class DivisivelTest extends PHPUnit_FrameWork_TestCase
{
    /**
     * @dataProvider eDivisivelProvider
     */
    public function testEDivisivelDeveRetornarTrueQuandoDivisivel($dividendo, $divisor)
    {
        $divisivelInstance = new Divisivel();
        $result = $divisivelInstance->eDivisivel($dividendo, $divisor);
        $this->assertTrue($result);
    }
    public static function eDivisivelProvider()
    {
	return array(
	    array(4, 2),
            array(2, 2),
	    array(5, 5)
	);
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
