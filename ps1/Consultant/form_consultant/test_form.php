<?php

require_once __DIR__ . '../../../mPDF/vendor/autoload.php';

$mpdf = new mPDF('A4-L');
include 'form_2.php';
$mpdf->WriteHTML($html);
$mpdf->Output('form2.pdf','I');

?>