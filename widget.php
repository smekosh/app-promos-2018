<?php

require_once( 'translations.php' );

if ( !isset( $_GET['lang'] ) ) {
	$data = $translations['english'];
} else {
	$data = $translations[$_GET['lang']];
}

$widget_name = 'app-promo-'.date('Ymd');

$asset_directory = 'https://projects.voanews.com/app-promo-assets'; // no trailing slash

if ( !isset( $_GET['export'] )) {

?><!DOCTYPE html>
<html lang="<?php echo $data['lang']; ?>" dir="<?php echo $data['dir'] ?>" class="no-js">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
<?php } // end if export ?>

	<style type="text/css">

	.wrapper-<?php echo $widget_name; ?> {
		background-color: #eef2f6;
		border-top: 6px solid #1330bf;
		padding: 0;
		position: relative;
		<?php if (isset($_GET['width'])) { echo "max-width: {$_GET['width']};"; } ?>
	}

	.container-<?php echo $widget_name; ?> {
		background-image: url(<?php echo $asset_directory; ?>/img/_base/bg-400x600.png);
		background-position: bottom;
		background-repeat: no-repeat;
		background-size: cover;
		border-color: #ccc;
		border-style: solid;
		border-width: 0 2px 2px 2px;
		height: 500px;
		overflow: hidden;
	}

	.content-<?php echo $widget_name; ?> {
		padding: 12px;
	}

	h2.tagline-<?php echo $widget_name; ?> {
		color: #222;
		font-family: sans-serif;
		font-size: 28px;
		font-style: normal;
		font-weight: normal;
		line-height: 1.35;
		margin: 7px 0 0 0;
		padding: 0;
		text-align: center;
	}

	.dl-buttons-<?php echo $widget_name; ?> {
		padding: 36px 0 12px 0;
		text-align: center;
	}

	.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> {
		color: #1330bf;
		display: inline-block;
		line-height: 1;
		margin: 3px 6px;
		text-decoration: none;
	}

	.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> > img.btn-<?php echo $widget_name; ?> {
		box-shadow: 0 2px 2px 0 rgba(46,66,76,.3),0 1px 5px 0 rgba(46,66,76,.3);
		border-radius: 8px;
		max-height: 40px;
		transition: box-shadow .2s cubic-bezier(0.42, 0.0, 0.58, 1.0);
		width: auto;
	}

	.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?>:hover > img.btn-<?php echo $widget_name; ?> {
		box-shadow: none;
	}

	p.secondary-text-<?php echo $widget_name; ?> {
		color: #222;
		font-family: sans-serif;
		font-size: 16px;
		font-style: normal;
		font-weight: bold;
		line-height: 1.35;
		margin: 0;
		padding: 0 0 24px 0;
		text-align: center;
	}

	img.phones-<?php echo $widget_name; ?> {
		display: block;
		height: auto;
		margin: 0 auto;
		max-width: 350px;
		overflow: hidden;
		width: 90%;
	}

	@media (min-width: 280px) {
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> { margin: 0 3px; }
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> > img.btn-<?php echo $widget_name; ?> { max-height: 32px; }
	}

	@media (min-width: 310px) {
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> { margin: 0 6px; }
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> > img.btn-<?php echo $widget_name; ?> { max-height: 36px; }
	}

	@media (min-width: 345px) {
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> { margin: 0 9px; }
		.dl-buttons-<?php echo $widget_name; ?> > a.btn-<?php echo $widget_name; ?> > img.btn-<?php echo $widget_name; ?> { max-height: 40px; }
	}

	</style>
	
<?php if ( !isset( $_GET['export'] )) { ?>

</head>
<body style="margin: 0; padding: 0;">
	
<?php } // end if export ?>
	
	<div lang="<?php echo $data['lang']; ?>" dir="<?php echo $data['dir'] ?>" class="wrapper-<?php echo $widget_name; ?>">
		
		<div class="container-<?php echo $widget_name; ?>">
			
			<div class="content-<?php echo $widget_name; ?>">
				<h2 class="tagline-<?php echo $widget_name; ?>"><?php echo $data['headline']; ?></h2>
				<div class="dl-buttons-<?php echo $widget_name; ?>">
					<a class="ios-<?php echo $widget_name; ?> btn-<?php echo $widget_name; ?>" href="<?php echo $data['ios_url']; ?>" target="_blank"><img class="btn-<?php echo $widget_name; ?>" src="<?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_ios-app-store_80x240.png" height="40" width="120" alt="<?php echo $data['ios_alt']; ?>" /></a>
					<a class="play-<?php echo $widget_name; ?> btn-<?php echo $widget_name; ?>" href="<?php echo $data['play_url']; ?>" target="_blank"><img class="btn-<?php echo $widget_name; ?>" src="<?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_google-play_80x270.png" height="40" width="135" alt="<?php echo $data['play_alt']; ?>" /></a>
				</div>
				<p class="secondary-text-<?php echo $widget_name; ?>"><?php echo $data['subhead']; ?></p>
			</div>
			
			<img class="phones-<?php echo $widget_name; ?>" 
			    srcset="<?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_phones_175x231.png 175w,
			            <?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_phones_350x462.png 350w,
			            <?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_phones_700x924.png 700w"
			     sizes="(max-width: 200px) 175px,
			            (max-width: 400px) 350px,
			            700px"
			       src="<?php echo $asset_directory; ?>/img/<?php echo $data['lang']; ?>/<?php echo $data['lang']; ?>_phones_175x231.png" 
			       alt="" />
			       
		</div>
		
	</div>

<?php if ( !isset( $_GET['export'] )) { ?>

</body>
</html>

<?php }
