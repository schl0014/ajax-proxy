<?php
include("./proxy.php");
//setup the Proxy with the right credentials
$mySwapiProxy = new Proxy('https://newsapi.org/v2/everything?q=max%20verstappen');
//get the data
$result = $mySwapiProxy->getData();
//print the data to the frontend.

print_r($result);