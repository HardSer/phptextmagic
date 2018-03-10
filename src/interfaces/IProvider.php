<?php
namespace iTaysonLab\PHPTextMagic\Interfaces;

interface IProvider {
    public function getData($source);
    public function putData($data, $destination);
}