<?php

$xmlFile = 'data.xml';
$xml = simplexml_load_file($xmlFile);


echo "<h2>Data from XML:</h2>";
echo "<ul>";
foreach ($xml->children() as $item) {
    echo "<li>";
    echo "<strong>Name:</strong> " . $item->name . "<br>";
    echo "<strong>Age:</strong> " . $item->age . "<br>";
    echo "<strong>Address:</strong> " . $item->address . "<br>";
    echo "<strong>Email:</strong> " . $item->email . "<br>";
    echo "</li>";
    echo "<br>";
}
echo "</ul>";
?>
