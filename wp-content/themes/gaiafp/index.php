<?php get_header(); ?>
	<section id="blog-headline">
		<div class="container_12">
			<div class="grid_8 push_4">
				<h1 class="white">Fique por dentro de tudo que diz respeito às suas finanças pessoais</h1>
			</div>
		</div>
	</section>


	<div class="container_12">
		<div class="grid_3 sidebar">
			<?php get_sidebar(); ?>
		</div>

		<?php if(have_posts()): ?>
		<div class="grid_10">
			<ul>
				<?php while(have_posts()): the_post(); ?>
				<li class="grid_11 post" id="<?php the_ID(); ?>">
					<div class="grid_4">
						<?php the_post_thumbnail('medium'); ?>
						<a href="<?php the_permalink(); ?>" class="button cta"><?php echo (get_field('call_to_action') != '') ? the_field('call_to_action') : 'Veja mais'; ?></a>
					</div>
					<div class="grid_7 alpha omega post-description">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="excerpt">&raquo; <?php echo (get_field('call_to_action') != '') ? the_field('call_to_action') : 'Veja mais'; ?></a>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>

			<div class="navigation">
				<div class="left"><?php next_posts_link('&laquo; Mais antigos') ?></div>
				<div class="right"><?php previous_posts_link('Mais recentes &raquo;') ?></div>
			</div>
		</div>


		<?php else: ?>
			<div class="grid_10 prefix_1 suffix_1 post">
				<h2>Página não encontrada</h2>
				
				<p><strong>Parece que a página que você procura não está acessível.</strong></p>
				<p><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Volte para o site</a> ou use a busca abaixo:</p>			
				<?php include(TEMPLATEPATH.'/searchform.php'); ?>				
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>