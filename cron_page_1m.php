<?php 
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "http://timkiemfb.com/cronjob-page-one/?limit=500"); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch); 
	curl_close($ch);      
	die($output);
?>