<?php get_header(); ?>

<?php include 'pages-header.php'; ?>

<?php if( is_category('stati')) : ?>
	<div class="container page-news">
		<h1 class="title-yellow"><span><span><?php single_cat_title(); ?></span></span></h1>
		<div class="row">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-xs-12 page-news-item">
					<h2 class="title"><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary alignright">Подробнее...</a>
					<div class="clearfix"></div>
				</div>
			<?php endwhile; ?>
				<div class="clearfix"></div>
				<div class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

<?php else: ?>
	<!-- catalog -->
	<div class="container catalog-container">
		<h1 class="title-yellow"><span><span><?php single_cat_title(); ?></span></span></h1>
		<div class="row">
			<div class="col-xs-3 catalog-left">
				<div class="price-block">
					<a href="<?php the_field('price_all','option'); ?>">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/price-tag-b.svg" alt="Скачать прайс">
						</div>
						<div class="title">Скачать прайс</div>
					</a>
				</div>
				<div class="left-nav">
					<div class="title">Каталог товаров</div>
					<?php 
					$args = array(
						'theme_location'  => 'side-menu',
						'container'       => '', 
						'menu_class'      => 'pro-vmenu', 
						);
					wp_nav_menu( $args );
					?>
				</div>
			</div>
			<div class="col-xs-8 col-xs-offset-1 catalog-right">
				<div class="row">
					<div class="col-xs-12 subcat-container">
						<ul class="subcateg">
							<?php
								if (count(get_categories('child_of='.$cat)));
								if (is_category()) {
									$current_cat = get_query_var('cat');
									wp_list_categories('child_of='.$current_cat.'&title_li=&depth=1');
								};
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="row">
					<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-6">
								<div class="catalog-item">
									<a href="<?php the_permalink(); ?>" class="item-link">
										<?php if(get_field('sale')): ?><div class="sale"><?php the_field('sale'); ?></div><?php endif; ?>
										<div class="img">
											<span>Подробнее...</span>
											<?php $pimg = get_field('p_img'); ?>
											<img src="<?php echo $pimg['sizes']['product']; ?>" alt="<?php echo $pimg['alt']; ?>">
										</div>
										<h2 class="title"><?php the_title(); ?></h2>
										<div class="desc"><?php echo wp_trim_words(get_the_content(),15,'...'); ?></div>
									</a>
									<div class="buy">
										<a href="#fform" class="btn btn-primary fancybox" onclick="fform('<?php the_title(); ?>', '<?php the_title(); ?>','mail','mes');">Оставить заявку</a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<div class="clearfix"></div>
						<div class="centered">
							<?php if(function_exists('proPagination')) { proPagination(); } ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>