<?php
ob_start();
ini_set('max_execution_time', 90);
$pdf = true;
include('cv_index.php');
$content = ob_get_clean();

require_once('html2pdf/html2pdf.class.php');
try {
	$html2pdf = new HTML2PDF('P', 'A4', 'fr');
        //$html2pdf->addFont("inherit", );
	$html2pdf->pdf->SetDisplayMode('fullwidth','SinglePage','UseNone');
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	//$html2pdf->writeHTML("<page_footer>PDF généré le ".date("d/m/Y")." à ".date("H:i")."</page_footer>", isset($_GET['vuehtml'])); // On ajoute la date et l'heure
	$html2pdf->Output('CV_Andy_LECOQ.pdf');
}
catch(HTML2PDF_exception $e) {
	echo $e;
	exit;
}
?>
