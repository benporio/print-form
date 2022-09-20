<?php

class FormModel extends DataModel
{

    public string $title;
    public string $storedProcName;
    public array $colors;
    public object $logo;
    
    public object $datePeriod;

    public object $mpdfOptions;
    public object $header;
    public object $footer;

    public array $columnDefinitions;
    public array $signatories;

    public array $objRowArrResult;

    public function __construct()
    {
        ### Setting default logo setup
        $this->logo = new class {
            public string $path = INCLUDE_DIR.'/images/jcba_logo.jpg';
            public string $height = '120px';
            public string $width = '190px';
            public string $alignment = 'right';
        };

        $this->datePeriod = new class {
            public string $from;
            public string $to;
        };

        $this->header = new class($this) {

            function __construct(private FormModel $formModel)
            { 
                $this->logo = $this->formModel->logo;
                $this->datePeriod = $this->formModel->datePeriod;
            }
        };

        $this->footer = new class($this) {

            function __construct(private FormModel $formModel)
            { 
                $this->logo = $this->formModel->logo;
                $this->datePeriod = $this->formModel->datePeriod;
            }
        };

        $this->mpdfOptions = new class() {
            public string $orientation = 'P';
            public string $defaultPageNumStyle = '1';
            public string $pagenumPrefix = '';
            public string $pagenumSuffix = '';
            public string $nbpgPrefix = '';
            public string $nbpgSuffix = '';
            public int $marginLeft = 5;
            public int $marginRight = 5;
            public int $marginTop = 0;
            public int $marginBottom = 0;
            public int $marginHeader = 5;
            public int $marginFooter = 5;
        };
    }

    public function getColumnTotal(string $columnName): float
    {
        return array_reduce(
            $this->objRowArrResult,
            fn($acc, $row) => $acc += (float)$row->{$columnName},
            0
        );
    }
}