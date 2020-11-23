<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalyan
 */

?>
<div id="hidden-content" class="modal_call" style="display: none">
    <div class="modal_title">
        СДЕЛАЙТЕ ЗАКАЗ КАЛЬЯНА
    </div>
    <div class="modal_title_sub">
        ЗАКАЖИТЕ ЗВОНОК!
    </div>
    <div class="modal_desc">
        Введите имя и телефон и наш менджер свяжется с вами для оформления заявки
    </div>
    <div class="modal_form" id="modal_call_phone">
        <?php echo do_shortcode('[contact-form-7 id="104" title="Форма в модальном окне"]') ?>
    </div>
</div>

<div class="modal_call" id="hidden-offer-promo" style="display: none">
    <div class="modal_form" id="modal_call_phone">
        <?php echo do_shortcode('[contact-form-7 id="461" title="Форма в модальном окне спецпредложение"]') ?>
    </div>
</div>
<div class="modal_call" id="hidden-action" style="display: none">
    <div class="modal_form">
        <?php echo do_shortcode('[contact-form-7 id="423" title="Форма в модальном окне Акция"]') ?>
    </div>
</div>
<div id="hidden-content-action" class="modal-tabak_call" style="display: none">
	<div>
            <h3 class="modal-tabak__title">ВЫБЕРИТЕ ТАБАК</h3>
        </div>
	<?php echo do_shortcode('[contact-form-7 id="178" title="Форма Выберите табак"]') ?>
	
</div>

<div id="hidden-content-servises" class="modal-tabak_call" style="display: none">
	<div>
            <h3 class="modal-tabak__title">ВЫБЕРИТЕ ТАБАК</h3>
        </div>
	<?php echo do_shortcode('[contact-form-7 id="201" title="Форма страницы Услуги"]') ?>
	
</div>

<div id="hidden-content-servises_24" class="modal-tabak_call" style="display: none">
	<div>
            <h3 class="modal-tabak__title">ВЫБРАТЬ КОЛИЧЕСТВО КАЛЬЯНОВ</h3>
        </div>
	<?php echo do_shortcode('[contact-form-7 id="245" title="Форма услуг 24 часа"]') ?>
	
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="footer_logo">
                    <img src="<?= get_template_directory_uri() ?>/images/logo-new-year.png" alt="logo">
                </a>
            </div>
            <div class="col-md-5 header_shrink">
                <nav>
                    <ul class="footer_menu">
                        <li><a href="/services/">Услуги</a></li>
						<li><a href="/actions/">Акции</a></li>
                        <li><a href="/sotrudnichestvo/">Сотрудничество</a></li>
                        <li><a href="/about/">О нас</a></li>
                    </ul>
                    <ul class="footer_menu">
                        <li><a href="/report/">Отзывы</a></li>
                        <li><a href="/contact/">Контакты</a></li>
                        <li><a href="/obrabotka-personalnyh-dannyh/" style="line-height: 1;" target="_blank">Политика
                                конфиденциальности</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
              <ul class="footer_menu">
                <li><a href="/new-year/">Новый год</a></li>
                <li><a href="/job/">Вакансии</a></li>

              </ul>
            </div>
            <div class="col-md-2">
                <div class="header_phone_container">
                    <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_1) ?>"
                       class="header_phone_item"><?= phone_1 ?></a>
                    <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_2) ?>"
                       class="header_phone_item"><?= phone_2 ?></a>
                    <div class="modal_button js_modal_btn">ЗАКАЗАТЬ ЗВОНОК</div>
                </div>
                <ul class="header_social">
                    <?php if (!empty(url_insta)): ?>
                        <li>
                            <a href="<?= url_insta ?>" target="_blank">
                              <img src="<?= get_template_directory_uri() ?>/images/instagram.svg" alt="inst logo" class="header_social_insta">
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div id="hidden-reviews" class="modal_call" style="display: none">
    <div class="modal_title">
        ОСТАВЬТЕ ОТЗЫВ
    </div>
    <div class="modal_desc">
        Введите имя и Ваш отзыв
    </div>
    <div class="modal_form" id="modal_call_mas">
        <?php echo do_shortcode('[contact-form-7 id="105" title="Форма отзывов"]') ?>

    </div>
</div>
<div id="hidden-reviews" class="modal_call" style="display: none">
    <div class="modal_title">
        ОСТАВЬТЕ ОТЗЫВ
    </div>
    <div class="modal_desc">
        Введите имя и Ваш отзыв
    </div>
    <div class="modal_form" id="modal_call_mas">
        <?php echo do_shortcode('[contact-form-7 id="105" title="Форма отзывов"]') ?>

    </div>
</div>
<div class="modal_call" id="thanks" style="display:none;">
    <img src="<?= get_template_directory_uri() ?>/images/good.svg" alt="" class="good">
    <div class="modal_title">
        СПАСИБО ЗА ЗАКАЗ
    </div>
    <div class="modal_desc">
      	В течение двух минут мы с Вами свяжемся по номеру
		<div class="take-phone"></div>
		Если номер не верный, оформите новую заявку.
    </div>
    <div class="form_rows">
        <button class="form_submit modal_close">
            закрыть окно
        </button>
    </div>
</div>
<div class="modal_call" id="thanks_call" style="display:none;">
    <img src="<?= get_template_directory_uri() ?>/images/good.svg" alt="" class="good">
    <div class="modal_title">
        СПАСИБО ЗА ОТЗЫВ
    </div>
    <div class="modal_desc">
        В скором времени он появится на сайте
    </div>
    <div class="form_rows">
        <button class="form_submit modal_close">
            закрыть окно
        </button>
    </div>
</div>
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js"></script>
<script src="<?=get_template_directory_uri()?>/assets/js/scripts.min.js"></script>

<script>
    $('.social_js_url').on('click', function () {
        let url = $(this).data('url');
        console.log(url);
        window.location.href = url;
    })

</script>
<script language="javascript">
    var x = document.getElementsByClassName("agree");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].checked = false;
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108074852-5"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-108074852-5');
</script>

<noscript>
    <div><img src="https://mc.yandex.ru/watch/46981911" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>

<script>
    $('.js_modal_btn').on('click', function (e) {
        e.preventDefault();
       
        $.fancybox.open({
            src: '#hidden-content',
            type: 'inline',
        });
    });
	$('.js_modal_btn-action').on('click', function (e) {
        e.preventDefault();
      
        $.fancybox.open({
            src: '#hidden-content-action',
            type: 'inline',
        });
    });
	$('.js_modal_btn-servises_1').on('click', function (e) {
        e.preventDefault();
     
        $.fancybox.open({
            src: '#hidden-content-servises',
            type: 'inline',
        });
    });
	$('.js_modal_btn-servises_2').on('click', function (e) {
        e.preventDefault();
   
        $.fancybox.open({
            src: '#hidden-content-servises',
            type: 'inline',
        });
    });
	$('.js_modal_btn-servises_3').on('click', function (e) {
        e.preventDefault();
      
        $.fancybox.open({
            src: '#hidden-content-servises',
            type: 'inline',
        });
    });
	$('.js_modal_btn-servises_4').on('click', function (e) {
        e.preventDefault();
    
        $.fancybox.open({
            src: '#hidden-content-servises_24',
            type: 'inline',
        });
    });
	$('.js_modal_btn-servises_5, .js_modal_btn-servises_6').on('click', function (e) {
        e.preventDefault();
       
        $.fancybox.open({
            src: '#hidden-content',
            type: 'inline',
        });
    });

	$('.promo-button').on('click', function (e) {
        e.preventDefault();
     
        $.fancybox.open({
            src: '#hidden-offer-promo',
            type: 'inline',
        });
    });
	$('.actions__item-button_call').on('click', function (e) {
        e.preventDefault();
     
        $.fancybox.open({
            src: '#hidden-action',
            type: 'inline',
        });
    });
</script>


</body>
</html>