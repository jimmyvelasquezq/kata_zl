<?php 

class BingoCaller
{
  private $number = [];
  
  public function__construct()
  {
  }

  public function callNumber()
  {
    do {
        $number = rand(1, 75);
      
      }  while(in_array($number, $this->numbers));
   $this->number[] = $number;
    return $number
  
  }

}
?>