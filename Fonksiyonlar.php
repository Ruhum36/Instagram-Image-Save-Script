<?php

	function Connect($Url, $TimeOut = 10, $UserAgent = 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0'){

	    $Curl = curl_init(); 
	    curl_setopt($Curl, CURLOPT_URL, $Url);
	    curl_setopt($Curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($Curl, CURLOPT_USERAGENT, $UserAgent);
	    curl_setopt($Curl, CURLOPT_FOLLOWLOCATION, 1);
	    curl_setopt($Curl, CURLOPT_TIMEOUT, $TimeOut);
	    curl_setopt($Curl, CURLOPT_SSL_VERIFYPEER, false);
	    $Sonuc = curl_exec($Curl);
	    curl_close($Curl);

	    return $Sonuc;

	}

?>