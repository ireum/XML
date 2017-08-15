<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('product.xml');

print $xmlDoc->saveXML();
