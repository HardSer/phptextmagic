<?php

namespace iTaysonLab\PHPTextMagic;
use iTaysonLab\PHPTextMagic\Providers\IProvider;


/**
 *  Provider Base
 *
 *  Provider base class. Provider is a class which gets data and puts data
 *
 * @author iTaysonLab
 */

abstract class Provider implements IProvider
{

    /**  @var string $pName Provider name */
    public $pName;
    /**  @var string $pName Provider description */
    public $pDesc;

    /**
     * getData
     *
     * Abstract function. Define your get commands here
     *
     * @param string $source Source of data
     *
     * @return string
     */
    abstract public function getData($source);

    /**
     * getData
     *
     * Abstract function. Define your get commands here
     *
     * @param string $data Data (e.g text, array)
     * @param string $destination Destination of data (e.g Amazon S3 bucket, FTP server or file)
     *
     * @return string
     */
    abstract public function putData($data, $destination);
}