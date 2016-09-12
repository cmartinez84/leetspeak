<?php
  require_once __DIR__."/../src/Leetspeak.php";

  class PingPongTest extends PHPUnit_Framework_TestCase
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
    }
 ?>
