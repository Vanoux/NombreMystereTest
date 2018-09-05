<?php
declare(strict_types=1);
include('./src/Mystere.php');
use PHPUnit\Framework\TestCase;

class mystereTest extends TestCase
{
public function setUp(){
    $this->truc = new Mystere; 
}
  

  public function testRandomExist(){
      $this->assertClassHasAttribute('random', Mystere::class);
  }
  public function testRandomValue(){
      $this->assertInternalType('integer', $this->truc->getRandom());
  }

}
?>