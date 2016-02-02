<style>


.arrow{
  padding: 0 30px 0 30px;
  margin:0 auto; display:block;
}
.download_cover{
  background-image: url("/source/image/download_hover.png");
  z-index: 100;
background-size: contain;
 background-position:15px;
 background-repeat: no-repeat;
}
 .download_img{
     z-index: 50;
   opacity:1;
 }
.download_cover:hover .download_img{
     z-index: 50;
  opacity:0.5;
}
.banner{
  width:100%;
  height:300px;
  position:absolute;
  left:0;
  top:0;
  overflow:hidden;
}
.banner>img{
  min-height: 300px;
}
.navbar-right{
  color:white !important;
}
.YourButton{
      border: 2px solid white;
          color: white;
}
</style>
<script>
function banner_generator(){
  var width = document.documentElement.clientWidth;
  $(".banner>img").css("margin-left","-"+($(".banner>img").width()-width)/2+"px");
}
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
  banner_generator();
  $(window).on("resize",function(){
      $("#root_container").css("height",$(".banner").height()+"px");
      banner_generator();
  });
});
</script>
  <div class="banner">
    <img src="/source/image/submit-page-banner.jpg">
    <div class="banner-text">
    <p>혼자 간직해온 작품이 있나요?</p>
    <p>제작비용 0원에 당신만의 제품을 선보이세요.</p>
    </div>
  </div>
</div>
<div class="container" >
  <div class="row">
      <div class="col-xs-12" style="margin-top:30px; ">
        <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
          업로드가 완료되었습니다.
        </span>
      </div>
      <div class="col-xs-12" style="margin-top:30px; ">
        <span style="margin-top:10px; text-align:center; display:block; font-size: 18px; color:#655453; font-weight:400;">
          아티스트는 페이스북에 블랭킷과의 콜라보레이션 사실을 공유해주셔야 할 의무가 있습니다.<br>
          펀딩 기간 종료시까지 기재해주셔야 하며, 미실시 및 펀딩 기간 내에 삭제시 페널티가 있습니다.
        </span>
      </div>
  </div>

  <div class="row">
      <div class="col-xs-12" style="margin-top:30px; border-top: 1px solid #D3D3D3;">
        <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
          친구들에게 자랑하기
        </span>
      </div>
      <?php
      $itemNum = $_GET['id'];
      echo "
      <script>
      function facebook_for_artist(){
        FB.ui({
          method: 'share',
          href: 'http://blankit.kr/submit/complete/?id=" . $itemNum . "',
        }, function(response){});
      }
      </script> ";
      ?>
      <div class="col-xs-12" style="margin-top:30px; ">

        <div class="col-xs-12">
          <a onclick="facebook_for_artist()" style="cursor:pointer;">
          <img src="/source/image/fb_artist.png" class="img img-responsive" style="margin:0 auto;">
              </a>
        </div>
      </div>

  </div>
  </div>
</div>
