<?php get_header(); ?>
<?php include 'pages-header.php'; ?>

	<div class="container page-news">
		<div class="row">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-12 page-news-item">
					<h1 class="title-yellow"><span><span><?php the_title(); ?></span></span></h1>
					<?php the_content(); ?>
					<div class="clearfix"></div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>