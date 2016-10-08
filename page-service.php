<?php /*
template name: Услуга
*/ ?>
<?php get_header(); ?>
<?php include 'pages-header.php'; ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="container page-product">
			<h1 class="title-yellow"><span><span><?php the_title(); ?></span></span></h1>
			<div class="row">
				<div class="col-xs-6 img-container">
					<?php $pimg = get_field('p_img'); ?>
					<a href="<?php echo $pimg['sizes']['large']; ?>" class="fancybox"><img src="<?php echo $pimg['sizes']['large']; ?>" alt="<?php echo $pimg['alt']; ?>"></a>
				</div>
				<div class="col-xs-6 desc-container">
					<div class="title">Описание</div>
					<hr>
					<?php the_content(); ?>
				</div>
				<div class="col-xs-6 col-xs-offset-3 buy">
					<div class="block">
						<div class="title2">Оставьте заявку сейчас</div>
						<div class="desc">и мы свяжемся с вами</div>
						<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_title(); ?>', '<?php the_title(); ?>','mail','mes');">Оставить заявку</a>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php get_footer(); ?>