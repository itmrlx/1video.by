	<!-- main contacts -->
	<?php if(!is_page('contacts')): ?>
		<div class="container main-contacts">
			<div class="title-yellow"><span><span>Контакты</span></span></div>
			<div class="desc">С удовольствем ответим на все <br>ваши вопросы</div>
			<div class="col-xs-6 col-xs-offset-3">
				<div class="block">
					<?php the_field('f_cont','option'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- map -->
	<div class="wrapper map">
		<?php the_field('map','option'); ?>
	</div>

	<!-- copyright -->
	<div class="container copyright">
		<p class="webber">&copy; 2016. Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
	</div>


	<!-- modal form -->
	<div id="fform" style="display: none;">
		<div class="my-modal">
			<form id="formid" class="form-class">
				<div class="modal-form-title">Обратная связь</div>
				<div class="form-group">
					<input class="form-control" name="name" type="text" placeholder="Ваше имя*" required />
				</div>
				<div class="form-group">
					<input class="form-control" name="tel" type="tel" placeholder="Ваш телефон*" required />
				</div>
				<div class="form-group formmail" style="display: none;">
					<input class="form-control" name="mail" type="email" placeholder="Email" />
				</div>
				<div class="form-group formmes" style="display: none;">
					<textarea class="form-control" name="que" cols="30" rows="5" placeholder="Сообщение"></textarea>
				</div>
				<div class="form-group for-robots" style="display: none;">
					<input class="form-control" type="text" name="email" />
					<input class="form-control modal-form-value" type="text" name="title" />
				</div>
				<div class="centered">
					<button type="submit" class="btn btn-primary">Отправить</button>
				</div>
			</form>
		</div>
	</div>


	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.navgoco-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>