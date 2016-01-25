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
    <p>포트폴리오에 묵혀둔 작품이 있나요?</p>
    <p>제작비용 0원에 당신만의 제품을 선보이세요.</p>
    <p>블랭킷은 신진 아티스트를 응원합니다.</p>
    </div>
  </div>
</div>
<div class="container" >
  <div class="row">
      <div class="col-xs-1">
      </div>
    <div class="col-xs-10">
      <img src="/source/image/submit_guide.png" class="img img-responsive">
    </div>
    <div class="col-xs-1">
    </div>
  </div>
  <div class="row">
      <div class="col-xs-12" style="margin-top:30px; border-top: 1px solid #D3D3D3;">
        <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
          작업 파일 다운로드
        </span>
      </div>
  </div>
  <div class="row hidden-sm hidden-md hidden-lg" style="margin-top:30px; margin-bottom:30px; ">
    <span style="display:block; text-align:center;">작업 파일 다운로드는 PC에서만 제공합니다.</span>
  </div>
  <div class="row hidden-xs" style="margin-top:30px; margin-bottom:30px; ">
    <div class="col-xs-2">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="">
        <img src="/source/image/download_1.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="">
      <img src="/source/image/download_2.png" class="download_img img img-responsive">
    </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="">
      <img src="/source/image/download_3.png" class="download_img img img-responsive">
    </a>
    </div>
    <div class="col-xs-2">
    </div>
  </div>
  <div class="row">
      <div class="col-xs-12" style="margin-top:30px; border-top: 1px solid #D3D3D3;">
        <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
          제품 파일 업로드
        </span>
      </div>
  </div>
</div>
