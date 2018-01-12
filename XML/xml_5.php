<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('/tmp/xml4.xml');

$dom = new DOMDocument();
$dom->load('product.xml');


$node = $xmlDoc->getElementsByTagName('description')->item(0)->cloneNode();
$node = $dom->importNode($node);

//$dom->appendChild($node);
$dom->getElementsByTagName('product')->item(0)->appendChild($node);
print $dom->saveXML();
