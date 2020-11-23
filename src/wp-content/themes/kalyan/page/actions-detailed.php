<?php
/*
Template Name: Акции детальная
Template Post Type: post
*/
/**
 * Created by PhpStorm.
 * User: lenar
 * Date: 16.12.2019
 * Time: 17:50
 */
?>
<?php get_header();?>

    <main class="actions-detailed">
        <div class="container">
			<div class="row">
                    <div class="col-md-12">
                        <h1 class="h2">
                            Акции
                        </h1>
                    </div>
                </div>
			<?php if(have_rows('action-detailed')):?>
				<?php while( have_rows('action-detailed') ): the_row(); ?>
            <div class="actions-detailed__body">
                <div class="actions-detailed__row">
                    <div class="actions-detailed__img"><img src="<?=get_sub_field('image')?>" alt=""></div>
                    <div class="actions-detailed__title">
                        <div class="actions-detailed__date"><?=get_sub_field('date')?></div>
                        <div class="actions-detailed__name">
                            <h3><?=get_sub_field('title')?></h3>
                        </div>
                    </div>
                </div>
                <div class="actions-detailed__text">
                    <?=get_sub_field('text')?>
                </div>
            </div>
			<?php endwhile; ?>
			<?php endif; ?>
        </div>
		 <?php get_template_part( 'page_partical/_footer_form' )?>
    </main>
<?php get_footer(); ?>