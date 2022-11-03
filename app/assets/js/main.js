window.onload = function () {
  setTimeout(() => {
    document.body.classList.add('ready');
  }, 500);
}

$(document).ready(function (e) {

  var myFullpage = new fullpage('#fullpage', {
    //Навигация
    //menu: '#header__menu',
    lockAnchors: false,
    //anchors:['p1', 'p2', 'p3', 'p4', 'p5', 'p6'],
    navigation: true,
    //navigationPosition: 'left',
    //navigationTooltips: ['firstSlide', 'secondSlide'],
    showActiveTooltip: false,
    slidesNavigation: true,
    //slidesNavPosition: 'bottom',

    //Скроллинг
    css3: true,
    scrollingSpeed: 700,
    autoScrolling: true,
    fitToSection: true,
    fitToSectionDelay: 1000,
    scrollBar: false,
    easing: 'easeInOutCubic',
    easingcss3: 'ease',
    loopBottom: false,
    loopTop: false,
    loopHorizontal: true,
    continuousVertical: false,
    continuousHorizontal: false,
    scrollHorizontally: false,
    interlockedSlides: false,
    dragAndMove: false,
    offsetSections: true,
    resetSliders: false,
    fadingEffect: false,
    normalScrollElements: '.noUi-handle, .noUi-target, .radio',
    scrollOverflow: true,
    scrollOverflowReset: true,
    scrollOverflowOptions: null,
    touchSensitivity: 15,
    bigSectionsDestination: top,

    //Доступ
    keyboardScrolling: true,
    animateAnchor: true,
    recordHistory: true,

    //Дизайн
    controlArrows: true,
    verticalCentered: true,
    //sectionsColor : ['#fff', 'red'],
    //paddingTop: '3em',
    //paddingBottom: '10px',
    //fixedElements: '#header, .footer',
    responsiveWidth: 0,
    responsiveHeight: 0,
    responsiveSlides: false,
    parallax: false,
    parallaxOptions: { type: 'reveal', percentage: 62, property: 'translate' },
    cards: false,
    cardsOptions: { perspective: 100, fadeContent: true, fadeBackground: true },

    //Настроить селекторы
    sectionSelector: '.section',
    slideSelector: '.slide',

    lazyLoading: true,

    //события
    onLeave: function (origin, destination, direction) { },
    afterLoad: function (origin, destination, direction) { },
    afterRender: function () { },
    afterResize: function (width, height) { },
    afterReBuild: function () { },
    afterResponsive: function (isResponsive) { },
    afterSlideLoad: function (section, origin, destination, direction) { },
    onSlideLeave: function (section, origin, destination, direction) { },

    // отключаем на ширине 760px
    // responsiveWidth: 760,

    onLeave: function (origin, destination, direction) {
      console.log('destination: ' + destination.index);
      var slideIndex = destination.index + 1;
      $('.slide-' + slideIndex).addClass('animation');
    }
  });


  //==========================================//
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) { } else {

    //parallax slide-1
    $('.slide-1').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.slide-1__line-1').css(
        'transform',
        'translate(' + x * 0.055 + 'px, ' + y * 0.055 + 'px)'
      );
      $('.slide-1__line-2').css(
        'transform',
        'translate(' + x * 0.060 + 'px, ' + y * 0.060 + 'px)'
      );
      $('.slide-1__line-3').css(
        'transform',
        'translate(' + x * 0.1 + 'px, ' + y * 0.1 + 'px)'
      );
      $('.slide-1__line-4').css(
        'transform',
        'translate(' + x * 0.030 + 'px, ' + y * 0.030 + 'px)'
      );
      $('.slide-1__line-5').css(
        'transform',
        'translate(' + x * 0.035 + 'px, ' + y * 0.035 + 'px)'
      );
      $('.slide-1__line-6').css(
        'transform',
        'translate(' + x * 0.060 + 'px, ' + y * 0.060 + 'px)'
      );
      $('.slide-1__line-7').css(
        'transform',
        'translate(' + x * 0.065 + 'px, ' + y * 0.065 + 'px)'
      );
    });

    //parallax slide-2
    $('.slide-2').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.slide-2__title2').css(
        'transform',
        'translate(' + x * 0.055 + 'px, ' + y * 0.055 + 'px)'
      );
      $('.slide-2__link').css(
        'transform',
        'translate(' + x * 0.03 + 'px, ' + y * 0.03 + 'px)'
      );
      $('.slide-2__text').css(
        'transform',
        'translate(' + x * 0.040 + 'px, ' + y * 0.040 + 'px)'
      );
    });
    // parallax slide-3
    $('.slide-3').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.slide-3__title2').css(
        'transform',
        'translate(' + x * 0.055 + 'px, ' + y * 0.055 + 'px)'
      );
      $('.slide-3__link').css(
        'transform',
        'translate(' + x * 0.03 + 'px, ' + y * 0.03 + 'px)'
      );
      $('.slide-3__text').css(
        'transform',
        'translate(' + x * 0.040 + 'px, ' + y * 0.040 + 'px)'
      );
    });
    // parallax slide-4
    $('.slide-4').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.slide-4__title').css(
        'transform',
        'translate(' + x * 0.055 + 'px, ' + y * 0.055 + 'px)'
      );
      $('.slide-4__round-1.active').css(
        'transform',
        'translate(' + x * 0.030 + 'px, ' + y * 0.030 + 'px)'
      );
      $('.slide-4__round-2.active').css(
        'transform',
        'translate(' + x * 0.050 + 'px, ' + y * 0.050 + 'px)'
      );
      $('.slide-4__round-3.active').css(
        'transform',
        'translate(' + x * 0.020 + 'px, ' + y * 0.020 + 'px)'
      );
      $('.slide-4__round-4.active').css(
        'transform',
        'translate(' + x * 0.040 + 'px, ' + y * 0.040 + 'px)'
      );
      $('.slide-4__round-5.active').css(
        'transform',
        'translate(' + x * 0.010 + 'px, ' + y * 0.010 + 'px)'
      );
      if ($('.slide-4').hasClass('active')) {
        $('.slide-4__round').addClass('active');
      }
    });
    // parallax slide-5
    $('.slide-5').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.slide-5__title').css(
        'transform',
        'translate(' + x * 0.025 + 'px, ' + y * 0.025 + 'px)'
      );
      $('.slide-5__desc-item:nth-child(1)').css(
        'transform',
        'translate(' + x * 0.035 + 'px, ' + y * 0.035 + 'px)'
      );
      $('.slide-5__desc-item:nth-child(2)').css(
        'transform',
        'translate(' + x * 0.040 + 'px, ' + y * 0.040 + 'px)'
      );
      $('.slide-5__desc-item:nth-child(3)').css(
        'transform',
        'translate(' + x * 0.045 + 'px, ' + y * 0.045 + 'px)'
      );
      $('.slide-5__prompt-1').css(
        'transform',
        'translate(' + x * 0.040 + 'px, ' + y * 0.040 + 'px)'
      );
      $('.slide-5__prompt-2').css(
        'transform',
        'translate(' + x * 0.035 + 'px, ' + y * 0.035 + 'px)'
      );
      $('.slide-5__prompt-3').css(
        'transform',
        'translate(' + x * 0.030 + 'px, ' + y * 0.030 + 'px)'
      );
      $('.slide-5__prompt-4').css(
        'transform',
        'translate(' + x * 0.025 + 'px, ' + y * 0.025 + 'px)'
      );
    });
    // parallax slide-6
    $('.slide-6').on('mousemove', (e) => {
      const x = -(e.pageX - $(window).width() / 2);
      const y = -(e.pageY - $(window).height() / 2);

      $('.calculator-profit').css(
        'transform',
        // 'translate(' + x * 0.005 + 'px, ' + y * 0.005 + 'px) perspective(500px)'
        'perspective(500px) rotateY(' + (-x) * 0.015 + 'deg) rotateX(' + y * 0.030 + 'deg) translate(' + (-x) * 0.015 + 'px, ' + (-y) * 0.030 + 'px)'
      ).css(
        'box-shadow',
        '#5a5a5a ' + x * 0.005 + 'px ' + y * 0.010 + 'px 10px'
      );
      // $('.calculator-profit__number').css(
      //   'transform',
      //   'translate(' + (-x) * 0.007 + 'px, ' + (-y) * 0.014 + 'px)'
      // );
      // $('.calculator-profit__label').css(
      //   'transform',
      //   'translate(' + (-x) * 0.007 + 'px, ' + (-y) * 0.014 + 'px)'
      // );
    });
  }
  //==========================================//

  // калькулятор - начало
  function Calculator() {
    this.conversion = {
      tc: 1,
      bc: 5,
      street: 1
    }; //конверсия в покупателей
    this.primeCost = {
      leasing: 0.45,  //себестоимость при арендованном оборудовании
      buyed: 0.25     //себестоимость при купленном оборудовании
    }; //себестоимость
    this.passability = 2014; // проходимость
    this.averageBill = 150; // средний чек
    this.taxes = 0; // налоги
    this.taxesrate = 0.06; // ставка налога
    this.rent = 45000; // аренда
    this.salary = 39000;
    this.internet = 200;
    this.electricity = 1500;
    this.days = 31;
    this.equipment = "buyed"; //Оборудование
    this.place = "tc";
    this.maxProfit = 1000000;
    this.raw = 0; //себестоимость сырья за месяц
    this.pureProfit = 0; //чистая прибыль
    this.total = 0;
    this.conver = 1; // конверсия
    this.cost = 0; //процент рентабельности
    this.amountBill = 0; //количество чеков в день

    this.calculate = function () {
      this.amountBill = Math.round(this.passability * this.conver / 100);
      var profit = this.amountBill * this.averageBill * this.days; //общая выручка за месяц
      this.raw = Math.round(this.primeCost[this.equipment] * this.amountBill * this.averageBill * this.days); //себестоимость сырья за месяц
      this.taxes = this.amountBill * this.averageBill * this.days * this.taxesrate; //налог по усн 6 проц
      var costs = this.rent + this.raw + this.taxes + this.internet + this.electricity + this.salary; //затраты
      this.cost = Math.round(100 - (this.rent + 1200 + this.taxes + this.internet + this.electricity + this.salary) / profit * 100 - this.primeCost[this.equipment] * 100); //процент рентабельности
      var pureProfit = profit - costs;
      this.total = profit;
      this.pureProfit = pureProfit;

      return pureProfit;
    }
  }


  var updateView = function (calculator) {
    var profit = Math.round(calculator.calculate());
    var strokeParams = "0 829";

    $('#raw').html(calculator.raw);
    $('#rent').html(calculator.rent);
    $('#taxes').html(calculator.taxes);
    $('#cost').html(calculator.cost + "%");
    $('#total').html(calculator.total);
    $('#conver').html(calculator.conver + "%");


    $('.calculator-profit__number').html(profit + " руб");
    var percentage = profit / calculator.maxProfit;
    var circle = document.querySelector('.calculator-profit__glow');
    var circleLength = circle.getTotalLength();
    if (percentage > 0) {
      var angle = -90;
      $('.calculator-profit__glow').css({ transform: 'rotate(' + angle + 'deg)' });
      $('.calculator-profit__glow').css("stroke-dasharray", circleLength * percentage + " " + circleLength);
    } else {
      var angle = -90 + percentage * 360;
      $('.calculator-profit__glow').css({ transform: 'rotate(' + angle + 'deg)' });
      $('.calculator-profit__glow').css("stroke-dasharray", -circleLength * percentage + " " + circleLength);
    }
  }

  var calculator = new Calculator();


  var sliderPassability = document.getElementById('slider-passability');
  noUiSlider.create(sliderPassability, {
    start: [6000],
    tooltips: wNumb({ decimals: 0 }),
    connect: 'lower',
    range: {
      'min': 500,
      'max': 10000
    },
    format: wNumb({
      decimals: 0,
    })
  });

  var sliderPrice = document.getElementById('slider-price');

  noUiSlider.create(sliderPrice, {
    start: [30000],
    tooltips: wNumb({ decimals: 0 }),
    connect: 'lower',
    range: {
      'min': 5000,
      'max': 150000
    },
    format: wNumb({
      decimals: 0,
    })
  });

  var sliderConversion = document.getElementById('slider-conversion');

  noUiSlider.create(sliderConversion, {
    start: [1],
    tooltips: true,
    connect: 'lower',
    range: {
      'min': 1,
      'max': 10
    },
    // format: wNumb({
    //     decimals: 0,
    // })
  });

  updateView(calculator);



  sliderPassability.noUiSlider.on("update", function () {
    calculator.passability = eval(sliderPassability.noUiSlider.get());
    updateView(calculator);
  });
  sliderPrice.noUiSlider.on("update", function () {
    calculator.rent = eval(sliderPrice.noUiSlider.get());
    updateView(calculator);
  });
  sliderConversion.noUiSlider.on("update", function () {
    calculator.conver = eval(sliderConversion.noUiSlider.get());
    updateView(calculator);
  });


  $('input[type=radio][name=calculator-places]').change(function () {
    calculator.place = this.value;
    if (this.value == 'tc') {
      calculator.passability = 6000;
      calculator.rent = 51500;
      sliderPassability.noUiSlider.set(6000);
      sliderPrice.noUiSlider.set(51500);
      sliderConversion.noUiSlider.set(1);
      calculator.conver = 1;
      $(".text-places").text("Средними значениями для торгового центра являются проходимость 6000 человек в день при аренде 51500 рублей.");
    }
    if (this.value == 'bc') {
      calculator.passability = 1000;
      calculator.rent = 14500;
      calculator.conver = 5;
      sliderPassability.noUiSlider.set(1000);
      sliderPrice.noUiSlider.set(14500);
      sliderConversion.noUiSlider.set(5);
      $(".text-places").text("Средними значениями для бизнес центра являются проходимость 1000 человек в день при аренде 14500 рублей.");
    }
    if (this.value == 'street') {
      calculator.passability = 5000;
      calculator.rent = 23000;
      calculator.conver = 1;
      sliderPassability.noUiSlider.set(5000);
      sliderPrice.noUiSlider.set(23000);
      sliderConversion.noUiSlider.set(1);
      $(".text-places").text("Средними значениями для улицы являются проходимость 5000 человек в день при аренде 23000 рублей.");
    }


    updateView(calculator);
  });
  // калькулятор - конец


  // открытие модалки
  $('.open-form').click(function (e) {
    $('.modal').addClass('active');
  });
  $('.modal__close').click(function (e) {
    $('.modal').removeClass('active');
  });


  // AJAX отправка формы
  /* Article FructCode.com */
  $("#btn-ajax-form").click(function (e) {
    event.preventDefault();
    $('#ajax_form input[name="user_phone"], #ajax_form input[name="user_email"]').removeClass('error error-mail');
    if ($('#ajax_form input[name="user_phone"]').val().length > 0 || $('#ajax_form input[name="user_email"]').val().length > 0) {

      if ($('#ajax_form input[name="user_email"]').val().length > 0) {
        var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
        var mail = $('#ajax_form input[name="user_email"]').val();
        if (mail.search(pattern) == 0) {
          sendAjaxForm('result_form', 'ajax_form', 'send.php');
          return false;
        }
        else {
          $('#ajax_form input[name="user_email"]').addClass('error-mail');
        }
      }
      else {
        sendAjaxForm('result_form', 'ajax_form', 'send.php');
        return false;
      }

    } else {
      $('#ajax_form input[name="user_phone"], #ajax_form input[name="user_email"]').addClass('error');
    }
  }
  );

  $("#btn-ajax-modal").click(function (e) {
    event.preventDefault();
    $('#ajax_modal input[name="user_phone"], #ajax_modal input[name="user_email"]').removeClass('error error-mail');
    if ($('#ajax_modal input[name="user_phone"]').val().length > 0 || $('#ajax_modal input[name="user_email"]').val().length > 0) {

      if ($('#ajax_modal input[name="user_email"]').val().length > 0) {
        var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
        var mail = $('#ajax_modal input[name="user_email"]').val();
        if (mail.search(pattern) == 0) {
          sendAjaxForm('result_form', 'ajax_modal', 'send.php');
          return false;
        }
        else {
          $('#ajax_modal input[name="user_email"]').addClass('error-mail');
        }
      }
      else {
        sendAjaxForm('result_form', 'ajax_modal', 'send.php');
        return false;
      }

    }
    else {
      $('#ajax_modal input[name="user_phone"], #ajax_modal input[name="user_email"]').addClass('error');
    }
  }
  );

  $('.contacts__input-box').click(function (e) {
    $('*').removeClass('error error-mail');
  })

  function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
      url: 'send.php',
      type: "POST", //метод отправки
      dataType: "html", //формат данных
      data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
      success: function (response) { //Данные отправлены успешно
        $('.modal').addClass('active');
        $('.modal .contacts__item').addClass('disable');
        $('.modal__result').addClass('active');
        setTimeout(() => {
          $('.contacts__input').val('');
        }, 3000);
        setTimeout(() => {
          $('.modal .contacts__item').removeClass('disable');
          $('.modal').removeClass('active');
          $('.modal__result').removeClass('active');
        }, 7000);
      },
      error: function (response) { // Данные не отправлены
        alert('error');
      }
    });
  }
  function sendAjaxModal(result_form, ajax_modal, url) {
    $.ajax({
      url: 'send.php',
      type: "POST", //метод отправки
      dataType: "html", //формат данных
      data: $("#" + ajax_modal).serialize(),  // Сеарилизуем объект
      success: function (response) { //Данные отправлены успешно
        $('.modal .contacts__item').addClass('disable');
        $('.modal__result').addClass('active');
        setTimeout(() => {
          $('.contacts__input').val('');
        }, 3000);
        setTimeout(() => {
          $('.modal .contacts__item').removeClass('disable');
          $('.modal').removeClass('active');
          $('.modal__result').removeClass('active');
        }, 7000);
      },
      error: function (response) { // Данные не отправлены
        alert('error');
      }
    });
  }

  // ввод только цифр в поле input tel
  var telInput = $('input[type="tel"]');

  for (var i = 0; i < telInput.length; i++) {
    telInput[i].oninput = function () {
      dpcmTel(this);
    }
  }
  function dpcmTel(input) {
    var value = input.value;
    var re = /[^0-9\-\(\)\+\ ]/gi;
    if (re.test(value)) {
      value = value.replace(re, '');
      input.value = value;
    }
  }



});
