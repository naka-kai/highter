$(function() {


  //最初のコンテンツ以外は非表示
  $(".faq_accordion-toggle:not(:first-of-type)").css("display", "none");
  //矢印の向きを変えておく
  $(".js-accordion-title:first-of-type").addClass("open");

  //タイトルがクリックされたら
  $(".js-accordion-title").on('click', function() {
    //クリックしたjs-accordion-title以外のずべてのopenを取る
    $(".js-accordion-title").not(this).removeClass("open");
    //クリックされたjs-accordion-title以外のfaq_accordion-toggleを閉じる
    $(".js-accordion-title").not(this).next().slideUp(300);
    //thisにopenクラスを付与
    $(this).toggleClass("open");
    //thisのfaq_accordion-toggleを展開、開いていれば閉じる
    $(this).next().slideToggle(300);
  });

});
