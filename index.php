<?php include 'ayarlamalar.php'; ?>
<?php include 'inc/header.php'; ?>
<body>
	<div class="hero-homepage">
		<section id="anasayfa" class="hero is-fullheight">
			<div class="hero-head ">
				<nav class="navbar is-transparent is-spaced">
				  <div class="navbar-brand">
				  	<span class="navbar-item baslik has-text-white is-size-5 is-size-4-mobile">
				  		<?php echo $siteisimi; ?>
				  	</span>
				  </div>

				  <div id="ust" class="navbar-menu">
				    <div class="navbar-end">
				      <a href="#anasayfa" class="navbar-item has-text-white menuyazi">Anasayfa</a>
				      <a href="#ozellikler" class="navbar-item has-text-white menuyazi">Özellikler</a>
				      <a href="#yorumlar" class="navbar-item has-text-white menuyazi">Yorumlar</a>
				    </div>
				  </div>
				</nav>
				<section class="section">
					<div class="container">
						<div class="columns">
							<div class="column is-7">
								<h1 class="tanitimyazi is-size-4-mobile has-text-white has-text-left	"><?php echo $baslik; ?></h1><br>
								<a target="_blank" href="<?php echo $googleplay; ?>" class="button is-large indir has-text-white is-focus is-rounded">Google Play</a>
							</div>
							<div class="column is-half">
								<center><img id="telefon" class="image" src="<?php echo $telefon; ?>"></center>
							</div>
						</div>
					</div>
				</section>
			</div>

		</section>
	</div>
	<section id="ozellikler"  class="hero">
		<div class="hero-body">
			<div class="container">
				<div class="columns is-centered is-mobile">
					<div class="column is-3 is-7-mobile">
						<div class="box">
							<figure class="image is-square">
								<img src="<?php echo $oz1foto; ?>">
							</figure>
						</div>
						<center>
							<span id="altmetin" class="button is-static is-rounded is-fullwidth is-size-7-mobile"><?php echo $oz1yazi; ?></span>
						</center>
					</div>
					<div class="column is-3 is-7-mobile">
						<div class="box">
							<figure class="image is-square">
								<img src="<?php echo $oz2foto; ?>">
							</figure>

						</div>

						<center>
						<span id="altmetin" class="button is-static is-rounded is-size-7-mobile is-fullwidth"><?php echo $oz2yazi; ?></span>
						</center>
					</div>
					<div class="column is-3 is-7-mobile">
						<div class="box">
							<figure class="image is-square">
								<img src="<?php echo $oz3foto; ?>">
							</figure>

						</div>
						<center>
							<span id="altmetin" class="button is-static is-rounded is-size-7-mobile is-fullwidth "><?php echo $oz3yazi; ?></span>
						</center>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="yorumlar" class="hero">
		<div class="hero-body">
			<div class="container">
				<section class="section">
					<h1 class="title yorumbaslik has-text-centered is-size-2">" <?php echo $yorum; ?> "</h1>
					<h2 style="opacity: 0.8;" class="subtitle yorumbaslik has-text-centered is-size-6"><?php echo $yazan; ?></h2>
				</section>
			</div>
		</div>
	</section>

<?php include 'inc/footer.php'; ?>