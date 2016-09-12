<?php
  class Leetspeak{

    function convertToLeetspeak($input_string)
    {
      $input_array = str_split($input_string);
      $output_array =array();
      foreach($input_array as $index=> $letter){
        if($letter == "e" || $letter == "E"){
          array_push($output_array, "3");
        }
        elseif($letter == "o" || $letter =="O"){
          array_push($output_array, "0");
        }
        elseif($letter == "I"){
          array_push($output_array, "1");
        }
        elseif($letter == "s" && $index !=0 ){
          if($input_array[$index-1] != " "){
            array_push($output_array, "z");
          }
          else
          {
            array_push($output_array, $letter);
          }
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
