<?php
$xmlDoc = new DOMDocument();
//$xmlDoc->load('product.xml');
$xmlDoc->load('productNS.xml');

print $xmlDoc->saveXML();
