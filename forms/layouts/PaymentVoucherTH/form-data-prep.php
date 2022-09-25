<?php

require __DIR__.'/../../../../addon-resources/print-form/components/inc/scripts/autoload.php';
require __DIR__.'/../../../../addon-resources/print-form/components/inc/scripts/globals.php';

$formModel = new FormModel();
############################### DATA SOURCE ###############################
$formModel->storedProcName = 'usp_INTL_Payment_Voucher';
if ($formModel->storedProcName !== '' && !str_contains($formModel->storedProcName, ' ')) {
    $query = "EXEC [dbo].[$formModel->storedProcName] @DocKey = $docentry";
    $formModel->objRowArrResult = $formModel->getQueryResultRowObj($query);
} else {
    //testing
    $formModel->objRowArrResult = TestDataSource::getInstance()->paymentVoucher_objRowArrResult;
}

############################### FORM MPDF OPTIONS ###############################
$formModel->mpdfOptions->orientation = 'P';
$formModel->mpdfOptions->marginTop = 10;
$formModel->mpdfOptions->marginLeft = 10;
$formModel->mpdfOptions->marginRight = 10;
$formModel->mpdfOptions->marginBottom = 10;

############################### FORM PROPS ###############################
$formModel->title = 'Payment Voucher';

############################### HEADER ###############################
$formModel->header->title = $formModel->title;
$formModel->header->documentDate = date('m/d/Y', strtotime($formModel->objRowArrResult[0]->DocDate));
$formModel->header->documentNumber = $docentry;
$formModel->header->customerName = $formModel->objRowArrResult[0]->CardName;

############################### BODY TABLE ###############################
$formModel->columnDefinitions = Util::arrayToObject([
    [
        'description' => '#',
        'type' => ColumnType::ROW_NUMBER,
        'sqlColumnName' => ''
    ],
    [
        'description' => 'Invoice No',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'InvoiceNumber'
    ],
    [
        'description' => 'Invoice Date',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'InvoiceDate'
    ],
    [
        'description' => 'Description',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'Dscription'
    ],
    [
        'description' => 'QTY',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'Quantity'
    ],
    [
        'description' => 'Amount',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'InvoiceDocTotal'
    ],
    [
        'description' => 'VAT',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'InvoiceVatSum'
    ],
    [
        'description' => 'WHT',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'InvoiceWTSum'
    ],
    [
        'description' => 'Net Paid',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'InvoicePaidSum'
    ]
]);

############################### BODY FOOTER ###############################
$formModel->footer->amount = $formModel->objRowArrResult[0]->NetOfVat;
$formModel->footer->vat = $formModel->objRowArrResult[0]->VatSum;
$formModel->footer->wht = $formModel->objRowArrResult[0]->DocTotal;
$formModel->footer->netPaid = $formModel->objRowArrResult[0]->PaidSum;

############################### FOOTER ###############################
$formModel->footer->paymentMethod = '';
$formModel->footer->paymentDate = '';
$formModel->footer->amountPaid = $formModel->objRowArrResult[0]->PaidSum;
$formModel->footer->bank = $formModel->objRowArrResult[0]->TransferBank;
$formModel->footer->bankNo = $formModel->objRowArrResult[0]->BankAcct;
$formModel->footer->bankName = $formModel->objRowArrResult[0]->BankName;
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
