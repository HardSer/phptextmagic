<?php

namespace iTaysonLab\PHPTextMagic\Core;
use iTaysonLab\PHPTextMagic\Interfaces\IProcessor;

/**
 *  Lite Processor Base
 *
 *  Lite Processor base class. Lite Processor only has process() (and preProcess() for validation)
 *
 * @author iTaysonLab
 */

abstract class LiteProcessor implements IProcessor
{

    /**  @var string $pName Processor name */
    public $pName;
    /**  @var string $pName Processor description */
    public $pDesc;

    /**
     * preProcess
     *
     * Abstract function. Define your pre-processing commands here
     *
     * @param string $input Text/Array input
     *
     * @return string
     */
    abstract protected function preProcess($input);

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
        $string = $this->process($this->preProcess($input));
        return $string;
    }
}