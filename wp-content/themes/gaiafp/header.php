<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<?php if(is_page()): ?>
<body>
<header>
	<div class="container_12">
		<div class="grid_2" id="logo">
			<a href="/">Gaia FP
				<small>Finanças Pessoais</small>
			</a>
		</div>
		<div class="grid_10">
			<nav>
				<?php wp_nav_menu(); ?>
			</nav>
		</div>
	</div>
</header>



<?php else: ?>
<body id="blog">
<header>
	<div class="container_12">
		<div class="grid_2" id="logo">
			<a href="/blog">Gaia FP
				<small>BLOG</small>
			</a>
		</div>
		<div class="grid_5">
			<nav>
				<?php wp_nav_menu(array('menu' => 'blog')); ?>
			</nav>
		</div>
		<div class="grid_3 search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input id="s" name="s" type="search" placeholder="Busca">
				<input type="submit" class="icon-search" title="Fazer a busca">
			</form>
		</div>
		<div class="grid_2 social-media">
			<a href="https://pt-br.facebook.com/GaiaFinancasPessoais" class="icon-facebook" title="Facebook Gaia Finanças Pessoais" target="_blank">Facebook</a>
			<a href="http://www.linkedin.com/pub/andre-crepaldi/6/8b3/7b7" class="icon-linkedin" title="Linkedin Gaia Finanças Pessoais" target="_blank">Linkedin</a>
			<a href="https://www.youtube.com/channel/UCrh7mAu3QOpEfQxaPNXhskw/" class="icon-youtube" title="YouTube Gaia Finanças Pessoais" target="_blank">YouTube</a>
		</div>
	</div>
</header>
<?php endif; ?>