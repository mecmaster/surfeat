(function () {
  var w = window, d = document;
  w.admixZArr = (w.admixZArr || []);
  w.admixerSmOptions = (w.admixerSmOptions || {});
  w.admixerSmOptions.showAdsOnLoad = true;
  if (!w.admixerSm) {
      var adms = document.createElement('script');
      adms.async = true;
      adms.type = 'text/javascript';
      adms.src = 'http://cdn.admixer.net/scriptlib/asm2.js?v=3';
      var node = d.getElementsByTagName('script')[0];
      node.parentNode.insertBefore(adms, node);
  }
})();