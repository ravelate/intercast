<?php

$curlCurrent = curl_init();

curl_setopt_array($curlCurrent, [
	CURLOPT_URL => "https://currency-exchange.p.rapidapi.com/exchange?to=IDR&from=USD&q=1.0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: currency-exchange.p.rapidapi.com",
		"x-rapidapi-key: 69b6f9a8a3msha080003f6c05073p1e93c8jsn8e4ff8e7f436"
	],
]);

$responseCurrent = curl_exec($curlCurrent);
$errCurrent = curl_error($curlCurrent);

curl_close($curlCurrent);
$errorstate = false;
if ($errCurrent) {
			$errorstate = true;
	$errorcomment = "<body class='bg-dark'>
	<div class='b-example-divider'></div>
	<div class='bg-dark text-secondary px-4 py-5 text-center'>
	  <div class='py-5'>
		<h1 class='display-5 fw-bold text-white'>ERROR:404</h1>
		<div class='col-lg-6 mx-auto'>
		  <p class='fs-5 mb-4'>{$errCurrent}</p>
		</div>
	  </div>
	</div>
	</body>";
} else {
	$dataCurrent = $responseCurrent;
}