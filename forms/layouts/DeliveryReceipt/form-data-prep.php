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
$formModel->title = 'DELIVERY RECEIPT';
$formModel->colors['color1'] = 'rgb(68, 114, 196)';
$formModel->colors['color2'] = 'darkblue';

############################### HEADER ###############################
$formModel->header->companyName = 'JCBA Solutions and Consultancy Inc.';
$formModel->header->companyAddress = '21 Esteban South Street Dalandanan, Valenzuela City, 3rd Dist, NCR, Philippines, 1443';
$formModel->header->tinNo = '_____________________';
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
$formModel->footer->printNo = '';
$formModel->footer->dateIssued = '';
$formModel->footer->printingCompany = '[Printing Company]';
$formModel->footer->printingCompanyAddress = '[PAddress]';
$formModel->footer->printingCompanyTin = '';
$formModel->footer->printerAccNo = '____________';
$formModel->footer->dateIssued2 = '_________';
$formModel->footer->info1 = '"THIS DOCUMENT IS NOT VALID FOR CLAIM OF INPUT TAXES"';
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
