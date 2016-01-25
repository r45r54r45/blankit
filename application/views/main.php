<style>
  .main-page-navbar-right{
    color:white !important;
  }
  .banner{
    position: relative;
    -webkit-transform: rotate(-7deg);
    transform: rotate(-7deg);
    transform-origin: 0% 100%;
    overflow: hidden;
    -webkit-backface-visibility: hidden;
    background: #EAEAEA;
    z-index: 100;
  }
  .banner-wrap{
    position:relative;
  }
  .banner-roll{
    position: absolute;
    width:100px;
    height:10px;
    text-align: center;
    bottom: 30px;
    left:50%;
    margin-left:-50px;
  }
  .banner-roll-circle{
    border-radius:50%;
    border: 1px solid #EAEAEA;
    height:100%;
    width:10px;
    display:inline-block;
    cursor: pointer;
  }
  .image-in-banner{
    /*width:100%;*/
    /*transform: rotate(7deg);*/
    position: absolute;
    left:0px;
    top:0px;
    height:100%;
    -webkit-backface-visibility: hidden;
  }

  .view_more{
    float: right;
    border-bottom: 2px solid #687C87;
    text-align: left;
    margin-right: 5px;
    color:#687C87;
  }
  .col-md-five{
    width:19.6%;
    padding: 5px 5px;
    display: inline-block;
    vertical-align: top;
    /*background: black;
    height:400px;*/
  }
  .box{
    border: 1.5px solid #868686;
    overflow: hidden;
  }
  .radius-4{
    border-radius: 15px;
  }
  .status_bar{
    height:7px;
  }
  .img{
    width:100%;
  }

  .status_percent{
    font-weight: bold;
    color: #687C87;
    font-size: 10px;
    float:left;
    margin-left: 10px;
  }
  .status_day_word{
    font-weight: bold;
    color: #655453;
    font-size: 10px;
    float:right;
    margin-right:10px;
  }
  .status_day{
    font-weight: bold;
    color: #687C87;
    font-size: 10px;
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
  .box:hover{
    background: #96AFB5;
  }
  .box:hover p{
    color: white;
  }
  .myButton {
  	background-color:transparent;
  	-moz-border-radius:20px;
  	-webkit-border-radius:20px;
  	border-radius:20px;
  	border:3px solid #687c87;
  	display:inline-block;
  	cursor:pointer;
  	color:#687c87;
  	font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  	font-size:16px;
  	font-weight:bold;
  	padding:6px 48px;
  	text-decoration:none;
  }
  .myButton:hover {
  	background-color:#687c87;
  	color: white !important;
  	text-decoration: none;
  }
  .myButton:active {
  	position:relative;
  	top:1px;
  }
  .submit_button{
    display: block;
    text-align: center;
  }
  .img_hover_cover{
     z-index: 100;
     background: #96AFB5;
     width:100%;
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
.YourButton{
  border: 2px solid white;
  color:white;

  }
  .YourButton:hover{
    border: 2px solid white;
    font-size: 14px;
    border-radius:16px;
    color:black;
    font-weight:bold;
    background: white;
    padding:3px 10px;
  }
</style>
<script>
function slanted_banner_generator(){
  var width = document.documentElement.clientWidth;
  var height=$(window).height()*0.8;
  var angle=7*Math.PI/180;
  var banner_height=height*Math.cos(angle);
  var banner_width=$(window).width()*Math.cos(angle)+height*Math.sin(angle);
  $(".banner").css("left","0px");
  $(".banner").css("top","0px");
  $(".banner").css("width",banner_width+"px");
  $(".banner").css("height",banner_height+"px");
  $(".banner-wrap").css("height",banner_height-50+"px");

  $("#banner_cut").css("width",width+"px");
  $("#banner_cut").css("height",$(window).height()*0.8+"px");
  $(".image-in-banner").css("min-height",$(window).height()+"px");
  $("#banner_1").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
  $("#banner_2").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
  $("#banner_3").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
}
$(function(){
  $(".banner").css("display","none");
  slanted_banner_generator();
  $( "#banner_3" ).load(function() {
    slanted_banner_generator();
  });
  $(".banner").css("display","");
  $(".banner").hover(function(){
    // $(".banner").css("background","red");
    //배너에 마우스 오버시 배너 바꾸는 화살표 필요
  });
   $('.bxslider').bxSlider({
     slideMargin:50,
     adaptiveHeight:true,
     infiniteLoop:false,
     controls:false
   });
   bannerAnimation();

});
var bannerNum=0;
var bannerMax=3;
var zindex=1;
function bannerAnimation(){
bannerBeforeSelector().animate({
  opacity:0
},{duration:4000});
bannerSelector().css("z-index",++zindex).animate({
  opacity:1
},{duration:4000,
 complete: function() {
   $(".banner-roll-circle").css("background","none");
   $("#banner-roll-circle-"+bannerNum).css("background","#687C87");
   bannerAnimation();
 }
});

}
function bannerSelector(){
  bannerNum++;
  if(bannerNum>bannerMax)bannerNum=1;
  return $("#banner_"+bannerNum);
}
function bannerBeforeSelector(){
  return $("#banner_"+bannerNum);
}
$(window).on("load",function(){
  slanted_banner_generator();
});
$(window).resize(function(){
  slanted_banner_generator();
});
</script>
<div id="banner_cut" style="left:0;top:0;position:absolute;  overflow:hidden;">
<div class="banner">
  <div id="banner_0"></div>
   <img id="banner_1" style="z-index:0; opacity:1;" class="image-in-banner" src="/source/image/main-banner-image1.gif">
  <img id="banner_2" style="z-index:0; opacity:0;" class="image-in-banner" src="/source/image/main-banner-image2.gif">
    <img id="banner_3" style="z-index:0; opacity:0;" class="image-in-banner" src="/source/image/main-banner-image3.gif">

</div>
</div>
<div class="banner-wrap ">
<div class="banner-roll">
  <div id="banner-roll-circle-1"  class="banner-roll-circle"></div>
  <div id="banner-roll-circle-2"  class="banner-roll-circle" style="background:#687C87;"></div>
  <div id="banner-roll-circle-3"  class="banner-roll-circle"></div>
</div>
</div>
<div class="row" style="margin-top:20px;">
  <div class="col-md-12">
  <p class="row_title">STORE</p>
  <p class="row_desc">오로지 블랭킷에서만, 오로지 이 기간 동안에만 만나볼 수 있는<br>
독립 아티스트들의 아트워크를 확인해 보세요.</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="view_more"><a href="/store">view more</a></div>
  </div>
</div>
<!-- 모바일 시작 -->
<div class="row hidden-md hidden-lg">
  <div class="col-xs-12" style="margin-top:20px;">
    <ul class="bxslider">
      <?php

      	foreach ($mdpick->result() as $row)
      	{
	        $totalGoal = $row->store_goal;
	        $nowGoal = $row->store_goal_now;
	        $percGoal = $nowGoal / $totalGoal * 100;
	        
	        //"앞으로 # 일 계산"
	        $curDate = date('Y-m-d H:i:s');
	        $dueDate = $row->store_day;
	        $curDateNum = strtotime($curDate);
	        $dueDateNum = strtotime($dueDate);
	        $remainSecs = $dueDateNum - $curDateNum;
	        $remainDays = $remainSecs / 86400;
	        if($remainDays<=0){
	        	$remainDays = "마감";
	        	$dayStatus = 0;
	        }
	        else{
	        	$remainDays=floor($remainDays);
	        	$dayStatus = 1;
	        }
	        //여기까지 "앞으로 # 일 계산"
      ?>
      <li>
    <div class=" radius-4">
    <div><a href="/store/product/<?php echo $row->store_id?>">
      <img src="<?php echo $row->store_image;?>" class="img_rounded">
    </a></div>
    <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"></div>
    <div class="artist_hover" style="padding-top:7px;">
      <span class="status_percent"><?php echo ceil($percGoal) . "%";?></span>
      <span class="status_day_word"><?php if ($dayStatus == 1) echo "앞으로";?> <span class="status_day">
           	<?php
      			echo $remainDays;
      		?>
      </span><?php if ($dayStatus == 1) echo "일";?></span>
    </div>
    <div class="artist_hover" style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="<?php echo $row->artist_profile;?>" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:15px;">
        <p class="artist_name"><?php echo $row->user_name;?></p>
        <p class="artist_type"><?php echo $row->artist_type;?></p>
      </div>
    </div>
  </div>
</li>
<?php }?>
</ul>
</div>
</div>

<!-- 모바일 종료 -->
<!-- 데스크탑 시작 -->


<div class="row hidden-sm hidden-xs" style="margin-top:20px;">

<?php

	foreach ($mdpick->result() as $row)
	{
		$totalGoal = $row->store_goal;
		$nowGoal = $row->store_goal_now;
		$percGoal = $nowGoal / $totalGoal * 100;
		//"앞으로 # 일 계산"
		$curDate = date('Y-m-d H:i:s');
		$dueDate = $row->store_day;
		$curDateNum = strtotime($curDate);
		$dueDateNum = strtotime($dueDate);
		$remainSecs = $dueDateNum - $curDateNum;
		$remainDays = $remainSecs / 86400;
		if($remainDays<=0){
			$remainDays = "마감";
			$dayStatus = 0;
		}
		else{
			$remainDays=floor($remainDays);
			$dayStatus = 1;
		}
		//여기까지 "앞으로 # 일 계산"
?>


  <div class="col-md-five">
    <div class="box radius-4">
    <div><a href="/store/product/<?php echo $row->store_id?>">
      <img src="<?php echo $row->store_image;?>" class="img_rounded">
    </a></div>
    <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"> </div>
    <div class="artist_hover" style="padding-top:7px;">
      <span class="status_percent">
      	<?php
      		echo ceil($percGoal) . "%";
      	?>
      </span>
      <span class="status_day_word"><?php if ($dayStatus == 1) echo "앞으로";?> <span class="status_day">
      	<?php
      		echo $remainDays;
      	?>
      </span><?php if ($dayStatus == 1) echo "일";?></span>
    </div>
    <div class="artist_hover" style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="<?php echo $row->artist_profile;?>" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name"><?php echo $row->user_name;?></p>
        <p class="artist_type"><?php echo $row->artist_type;?></p>
      </div>
    </div>
  </div>
</div>

<?php }?>

</div>
</div>
<!-- 데스크탑 종료 -->



<div class="container-fluid">
<div class="row" style="margin-top: 40px;">
  <div class="row-md-12" style="background: #F5F6F7; padding:30px 5px 40px 5px;">
    <p class="gal" style="font-size:21px; font-weight:bold; text-align:center; margin-top:15px; margin-bottom:15px;">당신도 함께해주세요!</p>
    <p class="gal" style="font-size:13px; font-weight:regular; text-align:center; margin-bottom:15px; ">포트폴리오에 묵혀둔 작품이 있나요?<br class="visible-xs"> 제작비용 0원에 당신만의 제품을 선보이세요.<br>
블랭킷은 신진 아티스트를 응원합니다.</p>
    <div class="submit_button"><a href="/submit" class="myButton" style="padding: 8px 35px; color:#687C87;">내 작품 판매하기</a></div>

  </div>
</div>
</div>
<div class="container">
  <div class="row" style="margin-top:40px;">
    <div class="col-md-12">
    <p class="row_title">ARTIST</p>
    <p class="row_desc">블랭킷에서 활동 중인 신진 아티스트들입니다.<br>
그들의 특별한 작품들을 확인해 보세요.</p>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="view_more"><a href="/artist">view more</a></div>
    </div>
  </div>

  <div class="row" style="margin-top:30px;">
    <?
    $num=0;
    foreach ($artist_list->result() as $row)
    {
      $num++;
      if($num<4){
    ?>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
      <div class="img_hover_cover img-circle">
        <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
      </div>
      <div style="text-align:center; margin-top:10px;">
        <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
        <p class="artist_type"><? echo $row->artist_type;?></p>
      </div>
    </div>
    <? }
    if($num==4){
  ?>
  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
    <div class="img_hover_cover img-circle">
      <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
    </div>
    <div style="text-align:center; margin-top:10px;">
      <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
      <p class="artist_type"><? echo $row->artist_type;?></p>
    </div>
  </div>
  <? }
  if($num==5){
?>
<div class="col-xs-6 col-sm-4 hidden-md col-lg-15">
  <div class="img_hover_cover img-circle">
    <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
  </div>
  <div style="text-align:center; margin-top:10px;">
    <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
    <p class="artist_type"><? echo $row->artist_type;?></p>
  </div>
</div>
<? }
if($num==6){
?>
<div class="col-xs-6 col-sm-4 hidden-md hidden-lg">
<div class="img_hover_cover img-circle">
  <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
</div>
<div style="text-align:center; margin-top:10px;">
  <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
  <p class="artist_type"><? echo $row->artist_type;?></p>
</div>
</div>
<? }
        } ?>
  </div>

  </div>
  <div class="container-fluid hidden-xs hidden-sm" style="padding:0px; margin-top:45px;">
    <img src="/source/image/main_guide.png" class="img img-responsive">
  </div>

  <!-- footer 시작 -->
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style=" background: black; height:250px;">

    </div>
  </div>
  </div>
  </div>
  </body>
  </html>
