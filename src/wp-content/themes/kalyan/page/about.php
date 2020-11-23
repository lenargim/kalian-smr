<?php
/*
Template Name: О нас
*/
?>
<?php get_header();?>
<main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h2 mb30 mt50">
                      <?= get_field('title')?>
                    </h1>
                </div>
            </div>
        </div>
<section class="section-about">
    <div class="container">
        <div class="row section-about__desc">
            <div class="col-xs-12 col-md-3 section-about__logo"><img src="<?= get_template_directory_uri() ?>/images/logo-new-year.png" alt="logo"></div>
            <div class="col-xs-12 col-md-9">
                <div class="section-about__text">
                    <div class="section-about__text-p"><?= get_field('paragraph-1',17)?> </div>
                    <div class="section-about__text-p"><?= get_field('paragraph-2',17)?></div>
                </div>
            </div>
        </div>
		<?php if( have_rows('staff') ): ?>
        <div class="row">
            <h3 class="h3 h3_about col-md-12">
                Наш персонал
            </h3>
        </div>
        <div class="row section-about__staff">
			<?php while( have_rows('staff') ): the_row();?>
            <div class="col-lg-3 col-xs-6 section-about__staff-item">
                <div class="section-about__staff-img">
                    <img src="<?php the_sub_field('staff-item'); ?>" alt="staff">
                </div>
                <div class="section-about__staff-name"><?php the_sub_field('staff-name'); ?></div>
            </div>
			<?php endwhile; ?>
        </div>
		<?php endif; ?>
    </div>
</section>
<section class="section-tabak">
    <div class="container">
        <h3 class="h3 h3_about">О табаках</h3>
        <div class="header-desc">Наши табаки</div>
		<div class="owl-carousel owl-theme section-tabak__body" id="section-tabak__slider">
			<div class="section-tabak__img"><img src="<?= get_template_directory_uri() ?>/images/_src/darkside.png" alt=""></div>
			<div class="section-tabak__img"><img src="<?= get_template_directory_uri() ?>/images/_src/adalia.png" alt=""></div>
			<div class="section-tabak__img"><img src="<?= get_template_directory_uri() ?>/images/_src/serbeti.png" alt=""></div>
			<div class="section-tabak__img"><img src="<?= get_template_directory_uri() ?>/images/_src/musthave.png" alt=""></div>
			<div class="section-tabak__img"><img src="<?= get_template_directory_uri() ?>/images/_src/element.png" alt=""></div>
		</div>
    </div>
</section>
<section class="section-shisha">
    <div class="container">
        <h3 class="h3 h3_about">О кальянах</h3>
        <div class="header-desc">Наше оборудование</div>
        <div class="section-shisha__body">
            <div class="section-shisha__img"><img src="<?= get_template_directory_uri() ?>/images/_src/shisha-sample.png" alt=""></div>
            <div class="section-shisha__text">
                <div class="section-shisha__text-title">Кальян - “Y.K.A.P”</div>
                <div class="section-shisha__text-p">“Отличное качество курения: умеренная тяга, легкий продув чаши и колбы, монолитная конструкция шахты”</div>
                <div class="section-shisha__text-p">Для вашего удовольствия доступны кальяны Y.K.A.P.</div>
                <div class="section-shisha__text-p">Производятся в г. Омск, выполнен из титаносодержащей нержавеющей стали, лаконичный и стильный дизайн, умеренная тяга, легкий продув чаши и колбы, монолитная конструкция шахты.</div>

            </div>
        </div>
    </div>
</section>
<section class="section-advantages">
    <div class="container">
        <h3 class="h3 h3_about">Наши преимущества</h3>
        <div class="row section-advantages__body">
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/calendar-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Опыт с 2015 года</div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/delivery-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Доставлено более <span style="white-space: nowrap;">10 000 кальянов</span></div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/building-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Работаем в 3-ех городах</div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/checklist-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Опыт в организации кальянной зоны для таких гигантов, как Coca-Cola</div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/ship-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Организуем кальянную зону на катере или пароходе</div>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-2 section-advantages__item">
                <img src="<?= get_template_directory_uri() ?>/images/svg/profi-colored.svg" alt="" class="section-advantages__svg">
                <div class="section-advantages__text">Профессионально обученные кальянщики найдут подход даже к самым изощереным гурманам</div>
            </div>
        </div>
    </div>
</section>
<?php if( have_rows("why-we") ):  ?>
<section class="section-why-we">
    <div class="container">
        <h3 class="h3 h3_about">Почему мы</h3>
        <div class="header-desc">Нас выбирают ценители прекрасного</div>
        <div class="row section-why-we__body">
			<?php while( have_rows('why-we') ): the_row(); ?>
            <div class="col-md-6 col-12 section-why-we__li">
                <?php the_sub_field('why-we-list'); ?>
            </div>
			<?php endwhile; ?>
        </div>
    </div>
</section>
	<?php endif; ?>
    <?php get_template_part( 'page_partical/_footer_form' )?>
</main>

<?php get_footer(); ?>