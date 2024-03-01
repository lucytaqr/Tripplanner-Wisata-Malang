<<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Trip Planner
        </h1>
        <p class="text-white link-nav">Halaman ini memuat informasi Trip Planner Wisata di Kota dan Kabupaten Malang</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<link rel ="stylesheet" href= "assets/css/tripStyle.css">
<title>Halaman Informasi</title>
	
</head>
<body>
  <article>
	<header>
		<h1>Trip Planner Paket 1</h1>
	</header>
	<main>
		<div class="container">
			<div class="box">
				<img src="assets/img/kampungTridi.jpg" alt="Gambar 1">
				<div>
					<h3>Kampung Tridi</h3>
					<p>🕑 08.00 - 17.00
                        <br>⌛️ Durasi terbaik 2 jam
                        <br><button disabled>Keluarga</button><button disabled>Seni&Budaya</button>
						<br><a href="detail.php?id_wisata=72">Lihat lebih lengkap</a>
                    </p>
				</div>
                <hr>
			</div>
            <div class="box">
				<img src="assets/img/hawai.jpg" alt="Gambar 2">
				<div>
                <h3>Hawai Waterpark</h3>
					<p>🕑 09.00 - 17.00
                        <br>⌛️ Durasi terbaik 5 jam
                        <br><button disabled>Keluarga</button><button disabled>Bermain</button>
                        <br><a href="detail.php?id_wisata=54">Lihat lebih lengkap</a>
				</div>
                <hr>
		</div>
	</main>
</article>
	<?php include "footer.php"; ?>