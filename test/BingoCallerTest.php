<?php
class BingoCallerTest extends TestCase
{
    public function testWhenCallsNumberItsInValidRange()
      {
        $caller = new BingoCaller();
        $number = $caller->callNumber();

        $this->assertTrue(condition:$number >= 1 $number <= 75);
      }
    
      public function testWhenCalls75timesAllNumbersArePresent()
      {
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expectedNumbers = range (start:1, end:75);

        for ($i=1; $i<=75; ++$1){
            $calledNumbers[] = $caller->callNumber();
        }
      
      sort( &array:$calledNumbers);
      $this->assertEquals($expectedNumbers,$calledNumbers );

      }
}
?>