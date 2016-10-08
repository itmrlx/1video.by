<?php /*
template name: Контакты
*/ ?>
<?php get_header(); ?>
<?php include 'pages-header.php'; ?>

<div class="container contacts-page">
	<h1 class="title-yellow"><span><span>Наши контакты</span></span></h1>
	<div class="col-xs-3">
		<div class="block">
			<div class="img y-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/envelope.svg" alt="email">
			</div>
			<div class="text2">
				<a href="mailto:info@mail.ru">info@mail.ru</a>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="block">
			<div class="img y-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/phone-call.svg" alt="телефоны">
			</div>
			<div class="text2">
				<a href="tel:8(029) 536-95-59">8(029) 536-95-59</a><br>
				<a href="tel:8(029) 536-95-59">8(029) 536-95-59</a>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="block">
			<div class="img y-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/settings.svg" alt="скайп">
			</div>
			<div class="text2">
				<a href="skype:skypename?chat">skypename</a>
			</div>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="block">
			<div class="img y-circle">
				<img src="<?php bloginfo('template_url'); ?>/img/placeholder.svg" alt="адрес">
			</div>
			<div class="text2">
				<p>Москва, Восточный,<br>
					ул. Сталеваров д. 45А</p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 feedback">
			<div class="block">
				<div class="ftitle">Оставьте заявку</div>
				<div class="fdesc">и наш менеджер свяжется в вами</div>
				<form id="formcontacts" class="form-contacts">
					<div class="form-group">
						<input class="form-control" name="name" type="text" placeholder="Ваше имя:" required />
					</div>
					<div class="form-group">
						<input class="form-control" name="tel" type="tel" placeholder="Номер телефона:" required />
					</div>
					<div class="form-group">
						<textarea class="form-control" name="que" cols="30" rows="6" placeholder="Ваше сообщение:"></textarea>
					</div>
					<div class="form-group for-robots" style="display: none;">
						<input class="form-control" type="text" name="email" />
						<input class="form-control modal-form-value" type="text" value="Контакты" name="title" />
					</div>
					<div class="centered">
						<button type="submit" class="btn btn-primary">Отправить</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>