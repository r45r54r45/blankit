<style>

.img_hover_cover{
   z-index: 100;
   border-radius: 50%;
   overflow: hidden;
   background: #96AFB5;
   width:100%;
     box-shadow: 0 2px 20px -2px rgba(0, 0, 0, .52);
}
.img_hover {
  z-index: 50;
  width: 100%;
  opacity: 1;
}
.img_hover:hover{
  z-index: 50;
  width: 100%;
  opacity: 0.5;

}
.artist_name{
  margin-bottom:5px;
  font-size: 10px;
  font-weight:bold;
}
.artist_type{
  margin-bottom:5px;
  font-size: 10px;
  font-weight:regular;
}
.img{
  width:100%;
}
/*.img-circle{
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}*/
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
  $(".bg").css("height",$(".bg").width()+"px");
  $(window).on("resize",function(){
    $(".bg").css("height",$(".bg").width()+"px");
  });
});
</script>
  <div class="banner">
    <img src="/source/image/artist-page-banner.jpg">
    <div class="banner-text">
    <p>혼자 간직해온 작품이 있나요?</p>
    <p>제작비용 0원에 당신만의 제품을 선보이세요.</p>
    </div>
  </div>
</div>





<div class="container" >
  <div class="row" style="margin-top:40px;">
    <div class="col-md-12">
    <p class="row_title">ARTIST</p>
    <p class="row_desc">블랭킷에서는 누구나 아티스트입니다</p>
    </div>
  </div>
    <!-- 컨텐츠 시작-->
  <div class="row">
    <?
    foreach ($artist_list->result() as $row)
  	{
  		/** 작가 프로필 없을 시 스킵하기 **/
  		if($row->artist_profile == NULL){
  			continue;
  		}
    ?>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
      <div class="img_hover_cover  bg ">
        <img src="<?echo $row->artist_profile;?>" class="img img_hover ">
      </div>
      <div style="text-align:center; margin-top:10px;">
        <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
        <p class="artist_type"><? if($row->artist_type=="") {echo "-";} else echo $row->artist_type; ?></p>
      </div>
    </div>
    <? } ?>
  </div>
  <!-- 컨텐츠 끝 -->

</div>
