<style>
.banner{
  height:50px;
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
    $("div[id='"+event.target.id+"']").css("border","3px solid skyblue");
    moveInfo("color",event.target.id);
  });
  makePrice("default");
  $("#hello").css("width",$("#wrap").width()-105+"px");
  $(window).on("resize",function(){
    $("#hello").css("width",$("#wrap").width()-105+"px");
  });
});
function moveInfo(dataType,data){
  $("input[name='"+dataType+"']").val(data);
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

<?php
if ($session_id){

  echo "
  <script>
  function checkSubmit(){
    if($(\"input[name='type']\").val()==\"default\"){
      alert(\"타입을 선택해주세요\");
      return false;
    }
    if($(\"#color\").length!=0){
      if($(\"input[name='color']\").val()==\"default\"){
        alert('컬러를 선택해주세요');
        return false;
      }
    }
    if($(\"#size\").length!=0){
      if($(\"input[name='size']\").val()==\"default\"){
        alert(\"사이즈를 선택해주세요\");
        return false;
      }
    }
    alert('장바구니에 상품이 들어갔습니다.');
    $(\"#formHidden\").submit();
  }
  </script>
  ";
}

else {
  echo "
  <script>
  function checkSubmit(){
    alert('로그인 하셔야 합니다.');
  }
  </script>
  ";
}
?>

<div class="banner">

</div>
</div>

<?php
/* 	$urlPath = "$_SERVER[REQUEST_URI]";
$explodePath = explode('/', $urlPath);

$numPath = $explodePath[3]; // 현재 URL 상품번호

/*** 물음표 제거기 **
$testQ = explode('?', $numPath);
$numPath = $testQ[0]; */

$numPath =  $this->uri->segment(3);

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

    $SELLER = $row->SELLER;
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


$itemPos;
$itemBed;
switch ($GlobalStoreType) {
  case '1':
    $itemPos="left:37%;top:35%;width:23.066666666666666%;height:20.333333333333332%;";
    $itemBed="/source/product/M_1_2_bed.jpg";
  break;
  case '2':
    $itemPos="left:35.4%;top:46.100000000000006%;width:29.333333333333332%;height:39.93333333333333%;";
    $itemBed="/source/product/E_1_1_bed.jpg";
  break;
  case '3':
    $itemPos="left:23.799999999999997%;top:28.799999999999997%;width:52.56666666666666%;height:42.86666666666667%;";
    $itemBed="/source/product/P_1_bed.jpg";
  break;

}
?>



<input style="display:none;" type="text" id="storeType" value="<?echo $storeType?> ">
<div class="container" >
  <div class="row" style="margin-top:20px;padding-bottom:30px; border-bottom: 1px solid  #D3D3D3;">
    <p style="display:block; text-align:center; font-weight:bold; font-size:40px;padding-top:20px;"><?php echo $storeName;?></p>
    <p style="display:block; text-align:center; font-weight:regular; font-size:20px;">designed by. <?php echo $userName;?></p>

  </div>
</div>
<div class="container sr-only" style="margin-top:20px;">
  <div class="row row_padding-xs">
    <div class="col-md-8" style="">
      <div class="product_area ">
          <image class="product_bed img_rounded img-responsive" src="<?echo $itemBed?>">
          <div class="product" style="<?echo $itemPos;?>">
            <img src="<?php echo $storeImage;?>" class="img img-responsive">
          </div>
        </div>
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
          <option value="3">숄더(아이보리)</option>
          <option value="4">숄더(카키)</option>
          <option value="5">숄더(네이비)</option>
          <option value="6">숄더(블랙)</option>
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
              <?php
              	if ($dayStatus == 1){
	              echo '
	              <div class="col-xs-12" style="margin-bottom:10px;">
	              <div class="submit_button"><a onclick="checkSubmit();"
	              class="myButton">구매하기</a></div>
	              </div>';
	              if($storeGoalNow == 0 && $session_id == $SELLER){
	              	//구매자가 없을 때 해당 작가가 아직 수정은 가능하게
	              	echo '
		            <div class="col-xs-12">
		            <div class="submit_button"><a onclick="location.href=\'/help/cs?productID=' . $storeId . '\'"
		            class="myButton">수정/삭제</a></div>
		            </div>';
	              }
              	}

              ?>
            </div>
          </div>
        </div>


        <form id="formHidden" action="/funding/func_toCart" method="post" style="display:none">
          <input type="text" name="type" value="default">
          <input type="text" name="color" value="default">
          <input type="text" name="size" value="default">
          <input type="text" name="amount" value="1">
          <input type="text" name="storeId" value="<?echo $numPath;?>">
          <input type="text" name="storeType" value="<?echo $GlobalStoreType;?>">
        </form>
        <?php
        //$this->load->helper('url');
        /* $URL =  $_SERVER['SERVER_NAME'];
        $URI = $_SERVER['REQUEST_URI'];

        $facebookURL = $URL . $URI; */
		$facebookURL = $this->uri->segment(3);

        echo "
        <script>
        function facebook_for_artist(){
          FB.ui({
            method: 'share',
            href: 'http://blankit.kr/funding/product/" . $facebookURL . "',
          }, function(response){});
          }
          </script> ";
        ?>
          <div class="row row_padding-xs" style="margin-top:20px;">
            <div class="col-xs-12 col-sm-6 visible-xs" style="border-bottom: 1px solid #D3D3D3;
            padding-bottom: 20px;">
            <a onclick="facebook_for_artist()" style="cursor:pointer;">
              <img src="/source/image/fb_user.png" class="img img-responsive" style="margin:0 auto;">
            </div>
          </a>
        </div>
        <?php
        foreach ($contents->result() as $row){
          if ($numPath == $row->store_id){
            $artistType = $row->artist_type;
            $artistIntro = $row->artist_intro;
            $artistProfile = $row->artist_profile;
          }
        }

        ?>
        <div style="border-bottom: 1px solid #D3D3D3;">
          <div id="wrap" class="col-xs-12 col-sm-8" style="
          padding-bottom: 20px;
          padding-top: 20px;">
          <div style="display:inline-block;">
            <img src="<?php echo $artistProfile;?>" class="pp img img-circle img-responsive"
            style="width:100px;">
          </div>
          <div id="hello" style="padding-left: 20px;display:inline-block;vertical-align: top;padding-top: 10px;">
            <div >
              <span style="font-size:16px; font-weight:400;"><?php echo $userName;?> (<?php echo $artistType;?>)</span>
            </div>
            <div>
              <span style="font-size:13px; font-weight:300;"><?php $lineArtistIntro = str_replace(" ","\n",$artistIntro); echo $lineArtistIntro;?></span>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 hidden-xs" style="
        padding-bottom: 20px;
        padding-top: 20px;">
        <a onclick="facebook_for_artist()" style="cursor:pointer;">
          <img src="/source/image/fb_user.png" class="img img-responsive" style="margin:0 auto;">
        </div>
      </a>
    </div>
    <div class="clearfix"></div>
  </div>
