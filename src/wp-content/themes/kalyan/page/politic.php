<?php
/*
Template Name: Обработка персональных данных
*/
?>
<?php get_header(); ?>

<main class="main">
    <div class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h2 mb30 mt50">
                      <?= get_the_title()?>
                    </h1>
                </div>
            </div>
        </div>
        <section class="section" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="about_item_content">
                            <?= $post->post_content?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
<?php get_footer(); ?>