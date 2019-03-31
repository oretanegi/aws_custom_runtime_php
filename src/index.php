<?php
use Aws\S3\S3Client;

function index($data)
{
	$dir = __DIR__;

	//$cmd = "${dir}/bin/puzzle-diff ${dir}/pic/test.png ${dir}/pic/test2.png";
	//exec($cmd, $opt);
	//print_r($opt);
	
	$cmd = "${dir}/bin/dwebp ${dir}/pic/test.webp -o /tmp/test_webp.jpg";
	exec($cmd, $opt);
	print_r($opt);
	
	$cmd = 'ls -la /tmp';
	exec($cmd, $opt);
	print_r($opt);
	
	//$cmd = "${dir}/python/python3.6 -B ${dir}/python/test.py";
	//exec($cmd, $opt);
//	print_r($opt);
	/*
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
        */
	echo "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
	return "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
}

