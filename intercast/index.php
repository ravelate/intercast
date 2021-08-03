<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intercast</title>
	<!-- include API -->
	<?php
      include 'api/covid19/getDataIndo.php';
		  include 'api/covid19/getDataGlobal.php';
      include 'api/weather/getCurrentWeatherIndo.php';
      include 'api/news/getNews.php';
      include 'api/currency/getCurrency.php';
      include 'api/currency/getCurrencyBTC.php';
      include 'api/game/getGame.php';
	?>
	<!-- CSS untuk web ini -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
	<!--Javascript untuk web ini -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<?php if ($errorstate == true){
 echo $errorcomment;
}else{ ?>
<body>
	<!-- Header -->
  <section id="header">
	<div class="container">
    <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">INTERCAST</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#header">HOME</a>
      <a class="p-2 link-secondary" href="#covid">Covid Case</a>
      <a class="p-2 link-secondary" href="#weather">Berita Cuaca</a>
      <a class="p-2 link-secondary" href="#game">Kurensi Mata Uang</a>
      <a class="p-2 link-secondary" href="#game">Berita & Game Trending</a>
    </nav>
  </div>
  </section>
<main class="container">
	<!-- Header:close -->

		<!-- Alert -->
		<!-- <div class="bd-example">
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div> -->
		<!-- Alert:close -->
	<!-- Headline -->
	
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-dark">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
	  <img class="bd-placeholder-img" width="100%" height="500px" src="https://covid19.go.id/storage/app/media/slider/kipi.jpeg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
      </div>
      <div class="carousel-item">
	  <img class="bd-placeholder-img" width="100%" height="500px" src="https://akcdn.detik.net.id/community/media/visual/2021/06/23/presiden-jokowi-1_169.jpeg?w=700&q=90" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
      <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-danger bg-light">PPKM DARURAT</h1>
            <p class="text-dark bg-light">Presiden Joko Widodo (Jokowi) pernah menyatakan PPKM Darurat atau PPKM Level 4 bakal dibuka secara bertahap apabila kasus Covid-19 bakal menurun.</p>
            <p><a class="btn btn-outline-light" href="#">Lebih Lanjut</a></p>
          </div>
        </div>
	  </div>
      <div class="carousel-item">
	  <img class="bd-placeholder-img" width="100%" height="500px" src="https://media.suara.com/pictures/653x366/2015/12/02/o_1a5g6p2458q01ssib7b1bd6ipba.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

        <div class="container">
          <div class="carousel-caption text-end">
		  <h1 class="text-danger bg-light">BERITA CUACA</h1>
            <p class="text-dark ">Waspada, Hujan Lebat berpotensi guyur sejumlah wilayah di Indonesia</p>
            <p><a class="btn btn-outline-light" href="#">Lebih Lanjut</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon carousel-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon carousel-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

	<!-- Headline:close -->
	<!-- Covidcase -->
	<br>
  <section id="covid">
	<h1 class="text-center text-light bg-success">Informasi COVID-19</h1>
	<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-info rounded-3">
		<h2 class="list-group-item">Global</h2>
		<div class="bd-example">
        <ul class="list-group list-group-flush">
		<li class="list-group-item bg-info text-light">Positif : <?= number_format($dataGlobal['confirmed'] , 0, ',', '.') ?></li>
          <li class="list-group-item bg-info text-light">Meninggal : <?= number_format($dataGlobal['deaths'] , 0, ',', '.') ?></li>
		  <br>
          <li class="list-group-item bg-info text-light">Update Terakhir: <?php echo substr($dataGlobal['lastChecked'],0,10) ?></li>
        </ul>
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-warning border rounded-3">
		<h2 class="list-group-item">Indonesia</h2>
		<div class="bd-example">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-warning text-light">Positif : <?= number_format($dataIndo['confirmed'] , 0, ',', '.') ?></li>
          <li class="list-group-item bg-warning text-light">Sembuh : <?= number_format($dataIndo['recovered'] , 0, ',', '.') ?></li>
          <li class="list-group-item bg-warning text-light">Meninggal : <?= number_format($dataIndo['deaths'] , 0, ',', '.') ?></li>
		  <br>
          <li class="list-group-item bg-warning text-light">Update Terakhir: <?php echo substr($dataIndo['lastUpdate'],0,10) ?></li>
        </ul>
        </div>
        </div>
      </div>
    </div>
    </section>
	<!-- Covidcase:close -->
  <!-- Weather -->
  <br>
  <section id="weather">
	<h1 class="text-center text-light bg-info">Informasi Cuaca</h1>
  <div class="p-1 mb-4 bg-info rounded-3">
    <div class="container-fluid py-5">
      <div class="row">
        <div class="w-25 p-5 h-100 d-inline-block">
        <img class="rounded bg-light" src=<?="https://www.weatherbit.io/static/img/icons/{$dataCWI['weather']['icon']}.png"?>>   
        </div>
        <div class="w-25">
        <p class="text-center text-light lead" style="font-size:93px"><?= $dataCWI["temp"]?>°C</p>
        </div>
        <div class="col-md">
        <div class="bd-example">
        <ul class="list-group list-group-flush">
        <li class="list-group-item bg-info text-light lead">Presipitasi : <?= $dataCWI["precip"]?></li>
          <li class="list-group-item bg-info text-light lead">Kecepatan Angin : <?= $dataCWI["wind_spd"]?></li>
          <li class="list-group-item bg-info text-light lead">Arah Angin : <?= $dataCWI["wind_cdir_full"]?></li>
        </ul>
        </div>
        </div>
        <div class="col-md">
        <div class="bd-example">
        <ul class="list-group list-group-flush">
        <li class="list-group-item text-black lead"><?= $dataCWI["city_name"]?>, Indonesia</li>
          <li class="list-group-item text-black lead"><?= $dataCWI["ob_time"]?> </li>
          <li class="list-group-item text-black lead"><?= $dataCWI["weather"]["description"]?></li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Weather:close -->
  <!-- News -->
  <section id="game">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Mata Uang Terkini
      </h3>

      <article class="blog-post">
      <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Kurensi Mata Uang</strong>
          <h3 class="mb-0">USD/IDR</h3>
          <div class="mb-1 text-muted"><?= date('d / M / y') ?></div>
          <h1 class="card-text mb-auto lead">Rp. <?= number_format($dataCurrent , 0, ',', '.') ?></h1>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Kurensi Mata Uang Digital</strong>
          <h3 class="mb-0">BTC/IDR</h3>
          <div class="mb-1 text-muted"><?= date('d / M / y') ?></div>
          Rp. <?= number_format($dataCurrentBTC , 0, ',', '.') ?>
        </div>

      </div>
    </div>
  </div>
  <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Game Populer
      </h3>
      <ul class="list-group list-group-flush">
      <?php 
      $i = 0;
      foreach ($dataGame as $game) {
        if($i==20){
          break;
        }
        $i++;
        ?>
          <li class="list-group-item">
            <div class="row">
            <img class="col rounded bg-light" src=<?="{$game['thumbnail']}"?>>
            <a class="col text-dark" style="text-decoration: none" href="<?= $game['game_url'] ?>">
            <p><strong><?= $game['title'] ?></strong></p>
            <p>Release Date: <?= $game['release_date'] ?></p>
            <p>Platform: <?= $game['platform'] ?></p>
            <p>Publisher: <?= $game['publisher'] ?></p>
            <br>
            <p><?= $game['short_description'] ?></p>
            </a>
            </div>
          </li>
          <?php } ?>
      </ul>
        
      </div>
      

    <div class="col-md-4"> 
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Tentang</h4>
          <p class="mb-0">Intercast adalah portal website yang menyediakan berita dan artikel terbaru yang memberikan informasi </p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Berita Trending</h4>
          
            <div class="col-md">
          <div class="bd-example">
          <ul class="list-group list-group-flush">
          <?php foreach ($dataNews['results'] as $news) {?>
          <li class="list-group-item">
            <div class="row">
            <img class="col bd-placeholder-img" width="95px" height="63px" src="<?= $news['image'] ?>">
            <a class="col text-dark" style="text-decoration: none" href="<?= $news['url'] ?>"><?= $news['title'] ?></a>
            </div>
          </li>
          <?php } ?>
          </ul>
        </div>
        </div>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
          </section>
  <!-- News:close -->
</main>
</body>
<?php } ?>
</html>