<?php
require __DIR__ . '/vendor/autoload.php';
use Aws\S3\S3Client;

function index($data)
{
	$bucket = '';
	$s3 = new Aws\S3\S3Client([
    	'credentials' => [
        'key' => '',
        'secret' => '',
    	],
    	'region' => 'us-east-1',
   	 'version' => 'latest',
	]);
 	
	try {
    		$results = $s3->getPaginator('ListObjects', [
        		'Bucket' => $bucket
    		]);

    		foreach ($results as $result) {
        		foreach ($result['Contents'] as $object) {
            			echo $object['Key'] . PHP_EOL;
       		 	}
    		}
	} catch (S3Exception $e) {
    		echo $e->getMessage() . PHP_EOL;
	}	

	echo "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
	return "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
}

