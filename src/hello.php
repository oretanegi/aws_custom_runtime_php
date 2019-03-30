<?php

function hello($data)
{
	echo "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
	return "uploaded object key: {$data['Records'][0]['s3']['object']['key']}";
}


