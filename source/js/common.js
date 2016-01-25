$(function(){
  $("body").css("display","");

  $("#store_menu").click(function(){
    location.href="/store";
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
});

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
