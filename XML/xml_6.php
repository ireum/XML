<?php
$counter = 1;

$xml = simplexml_load_file('product.xml');
$xml->registerXPathNamespace('e', 'http://competec.ch/product');

echo 'Aufgabe XML 1: ' . PHP_EOL;
print $xml->saveXML() . PHP_EOL;

echo 'Aufgabe XML 2: ' . PHP_EOL;


if (file_put_contents('/tmp/kopie.xml', $xml->saveXML()) > 0) {
    echo 'Xml file saved' . PHP_EOL . PHP_EOL;
}

echo 'Aufgabe XML 3: ' . PHP_EOL;
foreach ($xml->children() as $child) {
    $child->addAttribute('visited', $counter++);
}
print $xml->saveXML() . PHP_EOL;


echo 'Aufgabe XML 5: ' . PHP_EOL;
$xmlDoc = new DOMDocument();
$xmlDoc->load('/tmp/xml4.xml');

$dom = new DOMDocument();
$dom->load('productNS.xml');
$dom->isDefaultNamespace('http://competec.ch/product');

$node = $xmlDoc->getElementsByTagName('description')->item(0)->cloneNode();
$node = $dom->importNode($node);

$dom->getElementsByTagName('product')->item(0)->appendChild($node);
print $dom->saveXML();




