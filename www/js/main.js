(function($) {

  // Меню страниц
  $(document).on('click','.pages__toggle',function(){
    $(this).parent().toggleClass('active');
  });
  
  /**
   * Определяем мобильные устройства.
   */
  var mobileDevice = is.mobile() || is.tablet();
  
  if(mobileDevice){
    $("body").addClass("mobile");
  }
  
  if(is.android()){
    $("body").addClass("android");
  }


	/**
	 * Убираем placeholder по фокусу
	 */
	var placeholder;
	$(document).on({
		focus: function () {
			placeholder = $(this).attr("placeholder");
			$(this).attr("placeholder","");
		},
		focusout: function () {
			$(this).attr("placeholder",placeholder);
		}
	}, 'input[placeholder]:not(.readonly),textarea[placeholder]');

  
  // Выбор языка
  $(document).on('click','.lang__header',function(){
    $(this).closest('.lang').toggleClass('active');
  });

  $(document).on('click',function(e){
    if(!$(e.target).closest('.lang').length && $('.lang').hasClass('active')){
      $(".lang").removeClass('active');
    }
  });

  // Маштабирование страницы
  var newHeight = 0;
  function resizePage(){
    newHeight = $(".page__wrap").innerHeight();
    if($(window).innerWidth() < 1300 && $(window).innerWidth() >= 992){
      newHeight *= 0.75;
    } else if($(window).innerWidth() < 992 && $(window).innerWidth() >= 768){
      newHeight *= 0.6;
    }
    $(".page").css("height", newHeight + "px");
  }

  resizePage();

  $(window).on('resize',function(){
    resizePage();
  });

  $(window).on('load',function(){
    resizePage();
  });

  // Меню на мобильных
  $(document).on('click','.header__menu-toggle',function(){
    $(".header__menu,.header__menu-close").addClass('active');
  });

  $(document).on('click','.header__menu-close',function(){
    $(".header__menu,.header__menu-close").removeClass('active');
  });

  // Калькулятор
  var z = 0;
  $('.calc__slider').each(function () {
    var $range = $(this),
        $input = $(this).prev().prev(),
        rangeMax = [100000,5000000];

    $range.ionRangeSlider({
        min: $range.data('min'),
        max: $range.data('max'),
        from: rangeMax[z],
        onStart: function(data) {
          $input.prop("value", data.from);
        },
        onChange: function(data) {
          $input.prop("value", data.from);
        }
    });
    z++;

    $range.on("change", function () {
      calc();
    });
    
    var instance = $range.data("ionRangeSlider"),
        min = $range.data('min'),
        max = $range.data('max');
    
    $input.on("input", function() {
        var val = $(this).prop("value");
    
        if (val < min) {
            val = min;
        } else if (val > max) {
            val = max;
        }
    
        instance.update({
            from: val
        });
        $(this).next().addClass('hidden');
    });
    
    $input.on("focus", function() {
        $(this).next().addClass('hidden');
    });
  });

  $(document).on('change','.calc__check-label input,.calc__select select',function(){
    calc();
  });

  $(document).on('change','.calc__check-label input',function(){
    if($(this).is(":checked")){
      $(".calc__select").removeClass('disabled')
    } else {
      $(".calc__select").addClass('disabled')
    }
  });

  function calc(){
    var slider1 = Number($(".calc__slider.slider1").prop("value")),
        slider2 = Number($(".calc__slider.slider2").prop("value")),
        select = Number($(".calc__select select").val());

    var k1,k2,k3;

    if(slider1 >= 0) k1 = 1;
    if(slider1 >= 1000) k1 = 1.25;
    if(slider1 >= 5000) k1 = 1.75;
    if(slider1 >= 25000) k1 = 2;
    if(slider1 >= 100000) k1 = 2.25;
    if(slider1 >= 200000) k1 = 2.75;
    if(slider1 >= 500000) k1 = 3;
    if(slider1 >= 1000000) k1 = 3.25;

    if(slider2 >= 0) k2 = 1;
    if(slider2 >= 100) k2 = 1.15;
    if(slider2 >= 1000) k2 = 1.25;
    if(slider2 >= 5000) k2 = 1.5;
    if(slider2 >= 25000) k2 = 1.7;
    if(slider2 >= 100000) k2 = 2;
    if(slider2 >= 500000) k2 = 2.5;
    if(slider2 >= 1000000) k2 = 2.7;
    if(slider2 >= 5000000) k2 = 3;

    if(select == 0 || select == null) k3 = 1;
    if(select == 1) k3 = 1.1;
    if(select == 2) k3 = 1.2;
    if(select == 3) k3 = 1.3;
    if(select == 4) k3 = 1.4;

    if(!$(".calc__check-label input").is(":checked")) {
      k3 = 1;
    }

    var h5 = 0.1*k1*k2*k3;
    var f9 = h5*(100 - 0.2)/100;
    var c9 = slider1;
    var e9 = 0.33;
    var h9 = f9+e9;
    for (var i = 0; i <= 365; i++) {
      c9 = (c9 * h9 / 100) + c9;
      f9 = f9*(100 - 0.2)/100;
      h9 = f9+e9;
      if(i == 30){
        $(".calc__result-value.month").text(numberSpaces(c9.toFixed(0)));
      }
      if(i == 180){
        $(".calc__result-value.month6").text(numberSpaces(c9.toFixed(0)));
      }
      if(i == 365){
        $(".calc__result-value.month12").text(numberSpaces(c9.toFixed(0)));
      }
    }
  }

  calc();

  function numberSpaces(num){
    return String(num).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
  }

  // Кастомные селекты
  $("select").styler();

  // Слайдер партнёров
  $(".partners__slider").slick({
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true
        }
      }
    ]
  });

  $(document).on('click','.partners__btn',function(){
    if($(this).hasClass("partners__btn_next")){
      $(".partners__slider").slick("slickNext");
    } else {
      $(".partners__slider").slick("slickPrev");
    }
  });

  // Анимации
  if(!mobileDevice){
    var $anim = $("*[data-anim]").waypoint(function(direction) {
      if($(this.element).data("delay") !== undefined){
        $(this.element).addClass("animated").css("animation-delay",$(this.element).attr("data-delay")+"ms").addClass($(this.element).attr("data-anim"));
      } else {
        $(this.element).addClass("animated").addClass($(this.element).attr("data-anim"));
      }
    }, { offset: "85%" });

    for (var i = 0; i < $("*[data-custom-offset]").length; i++) {
      $("*[data-custom-offset]").eq(i).waypoint(function(direction) {
        if($(this.element).hasClass("delay")){
          $(this.element).addClass("animated").css("animation-delay",$(this.element).attr("data-delay")+"ms").addClass($(this.element).attr("data-anim"));
        } else {
          $(this.element).addClass("animated").addClass($(this.element).attr("data-custom-offset"));
        }
      }, { offset: $("*[data-custom-offset]").eq(i).data("offset") });
    }

    // Множественные анимации
    var animObj,animName,animDelay;
    var $mAnim = $("*[data-multiple-anim]").waypoint(function(direction) {
      animObj = $(this.element).find(">*");
      animName = $(this.element).attr("data-multiple-anim");
      animDelay = 100;
      $(this.element).addClass("animated");
      if($(this.element).data("delay") !== undefined){
        animDelay = $(this.element).attr("data-delay");
      }
      for (var i = animObj.length - 1; i >= 0; i--) {
        animObj.eq(i).addClass("animated").css("animation-delay",i*animDelay+"ms").addClass(animName);
      }
    }, { offset: "85%" });
  }

  // Паралакс при движении мыши
  if(!mobileDevice){
    for (var i = 0; i < $(".parallax-scene").length; i++) {
      new Parallax(document.getElementById($(".parallax-scene").eq(i).attr('id')), {
        selector: '.parallax',
        pointerEvents: true,
      });
    }
  }

/*
  // Кошелёк отправка смена шагов
  $(document).on('click','.next-step-btn',function(){
    $(".send__step.active").addClass('animateOut');
    setTimeout(function(){
      $(".send__step.active").removeClass('active').next().addClass('animateIn active');
    }, 150);

    // Удаляем лишние классы в случае возврата к предыдущему шагу
    setTimeout(function(){
      $(".send__step").removeClass('animateOut animateIn');
    }, 300);
  });
*/
  $(document).on('click','.next-step-register-btn',function(){
    $(".send__step.active").addClass('animateOut');
    setTimeout(function(){
      $(".send__step.active").removeClass('active').next().addClass('animateIn active');
    }, 150);

    // Удаляем лишние классы в случае возврата к предыдущему шагу
    setTimeout(function(){
      $(".send__step").removeClass('animateOut animateIn');
    }, 300);
  });

  $(document).on('click','.send__close',function(){
    $(".send__step.active").addClass('animateOut');
    setTimeout(function(){
      if($(".send__step.active .send__close").hasClass("send__close_first")){
        $(".send__step.active").removeClass('active').prev().prev().addClass('animateIn active');
      } else {
        $(".send__step.active").removeClass('active').prev().addClass('animateIn active');
      }
    }, 150);

    // Удаляем лишние классы в случае возврата к предыдущему шагу
    setTimeout(function(){
      $(".send__step").removeClass('animateOut animateIn');
    }, 300);
  });

  // Копирование текста
  $(document).on('click','.wallet__icon_copy,.send__copy',function(){
    copy_text("copy-text");
  });
  
  function copy_text(element) {
    var text = document.getElementById(element);
    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(text);
    selection.removeAllRanges();
    selection.addRange(range);
    document.execCommand('copy');
  }
  
  /**
   * Scroll to item
   * @param object obj
   * @param integer offset
   * @param integer speed
   */
  function scrollToFunc(obj,offset,speed){
    if(offset === undefined) offset = 0;
    if(speed === undefined) speed = 1250;
    $('body,html').animate({scrollTop: obj.offset().top - offset}, speed);
  }

  /**
   * Smooth scroll to id
   */
  $(document).on('click','.header__menu a',function(e){
    e.preventDefault();
    scrollToFunc($($(this).attr("href")));
    if($(window).innerWidth() < 768){
      $(".header__menu,.header__menu-close").removeClass('active');
    }
  });

  $(document).on('change','.send__check-toggle input',function(){
    if($(this).is(':checked')){
      $(this).closest(".send__step").find(".send__btn").prop('disabled',false);
    } else {
      $(this).closest(".send__step").find(".send__btn").prop('disabled',true);
    }
  });

  // Фэйкс плэйсхолдер
  $(document).on('input','.exchange .form-control',function(){
    if($(this).next().is('.fake-placeholder') && $(this).val() != ""){
      $(this).next().addClass('hidden');
    } else if($(this).next().is('.fake-placeholder')){
      $(this).next().removeClass('hidden');
    }
  });

  // Маска суммы
  $(".exchange__sum").inputmask({
    regex: "[0-9.]* BTC",
    isComplete: function(buffer, opts) {
      return new RegExp(opts.regex).test(buffer.join('BTC'));
    }
  });

  // Калькулятор обмена
  var btc = $('#btc'),
      kvnt = $("#kvnt");
      usd = $("#usd");
      usdKvant = $("#usd-kvnt"),
      btcRes = $("#btc-res"),
      kvntRes = $("#kvnt-res"),
      usdRes = $("#usd-res"),
      usdKvantRes = $("#usd-kvnt-res"),
      course = 9050.78,
      courseKvnt = 9050.78;
      
  $(document).on('input','.excalc__input',function(){
    exCalc($(this).attr('id'));
  });

  $(document).on('focus','.excalc__input',function(){
    if($(this).prop('readonly') == false){
      $(this).val('');
    }
  });

  function exCalc(id){
    if(id == 'btc'){
      kvnt.val(Number(btc.val() * courseKvnt).toFixed(2))
    } else {
      btc.val(Number(kvnt.val()/courseKvnt).toFixed(2))
    }
    usd.val(Number(btc.val() * course).toFixed(2));
    usdKvant.val(Number(btc.val() * course).toFixed(2));
    btcRes.text(btc.val() + ' BTC');
    kvntRes.text(kvnt.val() + ' KVNT');
    usdRes.text('$'+Number(btc.val() * course).toFixed(2));
    usdKvantRes.text('$'+Number(btc.val() * course).toFixed(2));
  }

  $(".excalc__input").inputmask({
    regex: "[0-9.]*"
  });
})(jQuery);