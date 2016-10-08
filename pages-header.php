<!-- header top -->
<header class="wrapper head-top not-main">
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
</header>