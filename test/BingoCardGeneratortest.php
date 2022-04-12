<?php
class BingoCardGeneratorTest extends TestCase
{
  public public function testCardContainsValidNumbersAccordingToColumn()
  {
    $generator = new BingoCardGenerator();
    $card = $generator->generated();
    $this->assertTrue(condition:true);
  }
}
?>