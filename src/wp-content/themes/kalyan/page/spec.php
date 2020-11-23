<?php
/*
Template Name: Спецпредложение
*/
/**
 * Created by PhpStorm.
 * User:
 * Date: 08.12.2019
 * Time: 18:43
 */
?>
<?php get_header(); ?>
  <main class="main main_promo">
    <section class="promo-title">
      <div class="container">
        <img src="<?= get_template_directory_uri() ?>/images/svg/banner2021.svg" class="promo-title__background">
        <div class="promo-title__block">
          <div class="promo-title__block-logo">
            <?php if (get_field('banner-image')): ?>
              <img src="<?php the_field('banner-image'); ?>" class="promo-title__svg">
            <?php endif; ?>
          </div>
          <div class="promo-title__block-text">
            <p><?php the_field('title'); ?></p>
          </div>
          <div class="promo-title__block-desc">
            <p><?php the_field('title-description'); ?></p>
          </div>
          <div class="promo-title__block-button promo-wish promo-button"
               data-title="<?php the_field('title-button'); ?>"><?php the_field('title-button'); ?></div>
        </div>
      </div>
    </section>
    <section class="promo-banner">
      <div class="container">
        <div class="promo-banner__img">
          <div class="promo-banner__img-title"><?php the_field('promo-title'); ?></div>
          <div class="promo-banner__img-desc"><?php the_field('promo-title-description'); ?></div>
          <div class="promo-banner__img-button promo-button"
               data-title="<?php the_field('promo-theme'); ?>"><?php the_field('promo-button'); ?></div>
        </div>
      </div>
    </section>
    <section class="promo-info" id="promo-present">
      <div class="container">
        <div class="promo-info__title"><?php the_field('info-title'); ?></div>
        <div class="promo-info__wrap">
          <?php if (have_rows('promo-items-list')): ?>
            <?php while (have_rows('promo-items-list')) : the_row(); ?>
              <div class="promo-info__item">
                <div class="promo-info__item-img"><img src="<?php the_sub_field('promo-item-image'); ?>" alt=""></div>
                <div class="promo-info__item-title">
                  <p><?php the_sub_field('promo-item-title'); ?></p>
                </div>
                <div class="promo-info__item-body">
                  <div class="promo-info__item-text">
                    <div class="promo-info__item-name"><?php the_sub_field('promo-item-name'); ?></div>
                    <p>
                      <?php the_sub_field('promo-item-text'); ?>
                    </p>
                  </div>
                  <div class="promo-info__item-bottom">
                    <div class="promo-info__item-price"><?php the_sub_field('promo-item-price'); ?></div>
                    <?php if (get_sub_field('promo-item-date')): ?>
                      <div class="promo-info__item-addition">Условия актуальны до <?php the_sub_field('promo-item-date'); ?></div>
                    <?php endif; ?>
                    <div class="promo-info__item-button promo-button js_modal-promo-offer-1"
                         data-title="<?php the_sub_field('promo-item-theme'); ?>"><?php the_sub_field('promo-item-button'); ?></div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="benefit">
      <div class="container">
        <div class="benefit__title">ВЫГОДА ПРЕДЗАКАЗА</div>
        <div class="benefit__wrap">
          <div class="benefit__item">
            <div class="benefit__item-title">
              <img src="<?= get_template_directory_uri() ?>/images/svg/benefit-true.svg" alt="">
              <span>Предзаказ</span>
            </div>
            <div class="benefit__text">
              <?php the_field('preorder');?>
            </div>
          </div>
          <div class="benefit__item">
            <div class="benefit__item-title">
              <img src="<?= get_template_directory_uri() ?>/images/svg/benefit-false.svg" alt="">
              <span>Без предзаказа</span>
            </div>
            <div class="benefit__text">
              <?php the_field('no-preorder');?>
            </div>
          </div>
        </div>
        <div class="benefit__desc">
          <?php the_field('preorder-desc');?>
        </div>
      </div>
    </section>

    <section class="promo-advantages">
      <div class="container">
        <div class="promo-advantages__title">ПРЕИМУЩЕСТВА ПРЕДЗАКАЗА</div>
        <div class="promo-advantages__body">
          <?php $adv = get_field('advantages') ?>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-deliver.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['1']; ?></div>
          </div>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-economy.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['2']; ?>
            </div>
          </div>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-gargnty.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['3']; ?>
            </div>
          </div>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-sale.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['4']; ?>
            </div>
          </div>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-profit.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['5']; ?>
            </div>
          </div>
          <div class="promo-advantages__item">
            <div class="promo-advantages__item-svg"><img
                      src="<?= get_template_directory_uri() ?>/images/svg/new-year-shisha.svg" alt=""></div>
            <div class="promo-advantages__item-text"><?php echo $adv['6']; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="promo-faq">
      <div class="container">
        <div class="promo-faq__title">
          FAQ
        </div>
        <div class="promo-faq__body">
          <?php if (have_rows('faq')): ?>
            <?php while (have_rows('faq')) : the_row(); ?>
              <div class="promo-faq__item">
                <div class="promo-faq__header">
                  <span><?php the_sub_field('faq-question'); ?></span>
                  <svg class="promo-faq__svg" width="18" height="16" viewBox="0 0 18 16"
                       xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM0 9H17V7H0V9Z"/>
                  </svg>
                </div>
                <div class="promo-faq__text">
                  <p><?php the_sub_field('faq-answer'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <?php get_template_part('page_partical/_footer_form') ?>
  </main>

<?php get_footer(); ?>