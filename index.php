
<?php get_header(); ?>

	<!-- header top -->
	<header class="wrapper head-top main-top">
		<!-- navigation -->
		<div class="wrapper menu-wr">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 logo">
						<a href="/">1video.by</a>
					</div>
					<div class="col-xs-8">
						<div class="burger-menu">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<?php 
							$args = array(
							  'theme_location'  => 'main-menu',
							  'container'       => '', 
							  'menu_class'      => 'pro-menu', 
							);
							wp_nav_menu( $args );
						?>
					</div>
					<div class="col-xs-2 callback">
						<a href="tel:<?php the_field('h_tel','option'); ?>" class="phone"><?php the_field('h_tel','option'); ?></a>
						<a href="#fform" class="btn btn-primary fancybox" onclick="fform('Получить звонок','Получить звонок');">Получить звонок</a>
					</div>
				</div>
			</div>
		</div>
		<!-- title top -->
		<h1 class="title-top"><?php the_field('g_title','option'); ?></h1>
		<a href="#services" class="next"></a>
	</header>

	<!-- services -->
	<div class="container services-wr" id="services">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 services-container">
				<div class="title-yellow"><span><span>Услуги</span></span></div>
				<div class="row">
					<div class="col-xs-3">
						<a href="/uslugi/videonablyudenie/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/security-camera-1.svg" alt="видеонаблюдение">
							</div>
							<h2 class="title"><span><span>Видеонаблюдение</span></span></h2>
						</a>
					</div>
					<div class="col-xs-3">
						<a href="/uslugi/slabotochnyie-rabotyi/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/shield-1.svg" alt="Слаботочные работы">
							</div>
							<h2 class="title"><span><span>Слаботочные работы</span></span></h2>
						</a>
					</div>
					<div class="col-xs-3">
						<a href="/uslugi/lokalnyie-seti/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/lan-network.svg" alt="Локальные сети">
							</div>
							<h2 class="title"><span><span>Локальные сети</span></span></h2>
						</a>
					</div>
					<div class="col-xs-3">
						<a href="/uslugi/seti-svyazi/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/technology.svg" alt="Сети связи">
							</div>
							<h2 class="title"><span><span>Сети связи</span></span></h2>
						</a>
					</div>
					<div class="col-xs-3 col-xs-offset-3">
						<a href="/uslugi/sistemyi-kontrolya-dostupa/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/password.svg" alt="Системы контроля доступа">
							</div>
							<h2 class="title"><span><span>Системы контроля доступа</span></span></h2>
						</a>
					</div>
					<div class="col-xs-3">
						<a href="/uslugi/optovolokonnyie-seti/">
							<div class="img y-circle">
								<img src="<?php bloginfo('template_url'); ?>/img/shield.svg" alt="Оптоволоконные сети">
							</div>
							<h2 class="title"><span><span>Оптоволоконные сети</span></span></h2>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- about us -->
	<div class="container about-us">
		<div class="title"><span>о нас в цифрах</span></div>
		<div class="row">
			<div class="col-xs-3">
				<div class="block1">
					<div class="text">
						<div class="num"><?php the_field('num1','option'); ?></div>
						<span><?php the_field('nt1','option'); ?></span>
					</div>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="block2">
					<div class="text">
						<div class="num"><?php the_field('num2','option'); ?></div>
						<span><?php the_field('nt2','option'); ?></span>
					</div>
				</div>
				<div class="block3 horizontal">
					<div class="text">
						<div class="num"><?php the_field('num3','option'); ?></div>
						<span><?php the_field('nt3','option'); ?></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="block4">
					<div class="text">
						<div class="num"><?php the_field('num4','option'); ?></div>
						<span><?php the_field('nt4','option'); ?></span>
					</div>
				</div>
				<div class="block5">
					<div class="text">
						<div class="num"><?php the_field('num5','option'); ?></div>
						<span><?php the_field('nt5','option'); ?></span>
					</div>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="block6">
					<div class="text">
						<div class="num"><?php the_field('num6','option'); ?></div>
						<span><?php the_field('nt6','option'); ?></span>
					</div>
				</div>
				<div class="block7 horizontal">
					<div class="text">
						<div class="num"><?php the_field('num7','option'); ?></div>
						<span><?php the_field('nt7','option'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- our products -->
	<div class="container our-products">
		<div class="title-yellow"><span><span>Наши товары</span></span></div>
		<div class="row">
			<?php if( have_rows('pc_cat','option') ):while ( have_rows('pc_cat','option') ) : the_row(); ?>
				<div class="col-xs-4">
					<?php $pc_img = get_sub_field('pc_img'); ?>
					<div class="product-item" style="background-image: url(<?php echo $pc_img['sizes']['product']; ?>);">
						<a href="<?php the_sub_field('pc_link'); ?>" class="item-link">
							<span>Подробнее...</span>
							<h3 class="title"><?php the_sub_field('pc_title'); ?></h3>
						</a>
						<a href="<?php the_sub_field('pc_file'); ?>" class="price-link">Прайс</a>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>

	<!-- questions -->
	<div class="container questions">
		<div class="row">
			<div class="col-xs-6 questions-container">
				<div class="block">
					<div class="title">
						<div class="title-yellow"><span><span>Вопросы менеджеру</span></span></div>
						<div class="desc">Не нашли ответ на свой вопрос?<br>Пишите, мы поможем вам</div>
						<?php $man = get_field('manager','option'); ?>
						<img src="<?php echo $man['sizes']['thumbnail']; ?>" alt="<?php the_field('manager_name','option'); ?>">
						<div class="name"><?php the_field('manager_name','option'); ?></div>
						<div class="stat"><?php the_field('manager_stat','option'); ?></div>
						<a href="#fform" class="btn btn-primary fancybox" onclick="fform('Задать вопрос','Задать вопрос','mail','mes');">Задать вопрос</a>
					</div>
				</div>
			</div>
			<div class="col-xs-6 last-news-container">
				<div class="title-yellow"><span><span>Статьи</span></span></div>
				<div class="row">
					<?php $query_my = new WP_Query('category_name=stati&showposts=3'); ?>
					<?php if($query_my->have_posts()) : ?>
						<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
							<div class="col-xs-4">
								<a href="<?php the_permalink(); ?>" class="ln-item">
									<div class="img">
										<?php $nimg = get_field('p_img'); ?>
										<img src="<?php echo $nimg['sizes']['thumbnail']; ?>" alt="<?php echo $nimg['alt']; ?>">
										<div class="more">Подробнее...</div>
									</div>
									<span class="title"><?php the_title(); ?></span>
								</a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="centered">
					<a href="/category/stati/" class="btn btn-primary">Смотреть все статьи</a>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>