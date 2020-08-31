<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner <?php echo is_page_template('page-template/full-width.php')? '' :'container mx-auto'; ?>">
		<?php the_content(); ?>

		<div class="edit-post">
		<?php edit_post_link('Edit','<svg xmlns="http://www.w3.org/2000/svg" class="text-current mx-1 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
</svg>'); ?>
		</div>
	</div>
	
</article>