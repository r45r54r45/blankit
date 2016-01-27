$(function(){
  $("body").css("display","");

  $("#store_menu").click(function(){
    location.href="/funding";
  });
  $("#aboutus_menu").click(function(){
    location.href="/aboutus";
  });
  var sideslider = $('[data-toggle=collapse-side]');
  var sel = sideslider.attr('data-target');
  var sel2 = sideslider.attr('data-target-2');
  sideslider.click(function(event){
    $(sel).toggleClass('in');
    $(sel2).toggleClass('out');
  });
  // $.ajaxSetup({ cache: true });
  // $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
  //   FB.init({
  //     appId: '214340015575657',
  //     version: 'v2.5' // or v2.0, v2.1, v2.2, v2.3
  //   });
  //   $('#loginbutton,#feedbutton').removeAttr('disabled');
  //   FB.getLoginStatus(updateStatusCallback);
  // });
});
window.fbAsyncInit = function() {
  FB.init({
    appId      : '214340015575657',
    xfbml      : true,
    version    : 'v2.5'
  });
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));

function setCookie(cookieName, value, exdays){
  var exdate = new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var cookieValue = escape(value) + ((exdays==null) ? "" : "; expires=" + exdate.toGMTString());
  document.cookie = cookieName + "=" + cookieValue;
}

function deleteCookie(cookieName){
  var expireDate = new Date();
  expireDate.setDate(expireDate.getDate() - 1);
  document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
}

function getCookie(cookieName) {
  cookieName = cookieName + '=';
  var cookieData = document.cookie;
  var start = cookieData.indexOf(cookieName);
  var cookieValue = '';
  if(start != -1){
    start += cookieName.length;
    var end = cookieData.indexOf(';', start);
    if(end == -1)end = cookieData.length;
    cookieValue = cookieData.substring(start, end);
  }
  return unescape(cookieValue);
}
