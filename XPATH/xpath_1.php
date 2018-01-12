<?php
// A1
$xml = simplexml_load_file('productNS.xml');
$xml->registerXPathNamespace('e', 'http://competec.ch/product');

$descriptions = $xml->xpath('/e:product/e:description');
echo 'Aufgabe 1' . PHP_EOL;
foreach ($descriptions as $description) {
    echo 'Found: ' . $description . PHP_EOL;
}
echo PHP_EOL;

// A2
$descriptions = $xml->xpath(
    "//e:product[@sku='12345']/e:description | 
    //e:product[@name='Projektor']/e:description"
);
echo 'Aufgabe 2' . PHP_EOL;
foreach ($descriptions as $description) {
    echo 'Found: ' . $description . PHP_EOL;
}
echo PHP_EOL;

// A3
$descriptions = $xml->xpath(
    "//e:product[@sku='12345']/e:description[@type='short'] | 
    //e:product[@name='Projektor']/e:description[@type='short']"
);
echo 'Aufgabe 3' . PHP_EOL;
foreach ($descriptions as $description) {
    echo 'Found: ' . $description . PHP_EOL;
}
echo PHP_EOL;

// A4
$descriptions = $xml->xpath(
    "//e:description[1]/@type"
);
echo 'Aufgabe 4' . PHP_EOL;
foreach ($descriptions as $description) {
    echo 'Found: ' . $description . PHP_EOL;
}
echo PHP_EOL;

// A5
$xmlComp = simplexml_load_file('competec.xml');
$xmlComp->registerXPathNamespace('c', 'http://competec.ch/product');

$prices = $xmlComp->xpath(
    "//c:prices/c:price[@value[not(. < ../../c:price/@value)][1]]/@class |
    //c:prices/c:price/@value[not(. < ../../c:price/@value)][1] | 
    //c:prices/c:price[@value[not(. > ../../c:price/@value)][1]]/@class |
    //c:prices/c:price/@value[not(. > ../../c:price/@value)][1]"
);
echo 'Aufgabe 5' . PHP_EOL;
foreach ($prices as $price) {
//    echo($price->xpath("@value")[0][0]);
//    var_dump($price);
    echo 'Found: ' . $price . PHP_EOL;
}
echo PHP_EOL;

// A6
$prices = $xmlComp->xpath(
    "//c:prices/c:price/@value"
);
$c = 0;

echo 'Aufgabe 6' . PHP_EOL;
foreach ($prices as $price) {
    $c += $price;
}
echo 'Sum: ' . $c . PHP_EOL;
echo PHP_EOL;

// A7
$xmlComp->registerXPathNamespace('i', 'http://competec.ch/images');
$images = $xmlComp->xpath("//i:images/i:image/i:size[@variant='original']/@src");

echo 'Aufgabe 7' . PHP_EOL;
foreach ($images as $image) {
    echo 'Found: ' . $image . PHP_EOL;
}
echo PHP_EOL;
