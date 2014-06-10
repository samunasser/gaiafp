</div>
<?php if(is_page()): ?>
<footer>
	<div class="container_12" id="contact">
		<div class="grid_4 contact">
			<h3>Contato</h3>
				<div itemtype="http://data-vocabulary.org/Person" itemscope>
					<span itemprop="name" class="hide">André Crepaldi</span>
					<span itemprop="title" class="hide">Coach Financeiro</span>
					<span itemprop="email" class="hide">contato@gaiafp.com.br</span>
					<span itemprop="affiliation" class="hide">Gaia Finanças Pessoais</span>
					<a href="http://www.gaiafinancaspessoais.com.br/" class="hide" itemprop="url">http://www.gaiafinancaspessoais.com.br/</a>
					<span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
						<span itemprop="street-address">Rua Rute Ferraz de Angelis, 886 - sala 36</span><br>The Mall Offices - Villa Bella<br>
						<span itemprop="locality">Campinas</span> - <span itemprop="region" title="São Paulo">SP</span> 
					</span><br>
					<span itemprop="tel">(19) 3256-2756</span>
				</div>


<!--
			<div class="vcard">
				<span class="fn hide">André Crepaldi</span>
				<span class="org hide">Gaia Finanças Pessoais</span>
				<span class="email hide">contato@gaiafp.com.br</span>
				<span class="url hide">http://www.gaiafinancaspessoais.com.br/</span>
				<div class="adr">
					<span class="street-address">Rua Rute Ferraz de Angelis, 886 - sala 36<br>
					The Mall Offices - Villa Bella</span><br>
					<span class="locality">Campinas</span> - <span class="region" title="São Paulo">SP</span> <span class="postal-code">13087-729</span><br>
					<span class="tel">(19) 3256-2756</span>
				</div>
			</div>
-->
			<a href="https://www.google.com/maps/place/Gaia+Finan%C3%A7as+Pessoais/@-22.8566442,-47.0565182,16z/data=!4m5!1m2!2m1!1sRua+Rute+Ferraz+de+Angelis,+886+-+campinas!3m1!1s0x94c8c4347a060361:0x48b95db3b55d3918" class="link-map" target="_blank">Veja o mapa</a>
			
			<?php echo do_shortcode('[contact-form-7 id="55" title="Contato"]'); ?>

		</div>
		<div class="grid_4">
			<div id="newsletter" class="white newsletter">
				<h3>Newsletter</h3>
	
				<?php echo do_shortcode('[contact-form-7 id="57" title="Newsletter"]'); ?>
			</div>

			<h3>Redes sociais</h3>
			<a href="https://pt-br.facebook.com/GaiaFinancasPessoais" class="icon-facebook" title="Facebook Gaia Finanças Pessoais" target="_blank">Facebook</a>
			<a href="http://www.linkedin.com/pub/andre-crepaldi/6/8b3/7b7" class="icon-linkedin" title="Linkedin Gaia Finanças Pessoais" target="_blank">Linkedin</a>
			<a href="https://www.youtube.com/channel/UCrh7mAu3QOpEfQxaPNXhskw/" class="icon-youtube" title="YouTube Gaia Finanças Pessoais" target="_blank">YouTube</a>
		</div>

		<div class="grid_4">
			<h3><a href="/blog/">Blog</a></h3>
			<div class="blog">
				<ul class="recent-posts">
					<?php 
						$recent_posts = wp_get_recent_posts();
						foreach($recent_posts as $recent):
					?>
					<li>
						<a href="<?php echo get_permalink($recent["ID"]); ?>" title="<?php echo $recent["post_title"]; ?>">
						<?php echo get_the_post_thumbnail( $recent["ID"], 'thumbnail', $attr ); ?>
							<div class="post-title"><?php echo $recent["post_title"]; ?></div>
						</a>
					</li>
							
					<?php
						endforeach;
					?>
				</ul>
			</div>
		</div>
	</div>
</footer>



<?php else: ?>
<footer>
	<div class="container_12">
		<div class="grid_4 short-menu">
			<h3>BLOG Gaia</h3>
			<?php wp_nav_menu(array('menu' => 'blog')); ?>
			<p><a href="/">Conheça a Gaia Finanças Pessoais</a></p>
			<p><a href="https://pt-br.facebook.com/GaiaFinancasPessoais" target="_blank">Facebook</a> | 
			<a href="http://www.linkedin.com/pub/andre-crepaldi/6/8b3/7b7" target="_blank">Linkedin</a> | 
			<a href="https://www.youtube.com/channel/UCrh7mAu3QOpEfQxaPNXhskw/" target="_blank">YouTube</a></p>
		</div>
		<div class="grid_8">
			<div id="about">
				<h3>Sobre o autor</h3>
				<img src="<?php bloginfo('template_directory'); ?>/images/foto-consultor-financeiro-andre-crepaldi.jpg" alt="Foto André Crepaldi - Consultor Financeiro" class="left">
				<p>Fundador da Gaia Finanças Pessoais, atuando em Campinas e região (Americana, Indaiatuba, Paulínia, entre outras), André Crepaldi é:<br>
				- Planejador Financeiro, membro da FPA (Financial Planing Association)<br>
				- MBA em Gestão Empresarial pela FGV (Fundação Getúlio Vargas)<br>
				- Formação em Coaching e Practitioner em PNL (Programação Neurolinguística)<br>
				- Palestrante sobre Educação Financeira e Finanças Pessoais.<br><br>
				Empreendedor, também atua no ramo de empreendimentos imobiliários e construção civil, depois de ter participado de um programa de coaching em Real Estate certificado pelo Rich Dad World, do autor Robert Kiyosaki (Livro Pai Rico Pai Pobre).</p>
			</div>
		</div>
	</div>
</footer>

<?php endif; ?>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/functions.js" type="text/javascript"></script>
</body>
</html>