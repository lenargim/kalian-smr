<?php
/*
Template Name: Сотруднечество
*/
?>
<?php get_header(); ?>

<main class="main">

    <div class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h2 mb30 mt50">
                        <?php the_title()?>
                    </h1>
                </div>
                <?php if(get_field('cop')): $cop = get_field('cop');?>
                    <div class="col-md-12">
                       <div class="cooperation_select">
                           <span><?=$cop['title']?></span> <?=$cop['list'];?>
                       </div>
                    </div>
                <?php endif;?>
            </div>
        </div>

        <section class="section mt50" id="cooperation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h2">
                            <?= get_field('title')?>
                        </h2>
                    </div>
                </div>
                <?php if(have_rows('block')):?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cooperation_row">
                                <?php while( have_rows('block') ): the_row();?>
                                    <div class="cooperation_item">
                                    <img src="<?=get_sub_field('image')?>" alt="">
                                    <h3>
                                       <?=get_sub_field('text')?>
                                    </h3>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </section>
    </div>

    <?php get_template_part( 'page_partical/_footer_form' )?>
</main>

<?php get_footer(); ?>