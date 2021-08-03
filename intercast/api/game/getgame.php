<?php

$curlGame = curl_init();

curl_setopt_array($curlGame, [
	CURLOPT_URL => "https://free-to-play-games-database.p.rapidapi.com/api/games?platform=pc",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: free-to-play-games-database.p.rapidapi.com",
		"x-rapidapi-key: 69b6f9a8a3msha080003f6c05073p1e93c8jsn8e4ff8e7f436"
	],
]);

$responseGame = curl_exec($curlGame);
$errGame = curl_error($curlGame);

curl_close($curlGame);
$errorstate = false;
if ($errGame) {
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
	$dataGame = json_decode($responseGame, true);
}