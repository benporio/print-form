<?php

require __DIR__.'//inc//autoload.php';

$data = json_decode($_POST['data']);

$printFormController = new FormController(
    ClassLoader::getInstance(
        StringUtil::uriToClassName(
            UriUtil::getUriPart($_SERVER['HTTP_REFERER'], 3)
        )
    )
);

$form = $printFormController->buildForm($data);

require __DIR__.'//..//..//mpdf//vendor//autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('Data');
//call watermark content aand image
// $mpdf->SetWatermarkText('phpflow.COM');
// $mpdf->showWatermarkText = true;
// $mpdf->watermarkTextAlpha = 0.1;
//save the file put which location you need folder/filname
$mpdf->Output("phpflow.pdf", 'D');
//out put in browser below output function
// header('Content-Type: application/pdf');
// $mpdf->Output();

// echo json_encode($form);