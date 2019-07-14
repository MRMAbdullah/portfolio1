<?php get_header(); ?>
		<div class="content_wrapper">
			<div class="left_content">
				<?php
				if(have_posts()): ?>
				<h2>Search Results For: "<?php the_search_query() ?>" </h2>
				<?php
					while(have_posts()):the_post() ?>
				<?php get_template_part('content'); ?>
				<?php				
					endwhile;
					else:
					echo 'no';
				endif;
				?>
				<!--
				<div class="main_pagination">
					<div class="newer_post"><?php /* previous_posts_link('&laquo; newer posts '); ?></div>
					<div class="older_post"><?php next_posts_link('older posts &raquo;'); */?></div>
				</div>
				-->
				<?php if (function_exists("pagination")) {    pagination($additional_loop->max_num_pages);} ?>
			</div>
<?php get_sidebar(); ?>
			<br class="clear" />
		</div>
<?php get_footer(); ?>