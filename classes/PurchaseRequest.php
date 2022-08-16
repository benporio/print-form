<?php

class PurchaseRequest extends AFormTypeModel
{
    function preProcess(object $data): mixed
    {

    }

    function process(object $data): mixed
    {

    }

    function postProcess(object $data): mixed
    {
        return $data;
    }
}