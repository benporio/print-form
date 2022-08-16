<?php

interface IFormController {
    public function buildForm(IFormTypeModel $formTypeModel): mixed;
}