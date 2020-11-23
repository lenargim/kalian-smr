<?php
/*
Template Name: Акции
*/
/**
 * Created by PhpStorm.
 * User: lenar
 * Date: 16.12.2019
 * Time: 17:50
 */
?>
<?php get_header(); ?>
    <main class="actions main gradient">
        <div class="container">
			 <div class="row">
                <div class="col-md-12">
                    <div class="review_top_row">
                        <h1 class="h2">
                          <?php the_title() ?>
                        </h1>
                    </div>
                </div>
            </div>
            <section class="actions__body">
				<?php if(have_rows('actions-list')):?>
				<?php while( have_rows('actions-list') ): the_row(); ?>
				
				<div class="actions__item">
                    <div class="actions__item-img"><img src="<?=get_sub_field('image')?>" alt=""></div>
                    <div class="actions__item-text">
                        <div class="actions__item-date"><?=get_sub_field('date')?></div>
                        <div class="actions__item-title"><?=get_sub_field('title')?></div>
                        <div class="actions__item-desc"><?=get_sub_field('text')?></div>
                        <div class="actions__item-row">
                            <a href="http://kalian-smr.ru/<?=get_sub_field('link')?>" class="actions__item-button">УЗНАТЬ ПОДРОБНЕЕ</a>
                            <div class="actions__item-button actions__item-button_call" data-title="<?=get_sub_field('title')?>">заказать звонок</div>
                        </div>
                    </div>
                </div>
				
				<?php endwhile;?>
				<?php endif;?>
            </section>
        </div>
    </main>
<?php get_footer(); ?>