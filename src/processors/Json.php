<?php

namespace iTaysonLab\PHPTextMagic\Processors;
use iTaysonLab\PHPTextMagic\Core\LiteProcessor;
/**
*  JSON Processor
*
*  Example of LiteProcessor. Takes an Array and converts it into JSON String
*
*  @author iTaysonLab
*/

class Json extends LiteProcessor {

  public $pName = "JSON Processor";
  public $pDesc = "Example processor that converts PHP array into JSON string";

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
}