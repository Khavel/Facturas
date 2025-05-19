<?php
require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/compta/facture/class/facture.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';

$id = GETPOST('facid', 'int');
$langs->load("bills");

$factura = new Facture($db);
$factura->fetch($id);

llxHeader("", "Generar Facturae");

print load_fiche_titre("Generación de Facturae");

if ($factura->id > 0) {
    $xmldir = DOL_DATA_ROOT . '/facturaeverifactu/';
    if (!file_exists($xmldir)) {
        mkdir($xmldir, 0777, true);
    }

    $filename = $xmldir . 'FAC-' . $factura->ref . '.xml';

    $doc = new DOMDocument('1.0', 'UTF-8');
    $doc->formatOutput = true;

    $root = $doc->createElement('Facturae');
    $root = $doc->appendChild($root);

    $header = $doc->createElement('Header');
    $header = $root->appendChild($header);
    $header->appendChild($doc->createElement('InvoiceNumber', $factura->ref));
    $header->appendChild($doc->createElement('IssueDate', dol_print_date($factura->date, '%Y-%m-%d')));
    $header->appendChild($doc->createElement('TotalAmount', price($factura->total_ttc)));

    $doc->save($filename);

    print "<p>✅ XML Facturae generado: <a href='" . DOL_URL_ROOT . "/document.php?modulepart=facturaeverifactu&file=FAC-" . $factura->ref . ".xml' target='_blank'>Descargar XML</a></p>";
} else {
    print "<p style='color:red;'>Factura no encontrada.</p>";
}

llxFooter();
$db->close();
