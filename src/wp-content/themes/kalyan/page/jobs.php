<?php
/*
Template Name: Вакансии
*/
?>
<?php get_header(); ?>
  <main class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="h2 mb30 mt50">
            <?= the_title(); ?>
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="job">
            <div class="job__content">
              <?php echo $post->post_content; ?>
            </div>
            <a href="https://forms.gle/8smUL2Rpi6sqMUUx6" target="_blank" class="job__button">Откликнуться</a>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>