<?php
require('xml_4.php');

$descNode = $descTag;

$productDom = new DOMDocument();
$productDom->load('product.xml');
