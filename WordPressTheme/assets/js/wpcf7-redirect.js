"use strict";

document.addEventListener('wpcf7mailsent', function (event) {
  // フォーム送信完了後のリダイレクト先URL
  var redirectUrl = 'http://kuratch-club.local/thanks/';

  // リダイレクト処理
  window.location.href = redirectUrl;
}, false);