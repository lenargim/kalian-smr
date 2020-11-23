$('#service_slider').owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  pagination: true,
  dots: true,
  autoHeight: true,
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 1
    },
    1000: {
      items: 2
    }
  },
});
$('#index_slider').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  slideSpeed: 2500,
  rewindSpeed: 2500,
  smartSpeed: 2500,
  paginationSpeed: 2500,
  pagination: true,
  dots: true,
  autoHeight: true,
  dotsContainer: '#dots_container',
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 1
    },
    1000: {
      items: 1
    }
  },
});
$('#reviews_slider').owlCarousel({
  loop: true,
  margin: 30,
  nav: true,
  pagination: true,
  dots: true,
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 1
    },
    1000: {
      items: 2
    }
  },
  navText: ['<img src="wp-content/themes/kalyan//images/arrow-left.svg" alt="">', ' <img src="wp-content/themes/kalyan//images/arrow-right.svg" alt="">']
});

$('#section-tabak__slider').owlCarousel({
  loop: true,
  dots: false,
  items: 4,
  nav: true,
  navText: ['<img class="section-tabak__arrow section-tabak__arrow_left" src="../wp-content/themes/kalyan/images/svg/arrow.svg" alt="">', ' <img class="section-tabak__arrow section-tabak__arrow_right" src="../wp-content/themes/kalyan/images/svg/arrow.svg" alt="">'],
  responsive: {
    0: {
      items: 1
    },
    768: {
      items: 2
    },
    1000: {
      items: 3
    }
  },
})

$('.hamburger').on('click', function (e) {
  $('.header_row').css('opacity', '0');
  $(this).toggleClass('is-active');

  $(this).toggleClass('hamburger--collapse');
  if ($('.hamburger').hasClass('is-active')) {
    $('.header_row').addClass('is-active').animate({
      height: "100%",
      opacity: 1 // прозрачность элемента
    }, 1000, "linear");
  } else {
    $('.header_row').animate({
      height: "0px",
      opacity: 0.2 // прозрачность элемента
    }, 1000, "linear", function () {
      $(this).removeClass('is-active');	// изменяем текстовое содержимое нашему блоку и указываем цвет текста
    });
  }

});
var wpcf7Elm = document.querySelector('.contacts_form_wrapper .wpcf7');
if (wpcf7Elm) {
  wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //        window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}

var wpcf7Elm2 = document.querySelector('#modal_call_phone .wpcf7');
if (wpcf7Elm2) {
  wpcf7Elm2.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {

      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //       window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}
var wpcf7Elm3 = document.querySelector('#modal_call_mas .wpcf7');
if (wpcf7Elm3) {
  wpcf7Elm3.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks_call',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
    })
  }, false);
}
var wpcf7Elm4 = document.querySelector('.modal-tabak_call');
if (wpcf7Elm4) {
  wpcf7Elm4.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //        window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}


var wpcf7Elm5 = document.querySelector('#hidden-content-servises');
if (wpcf7Elm5) {
  wpcf7Elm5.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //       window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}

var wpcf7Elm6 = document.querySelector('#hidden-content-servises_24');
if (wpcf7Elm6) {
  wpcf7Elm6.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      fbq('track', 'Lead');
      ym('46981911', 'reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //        window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}

var wpcf7Elm9 = document.querySelector('#hidden-offer-promo');
if (wpcf7Elm9) {
  wpcf7Elm9.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      //	fbq('track', 'Lead');
      //	ym('46981911','reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //        window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}
var wpcf7Elm10 = document.querySelector('#hidden-action');
if (wpcf7Elm10) {
  wpcf7Elm10.addEventListener('wpcf7mailsent', function (event) {
    jQuery(function () {
      $.fancybox.close();
      $.fancybox.open({
        src: '#thanks',
        type: 'inline'
      });
      //	fbq('track', 'Lead');
      //	ym('46981911','reachGoal', 'zakaz');
      //	var s = event.detail.inputs.find(item => item.name === 'your-phone');
      //        window.location.href = "/spasibo-za-zayavku/?phone=" + s.value;
    })
  }, false);
}
$('.modal_close').on('click', function () {
  $.fancybox.close();
})

$('.js_modal_btn-servises_1').on('click', getDataAttributeServises_1);
$('.js_modal_btn-servises_2').on('click', getDataAttributeServises_2);
$('.js_modal_btn-servises_3').on('click', getDataAttributeServises_3);
$('.js_modal_btn-servises_4').on('click', calculate24);
$('.actions__item-button_call').on('click', getActionTitle)
$('.promo-button').on('click', getPromoTitle)

function getActionTitle() {
  let title = $(this).attr("data-title");
  $('.modal-action__title').val(title);
}

function getPromoTitle() {
  let title = $(this).attr("data-title");
  $('.spetspredloshenie-modal-title').val(title);
}

function getDataAttributeServises_1() {
  let price = $(this).attr("data-price");
  $('.price-amount__come_servises').val(price);
  let title = $(this).attr("data-title");
  $('.title-come_servises').val(title);
  let parent = $('#hidden-content-servises');
  let amount = parent.find('.modal-shisha-amount').val(1);
  let tabakItem1 = parent.find('.wpcf7-list-item:eq(0)')
  let tabakItem1_checked = tabakItem1.find('input:radio').prop("checked", true);
  let name = tabakItem1_checked.siblings('.wpcf7-list-item-label').text()
  $('.name-come_servises').val(name)
  let sum = parent.find('.modal-shisha-total').val(price)
}

function getDataAttributeServises_2() {
  let price = $(this).attr("data-price");
  $('.price-amount__come_servises').val(price);
  let title = $(this).attr("data-title");
  $('.title-come_servises').val(title);
  let parent = $('#hidden-content-servises');
  let amount = parent.find('.modal-shisha-amount').val('2');
  let tabakItem1 = parent.find('.wpcf7-list-item:eq(0)')
  let tabakItem1_checked = tabakItem1.find('input:radio').prop("checked", true);
  let name = tabakItem1_checked.siblings('.wpcf7-list-item-label').text()
  $('.name-come_servises').val(name)
  let sum = parent.find('.modal-shisha-total').val(price)
}

function getDataAttributeServises_3() {
  let price = $(this).attr("data-price");
  $('.price-amount__come_servises').val(price);
  let title = $(this).attr("data-title");
  $('.title-come_servises').val(title);
  let parent = $('#hidden-content-servises')
  let amount = parent.find('.modal-shisha-amount').val(1);
  let tabakItem4 = parent.find('.wpcf7-list-item:eq(3)')
  let tabakItem4_checked = tabakItem4.find('input:radio').prop("checked", true);
  let tabak = parent.find('.modal-tabak__radio-buttons').val();
  let name = tabakItem4_checked.siblings('.wpcf7-list-item-label').text()
  $('.name-come_servises').val(name)
  let sum = parent.find('.modal-shisha-total').val(price)
}

function calculate24() {
  let parent = $('#hidden-content-servises_24')
  let price = $(this).attr("data-price");
  let priceIn = parent.find('.price-amount__come_servises').val(price);
  let title = $(this).attr("data-title");
  let titleIn = parent.find('.title-come_servises').val(title);
  let amount = parent.find('.modal-shisha-amount_24').val();
  let sum = parent.find('.modal-shisha-total').val(amount * price)
}


$('.js_modal_btn-action').on('click', getDataAttribute);
$('.js_modal_btn-servises').on('click', getDataAttributeServises);
$('.modal-shisha-amount_24').on('change', change24)

function change24() {
  let parent = $('#hidden-content-servises_24');
  let amount = $(this).val()
  let price = parent.find('.price-amount__come_servises').val()
  let sum = parent.find('.modal-shisha-total').val(amount * price)
}

function getDataAttribute() {
  let price = $(this).attr("data-price");
  $('.price-amount-come').val(price);
  let title = $(this).attr("data-title");
  $('.title-come').val(title);
}

function getDataAttributeServises() {
  let price = $(this).attr("data-price");
  $('.price-amount__come_servises').val(price);
  let title = $(this).attr("data-title");
  $('.title-come_servises').val(title);
}

$("#hidden-content-servises input:radio").on('click', calculate);
$(".modal-shisha-amount").on('change', numberChange);

function numberChange() {
  let amount = $(this).val()
  let parent = $(this).parents('#hidden-content-servises');
  let inputField = parent.find('.modal-shisha-total');
  let price = parent.find('.price-amount__come_servises').val()
  let val = parent.find('input:checked').val()
  let name = parent.find('input:checked + span').text()
  let sum;
  if (amount == 1) {
    sum = +val;
  } else if (amount == 2) {
    sum = +val + 300;
  } else if ((name == 'Адалия' || name == 'Щербет' || name == 'Пеликан') && amount > 2) {
    sum = +val + 300 + (+amount - 2) * 200;
  } else if ((
      name == 'DARKSIDE' ||
      name == 'MUSTHAVE' ||
      name == 'ELEMENT' ||
      name == 'Daily Hookah' ||
      name == 'BlackBurn'
  ) && amount > 2) {
    sum = +val + 300 + (+amount - 2) * 400;
  }


  inputField.val(sum)

}

function calculate() {
  let val = $(this).val()
  let parent = $(this).parents('#hidden-content-servises');
  let inputField = parent.find('.modal-shisha-total')
  let amount = parent.find('.modal-shisha-amount').val()
  let price = parent.find('.price-amount__come_servises').val()
  let sum;
  let name = parent.find('input:checked + span').text()
  $('.name-come_servises').val(name)

  if (amount == 1) {
    sum = +val;
  } else if (amount == 2) {
    sum = +val + 300;
  } else if ((name == 'Адалия' || name == 'Щербет' || name == 'Пеликан') && amount > 2) {
    sum = +val + 300 + (+amount - 2) * 200;
  } else if ((
      name == 'DARKSIDE' ||
      name == 'MUSTHAVE' ||
      name == 'ELEMENT' ||
      name == 'Daily Hookah' ||
      name == 'BlackBurn'
  ) && amount > 2) {
    sum = +val + 300 + (+amount - 2) * 400;
  } else {
    sum = NaN
  }
  inputField.val(sum)
}

$('.phone_input').on('keyup', addPhone)

function addPhone() {
  let getPhone = $(this).val()
  $('.take-phone').text(getPhone)
}

/* Маска для телефона */
$('input[name="your-phone"]').mask('+7(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});


$('.tub__item_insta').on('click', function () {
  $('.tub__item').removeClass('tub__item_active')
  $(this).addClass('tub__item_active')
  $('.review_items_row').css('display', 'none')
  $('.review_insta_row').css('display', 'grid')
})

$('.tub__item_site').on('click', function () {
  $('.tub__item').removeClass('tub__item_active')
  $(this).addClass('tub__item_active')
  $('.review_items_row').css('display', 'block')
  $('.review_insta_row').css('display', 'none')
})
$('.insta_item').on('mouseover', function () {
  $('.insta_item').css('opacity', '0.5')
  $(this).css('opacity', '1')
})
$('.insta_item').on('mouseout', function () {
  $('.insta_item').css('opacity', '1')
})
$(".insta__link").fancybox({
  loop: true,
  animationDuration: 600,
  transitionDuration: 600,
  closeBtn: 'true',
  arrows: false,
  smallBtn: "true",

});
/*$('.promo-title__block-button').on('click', function(){
       event.preventDefault()
       let id = $(this).attr('href')
       let top = $(id).offset().top
       $('body,html').animate({scrollTop: top}, 1500)
   })
*/

$('.promo-faq__item').on('click', function () {
  if ($(this).hasClass('promo-faq__item_active')) {
    $(this).removeClass('promo-faq__item_active')
    $(this).find('.promo-faq__text').slideUp(300)
  } else {
    $('.promo-faq__item').removeClass('promo-faq__item_active')
    $('.promo-faq__text').slideUp(300)
    $(this).addClass('promo-faq__item_active')
    $(this).find('.promo-faq__text').slideDown(300)
  }
})
$('.header-row__close').on('click', function () {
  $('.header-row').slideUp(200)
})

$('.notification__close').on('click', function () {
  $('.notification').slideUp();
  document.cookie = "notification=false; max-age=60";
});