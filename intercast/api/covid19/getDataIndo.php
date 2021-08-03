<?php

$curlIndo = curl_init();

curl_setopt_array($curlIndo, [
	CURLOPT_URL => "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?country=Indonesia",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-19-coronavirus-statistics.p.rapidapi.com",
		"x-rapidapi-key: 69b6f9a8a3msha080003f6c05073p1e93c8jsn8e4ff8e7f436"
	],
]);

$responseIndo = curl_exec($curlIndo);
$errIndo = curl_error($curlIndo);

curl_close($curlIndo);
$errorstate = false;
if ($errIndo) {
	$errorstate = true;
	$errorcomment = "<body class='bg-dark'>
	<div class='b-example-divider'></div>
	<div class='bg-dark text-secondary px-4 py-5 text-center'>
	  <div class='py-5'>
		<h1 class='display-5 fw-bold text-white'>ERROR:404</h1>
		<div class='col-lg-6 mx-auto'>
		  <p class='fs-5 mb-4'>{$errIndo}</p>
		</div>
	  </div>
	</div>
	</body>";
} else {
	$responseIndo = json_decode($responseIndo, true);
	 $dataIndo = $responseIndo['data']['covid19Stats']['0'];
}