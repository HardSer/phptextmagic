<?php
namespace iTaysonLab\PHPTextMagic\Providers;
use iTaysonLab\PHPTextMagic\Provider;

class File extends Provider
{
    public function getData($source)
    {
        return file_get_contents($source);
    }

    public function putData($data, $destination)
    {
        file_put_contents($destination, $data);
    }
}