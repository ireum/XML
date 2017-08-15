<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('product.xml');

file_put_contents('/tmp/kopie.xml', $xmlDoc->saveXML());
