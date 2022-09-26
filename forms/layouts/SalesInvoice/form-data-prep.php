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
$formModel->title = 'SALES INVOICE';
$formModel->colors['color1'] = 'rgb(68, 114, 196)';
$formModel->colors['color2'] = 'rgb(0, 32, 96)';

############################### HEADER ###############################
$formModel->header->companyName = 'JCBA Solutions and Consultancy Inc.';
$formModel->header->companyAddress = '21 Esteban South Street Dalandanan, Valenzuela City, 3rd Dist, NCR, Philippines, 1443';
$formModel->header->tinNo = '_____________________';
$formModel->header->title = $formModel->title;
$formModel->header->documentDate = date('F j, Y');
$formModel->header->documentNumber = '1000'; //$docentry

$formModel->header->customerName = 'Customer';
$formModel->header->customerAddress = 'Customer Address';
$formModel->header->customerTin = 'Customer TIN';
$formModel->header->customerBusinessStyle = 'Sample Business Style';
$formModel->header->terms = 'Sample Terms';
$formModel->header->oscaPwdIdNo = 'Sample OSCA No';
$formModel->header->scPwdSignature = 'Sample PWD Signature';


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
        'description' => 'DISC',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key5'
    ],
    [
        'description' => 'TOTAL AMOUNT',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'key6'
    ]
]);

############################### BODY FOOTER ###############################
$formModel->footer->vatableSales = '-';
$formModel->footer->vatExAmount = '-';
$formModel->footer->zeroRatedSales = '-';
$formModel->footer->vatAmount = '-';
$formModel->footer->totalSales = '-';
$formModel->footer->lessVat = '-';
$formModel->footer->netAmount = '-';
$formModel->footer->scPwdDiscount = '-';
$formModel->footer->addVat = '-';
$formModel->footer->totalAmount = '-';

############################### FOOTER ###############################
$formModel->footer->printNo = '';
$formModel->footer->dateIssued = '';
$formModel->footer->printingCompany = '[Printing Company]';
$formModel->footer->printingCompanyAddress = '[PAddress]';
$formModel->footer->printingCompanyTin = '';
$formModel->footer->printerAccNo = '____________';
$formModel->footer->dateIssued2 = '_________';
$formModel->footer->info2 = 'THIS INVOICE SHALL BE VALID FOR FIVE (5) YEARS FROM THE';
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
