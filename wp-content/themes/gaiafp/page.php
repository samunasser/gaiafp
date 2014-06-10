<?php get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<?php if(is_front_page()): ?>
	<section id="headline">
		<div class="container_12 headline">
			<h1 class="white"><?php the_field('headline'); ?></h1>
			<div class="grid_6 push_6">
				<h2><?php the_field('description'); ?></h2>
				<iframe width="460" height="310" src="//www.youtube.com/embed/<?php the_field('link_video'); ?>?showinfo=0&autohide=1" frameborder="0" allowfullscreen></iframe>
				<a href="#newsletter" class="button primary">Receba mais informações</a> <a href="#contact">ou entre em contato</a>
			</div>
		</div>
	</section>



	<section id="services">
		<div class="container_12">
			<h1><?php the_field('title_services'); ?></h1>

			<div class="grid_4 services">
				<img src="<?php the_field('image_service_1'); ?>" alt="<?php the_field('title_service_1'); ?>" title="<?php the_field('title_service_1'); ?>">
				<h3><?php the_field('title_service_1'); ?></h3>
				<div>
					<p><?php the_field('description_service_1'); ?></p>
					<a href="<?php the_field('link_button_service_1'); ?>" class="button"><?php the_field('text_button_service_1'); ?></a>
				</div>
			</div>

			<div class="grid_4 services">
				<img src="<?php the_field('image_service_2'); ?>" alt="<?php the_field('title_service_2'); ?>" title="<?php the_field('title_service_2'); ?>">
				<h3><?php the_field('title_service_2'); ?></h3>
				<div>
					<p><?php the_field('description_service_2'); ?></p>
					<a href="<?php the_field('link_button_service_2'); ?>" class="button"><?php the_field('text_button_service_2'); ?></a>
				</div>
			</div>

			<div class="grid_4 services">
				<img src="<?php the_field('image_service_3'); ?>" alt="<?php the_field('title_service_3'); ?>" title="<?php the_field('title_service_3'); ?>">
				<h3><?php the_field('title_service_3'); ?></h3>
				<div>
					<p><?php the_field('description_service_3'); ?></p>
					<a href="<?php the_field('link_button_service_3'); ?>" class="button"><?php the_field('text_button_service_3'); ?></a>
				</div>
			</div>
		</div>
	</section>



	<section id="reasons">
		<div class="container_12">
			<h1><?php the_field('title_reasons'); ?></h1>
			<div class="grid_8 push_1">
				<?php the_field('description_reasons'); ?>
			</div>
		</div>
	</section>



	<section id="testimonials">
		<div class="container_12">
			<h1><?php the_field('title_testimonials'); ?></h1>
			<div class="grid_2">
				<span class="quote">&#8220;</span>
				<a href="javascript:;" class="unslider-arrow prev arrow-left"></a>
			</div>


			<div class="banner grid_8 alpha omega">
				<ul>
					<li class="active">
						<blockquote class="grid_8 testimonial">
							<p><?php the_field('text_testimonial_1'); ?></p>
							<p class="person"><?php the_field('name_testimonial_1'); ?></p>
						</blockquote>
					</li>
					<li>
						<blockquote class="grid_8 testimonial">
							<p><?php the_field('text_testimonial_2'); ?></p>
							<p class="person"><?php the_field('name_testimonial_2'); ?></p>
						</blockquote>
					</li>
					<li>
						<blockquote class="grid_8 testimonial">
							<p><?php the_field('text_testimonial_3'); ?></p>
							<p class="person"><?php the_field('name_testimonial_3'); ?></p>
						</blockquote>
					</li>
					<li>
						<blockquote class="grid_8 testimonial">
							<p><?php the_field('text_testimonial_4'); ?></p>
							<p class="person"><?php the_field('name_testimonial_4'); ?></p>
						</blockquote>
					</li>
					<li>
						<blockquote class="grid_8 testimonial">
							<p><?php the_field('text_testimonial_5'); ?></p>
							<p class="person"><?php the_field('name_testimonial_5'); ?></p>
						</blockquote>
					</li>
				</ul>
			</div>


			<div class="grid_2">
				<a href="javascript:;" class="unslider-arrow next arrow-right"></a>
				<span class="quote right">&#8221;</span>
			</div>
				</li>
			</ul>
		</div>
	</section>




	<?php else: ?>

	<article class="pages" id="<?php the_ID(); ?>">
		<div class="container_12">
			<h1><?php the_title(); ?></h1>
			<div class="grid_8 push_2">
				<?php the_content(); ?>
			</div>
		</div>
	</article>

	<?php endif; ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>