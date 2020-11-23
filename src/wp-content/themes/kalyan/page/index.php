<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<main class="main">
    <?php if( have_rows('slider')):?>
        <div class="owl-carousel owl-theme" id="index_slider">
            <?php while( have_rows('slider') ): the_row();?>
                <?php if(get_sub_field('is_active')):?>
                    <section class="slider_item" style="background-image: url(<?=get_sub_field('image')?>);">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h2 class="index_slider_title">
                                         <?=get_sub_field('text')?>
                                     </h2>
                                     <?php if(get_sub_field('url')):?>
                                        <a href="<?=get_sub_field('url')?>" class="form_submit">узнать подробнее</a>
                                     <?php endif;?>
                                 </div>
                             </div>
                         </div>
                     </section>
                <?php endif;?>
            <?php endwhile;?>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="">
                    <div id="dots_container"></div>
                </div>
            </div>
        </div>
    <?php endif;?>
    <?php if(have_rows('service_block',11)):?>
        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title_container">
                            <h2 class="h2">
                                В 95% случаях мы знаем чем вам понравится, проверенно отзывами клиентов.
                            </h2>
                            <a href="/services/" class="show_all">
                                посмотреть все услуги
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" id="service_slider">
                            <?php $i=1; while( have_rows('service_block',11) ): the_row();?>
                            <div class="item item_<?php echo $i ?>">
                                    <div class="service_slider_item_img" style="background-image: url(<?=get_sub_field('image')?>)"></div>
                                    <div class="service_slider_item_content">
                                        <h3>
                                            <?=get_sub_field('name')?>
                                        </h3>
                                        <div class="description">
                                            <?=get_sub_field('sostav')?>
                                        </div>
                                        <a href="/services/" class="read_more">ПОДРОБНЕЕ <i class="read_more_arrow"></i></a>
                                    </div>
                            </div>
                            <?php $i++; endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
	<section class="section how-order">
    <div class="container">
        <div class="row">
            <h2 class="h2 col-md-12">
                Как все происходит?
            </h2>
        </div>
        <div class="row how-order__container">
            <div class="how-order__item col-md-12">
                <div class="how-order__item-number">1</div>
                <div class="how-order__item-text">К Вам приезжает кальянщик и проходит к Вам на кухню</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#shishamen"></use>
                </svg>
            </div>
            <div class="how-order__item col-xl-2 col">
                <div class="how-order__item-number">2</div>
                <div class="how-order__item-text">Вы определяетесь со вкусами, а Кальянщик готовит необходимое количество забивок</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#ok"></use>
                </svg>
            </div>
            <div class="how-order__item col-xl-2 col">
                <div class="how-order__item-number">3</div>
                <div class="how-order__item-text">1-ую забивку он раскуривает</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#hookah-tube"></use>
                </svg>
            </div>
            <div class="how-order__item col-xl-2 col">
                <div class="how-order__item-number">4</div>
                <div class="how-order__item-text">Последующие забивки Вы самостоятельно меняете, разогревая угольки на плитке, которую мы тоже Вам оставляем</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#stove"></use>
                </svg>
            </div>
            <div class="how-order__item col-xl-2 col">
                <div class="how-order__item-number">5</div>
                <div class="how-order__item-text">Согласно оговоренному времени, мы приезжаем и забираем кальян</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#fast-delivery"></use>
                </svg>
            </div>
            <div class="how-order__item col-xl-2 col">
                <div class="how-order__item-number">6</div>
                <div class="how-order__item-text">Мыть ничего не нужно, мы все сделаем самостоятельно.</div>
                <svg class="how-order__item-svg">
                    <use xlink:href="<?= get_template_directory_uri() ?>/images/sprite.svg#like"></use>
                </svg>
            </div>
        </div>
    </div>
</section>
    <section id="why_we" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2">
                        Почему 100% клиентов довольны нашим сервисом?
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="why_we_container">
                        <div class="why_we_item">
                            <div class="why_we_item_img">
                                <img src="<?= get_template_directory_uri() ?>/images/why_we_item_1.svg" alt="">
                            </div>
                            <h3 class="why_we_item_title">
                                Табак на любой вкус
                            </h3>
                            <p class="description">
                                Огромный ассортимент вкусов, от свежих фруктов, до экзоических цитрусовых
                            </p>
                        </div>
                        <div class="why_we_item">
                            <div class="why_we_item_img">
                                <img src="<?= get_template_directory_uri() ?>/images/why_we_item_2.svg" alt="">
                            </div>
                            <h3 class="why_we_item_title">
                                Быстрая доставка
                            </h3>
                            <p class="description">
                                Делаем все невозможное чтобы доставить кальян втечении 40 минут
                            </p>
                        </div>
                        <div class="why_we_item">
                            <div class="why_we_item_img">
                                <img src="<?= get_template_directory_uri() ?>/images/why_we_item_3.svg" alt="">
                            </div>
                            <h3 class="why_we_item_title">
                                Кальяны для торжества
                            </h3>
                            <p class="description">
                                Аренда кальяна на мероприятие по высшему разряду. Вкусные кальяны на вечер и ночь вашего торжества.
                            </p>
                        </div>
                        <div class="why_we_item">
                            <div class="why_we_item_img">
                                <img src="<?= get_template_directory_uri() ?>/images/why_we_item_4.svg" alt="">
                            </div>
                            <h3 class="why_we_item_title">
                                Работаем 24/7
                            </h3>
                            <p class="description">
                                Наша компания доставляет Вам кальяны круглосуточно
                            </p>
                        </div>
                        <div class="why_we_item">
                            <div class="why_we_item_img">
                                <img src="<?= get_template_directory_uri() ?>/images/why_we_item_5.svg" alt="">
                            </div>
                            <h3 class="why_we_item_title">
                                доставка по региону
                            </h3>
                            <p class="description">
                                Доставляем кальян не только по городу, но и по области
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="section section-about">
    <div class="container">
        <div class="row">
            <h2 class="h2 col-md-12">
                <?= get_field('title',17)?>
            </h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-2  section-about__logo"><img src="<?= get_template_directory_uri() ?>/images/logo-new-year.png" alt="logo"></div>
            <div class="col-md-5 col-sm-12">
                <div class="section-about__text">
                    <div class="section-about__text-p"><?= get_field('paragraph-1',17)?> </div>
                    <div class="section-about__text-p"><?= get_field('paragraph-2',17)?></div>
                    <a href="about/" class="section-about__button show_all">Подробнее о нас</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-1"></div>
            <div class="col-sm-12 col-md-4 section-about__list">
				<?php if( have_rows('list',17) ): ?>
				<?php while( have_rows('list',17) ): the_row();?>
                <ul>
                    <li class="section-about__li"><?php the_sub_field('list-item'); ?></li>
                  
                </ul>
				<?php endwhile;?>
				<?php endif;?>
            </div>
        </div>
    </div>
</section>
 
    <?php if(have_rows('list',13)):?>
        <section id="reviews" class="section reviews_index">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_container">
                        <h2 class="h2">
                            Отзывы
                        </h2>
                        <a href="/report/" class="show_all">
                            открыть все
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="reviews_slider">
                         <?php $i=0; while( have_rows('list',13) && $i<6 ): the_row(); $image = get_sub_field('image');?>
                            <div class="item">
                            <img src="<?=$image['sizes']['thumbnail']?>" alt="Отзыв от <?=get_sub_field('name')?>">
                            <div class="review_content">
                                <h3>
                                    <?=get_sub_field('name')?>
                                </h3>
                                <div class="review">
                                    <?=get_sub_field('text')?>
                                </div>
                            </div>
                        </div>
                         <?php $i++; endwhile;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>

    <section id="contacts" class="section mb30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h2">
                        Контакты
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contacts_block">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mdflex">
                                <div class="contacts_information razdelitel">
                                    <div class="contacts_information_row">
                                        <i class="c_i_icon c_i_icon_phone"></i>
                                        <div class="contacts_information_column">

                                            <a href="tel:+<?=preg_replace('/[^0-9]/', '', phone_1)?>" class="contacts_information_value"><?=phone_1?> <?php if(!empty(phone_1_name)):?>- <?=phone_1_name?><?php endif;?></a>
                                        </div>
                                    </div>
                                    <?php if (!empty(phone_2)): ?>
                                    <div class="contacts_information_row">
                                        <i class="c_i_icon c_i_icon_phone"></i>
                                        <div class="contacts_information_column">
                                            <a href="tel:+<?=preg_replace('/[^0-9]/', '', phone_2)?>" class="contacts_information_value"><?=phone_2?> <?php if(!empty(phone_2_name)):?>- <?=phone_2_name?><?php endif;?></a>
                                        </div>
                                    </div>
                                    <?php endif;?>
                                    <?php if(!empty(time_work)):?>
                                        <div class="contacts_information_row">
                                            <i class="c_i_icon c_i_icon_clock"></i>
                                            <div class="contacts_information_column">
                                                <div class="contacts_information_value"><?=time_work?></div>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                    <div class="contacts_social_row">
                                        <div class="contacts_social_title">
                                            Свяжитесь с нами при помощи:
                                        </div>
                                        <div class="contacts_social_container">
                                            <?php if (!empty(url_tg)):?>
                                                <span data-url="<?=url_tg?>" class="contacts_social_item social_js_url " title="Мы в телеграме">
                                                    <img src="<?= get_template_directory_uri() ?>/images/telegram-logo.svg" alt="Телеграм">
                                                </span>
                                            <?php endif;?>
                                            <?php if (!empty(url_wu)):?>
                                                <a href="<?=url_wu?>" class="contacts_social_item" title="Мы в WhatsUp" target="_blank">
                                                    <img src="<?= get_template_directory_uri() ?>/images/whatsapp_logo.svg" alt="WhatsUp">
                                                </a>
                                            <?php endif;?>
                                            <?php if (!empty(url_viber)):?>
                                                <span data-url="<?=url_viber?>" class="contacts_social_item social_js_url" title="Мы в Viber">
                                                    <img src="<?= get_template_directory_uri() ?>/images/viber.svg" alt="Viber">
                                                </span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12 mdflex">
                                <?php get_template_part( 'page_partical/_contact_form' )?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
