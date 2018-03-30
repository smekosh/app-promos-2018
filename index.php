<?php if (!isset($_GET['export'])) { 
?><!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js">
<head>
	<meta charset="utf-8"/>
	<title>VOA News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,500" />
</head>

<body style="margin: 12px; padding: 0;">
<?php } // end export ?>
	
	<?php
	//$divclass = 'voadigital-mobile-app-promo-'.date('Ymd');
	?>
	
	
	<style type="text/css">
		.promo {
			background-color: #eef2f6;
			background-image: url(img/bg-400x600.png);
			background-position: bottom;
			background-repeat: no-repeat;
			background-size: cover;
			border-top: 6px solid #1330bf;
			border-bottom: 2px solid #ddd;
			min-height: 600px;
			overflow: hidden;
			padding: 0;
			position: relative;
		}
		
		.promo-content {
			padding: 12px;
		}
		
		h2.tagline {
			font-family: 'Roboto', sans-serif;
			font-size: 2em;
			font-style: normal;
			font-weight: 500;
			line-height: 1.35;
			margin: 0;
			padding: 0;
		}
		
		p.download {
			font-family: 'Roboto', sans-serif;
			font-size: 1em;
			font-style: normal;
			font-weight: 500;
			line-height: 1.35;
			margin: 0;
			padding: 0;
		}
		
		.phones {
			background-color: transparent;
			background-image: url(img/en_phones_400x475.png);
			background-position: bottom -100px left 50%;
			background-repeat: no-repeat;
			background-size: contain;
			height: 475px;
			margin: 0 auto;
			max-width: 100%;
			overflow: hidden;
			padding: 0;
			position: absolute;
			top: 30%;
			width: 400px;
			z-index: 1;
		}
		
		@media (min-width: 800px) {
			.promo {
				background-image: url(img/bg-1232x250.png);
				min-height: 250px;
				padding: 0;
			}
			
			.promo-content {
				padding: 24px;
			}
			
			.phones {
				right: 0%;
				top: 0%;
				z-index: 1;
			}
		}
	</style>
	
	<div class="promo">
		
		<div class="promo-content">
			<h2 class="tagline">Download our new app today</h2>
			<p class="download">The VOA Persian app is free!</p>
			<a href="" target="_blank"><img src="img/en_ios-app-store_80x240.png" height="40" width="120" alt="Download on the App Store" /></a>
			<a href="" target="_blank"><img src="img/en_google-play_80x270.png" height="40" width="135" alt="Get it on Google Play" /></a>
		</div>
		
		<div class="phones"></div>
		
	</div> 

<?php if (!isset($_GET['export'])) { ?>	
</body></html>
<?php } // end export
