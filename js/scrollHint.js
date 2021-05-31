// $(function () {

//   //スクロールヒント
//   new ScrollHint('.js-scrollable', {
//     i18n: {
//       scrollable: 'スクロールできます'
//     }
//   });
// });

window.addEventListener('DOMContentLoaded', function () {
  new ScrollHint('.js-scrollable', {
    scrollHintIconAppendClass: 'scroll-hint-icon-white', // white-icon will appear
    i18n: {
      scrollable: 'スクロールできます'
    }
  });
});
