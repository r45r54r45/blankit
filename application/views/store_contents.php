<style>


.menu{
  width:320px;
  height:100%;
  position: absolute;
  left:50%;
  bottom:0;
  margin-left: -160px;

  background: white;
}
.menu_item{
  font-weight: bold;
  color: #868686;
  text-align: center;
  display: inline-block;
  width:18%;
  height:100%;
  cursor: pointer;
}
.menu_item:hover{
  color: #96AFB5;
  border-bottom:2px solid #96AFB5;
}

.radius-4{
  border-radius: 15px;
}
.status_bar{
  height:7px;
  background: linear-gradient(to right, #687C87 70%,#D3D3D3 70% );
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

.box:hover{
  background: #96AFB5;
}
.box:hover p{
  color: white;
}
.col-xs-6{
  padding:10px 5px 0 5px;
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
  <div class="row">
<!-- 컨텐츠 반복시작 -->

<?php
	//아래는 현재 URL 확인용 continue
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'cloth') !== false) {
		$urlNum = 1;
	} else if(strpos($url,'ecobag') !== false) {
		$urlNum = 2;
	} else if(strpos($url,'pouch') !== false){
		$urlNum = 3;
	} else if(strpos($url,'done') !== false){
		$urlNum = 4;
	}
	  else {
		$urlNum = 0;
	}
	//url 확인 여기까지

	foreach ($contents->result() as $row)
	{

		$storeType = $row->store_type;
	
		//현재 URL에 맞는 타입이 아니면 패쓰
		if ($urlNum == 4){
			if ($row->store_status == 3){
				
			}
			else{
				continue;
			}
		}
		
		if ($urlNum == 0){
	
		} else if ($storeType == $urlNum){
			if ($row->store_status == 3){
				continue;
			}
		} else if ($urlNum == 4 && $row->store_status == 3){
			
		} else {
			continue;
		}
	
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

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
      <div class="box radius-4">
      <div><a href="/store/product/<?php echo $row->store_id?>">
      	<img src="<?php echo $row->store_image;?>" class="img_rounded">
      </a></div>
      <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"></div>
      <div class="artist_hover" style="padding-top:7px;">
        <span class="status_percent"><?php echo ceil($percGoal);?>%</span>
        <span class="status_day_word"><?php if ($dayStatus == 1) echo "앞으로";?> <span class="status_day"><?php echo $remainDays;?></span><?php if ($dayStatus == 1) echo "일";?></span>
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
  <!-- <div class="clearfix visible-xs-block visible-sm-block visible-md-block"></div> -->
<?php }?>

<!-- 컨텐츠 반복 끝 -->
</div>
</div>
