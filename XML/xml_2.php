<?php
$xmlDoc = new DOMDocument();
//$xmlDoc->load('product.xml');
$xmlDoc->load('productNS.xml');

file_put_contents('/tmp/kopie.xml', $xmlDoc->saveXML());
