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
$formModel->title = 'PURCHASE ORDER';
$formModel->colors['color1'] = 'rgb(68, 114, 196)';
$formModel->colors['color2'] = 'rgb(0, 32, 96)';

############################### HEADER ###############################
$formModel->header->companyName = 'JCBA Solutions and Consultancy Inc.';
$formModel->header->companyAddress = '[Street Address]<br>[City, Country, ZIP]<br>[VAT Registered TIN]<br>[Phone Number]<br>[Fax No.]<br>[Website]';
$formModel->header->tinNo = '008-647-370-000';
$formModel->header->title = $formModel->title;
$formModel->header->documentDate = date('F j, Y');
$formModel->header->documentNumber = $docentry;
$formModel->header->paymentTerms = '';
$formModel->header->deliveryDate = '';
$formModel->header->dueDate = '';

$formModel->header->customerName = '[Company Name]';
$formModel->header->contactPerson = '[Contact Person | Department]';
$formModel->header->streetAddress = '[Street Address]';
$formModel->header->city = '[City';
$formModel->header->country = 'Country';
$formModel->header->zip = 'ZIP]';
$formModel->header->customerTin = '[VAT Registered TIN]';
$formModel->header->customerContactNo = '[Phone Number]';
$formModel->header->faxNo = '[Fax No.]';

$formModel->header->shipToName = '[Contact Person | Department]';
$formModel->header->shipToCompany = '[Company Name]';
$formModel->header->shipToStreetAddress = '[Street Address]';
$formModel->header->shipToCity = '[City';
$formModel->header->shipToProvince = 'Province';
$formModel->header->shipToCountry = 'Country';
$formModel->header->shipToZip = 'ZIP]';
$formModel->header->shipToContactNo = '[Phone Number]';

$formModel->header->requisitioner = '[Name | Department]';
$formModel->header->prNo = '00001';
$formModel->header->fob = 'DELIVERY';
$formModel->header->paymentTerms = '30 Days';


############################### BODY TABLE ###############################
$formModel->columnDefinitions = Util::arrayToObject([
    [
        'description' => 'ITEM #',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'key1'
    ],
    [
        'description' => 'DESCRIPTION',
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
        'description' => 'TOTAL AMOUNT',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key5'
    ]
]);

############################### BODY FOOTER ###############################
$formModel->footer->comment = 'Test Comment';
$formModel->footer->totalAmount = '-';
$formModel->footer->withHoldingTax = '-';
$formModel->footer->discount = '-';
$formModel->footer->netAmount = '-';
$formModel->footer->vatAmount = '-';
$formModel->footer->subTotal = '-';

############################### FOOTER ###############################
$formModel->footer->signatories = [
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
