<?php
namespace iTaysonLab\PHPTextMagic\Providers;

interface IProvider {
    public function getData($source);
    public function putData($data, $destination);
}