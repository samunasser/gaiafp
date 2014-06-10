<?php get_header(); ?>
<div class="container_12">
	<div class="grid_12 prefix_2 suffix_2 post">
	
		<h2>Página não encontrada</h2>
		
		<p><strong>Parece que a página que você procura não está acessível.</strong></p>
		<p><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Volte para o site</a> ou use a busca abaixo:</p>			
		<?php include(TEMPLATEPATH.'/searchform.php'); ?>
	
	</div>
</div>
<?php get_footer(); ?>