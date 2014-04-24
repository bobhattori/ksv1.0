<?php get_header() ?>

	<div class="row content">
		<div class="large-12 columns">
	
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="txt <?php if(is_page('policy')): ?>policy-body<?php endif; ?>">
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
			
		</div>
	</div>

<?php get_footer() ?>