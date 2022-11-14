<?php

class TestDataSource
{
    public static TestDataSource $instance;
    public array $testData;

    private function __construct()
    {
        $this->testData = [
            'billingInvoice' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 'value1_4',
                    'key5' => 'value1_5',
                    'key6' => 'value1_6',
                    'key7' => 'value1_7',
                    'key8' => 'value1_8',
                    'key9' => 'value1_9',
                    'key10' => 'value1_10',
                    'key11' => 'value1_11',
                    'key12' => 50,
                    'key13' => 100.50,
                    'key14' => 'value1_14',
                    'key15' => 'value1_15'
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 'value2_4',
                    'key5' => 'value2_5',
                    'key6' => 'value2_6',
                    'key7' => 'value2_7',
                    'key8' => 'value2_8',
                    'key9' => 'value2_9',
                    'key10' => 'value2_10',
                    'key11' => 'value2_11',
                    'key12' => 500.75,
                    'key13' => 350,
                    'key14' => 'value2_14',
                    'key15' => 'value2_15'
                ]
            ]),
            'billingSummary' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 'value1_4',
                    'key5' => 'value1_5',
                    'key6' => 500.25
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 'value2_4',
                    'key5' => 'value2_5',
                    'key6' => 260.50
                ]
            ]),
            'deliveryReport' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 'value1_4',
                    'key5' => 'value1_5',
                    'key6' => 'value1_6',
                    'key7' => 'value1_7',
                    'key8' => 'value1_8',
                    'key9' => 'value1_9',
                    'key10' => 520.75,
                    'key11' => 'value1_11'
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 'value2_4',
                    'key5' => 'value2_5',
                    'key6' => 'value2_6',
                    'key7' => 'value2_7',
                    'key8' => 'value2_8',
                    'key9' => 'value2_9',
                    'key10' => 310.20,
                    'key11' => 'value2_11'
                ]
            ]),
            'receiptVoucher' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 'value1_4',
                    'key5' => 150.50,
                    'key6' => 90,
                    'key7' => 'value1_7',
                    'key8' => 10.25
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 'value2_4',
                    'key5' => 32,
                    'key6' => 12.75,
                    'key7' => 'value2_7',
                    'key8' => 60
                ]
            ]),
            'billingInvoiceTh' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 150.50,
                    'key5' => 90,
                    'key6' => 10.25
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 32,
                    'key5' => 12.75,
                    'key6' => 60
                ]
            ]),
            'salesOrder' => Util::arrayToObject([
                [
                    'key1' => 'value1_1',
                    'key2' => 'value1_2',
                    'key3' => 'value1_3',
                    'key4' => 150.50,
                    'key5' => 90,
                    'key6' => 10.25
                ],
                [
                    'key1' => 'value2_1',
                    'key2' => 'value2_2',
                    'key3' => 'value2_3',
                    'key4' => 32,
                    'key5' => 12.75,
                    'key6' => 60
                ]
            ]),
            'salesRegister' => Util::arrayToObject([
                [
                    'DAYDATE' => 1,
                    'CASH' => 1,
                    'TIEUPS' => 2,
                    'ADV' => 3,
                    'CRCARD' => 4,
                    'HPLOAD' => 5,
                    'HPLUSPTS' => 6,
                    'SCDISC' => 7,
                    'PWDDISC' => 8,
                    'OUTPUTTAX' => 9,
                    'GCRRBI' => 10,
                    'CRCARDDEP' => 28,
                    'CUSTDEP' => 28,
                    'HPLUSLOAD' => 11,
                    'OS' => 12,
                    'GROSSDISC' => 13,
                    'DELCHARGE' => 14,
                    'HPLUSDISC' => 15,
                    'HPLUSCARD' => 16,
                    'MISC' => 17,
                    'OTHERS' => 18,
                    'SCSALES' => 36,
                    'SCSALES2' => 36,
                    'RATE_SENIOR' => 36,
                    'RATE_SENIOR2' => 36,
                    'RATE_PWD' => 36,
                    'RATE_PWD2' => 36,
                ],
                [
                    'DAYDATE' => 19,
                    'CASH' => 20,
                    'TIEUPS' => 20,
                    'ADV' => 21,
                    'CRCARD' => 22,
                    'HPLOAD' => 23,
                    'HPLUSPTS' => 24,
                    'SCDISC' => 25,
                    'PWDDISC' => 26,
                    'OUTPUTTAX' => 27,
                    'GCRRBI' => 28,
                    'CRCARDDEP' => 28,
                    'CUSTDEP' => 28,
                    'HPLUSLOAD' => 29,
                    'OS' => 30,
                    'GROSSDISC' => 31,
                    'DELCHARGE' => 32,
                    'HPLUSDISC' => 33,
                    'HPLUSCARD' => 34,
                    'MISC' => 35,
                    'OTHERS' => 36,
                    'SCSALES' => 36,
                    'SCSALES2' => 36,
                    'RATE_SENIOR' => 36,
                    'RATE_SENIOR2' => 36,
                    'RATE_PWD' => 36,
                    'RATE_PWD2' => 36,
                ],
                [
                    'DAYDATE' => 1,
                    'CASH' => 1,
                    'TIEUPS' => 2,
                    'ADV' => 3,
                    'CRCARD' => 4,
                    'HPLOAD' => 5,
                    'HPLUSPTS' => 6,
                    'SCDISC' => 7,
                    'PWDDISC' => 8,
                    'OUTPUTTAX' => 9,
                    'GCRRBI' => 10,
                    'CRCARDDEP' => 28,
                    'CUSTDEP' => 28,
                    'HPLUSLOAD' => 11,
                    'OS' => 12,
                    'GROSSDISC' => 13,
                    'DELCHARGE' => 14,
                    'HPLUSDISC' => 15,
                    'HPLUSCARD' => 16,
                    'MISC' => 17,
                    'OTHERS' => 18,
                    'SCSALES' => 36,
                    'SCSALES2' => 36,
                    'RATE_SENIOR' => 36,
                    'RATE_SENIOR2' => 36,
                    'RATE_PWD' => 36,
                    'RATE_PWD2' => 36,
                ]
            ]),
        ];
    }

    public static function getInstance(): TestDataSource
    {
        if (isset(TestDataSource::$instance) && TestDataSource::$instance != null) {
            return TestDataSource::$instance;
        }
        TestDataSource::$instance = new TestDataSource();
        return TestDataSource::$instance;
    }
}