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
    $formModel->objRowArrResult = TestDataSource::getInstance()->testData['salesRegister'];
}

############################### FORM MPDF OPTIONS ###############################
$formModel->mpdfOptions->orientation = 'L';
$formModel->mpdfOptions->marginTop = 50;
$formModel->mpdfOptions->marginLeft = 10;
$formModel->mpdfOptions->marginRight = 10;
$formModel->mpdfOptions->marginBottom = 10;
$formModel->mpdfOptions->format = 'Legal';

############################### FORM PROPS ###############################
$formModel->title = 'SALES REGISTER';
$formModel->colors['color1'] = 'rgb(68, 114, 196)';
$formModel->colors['color2'] = 'rgb(0, 32, 96)';

############################### HEADER ###############################
$formModel->header->companyName = 'RED RIBBON BAKE SHOP, INC.';
$formModel->header->title = 'SALES REGISTER REPORT<BR>DATAWAREHOUSE';
$formModel->header->branchName = 'TEST_BRANCH_NAME';
$formModel->header->branchCode = 'TEST_BRANCH_CODE';
$formModel->header->datePeriod->from = date('F j, Y');
$formModel->header->datePeriod->to = date('F j, Y');


############################### BODY TABLE ###############################
$formModel->rowFormulas = [
    '@DISC' => function(object $currentRow, FormModel $formModel): mixed {
        $returnData = $currentRow->GROSSDISC / 1.12;
        return $returnData;
    },
    '@SCSALESPERDAY' => function(object $currentRow, FormModel $formModel): mixed {
        $returnData = 0;

        if ($currentRow->SCSALES != 0 && $currentRow->RATE_SENIOR != 0) {
            $returnData += ($currentRow->SCSALES / $currentRow->RATE_SENIOR);
        } else if ($currentRow->SCSALES != 0 && $currentRow->RATE_PWD != 0) {
            $returnData += ($currentRow->SCSALES / $currentRow->RATE_PWD);
        } else {
            $returnData += 0;
        }

        if ($currentRow->SCSALES2 != 0 && $currentRow->RATE_SENIOR2 != 0) {
            $returnData += ($currentRow->SCSALES2 / $currentRow->RATE_SENIOR2);
        } else if ($currentRow->SCSALES2 != 0 && $currentRow->RATE_PWD2 != 0) {
            $returnData += ($currentRow->SCSALES2 / $currentRow->RATE_PWD2);
        } else {
            $returnData += 0;
        }

        return $returnData;
    },
    '@SALESREV' => function(object $currentRow, FormModel $formModel): mixed {
        $returnData = $currentRow->SCDISC + $currentRow->PWDDISC;
        $returnData += $formModel->execRowFormula('@INVSALES', $currentRow);
        $returnData -= $formModel->execRowFormula('@SCSALESPERDAY', $currentRow);
        $returnData /= 1.12;
        return $returnData;
    },
    '@INVSALES' => function(object $currentRow, FormModel $formModel): mixed {
        $returnData = $currentRow->CASH;
        $returnData += $currentRow->TIEUPS;
        $returnData += $currentRow->ADV;
        $returnData += $currentRow->CRCARD;
        $returnData += $currentRow->HPLOAD;
        $returnData += $currentRow->HPLUSPTS;
        $returnData -= $currentRow->GCRRBI;
        $returnData -= $currentRow->CRCARDDEP;
        $returnData -= $currentRow->CUSTDEP;
        $returnData -= $currentRow->HPLUSLOAD;
        $returnData -= $currentRow->OS;
        $returnData += $currentRow->GROSSDISC;
        return $returnData;
    },
];

$formModel->columnDefinitions = Util::arrayToObject([
    [
        'description' => 'DAY',
        'type' => ColumnType::TEXT,
        'sqlColumnName' => 'DAYDATE'
    ],
    [
        'description' => 'CASH',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'CASH',
    ],
    [
        'description' => 'TIEUPS',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'TIEUPS'
    ],
    [
        'description' => 'ADV',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'ADV'
    ],
    [
        'description' => 'CrCARD',
        'type' => ColumnType::NUMBER,
        'sqlColumnName' => 'CRCARD'
    ],
    [
        'description' => 'HP LOAD',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'HPLOAD'
    ],
    [
        'description' => 'HP PTS.',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'HPLUSPTS'
    ],
    [
        'description' => 'DISC',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => '',
        'formulaName' => '@DISC'
    ],
    [
        'description' => 'SC DISC.',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'SCDISC'
    ],
    [
        'description' => 'PWD DISC.',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'PWDDISC'
    ],
    [
        'description' => 'SC SALES',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => '',
        'formulaName' => '@SCSALESPERDAY'
    ],
    [
        'description' => 'SALES REV',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => '',
        'formulaName' => '@SALESREV'
    ],
    [
        'description' => 'OUTPUT TAX',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'OUTPUTTAX'
    ],
    [
        'description' => 'GC-RRBI',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'GCRRBI'
    ],
    [
        'description' => 'CrCARD-dep',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'CRCARDDEP'
    ],
    [
        'description' => 'CustDep',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'CUSTDEP'
    ],
    [
        'description' => 'HPLUS LOAD',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'HPLUSLOAD'
    ],
    [
        'description' => 'OS',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'OS'
    ],
    [
        'description' => 'GROSS DISC',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'GROSSDISC'
    ],
    [
        'description' => 'INV SALES',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => '',
        'formulaName' => '@INVSALES'
    ],
    [
        'description' => 'DEL',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'DELCHARGE'
    ],
    [
        'description' => 'HP DISC',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'HPLUSDISC'
    ],
    [
        'description' => 'HP CARD',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'HPLUSCARD'
    ],
    [
        'description' => 'MISC.',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'MISC'
    ],
    [
        'description' => 'OTHERS',
        'type' => ColumnType::MONEY,
        'sqlColumnName' => 'OTHERS'
    ],
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
