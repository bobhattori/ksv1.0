<?php get_header() ?>

	<?php the_post();?>
	<?php
		$interview = get_field('interview');
		$mainImg = get_field('mainImg');
		$name1 = get_field('name1');
		$img1 = get_field('img1');
		$univ1 = get_field('univ1');
		$comment1 = get_field('comment1');
		$img2 = get_field('img2');
		$name2 = get_field('name2');
		$univ2 = get_field('univ2');
		$comment2 = get_field('comment2');
		$writer = get_field('writer');
		$camera = get_field('camera');
	?>
	<div class="article-header">

		<div class="row">
			<div class="large-12 columns">

				
		<h1><?php the_title(); ?></h1>
		<div class="social">
			<ul class="no-bullet inline-list">
				<li><a href="https://twitter.com/share" class="twitter-share-button" data-via="bobhattori" data-count="none">Tweet</a></li>
				<li><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;width&amp;layout=button&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=80&amp;appId=133784156712032" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;" allowTransparency="true"></iframe></li>
			</ul>
		</div>

		<div class="mainImg">

			<div class="info">
				<img src="<?php echo $mainImg ?>" alt="" class="mainImg">
				<div class="row prof-body">
					<?php if($interview == true): ?>
					<div class="large-6 columns prof">
						<img src="<?php echo $img1 ?>" alt="<?php echo $univ1 ?>">
						<div class="detail">
							<p class="name"><?php if('rikejo' == get_post_type()): ?><span class="tip students">学生編</span><?php elseif('company' == get_post_type()): ?><span class="tip comp">企業編</span><?php endif; ?><?php echo $name1 ?></p>
							<p class="univ"><?php echo $univ1 ?></p>
							<p class="comment"><?php echo $comment1 ?></p>
						</div>
					</div>
					<div class="large-6 columns prof">
						<img src="<?php echo $img1 ?>" alt="<?php echo $univ2 ?>">
						<div class="detail">
							<p class="name"><?php if('rikejo' == get_post_type()): ?><span class="tip students">学生編</span><?php elseif('company' == get_post_type()): ?><span class="tip comp">企業編</span><?php endif; ?><?php echo $name2 ?></p>
							<p class="univ"><?php echo $univ2 ?></p>
							<p class="comment"><?php echo $comment2 ?></p>
						</div>
					</div>
					<?php else: ?>
					<div class="large-12 columns prof">
						<img src="<?php echo $img1 ?>" alt="<?php echo $univ1 ?>">
						<div class="detail">
							<p class="univ"><?php if('rikejo' == get_post_type()): ?><span class="tip students">学生編</span><?php elseif('company' == get_post_type()): ?><span class="tip comp">企業編</span><?php endif; ?><?php echo $univ1 ?></p>
							<p class="comment"><?php echo $comment1 ?></p>
						</div>						
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
				
			</div>
		</div>

	</div>

     
  <div class="row content">
    <div class="large-12 columns">


	<div class="article">
		<?php the_content(); ?>
		
		<div class="paging">
			<?php previous_posts_link('Previous');?>
			<?php next_posts_link('Next'); ?>
		</div>
		<div class="staff">
			<p>カメラマン：<?php echo $camera ?>｜ライター：<?php echo $writer ?></p>
		</div>

	</div>

    </div>   
  </div>

<?php get_footer() ?>
