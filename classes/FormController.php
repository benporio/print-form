<?php

class FormController implements IFormController
{
    public IFormTypeModel $formTypeModel;

    function __construct(IFormTypeModel $formTypeModel) 
    { 
        $this->formTypeModel = $formTypeModel;
    }

    public function buildForm(object $data): object
    {
        return $this->formTypeModel->drawForm($data);
    }
}