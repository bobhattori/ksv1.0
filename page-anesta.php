<?php get_header(); ?>

<?php
$ci_comment = get_field('cicomment');
$ci_left = get_field("cileft");
$ci_right = get_field("ciright");
$ci_bottom_left_ttl = get_field("cibottomleftttl");
$ci_bottom_left_img = get_field("cibottomleftimg");
$ci_bottom_left = get_field("cibottomleft");
$ci_bottom_right_ttl = get_field("cibottomrightttl");
$ci_bottom_right_img = get_field("cibottomrightimg");
$ci_bottom_right = get_field("cibottomright");
?>

	<div class="row page_header">
		<div class="large-12 columns">
			<h1><?php the_title(); ?></h1>
			<div class="comment">
				<?php echo $ci_comment ?>
			</div>
		</div>
	</div>

	<div class="row company-info">
		<div class="large-6 columns">
			<?php echo $ci_left ?>
		</div>
		<div class="large-6 columns">
			<?php echo $ci_right ?>
		</div>
	</div>

	<div class="row publication panel">
		<div class="large-12 columns">
			<div class="pblc-ttl">発行物</div>
		</div>
		<div class="large-6 columns item">
			<h3><?php echo $ci_bottom_left_ttl ?></h3>
			<div class="item-body">
				<img src="<?php echo $ci_bottom_left_img ?>" alt="" style="width:78px; height:auto;">
				<?php echo $ci_bottom_left ?>
			</div>
		</div>
		<div class="large-6 columns item">
			<h3><?php echo $ci_bottom_right_ttl ?></h3>
			<div class="item-body">
				<img src="<?php echo $ci_bottom_right_img ?>" alt="" style="width:78px; height:auto;">
				<?php echo $ci_bottom_right ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>