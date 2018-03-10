<?php

require 'vendor/autoload.php';
$m = new \iTaysonLab\PHPTextMagic\Processors\Mixer();
$provider = new \iTaysonLab\PHPTextMagic\Providers\File();
$getProvider = new \iTaysonLab\PHPTextMagic\Providers\Char();
$processor = new \iTaysonLab\PHPTextMagic\Processors\Json();
$m->doWork($provider, $getProvider, $processor, array("test" => "MixerProvider works!"), "test.txt");