<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>
<main class="main">

    <section class="section gradient" id="reviews_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="review_top_row">
                        <h1 class="h2">
                            Отзывы о сервисе <span style="color:#F78012">VINIПЫХ</span>
                        </h1>
                        <div class="review_button_wrap review_button_wrap_top">
                            <button class="form_submit" data-fancybox data-src="#hidden-reviews">
                                оставить отзыв
                            </button>
                        </div>
                    </div>
                </div>
            </div>
			<div class="tub-container">
				<button class="modal_button tub__item tub__item_active tub__item_insta">С инстаграма</button>
				<button class="modal_button tub__item tub__item_site">С сайта</button>
			</div>
            <?php if(have_rows('list')):?>
                <div class="row review_items_row">
                    <?php while( have_rows('list') ): the_row(); $image = get_sub_field('image');?>
                    <div class="col-md-6">
                        <div class="review_item" >
                            <div class="review_item_image" style="background-image: url(<?=$image['sizes']										['thumbnail']?>)"></div>
                            <div class="review_item_content">
                                <div class="review_item_title">
                                    <?=get_sub_field('name')?>
                                </div>
                                <div class="review_item_value">
                                    <?=get_sub_field('text')?>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php endwhile;?>
                </div>
            <?php endif;?>
			 <?php if(have_rows('insta_test')):?>
			<div class="row review_insta_row">
			<?php $i = 1; ?>
			<?php while( have_rows('insta_test') ): the_row(); $image_inst = get_sub_field('images'); $image_account = get_sub_field('account');?>
				
				<?php $size = 'medium'; if( $image_inst ): ?>
				<?php foreach( $image_inst as $image_id ): ?>
				<div class="insta_item">
				<a class="insta__link" href="<?=$image_id['sizes']['large']?>" data-fancybox="images-preview">
            		<div class="insta_item-head">
                	<img src="<?= get_template_directory_uri() ?>/images/instagram.png" class="insta_svg">
               		<span><?php echo esc_html($image_account); ?></span>
            		</div> <img class="insta_item__img" src="<?=$image_id['sizes']['large']?>"/>
				</a>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
				</div>
       			<?php endforeach; ?>
				<?php endif; ?>
				<?php $i = $i+1; ?>
				<?php endwhile;?>
				<?php endif; ?>
				
			</div>	
            <div class="row">
                <div class="col-md-12">
                    <div class="review_button_wrap review_button_wrap_bottom">
                        <button class="form_submit" data-fancybox data-src="#hidden-reviews">
                            оставить отзыв
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'page_partical/_footer_form' )?>
</main>
<?php get_footer(); ?>
