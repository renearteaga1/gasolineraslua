<?php
// We'll be outputting a PDF
header("Content-Type:   application/zip");

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="Solicitud Credito(Llenar, Firmar y subir).zip"');

// The PDF source is in original.pdf
readfile('Solicitud Credito(Llenar, Firmar y subir).zip');
?>
