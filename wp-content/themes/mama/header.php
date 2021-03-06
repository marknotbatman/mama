<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta property="og:title" content="Mama Film">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:url" content="http://mama.film" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php the_field('logo') ?>" />

		<meta name="twitter:site" value="@MamaFilm1" />
		<meta property="twitter:url" content="https://twitter.com/MamaFilm1" />
		<meta property="twitter:title" content="Mama Film" />
		<meta property="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta property="twitter:image" content="<?php the_field('logo') ?>" />
		<meta name="twitter:card" value="summary_large_image" />

		<link rel="stylesheet" href="/wp-content/themes/mama/assets/dist/css/app.css">
		<!-- <link rel="shortcut icon" href="/mama-favicon.png"> -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://web.archive.org/web/20160803025407/https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-39910583-1', 'auto');
		ga('send', 'pageview');

		</script>

	</head>
	<body <?php body_class(); ?>>

		<header class="" role="banner">
			<div class="row">
				<div class="columns medium-10 medium-offset-1">
					<ul class="social right">
						<li>
							<a class="social-link instagram" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/mamafilm1/">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>	
						<li>
							<a class="social-link facebook" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/MamaFilmFest/">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>	
						<li>
							<a class="social-link twitter" target="_blank" rel="noopener noreferrer" href="https://twitter.com/MamaFilm1">
								<i class="fab fa-twitter-square"></i>
								<span>Twitter</span>
							</a>
						</li>	
					</ul>
				</div>
			</div>					
		</header>
