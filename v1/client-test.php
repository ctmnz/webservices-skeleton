<?php //client-test.php
ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$client = new SoapClient("http://morningcent.com/webservices/v1/inventory.wsdl");

$return = $client->getItemCount('12345');
print_r($return);

echo "<br>";


$return = $client->getBookAddr('devname');
print_r($return);


?>
