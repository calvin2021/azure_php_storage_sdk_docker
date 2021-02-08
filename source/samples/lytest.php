<?php


namespace MicrosoftAzure\Storage\Samples;

require_once "../vendor/autoload.php";

use MicrosoftAzure\Storage\Blob\BlobRestProxy;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=".getenv('ACCOUNT_NAME').";AccountKey=".getenv('ACCOUNT_KEY');
$blobClient = BlobRestProxy::createBlobService($connectionString);

$container = "poktest";
$blobFile = 'ly.csv';

$content = fopen($blobFile, "r");

try {
    $blobClient->createBlockBlob($container, $blobFile, $content);
} catch (ServiceException $e) {
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message.PHP_EOL;
}

exit();
