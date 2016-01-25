<style>
.banner{
  height:70px;
  width:100%;
  background: white;
  position:absolute;
  left:0;
  top:0;
  border-bottom: 1px solid #D3D3D3;
}
.nav-color{
  color: #868686 !important;
}
.options_row{
  /*padding-bottom: 5px;*/
}
.options{
  border-bottom: 1px solid #D3D3D3;
  padding: 7px 0 7px 0;
}
.options_left{
  float:left;
  margin-top: 5px;
}
.options_right{
  float:right;
  height:30px;
}
.status_bar{
  height:7px;
}
.option_title{
  font-size: 15px;

}
.myButton {
  background-color:#687C87;
  border-radius:26px;
  border:3px solid #687c87;
  display:inline-block;
  cursor:pointer;
  color:white !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:18px;
  font-weight:400;
  padding:10px 48px;
  text-decoration:none;
}
.myButton:hover {
  background-color:white;
  color: #687c87 !important;

}
.myButton:active {
  position:relative;
  top:1px;
}
.submit_button{
  display: block;
  text-align: center;
}
.round{
  border-radius: 50%;
  margin-top: 5px;
  height:20px;width:20px;
  display:inline-block;
    cursor:pointer;
}
</style>
<script>
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
  $("#type").selectmenu({
    width: 130,
    height:50
  });
  $("#type").on("selectmenuchange",function(event){
    moveInfo("type",event.target.value);
    makePrice(event.target.value);
  });
  $("#size").selectmenu({
    width: 80,
    height:50
  });
  $("#size").on("selectmenuchange",function(event){
    moveInfo("size",event.target.value);
  });
  $("#amount").spinner({min: 1}).spinner("value",1);
  $("#amount").on("spinchange",function(event){
    moveInfo("amount",event.target.value);
  });
  $("#amount").css("width","30px");
  $("div[name='color']").on("click",function(event){
    for(var i=1;i<7;i++){
    $("div[id='"+i+"']").css("border","none");
    }
    $("div[id='"+event.target.id+"']").css("border","3px solid red");
    moveInfo("color",event.target.id);
  });
  makePrice("default");
});
function moveInfo(dataType,data){
  $("input[name='"+dataType+"']").val(data);
}
function checkSubmit(){
  if($("input[name='type']").val()=="default"){
    alert("타입을 선택해주세요");
    return false;
  }
  if($("#color").length!=0){
    if($("input[name='color']").val()=="default"){
      alert('컬러를 선택해주세요');
      return false;
    }
  }
  if($("#size").length!=0){
    if($("input[name='size']").val()=="default"){
      alert("사이즈를 선택해주세요");
      return false;
    }
  }
  alert('장바구니에 상품이 들어갔습니다.');
  $("#formHidden").submit();
}
function makePrice(option){
  var init;
  var actual;
  switch($("#storeType").val()){
    case "1 ":
      init=30000;
      if(option=="2")actual=init+7000;
      else if(option=="3")actual=init+8000;
      else if(option=="4")actual=init+16000;
      else actual=init;
      $("#priceSpan").text(actual+"원");
    break;
    case "2 ":
      init=21000;
      actual=init;
      $("#priceSpan").text(actual+"원");
    break;
    case "3 ":
      init=19000;
      if(option=="2")actual=init+1000;
      else actual=init;
      $("#priceSpan").text(actual+"원");
    break;
  }
}
</script>
  <div class="banner">

  </div>
</div>

<?php
	$urlPath = "$_SERVER[REQUEST_URI]";
	$explodePath = explode('/', $urlPath);

	$numPath = $explodePath[3]; // 현재 URL 상품번호
  	$GlobalStoreName;
  	$GlobalUserName;
    $GlobalStoreType;
	foreach ($details->result() as $row)
	{
		if($row->store_id == $numPath){
			$storeImage = $row->store_image;
			$storeDay = $row->store_day;
			$storeGoal = $row->store_goal;
			$storeGoalNow = $row->store_goal_now;
			$userName = $row->user_name;
      		$GlobalUserName=$userName;
			$storeType = $row->store_type;
      		$GlobalStoreType=$storeType;
			$storeStatus = $row->store_status;
			$storeId = $row->store_id;
			$storeName = $row->store_name;
      		$GlobalStoreName=$storeName;
			$storePrice = $row->store_price;
			break;
		}
	}

	$percGoal = $storeGoalNow / $storeGoal * 100;

	//"앞으로 # 일 계산"
	$curDate = date('Y-m-d H:i:s');
	$dueDate = $storeDay;
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

	$PRICE =  number_format($storePrice, 0, '.', ','); // 가격 천 단위 콤마 넣어주기
?>



<input style="display:none;" type="text" id="storeType" value="<?echo $storeType?> ">
<div class="container" >
  <div class="row" style="padding-bottom:30px; border-bottom: 1px solid  #D3D3D3;">
    <p style="display:block; text-align:center; font-weight:bold; font-size:40px;"><?php echo $storeName;?></p>
    <p style="display:block; text-align:center; font-weight:regular; font-size:20px;">designed by. <?php echo $userName;?></p>

  </div>
</div>
<div class="container" style="margin-top:20px;">
  <div class="row row_padding-xs">
    <div class="col-md-8" style="">
		<img style="width:100%;" src="<?php echo $storeImage;?>" class="img img-responsive">
    </div>
    <div class="col-md-4" style="padding-left:20px; height:100%; ">
    <div class="row">
      <div class="col-xs-6 col-sm-12">
        <div class="col-xs-12">
          <span class="option_title">남은 일자</span>
        </div>
        <div class="col-xs-12">
          <span style="font-size:50px; font-weight:300; "><?php echo $remainDays;?></span>
          <?php if ($dayStatus == 1){
          	echo "<span>일</span>";
          }?>
        </div>
      </div>

      <div class="col-xs-6 col-sm-12">
        <div class="col-xs-12">
          <span class="option_title">모인 인원</span>
        </div>
        <div class="col-xs-12">
          <div style="display:inline-block; float:left;">
            <span style="font-size:50px; font-weight:300; "><?php echo $storeGoalNow;?></span>
            <span>명</span>
          </div>
          <div style="position: absolute; bottom: 12px; right: 15px; ">
            <span style="color:#687C87; font-weight:bold;"><?php echo ceil($percGoal);?>%</span>
          </div>
        </div>
    </div>
  </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );">
          </div>
      </div>
    </div>
      <div class="row options_row" style="margin-top:20px;" >
        <div class="col-xs-12">
          <div class="options">
            <span>OPTIONS</span>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">가격</span>
            <span class="options_right" style="margin-top:5px;height:25px;" id="priceSpan"></span>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>

      <!-- 옵션 3가지를 상품군 따라 다르게 표시 -->
      <?php
      // 여긴 의류
      if ($storeType == 1){
      echo '
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">타입</span>
            <div class="options_right">
              <select id="type">
                <option value="default">선택</option>
                <option value="1">맨투맨</option>
                <option value="2">후드</option>
  				<option value="3">맨투맨 (고급형)</option>
  				<option value="4">후드 (고급형)</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>

      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">컬러</span>
            <div id="color" class="options_right">
              
              <div name="color" id="2" class="round" style="background:#7b1719; "></div>
              <div name="color" id="3" class="round" style="background:#efeee9; "></div>
              <div name="color" id="4" class="round" style="background:#14130f; "></div>
  			  <div name="color" id="5" class="round" style="background:#bfc0c5; "></div>
  			  <div name="color" id="6" class="round" style="background:#1f233c; "></div>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>

      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">사이즈</span>
            <div class="options_right">
              <select id="size">
                <option value="default">선택</option>
                <option value="1">여성</option>
                <option value="2">남성</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      ';}

      // 여긴 에코백
      else if ($storeType == 2){
      	echo '
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">타입</span>
            <div class="options_right">
              <select id="type">
                <option value="default">선택</option>
                <option value="1">토트&크로스</option>
                <option value="2">크로스</option>
				<option value="3">토트(아이보리)</option>
				<option value="4">토트(카키)</option>
				<option value="5">토트(네이비)</option>
				<option value="6">토트(쁠랙)</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      ';}

      // 여긴 파우치
      else if ($storeType == 3){
      	echo '
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">타입</span>
            <div class="options_right">
              <select id="type">
                <option value="default">선택</option>
                <option value="1">중형</option>
                <option value="2">대형</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      ';}

      else {
      	echo 'Error';
      }
      ?>
      <!-- 옵션 3가지를 상품군 따라 다르게 표시 // 여기까지 -->

      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">수량</span>
            <span class="options_right">
              <input id="amount" name="amount">
            </span>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row" style="margin-top:20px;">
      <?php if ($dayStatus == 1)
      	echo '
        <div class="col-xs-12">
          <div class="submit_button"><a onclick="checkSubmit();"
  			class="myButton">구매하기</a></div>
        </div>'
        ?>
      </div>
    </div>
  </div>

  <div class="row row_padding-xs" style="margin-top:20px;">
    <div class="col-xs-12" style=" padding-left:0;  padding-right:0; padding-bottom:30px;border-bottom:1px solid #D3D3D3;">
      <span>share</span>
      <div></div>
    </div>
    <div class="col-xs-12" style=" padding-left:0;  padding-right:0; margin-top:30px;">
      <div style="width:100%; background:#F7F7F7; height:700px;">
        <span style="padding-top: 350px;display:block; text-align:center;">
          (제품 상세 이미지)
        </span>
      </div>
    </div>
  </div>
<div class="row row_padding-xs" style="margin-top:20px;">

</div>


</div>
<form id="formHidden" action="/store/func_toCart" method="post" style="display:none">
  <input type="text" name="type" value="default">
  <input type="text" name="color" value="default">
  <input type="text" name="size" value="default"> 
  <input type="text" name="amount" value="1">
  <input type="text" name="storeId" value="<?echo $numPath;?>">
  <input type="text" name="storeType" value="<?echo $GlobalStoreType;?>">
</form>
