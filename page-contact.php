<?php get_header(); ?>

<div class="row content">
	<div class="large-12 columns">

<?php the_post(); ?>
<section class="form">
	
	<h2><?php the_title() ?></h2>

	<dl class="form-body">
		<dt>お問い合わせ内容<span class="must">必須</span></dt>
			<dd><select name="" id="">
				<option value="">選択してください</option>
			</select></dd>
		
		<dt>お名前<span class="must">必須</span></dt>
			<dd><input type="text" name="name" id="name"></dd>
		
		<dt>学校・法人名</dt>
			<dd><input type="text" name="" id=""></dd>

		<dt>メールアドレス<span class="must">必須</span></dt>
			<dd><input type="email" name="" id=""></dd>

		<dt>メールアドレス（確認用）<span class="must">必須</span></dt>
			<dd><input type="email" name="conf" id="conf"></dd>

		<dt>電話番号</dt>
			<dd><input type="text" name="" id=""></dd>

		<dt>都道府県</dt>
			<dd><select name="" id="">
				<option value="">選択してください</option>
			</select></dd>

		<dt>住所</dt>
			<dd><input type="text" name="" id=""></dd>

		<dt>詳しいお問い合わせ内容<span class="must">必須</span></dt>
			<dd><textarea name="" id="" cols="30" rows="10"></textarea></dd>
	</dl>

	<div class="submit-area">
		<div class="topolicy">
			<p>送信にあたっては、事前に<a href="<?php bloginfo('url') ?>/policy">プライバシーポリシー</a>をご覧ください</p>
		</div>
		<div class="submit-btn">
			<a href="#" class="btn toconf">内容を確認する</a>
		</div>
	</div>

</section>

<section class="form">
	<?php the_content(); ?>
</section>

		
	</div>
</div>

<?php get_footer(); ?>