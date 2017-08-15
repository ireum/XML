<?php
$counter = 1;

$xml = simplexml_load_file('product.xml');
foreach ($xml->children() as $child) {
    $child->addAttribute('visited', $counter++);
}
print $xml->saveXML();



