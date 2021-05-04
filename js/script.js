jQuery(function () {

  //ハンバーガーメニュー開閉
  jQuery('.ham').on('click', function () {
    jQuery('#js-black-bg').toggleClass('open');
    jQuery('.header-sp-nav').toggleClass('open');
    jQuery('.ham-line, .ham-line1, .ham-line2, .ham-line3').toggleClass('open');
  });

  //ハンバーガーメニューのナビリンククリック後自動で閉じる
  jQuery('.header-sp-menu-list a').on('click', function () {
    jQuery('.ham').click();
  });

  //背景とhamクリックで閉じる
  jQuery('.ham, .black-bg').on('click', function () {
    if (jQuery(this).hasClass("open")) {
      jQuery('.ham').click();
    }
  });

  //faqのアコーディオン
  //最初のコンテンツ以外は非表示
  jQuery(".faq_accordion-toggle:not(:first-of-type)").css("display", "none");
  //矢印の向きを変えておく
  jQuery(".js-accordion-title:first-of-type").addClass("open");

  //タイトルがクリックされたら
  jQuery(".js-accordion-title").on('click', function () {
    //クリックしたjs-accordion-title以外のずべてのopenを取る
    jQuery(".js-accordion-title").not(this).removeClass("open");
    //クリックされたjs-accordion-title以外のfaq_accordion-toggleを閉じる
    jQuery(".js-accordion-title").not(this).next().slideUp(300);
    //thisにopenクラスを付与
    jQuery(this).toggleClass("open");
    //thisのfaq_accordion-toggleを展開、開いていれば閉じる
    jQuery(this).next().slideToggle(300);
  });

  jQuery(function () {
    jQuery(".ham").click(function () {  // トリガーをクリックした時の条件分岐
      if (jQuery(".header-sp-nav").hasClass("open")) {  // ナビを閉じるときの処理
        jQuery("html").addClass("is-fixed");  // 背景固定解除！
      } else {                              // ナビを開くときの処理
        jQuery("html").removeClass("is-fixed");     // 背景固定！
      }
    });
  });

});
