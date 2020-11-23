<?php
/*
Template Name: Спасибо за заявку
*/
?>
<?php get_header(); ?>

    <main class="main">
        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h2 mb30 mt50">
                            <?php the_title() ?>
                        </h1>
                    </div>
                </div>
            </div>
            <section class="section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 style="line-height: 1.5; padding-top: 30px; padding-bottom: 30px;">
                                Мы свяжемся c Вами в течении 2х
                                минут <?= (isset($_GET['phone']) && !empty($_GET['phone'])) ? 'по телефону <span style="color:#F78012">' . $_GET['phone'] : '</span>.' ?>
                            </h2>
                        </div>
                        <div class="col-sm-4">
                            <img src="http://kalian-smr.ru/wp-content/uploads/2019/05/79ddb1c2-51ec-4621-a1fb-2cbdfd110d78.jpg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>
		<script>
  fbq('track', 'Lead');
</script>
    </main>

<?php get_footer(); ?>