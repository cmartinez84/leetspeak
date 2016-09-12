<?php
  require_once __DIR__."/../src/Leetspeak.php";

  class LeetspeakTest extends PHPUnit_Framework_TestCase
    {
        function test_Leetspeak_outputInput()
        {
           $input_string = "apply";
           //Act
           $newLeetspeak = new Leetspeak;
           $result = $newLeetspeak->convertToLeetspeak($input_string);
           //Assert
           $this->assertEquals("apply", $result);
        }
        function test_Leetspeak_replaceE()
        {
          $input_string = "real";

          $newLeetspeak = new Leetspeak;
          $result = $newLeetspeak->convertToLeetspeak($input_string);

          $this->assertEquals("r3al", $result);
        }
        function test_Leetspeak_replaceO()
        {
          $input_string = "onomotopoeia";

          $newLeetspeak = new Leetspeak;
          $result = $newLeetspeak->convertToLeetspeak($input_string);

          $this->assertEquals("0n0m0t0p03ia", $result);
        }
        function test_Leetspeak_replaceI()
        {
          $input_string = "Iambic Pentameter";

          $newLeetspeak = new Leetspeak;
          $result = $newLeetspeak->convertToLeetspeak($input_string);

          $this->assertEquals("1ambic P3ntam3t3r", $result);
        }
    }
 ?>
