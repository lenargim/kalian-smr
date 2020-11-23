<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalyan
 */

?>
  <!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Pixel Code -->
    <script>
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?
              n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '435749437376048');

      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=435749437376048&ev=PageView&noscript=1"/>

    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
          (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
      })
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(46981911, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
      });
    </script>
    <noscript>
      <div><img src="https://mc.yandex.ru/watch/46981911" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

<body <?php body_class(); ?>>
<?php
$phone_array_1 = get_field('phone_1', 15);
$phone_array_2 = get_field('phone_2', 15);

$contacts = [
    'phone_1' => get_field('phone_1', 15),
    'phone_2' => get_field('phone_2', 15),
    'time_work' => get_field('time_work', 15),
    'url_insta' => get_field('url_insta', 15),
    'url_vk' => get_field('url_vk', 15),
    'url_tg' => get_field('url_tg', 15),
    'url_wu' => get_field('url_wu', 15),
    'url_viber' => get_field('url_viber', 15),
];

define('phone_1', $phone_array_1['phone']);
define('phone_1_name', $phone_array_1['name']);
define('phone_2', $phone_array_2['phone']);
define('phone_2_name', $phone_array_2['name']);
define('time_work', get_field('time_work', 15));
define('url_insta', get_field('url_insta', 15));
define('url_vk', get_field('url_vk', 15));
define('url_tg', get_field('url_tg', 15));
define('url_wu', get_field('url_wu', 15));
define('url_viber', get_field('url_viber', 15));
?>
  <header>
    <div class="container">
      <div class="row header_row_mobile">
        <div class="col-sm-2 col-xs-3 ">
          <button class="hamburger " type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
          </button>
        </div>
        <div class="<?= (!is_front_page()) ? 'col-xs-8' : 'col-sm-6 col-xs-4' ?>">
          <a href="/">
            <img src="<?= get_template_directory_uri() ?>/images/logo-new-year.png" alt="logo">
          </a>
        </div>
        <div class="<?= (!is_front_page()) ? 'col-xs-2' : 'col-sm-4 col-xs-5 is_home_x' ?>">
          <?php if (!is_front_page()): ?>
            <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_1) ?>" class="mobile_phone"></a>
          <?php else: ?>
            <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_1) ?>"
               class="header_phone_item"><?= phone_1 ?></a>
            <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_2) ?>"
               class="header_phone_item"><?= phone_2 ?></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="row header_row">
        <div class="col-md-1 header_row_logo">
          <a href="/">
            <img src="<?= get_template_directory_uri() ?>/images/logo-new-year.png" alt="logo">
          </a>
        </div>
        <div class="col-md-8 header_shrink">
          <nav>
            <ul class="header_menu">
              <li class="drop-menu-container"><a href="/services/">Прайс</a>
                <div class="drop-menu-wrapper">
                  <div class="drop-menu">
                    <a href="/services/">Чаша на глине</a>
                    <a href="/fruktovye-chashi/">Чаша на фрукте</a>
                  </div>
                </div>
              </li>
              <li class="d-n">
                <a href="/services/">Прайст</a>
              </li>
              <li class="mobile d-n">
                <a href="/services/">Чаша на глине</a>
              </li>
              <li class="mobile  d-n">
                <a href="/fruktovye-chashi/">Чаша на фрукте</a>
              </li>
              <li><a href="/actions/">Акции</a></li>
              <li><a href="/sotrudnichestvo/">Сотрудничество</a></li>
              <li><a href="/about/">О нас</a></li>
              <li><a href="/report/">Отзывы</a></li>
              <li><a href="/contact/">Контакты</a></li>
              <li><a href="/new-year/">Новый год</a></li>
              <li><a href="/job/">Вакансии</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-1 city_wrapp">
          <div class="select_city">
            <div class="current_city">
              <img src="<?= get_template_directory_uri() ?>/images/placeholder-for-map.svg" alt=""
                   style="width: 10px; margin-right: 5px;">
              Самара
            </div>
            <div class="select_city_list">
              выберите город
              <div class="select_city_drop_list">
                <a href="http://msk.kalian-smr.ru" class="select_city_drop_list_a">Москва</a>
                <a href="http://vrn.kalian-smr.ru" class="select_city_drop_list_a">Воронеж</a>
                <a href="http://tlt.kalian-smr.ru" class="select_city_drop_list_a">Тольятти</a>
              </div>
            </div>
          </div>
          <ul class="header_social">
            <?php if (!empty(url_insta)): ?>
              <li>
                <a href="<?= url_insta ?>" target="_blank">
                  <img src="<?= get_template_directory_uri() ?>/images/instagram.svg" alt="inst logo" class="header_social_insta">
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
        <div class="col-md-2">
          <div class="header_phone_container">
            <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_1) ?>"
               class="header_phone_item"><?= phone_1 ?></a>
            <a href="tel:+<?= preg_replace('/[^0-9]/', '', phone_2) ?>"
               class="header_phone_item"><?= phone_2 ?></a>
            <div class="modal_button js_modal_btn">заказать звонок</div>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php

if (!is_page('new-year') && !isset($_COOKIE['notification'])) {
  ?>
  <div class="notification">
    <div class="container">
      <div class="notification__wrap">
        <img src="<?php echo get_template_directory_uri() ?>/images/notification-bg.png" class="notification__lights">
        <img src="<?php echo get_template_directory_uri() ?>/images/notification-2021.png" class="notification__svg">
        <div class="notification__title">Закажи кальян к новому году</div>
        <a href="/new-year" class="button notification__link">узнать подробнее</a>
        <div class="notification__close"></div>
      </div>
    </div>
  </div>
  <?php
}
?>