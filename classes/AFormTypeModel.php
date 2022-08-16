<?php

abstract class AFormTypeModel implements IFormTypeModel
{
    public final function drawForm(object $data): object
    {
        try 
        {
            $data = $this->preProcess($data);
            $data = $this->process($data);
            $data = $this->postProcess($data);
            return $data;
        } 
        catch (\Exception $e)
        {
            throw $e;
        }
    }

    abstract function preProcess(object $data): mixed;
    abstract function process(object $data): mixed;
    abstract function postProcess(object $data): mixed;
}