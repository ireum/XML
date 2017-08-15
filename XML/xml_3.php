<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('product.xml');

$counter = 1;

$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $node) {
//    $node->setAttribute('visited', 'true');
//    $node->item(0);
}


//$x = $xmlDoc->documentElement;
//foreach ($x->childNodes as $item) {
//    $item->nodeName->addAttribute('value', $counter++);
//    print $item->nodeName . PHP_EOL;
//}

//$x = simplexml_load_file('product.xml');
//$x->item->addAttribute('visited', 1);
//print $x->saveXML();

//$x = $xmlDoc->documentElement;
//foreach ($x->childNodes as $item) {
//        print $item->addAttribute('visited', $counter++);
//}


