<?php
  class Leetspeak{

    function convertToLeetspeak($input_string)
    {
      $input_array = str_split($input_string);
      $output_array =array();
      foreach($input_array as $letter){
        if($letter == "e" || $letter == "E"){
          array_push($output_array, "3");
        }
        else{
          array_push($output_array, $letter);
        }
      }
      $result = join($output_array);
      return $result;
    }
  }
 ?>
