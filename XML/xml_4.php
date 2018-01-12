<?php
$dom = new DOMDocument();
$dom->loadXML('<?xml version="1.0" ?><product />');

$rootTag = $dom->getElementsByTagName('product')->item(0);
$rootTag->setAttribute('sku', 123456);

$descTag = $dom->createElement('description');
$descTag->setAttribute('type', 'short');
$rootTag->appendChild($descTag);

print $dom->saveXML();
file_put_contents('/tmp/xml4.xml', $dom->saveXML());
