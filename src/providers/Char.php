<?php
namespace iTaysonLab\PHPTextMagic\Providers;
use iTaysonLab\PHPTextMagic\Core\Provider;

class Char extends Provider {

    public function getData($source)
    {
        return $source;
    }

    public function putData($data, $destination)
    {
        throw new \Exception("ArrayProvider never writes!");
    }

}