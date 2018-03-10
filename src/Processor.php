<?php

namespace iTaysonLab\PHPTextMagic;
use iTaysonLab\PHPTextMagic\Processors\IProcessor;

/**
 *  Processor Base
 *
 *  Processor base class. Processor is a class which takes input, processes it and returns output
 *
 * @author iTaysonLab
 */

abstract class Processor implements IProcessor
{

    /**  @var string $pName Processor name */
    public $pName;
    /**  @var string $pName Processor description */
    public $pDesc;

    /**
     * process
     *
     * Abstract function. Define your processing commands here
     *
     * @param string $input Text/Array input processed from preProcess()
     *
     * @return string
     */
    abstract protected function process($input);

    /**
     * postProcess
     *
     * Abstract function. Define your post-process commands here (e.g uploading to cloud or returning string)
     *
     * @param string $input Text/Array input processed from process()
     *
     * @return string
     */
    abstract protected function postProcess($input);

    /**
     * preProcess
     *
     * Abstract function. Define your pre-process commands here (e.g downloading from cloud or validating text)
     *
     * @param string $input Text/Array input from do()
     *
     * @return string
     */
    abstract protected function preProcess($input);

    /**
     * doWork
     *
     * Basically, workflow command. It calls postProcess in process in preProcess.
     *
     * @param string $input Text/Array input
     *
     * @return string
     */
    public function doWork($input)
    {
        $string = $this->postProcess($this->process($this->preProcess($input)));
        return $string;
    }
}