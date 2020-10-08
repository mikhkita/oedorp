

	<div class="b-footer b-gray">
		<div class="b-footer-top clearfix">
			<div class="b-block">
				<div class="b-footer-top-left">
					<a href="/" class="b-logo"></a>
					<div class="b-footer-top-address"><span class="icon-tip"></span>г. Томск, ул. Карла Маркса, д. 48/1, оф. 223</div>
					<ul class="b-social">
						<li>
							<a href="https://vk.com/anoprodeo/" target="_blank" class="icon-vk">Вконтакте</a>
						</li>
						<li>
							<a href="https://www.instagram.com/ur.sluzhba.tomsk/" target="_blank" class="icon-insta">Instagram</a>
						</li>
					</ul>
				</div>
				<div class="b-footer-top-right">
					<div class="b-header-right clearfix">
						<a href="tel:+79528837345" class="b-phone-link">8 (952) 883-73-45</a><br>
						<span>по будням с 9:00 до 18:00</span>
					</div>
					<a href="mailto:law.tomsk@mail.ru" class="email">law.tomsk@mail.ru</a><br>
					<a href="/documents.php" class="docs with-border">Документы</a>
				</div>
			</div>
		</div>
		<div class="b-footer-bottom clearfix">
			<div class="b-block">
				<div class="b-footer-bottom-left">
					<div class="b-copyright">© АНО «Юридическая&nbsp;Служба «Pro&nbsp;Deo», 2020. Все&nbsp;права&nbsp;защищены.</div>
					<a href="/policy.pdf" class="with-border">Политика конфиденциальности</a>
				</div>
				<div class="b-redder">
					<span>Разработка сайта:</span>
					<a href="//redder.pro/" class="b-redder-logo" target="_blank"></a>
				</div>
			</div>
		</div>
		</div>
	</div>
	
	<div style="display:none;">
		<a href="#b-popup-error" class="b-error-link fancy" style="display:none;"></a>
		<div class="b-popup" id="b-popup-1">
			<h3>Оставьте заявку</h3>
			<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
			<form action="kitsend.php" data-goal="CALLBACK" method="POST" id="b-form-1">
				<div class="b-popup-form">
					<label for="name">Введите Ваше имя</label>
					<input type="text" id="name" name="name" required/>
					<label for="tel">Введите Ваш номер телефона</label>
					<input type="text" id="tel" name="phone" required/>
					<label for="tel">Введите Ваш E-mail</label>
					<input type="text" id="tel" name="email" required/>
					<input type="hidden" name="subject" value="Заказ"/>
					<input type="submit" style="display:none;">
					<a href="#" class="b-btn b-blue-btn ajax">Заказать</a>
					<a href="#b-popup-success" class="b-thanks-link fancy" style="display:none;"></a>
				</div>
			</form>
		</div>
		<div class="b-thanks b-popup" id="b-popup-success">
			<h3>Спасибо!</h3>
			<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
		<div class="b-thanks b-popup" id="b-popup-error">
			<h3>Ошибка отправки!</h3>
			<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
			<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?apikey=dcf82496-06b7-476e-b6f8-0078e5d46b67&amp;load=package.standard&amp;lang=ru-RU&amp;onload=yandexMapInit"></script>
	<script type="text/javascript" src="js/jquery.touch.min.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/stickyfill.js"></script>
	<script type="text/javascript" src="js/KitSend.js?<?=$version?>"></script>
	<script type="text/javascript" src="js/main.js?<?=$version?>"></script>
</body>
</html>