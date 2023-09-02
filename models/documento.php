<?php

$img_campus_petrolina = "../resources/assets/img/campus_petrolina.png";
$img_escudo_brasil = "../resources/assets/img/escudo_brasil.png";

if (isset($_POST["exportar_documento_pdf"])) {
    require_once "../vendor/autoload.php";

    include("../resources/components/pdf.php");

    $mpdf = new \Mpdf\Mpdf(['margin_top' => 45, 'margin_bottom' => 25, 'margin_header' => 12]);
    $mpdf->SetHTMLHeader($cabecalho);
    $mpdf->SetHTMLFooter($rodape);
    $mpdf->WriteHTML($html);
    $mpdf->Output("documento.pdf", "I");
}



// Gera DOCX com base na estrutura feita para o PDF, mas de forma incompleta por falta de compatibilidade
if (isset($_POST["exportar_documento_doc"])) {
    require_once "../vendor/autoload.php";

    // Configurar o PHPWord
    \PhpOffice\PhpWord\Settings::setOutputEscapingEnabled(true);
    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    include("../resources/components/pdf.php");

    // Adicionar uma seção para o cabeçalho
    $headerSection = $phpWord->addSection();
    \PhpOffice\PhpWord\Shared\Html::addHtml($headerSection, $cabecalho);

    // Adicionar uma seção ao documento
    // $section = $phpWord->addSection();
    // \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html);

    // Adicionar uma seção para o rodapé
    $footerSection = $phpWord->addSection();
    \PhpOffice\PhpWord\Shared\Html::addHtml($footerSection, $rodape);

    $now = date('Y-m-d');
    // Salvar o documento em formato DOCX
    $docxFilePath = "tce_" . $now . ".docx";
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save($docxFilePath);

    // Enviar o documento para o navegador
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment;filename="' . $docxFilePath . '"');
    header('Cache-Control: max-age=0');
    $objWriter->save('php://output');
}



header("Location: ../documento.php");
