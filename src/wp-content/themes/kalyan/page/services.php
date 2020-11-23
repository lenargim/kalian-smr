<?php
/*
Template Name: Услуги
*/

$block = get_field('block');
?>

<?php get_header(); ?>
<!--<pre>
    <?php /*var_dump($block);*/?>
</pre>-->
<main class="main">
   <section class="section section_top50">
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <h1 class="service_title_h1">
                       <?php the_title()?><p><?=$block['title']?></p>
                   </h1>
               </div>
           </div>
       </div>
   </section>

    <?php if(!empty($block['list'])):?>
        <section class="section" id="section_step">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="step_row">
                            <?php foreach ($block['list'] as $key=>$item):?>
                                <div class="step_item">
                                <div class="step_item_score"><?=$key+1?> <span>шаг</span></div>
                                <h3><?=$item['title']?></h3>
                                <div class="step_description">
                                    <?=$item['text']?>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>

    <section class="section" id="service_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="h2">
                        <?= get_field('title');?>
                    </h2>
                </div>
            </div>
            <?php if(have_rows('service_block')):?>
                <div class="row">
                <div class="col-md-12">
                    <?php $i=1; while( have_rows('service_block') ): the_row();?>
                        <div class="service_item" id="service_item_<?=$i?>">
                        <div class="service_item_image" style="background-image: url(<?=get_sub_field('image')?>)">

                        </div>
                        <div class="service_item_content">
                            <h3>
                                <?=get_sub_field('name')?>
                            </h3>
                            <?php if(get_sub_field('sostav')):?>
                                <div class="service_item_row">
                                    <div class="service_item_row_title">
                                         Состав:
                                    </div>
                                    <div class="service_item_row_description">
                                       <?=get_sub_field('sostav')?>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if(get_sub_field('tabak')):?>
                                <div class="service_item_row">
                                    <div class="service_item_row_title">
                                        Табак:
                                    </div>
                                    <div class="service_item_row_description">
                                        <?=get_sub_field('tabak')?>
                                    </div>
                                </div>
                            <?php endif;?>
                            <?php if(get_sub_field('text')):?>
                                <div class="service_item_description">
                                    <?=get_sub_field('text')?>
                                </div>
                            <?php endif;?>
                            <div class="service_price_row">
                                <div class="service_price">
                                    <div class="service_price_pre">СТОИМОСТЬ</div>
                                    <div class="service_price_value"> <?php if(get_sub_field('is_price')):?><span>от </span> <?php endif;?> <?=get_sub_field('price')?> <span>РУБ</span></div>
                                </div>
                                <div class="service_order_btn">
                                    <button class="form_submit js_modal_btn-servises_<?=$i?>" data-price="<?=get_sub_field('price')?>" data-title="<?=get_sub_field('name')?>">ЗАКАЗАТЬ КАЛЬЯН</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile;?>
                </div>
            </div>
            <?php endif;?>
            <div class="row">
                    <div class="col-md-12 about_item_content">
                        <h3>Как сделать заказ кальяна на сутки в Самаре?</h3><br>
                        <p>У вас намечается дружеская вечеринка или романтическое свидание и вы хотите порадовать близких сердцу людей чем-то новеньким и интересным? Предлагаем вам&nbsp;заказать кальян на дом&nbsp;в нашем сервисе ВИНИПЫХ и получить море удовольствия от большого разнообразия вкусов табака разной крепости.</p>
                        <h4>Аренда кальяна на сутки: что входит в услугу</h4>
                        <p>
                        </p>
                        <p>Кроме самого кальяна, мы привезем:</p>
                        <ul type="disc">
                            <li>плитку для розжига углей;</li>
                            <li>одноразовые мундштуки;</li>
                            <li>щипцы и табак;</li>
                            <li>чашу и угли;</li>
                        </ul>
                        <p>Обратившись в нашу компанию, вы можете не просто взять кальян в аренду, а составить кальян своей мечты. Сделайте пред заказ за 2 часа и мы сделаем для вас любую чашу &ndash; дыню, ананас, помело, грейпфрут, легкий, средней крепости или крепкий табак и несколько разных видов вкуса, от сладкого до кислого.</p>
                        <p>Доставка кальяна на дом&nbsp;осуществляется в течение 40 минут круглосуточно.</p>
                        <p>Где в Самаре можно покурить кальян? Обратитесь к нам, и вы точно не прогадаете:</p>
                        <ul type="disc">
                            <li>У нас работают опытные кальянщики.</li>
                            <li>Мы привозим большой выбор табаков разной крепости.</li>
                            <li>При заказе кальяна на часы или сутки, вы можете быть спокойны и уверены, что мы сделаем все необходимое, чтобы вы наслаждались отдыхом и ни в чем не нуждались.</li>
                            <li>Отныне заказать кальян на дом круглосуточно&nbsp;&ndash; не проблема. Просто позвоните &ndash; мы доставим вам кальян, когда вам будет это необходимо.</li>
                        </ul>
                        <p>Заказывайте аренду и доставку кальяна на дом в Самаре в нашей компании. Мы гарантируем высокое качество продукта, быструю доставку и отменный сервис.</p>
                    </div>
                </div>
        </div>
    </section>
    <?php get_template_part( 'page_partical/_footer_form' )?>
</main>

<?php get_footer(); ?>