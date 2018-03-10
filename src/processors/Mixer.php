<?php

namespace iTaysonLab\PHPTextMagic\Processors;
use iTaysonLab\PHPTextMagic\Processor;
use iTaysonLab\PHPTextMagic\Providers\IProvider;

/**
 *  Mixer Processor Base
 *
 *  Mixer Processor base class. Mixer Processor combines Processor and Provider (e.g: Json and File)
 *
 * @author iTaysonLab
 */

class Mixer
{

    /**
     * process
     *
     * Function. Return Processor output
     *
     * @param string $input Text/Array
     * @param Processor $processor Text Processor
     *
     * @return string
     * @throws \Exception
     */
    protected function process($input, $processor)
    {
        if ($processor instanceof IProcessor) {
            return $processor->doWork($input);
        } else {
            throw new \Exception("Given \$processor is not extending IProcessor, aborting!");
        }
    }

    /**
     * processProvider
     *
     * Function. Sends process() output to Provider
     *
     * @param string $input Text/Array input processed from process()
     *
     * @param $provider
     * @param $dest
     * @return string
     * @throws \Exception
     */
    protected function processProvider($input, $provider, $dest)
    {
        if ($provider instanceof IProvider) {
            $provider->putData($input, $dest);
        } else {
            throw new \Exception("Given \$provider is not extending IProvider, aborting!");
        }
    }

    /**
     * getDataFromProvider
     *
     * Function. Gets data from Provider
     *
     * @param $provider
     * @param $dest
     * @return string
     * @throws \Exception
     */
    protected function getDataFromProvider($provider, $dest)
    {
        if ($provider instanceof IProvider) {
            return $provider->getData($dest);
        } else {
            throw new \Exception("Given \$provider is not extending IProvider, aborting!");
        }
    }

    /**
     * doWork
     *
     * Basically, workflow command. It calls process in processProvider
     *
     * @param $providerPut
     * @param $providerGet
     * @param $processor
     * @param $destGet
     * @param $destPut
     * @internal param string $input Text/Array input
     */
    public function doWork($providerPut, $providerGet, $processor, $destGet, $destPut)
    {
        $this->processProvider($this->process($this->getDataFromProvider($providerGet, $destGet), $processor), $providerPut, $destPut);
    }
}