<?php /*
template name: Услуги
*/ ?>
<?php get_header(); ?>
<?php include 'pages-header.php'; ?>

<div class="container services-page">
	<h1 class="title-yellow"><span><span>Наши услуги</span></span></h1>
	<div class="row">
		<?php $args = array( 'include' => 21); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/security-camera-1.svg" alt="видеонаблюдение">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php $args = array( 'include' => 23); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/shield-1.svg" alt="Слаботочные работы">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php $args = array( 'include' => 25); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/lan-network.svg" alt="Локальные сети">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php $args = array( 'include' => 27); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/technology.svg" alt="Сети связи">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php $args = array( 'include' => 29); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/password.svg" alt="Системы контроля доступа">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
		<?php $args = array( 'include' => 31); $myposts = get_pages( $args ); foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="col-xs-4">
				<a href="<?php the_permalink(); ?>" class="service-item">
					<?php $pimg = get_field('p_img'); ?>
					<div class="img-container" style="background-image: url(<?php echo $pimg['sizes']['product']; ?>);"></div>
					<div class="icon">
						<div class="img y-circle">
							<img src="<?php bloginfo('template_url'); ?>/img/shield.svg" alt="Оптоволоконные сети">
						</div>
					</div>
					<h2 class="title"><span><span><?php the_title(); ?></span></span></h2>
					<hr>
					<div class="desc"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></div>
					<div class="more">Подробнее</div>
				</a>
			</div>
		<?php endforeach; wp_reset_postdata();?>
	</div>
</div>

<?php get_footer(); ?>