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

    abstract function preProcess(object $data): object;
    abstract function process(object $data): object;
    abstract function postProcess(object $data): object;
}