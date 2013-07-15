<?php
require_once 'Service.php';
require_once 'Repository.php';

class ServiceTest extends PHPUnit_Framework_TestCase
{
    
    public function testSaveShouldReturnTrueWhenSaveWithSuccess()
    {
        $mockedRepository = $this->getMock('Repository', array('save'));
        $mockedRepository->expects($this->once())
            ->method('save')
            ->will($this->returnValue(true));

        $service = new Service($mockedRepository);
        $result = $service->save(array('nome' => 'pedro'));
        $this->assertTrue($result);            
    }
}
