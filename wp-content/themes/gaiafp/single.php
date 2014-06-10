<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="previous-link"><?php previous_post_link('%link'); ?></div>
		<div id="next-link"><?php next_post_link('%link'); ?></div>

		<div class="container_12 post single">
			<div class="grid_5">
				<div class="photo-share">
					<?php the_post_thumbnail(); ?>

					<div class="share">
						<span class='st_facebook_hcount' displayText='Facebook'></span>
						<span class='st_twitter_hcount' displayText='Tweet'></span>
						<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
						<span class='st_email_hcount' displayText='Email'></span>
						<script type="text/javascript">var switchTo5x=true;</script>
						<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
						<script type="text/javascript">stLight.options({publisher: "2717ffbd-d73a-4e80-a654-cd6b63c0a093", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
					</div>
<!-- 				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Compartilhe no Facebook</a> -->
				</div>
				<div class="clear_fix">&nbsp;</div>
			</div>


			<div class="grid_7" id="<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="clearfix"></div>
				<p class="tags">Tags: <?php wp_tag_cloud(); ?></p>
				<?php comments_template(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php get_footer(); ?>