<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

  <main class="main">
    <section id="contacts" class="section gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="h2">
              <?php the_title() ?>
            </h1>
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

                        <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_1) ?>"
                           class="contacts_information_value"><?= phone_1 ?> <?php if (!empty(phone_1_name)): ?>- <?= phone_1_name ?><?php endif; ?></a>
                      </div>
                    </div>
                    <?php if (!empty(phone_2)): ?>
                      <div class="contacts_information_row">
                        <i class="c_i_icon c_i_icon_phone"></i>
                        <div class="contacts_information_column">

                          <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_2) ?>"
                             class="contacts_information_value"><?= phone_2 ?> <?php if (!empty(phone_2_name)): ?>- <?= phone_2_name ?><?php endif; ?></a>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if (!empty(time_work)): ?>
                      <div class="contacts_information_row">
                        <i class="c_i_icon c_i_icon_clock"></i>
                        <div class="contacts_information_column">
                          <div class="contacts_information_value"><?= time_work ?></div>
                        </div>
                      </div>
                    <?php endif; ?>
                    <div class="contacts_social_row">
                      <div class="contacts_social_title">
                        Свяжитесь с нами при помощи:
                      </div>
                      <div class="contacts_social_container">
                        <?php if (!empty(url_tg)): ?>
                          <span data-url="<?= url_tg ?>"
                                class="contacts_social_item social_js_url"
                                title="Мы в телеграме">
                                                    <img src="<?= get_template_directory_uri() ?>/images/telegram-logo.svg"
                                                         alt="Телеграм">
                                                </span>
                        <?php endif; ?>
                        <?php if (!empty(url_wu)): ?>
                          <a href="<?= url_wu ?>" class="contacts_social_item"
                             title="Мы в WhatsUp" target="_blank">
                            <img src="<?= get_template_directory_uri() ?>/images/whatsapp_logo.svg" alt="WhatsUp">
                          </a>
                        <?php endif; ?>
                        <?php if (!empty(url_viber)): ?>
                          <span data-url="<?= url_viber ?>"
                                class="contacts_social_item social_js_url" title="Мы в Viber">
                                                    <img src="<?= get_template_directory_uri() ?>/images/viber.svg"
                                                         alt="Viber">
                                                </span>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12 mdflex">
                  <?php get_template_part('page_partical/_contact_form') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>