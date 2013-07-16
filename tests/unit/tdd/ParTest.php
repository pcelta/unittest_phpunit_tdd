<?php
require_once __dir__ . '/../../../tdd/Par.php';
class ParTest extends PHPUnit_Framework_TestCase{

	public function testEPar(){
		$number = 2;
		$par = new Par();
		$result = $par->ePar($number);
	        $this->assertTrue($result);	
                $number = 4;
		$par = new Par();
		$result = $par->ePar($number);
	        $this->assertTrue($result);	
	}
        public function testNaoEPar(){
                $number = 1;
		$par = new Par();
		$result = $par->ePar($number);
	        $this->assertFalse($result);	
        }
}
