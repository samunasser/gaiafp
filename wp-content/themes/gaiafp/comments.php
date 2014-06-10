<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Por favor, não carregue a página diretamente. Obrigado!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
			<p class="nocomments">Essa página é protegida. Digite a senha para ver os comentários.</p>
			<?php return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" '; 
?>




<div class="comments">
<?php if($comments) : ?>
	<h3><?php comments_number('Nenhum comentário', '1 comentário', '% comentários' );?></h3>

	<ul class="commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
			<small>
				<?php echo get_avatar( $comment, 32 ); ?>
				<?php comment_author_link(); ?> - 
				<?php if ($comment->comment_approved == '0') : echo "<em>Seu comentário foi enviado e está aguardando aprovação.</em>"; endif; ?>
				<span class="date"><?php comment_date('j \d\e F \d\e Y') // Short form: comment_date('d/m/Y') ?>
				<?php comment_time('G:i') ?></span>
				<?php edit_comment_link('(editar)','&nbsp;&nbsp;',''); ?>
			</small>
			<div class="comment">
				<?php comment_text(); ?>
			</div>
		</li>
		<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
	<?php endforeach; ?>
	</ul>

	<?php else: // this is displayed if there are no comments so far ?>

		<?php if ('open' == $post->comment_status) : ?>

		<?php else : ?>
			<p class="nocomments">Os comentários estão fechados.</p>
	<?php endif; ?>
<?php endif; ?>



<?php if ('open' == $post->comment_status) : ?>

	<h3>Faça seu comentário</h3>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>Você deve <a href="<?php echo wp_login_url( get_permalink() ); ?>">estar logado</a> para comentar.</p>
	
	<?php else : ?>
	
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		
		<?php if ( $user_ID ) : ?>
		
			<p>Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Fazer logout</a></p>
		
		<?php else : ?>
		
			<input type="text" class="icon-person" name="author" id="author" placeholder="Nome" value="<?php echo $comment_author; ?>" />
			<input type="email" class="icon-email" name="email" id="email" placeholder="Email" value="<?php echo $comment_author_email; ?>" />
		
		<?php endif; ?>
		
			<textarea class="icon-message" name="comment" id="comment" placeholder="Mensagem"></textarea>
			<input name="submit" type="submit" id="submit" value="Enviar" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<?php do_action('comment_form', $post->ID); ?>
		</form>

	<?php endif; ?>
<?php endif; ?>
</div>
