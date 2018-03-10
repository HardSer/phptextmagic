<?php

namespace iTaysonLab\PHPTextMagic\Processors;
use iTaysonLab\PHPTextMagic\Core\Processor;

/**
*  Full JSON Processor
*
*  Example of Processor. Takes an Array and converts it into JSON String and saves it in the file
*
*  @author iTaysonLab
*/

class JsonToFile extends Processor{

  public $pName = "JSON Processor";
  public $pDesc = "Example processor that converts PHP array into JSON string";

  public $data = "filename.txt";

  protected function preProcess($input) {
      if(!is_array($input)) {
          throw new \Exception("Not an array!");
      } else {
          return $input;
      }
  }

  protected function process($input) {
      return json_encode($input);
  }

  protected function postProcess($input) {
      file_put_contents($this->data,$input);
      return "";
  }
}