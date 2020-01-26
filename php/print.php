<?php
require 'pdfcrowd.php';

try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("suvink", "6661b15023d23d49e058068bf769f1ed");

    // run the conversion and write the result to a file
    $client->convertUrlToFile("http://35.247.185.195/partymania/printpreview.html", "PartyMania-Report.pdf");
    echo 'harii';
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>