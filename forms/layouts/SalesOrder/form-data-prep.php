<?php

require __DIR__.'/../../../../addon-resources/print-form/components/inc/scripts/autoload.php';
require __DIR__.'/../../../../addon-resources/print-form/components/inc/scripts/globals.php';

$formModel = new FormModel();

############################### DATA SOURCE ###############################
$formModel->storedProcName = '';
if ($formModel->storedProcName !== '' && !str_contains($formModel->storedProcName, ' ')) {
    $query = "EXEC [dbo].[$formModel->storedProcName] @DocKey = $docentry";
    $formModel->objRowArrResult = $formModel->getQueryResultRowObj($query);
} else {
    //testing
    $formModel->objRowArrResult = TestDataSource::getInstance()->salesOrder_objRowArrResult;
}

############################### FORM MPDF OPTIONS ###############################
$formModel->mpdfOptions->orientation = 'P';
$formModel->mpdfOptions->marginTop = 10;
$formModel->mpdfOptions->marginLeft = 10;
$formModel->mpdfOptions->marginRight = 10;
$formModel->mpdfOptions->marginBottom = 10;

############################### FORM PROPS ###############################
$formModel->title = 'BILLING INVOICE';

############################### HEADER ###############################
$formModel->header->companyName = 'JCBA Solutions and Consultancy Inc.';
$formModel->header->companyAddress = $formModel->header->companyName.'<br>[Street Address]<br>[City, Country, ZIP]<br>[VAT Registered TIN]<br>[Phone Number]<br>[Fax No.]<br>[Website]';
$formModel->header->tinNo = '008-647-370-000';
$formModel->header->title = 'STATEMENT OF ACCOUNT';
$formModel->header->subTitle = 'SOA #';
$formModel->header->documentDate = date('F j, Y');
$formModel->header->documentNumber = $docentry;
$formModel->header->paymentTerms = '';
$formModel->header->deliveryDate = '';
$formModel->header->dueDate = '';
$formModel->header->salesPerson = 'test';
$formModel->header->shippingMethod = 'test';
$formModel->header->shippingTerms = 'test';


############################### BODY TABLE ###############################
$formModel->columnDefinitions = Util::arrayToObject([
    [
        'description' => 'ITEM #',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'key1'
    ],
    [
        'description' => 'ITEM DESCRIPTION',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'key2'
    ],
    [
        'description' => 'QTY',
        'type' => ColumnType::NUMBER,
        'sqlColumnName' => 'key3'
    ],
    [
        'description' => 'UNIT PRICE',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key4'
    ],
    [
        'description' => 'DISC.',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key5'
    ],
    [
        'description' => 'TOTAL AMOUNT',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key6'
    ]
]);

############################### FOOTER ###############################
$formModel->signatories = [
    (object) [
        'name' => 'TEST 1',
        'description' => ''
    ],
    (object) [
        'name' => 'TEST 2',
        'description' => ''
    ],
    (object) [
        'name' => 'TEST 3',
        'description' => ''
    ]
];
