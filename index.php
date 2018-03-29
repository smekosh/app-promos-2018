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
		div.promodiv {
			background-image: url(img/bg-400x600.png);
			background-position: bottom;
			background-size: cover;
			border-top: 6px solid #1330bf;
			border-bottom: 2px solid #ddd;
			min-height: 600px;
			padding: 12px;
		}
		
		h2.promodiv {
			font-family: 'Roboto', sans-serif;
			font-size: 2em;
			font-style: normal;
			font-weight: 500;
			line-height: 1.35;
			margin: 0;
			padding: 0;
		}
		
		p.promodiv {
			font-family: 'Roboto', sans-serif;
			font-size: 1em;
			font-style: normal;
			font-weight: 500;
			line-height: 1.35;
			margin: 0;
			padding: 0;
		}
		
		@media (min-width: 800px) {
			div.promodiv {
				background-image: url(img/bg-1232x250.png);
				min-height: 250px;
				padding: 24px;
			}
		}
	</style>
	
	<div class="promodiv">
		<h2 class="promodiv">Download our new app today</h2>
		<p class="promodiv">The VOA Persian app is free!</p>
	</div> 

<?php if (!isset($_GET['export'])) { ?>	
</body></html>
<?php } // end export
