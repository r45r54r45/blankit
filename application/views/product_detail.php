<style>
.t1-gal{
  font-size: 25px;
  color:#655453;
  text-align: center;
  font-weight: 500;
}
.t1-grey{
  font-size: 15px;
  color:#868686;
  text-align: center;
  font-weight: 500;
}
.t2{
  font-size: 12px;
  color:#676464;
  text-align: center;
  font-weight: 300;
  margin-top: 15px;
}
.product_area{
  height:auto;
  position: relative;
}
@media (max-width: 768px) {
  .artwork{
    width:90%;
    margin:0 auto;
  }
}
@media (min-width: 768px) {
  .artwork{
    width:70%;
    margin:0 auto;
  }
}
.product_bed{
  position: relative;
  left:0;
  top:0;
  z-index: 1;
  width: 100%;
}
.product{
  position: absolute;
  z-index:2;
  }
  .menu{
    width:360px;
    height:100%;
    position: absolute;
    left:50%;
    bottom:0;
    margin-left: -180px;
    background: transparent;
  }
  .menu_item{
    font-weight: bold;
    color: #868686;
    text-align: center;
    display: inline-block;
    height:100%;
    cursor: pointer;
    vertical-align: middle;
    line-height: 40px;
  }
  .menu_item:hover{
    color: #96AFB5;
    border-bottom:2px solid #96AFB5;
  }
</style>
  <?php
  //-----------진우파트 시작--------------
  //$curPage =  $this->uri->segment(3); //현재 아이템 번호 & ?
  $urlPath = "$_SERVER[REQUEST_URI]";
  $explodePath = explode('/', $urlPath);
  $curPage = $explodePath[3];
  /*** 물음표 제거기 ***/
  $testQ = explode('?', $curPage);
  $nowPage = $testQ[0]; //현재 아이템 번호
  $itemNum = $nowPage; //작품의 고유번호 넣어주삼. 작품 이미지 주소 가져오는데 사용

  if ($curPage == $nowPage){
	  foreach ($contents->result() as $row){
	  	if ($row->store_id == $curPage){
	  		$itemTypeRecog = $row->store_type;
	  		switch ($itemTypeRecog){
	  			case 1:
	  				$itemType="M_1";
	  				break;
	  			case 2:
	  				$itemType="E_1";
	  				break;
	  			case 3:
	  				$itemType="P_1";
	  				break;
	  		}
	  		//echo "I was here at 1";
	  		break;
	  	}
	  }
  }
  else { //물음표가 있을 시
  	$itemType = $testQ[1];
  	//echo "I was here at 2";
  }

  //-----------진우파트 끝--------------


  $itemPos; //아이템이 삽입될 위치
  $itemSizeImg; //제품 사이즈 이미지 주소
  $itemBed=array(); //배경으로 쓰일 제품 이미지 목록
  $itemDetail; //제품 설명 이미지
  switch ($itemType){
    case "E_1": //에코백 E_1_1(블랙) E_1_2(카키) E_1_3(네이비)
      $itemPos="left:35.4%;top:46.100000000000006%;width:29.333333333333332%;height:39.93333333333333%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_2": //에코백-숄더 //숄더-아이보리가 이거임
      $itemPos="left:34.599999999999994%;top:46.1%;width:31.1%;height:42.199999999999996%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_3": //에코백-토트/크로스
      $itemPos="left:35.4%;top:49.6%;width:28.9%;height:39.36666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_4": //에코백 크로스형
      $itemPos="left:37.6%;top:57.199999999999996%;width:25.466666666666665%;height:34.66666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "P_1": //파우치
      $itemPos="left:23.799999999999997%;top:28.799999999999997%;width:52.56666666666666%;height:42.86666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "H_1": //후드 H_1_1(아이보리) H_1_2(네이비) H_1_3(블랙) H_1_4(그레이) H_1_5(레드) H_1_detail(클릭시)
      $itemPos="left:38%;top:40.2%;width:20.96666666666667%;height:18.46666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_4"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "M_1": //맨투맨 M_1_1(아이보리) M_1_2(블랙) M_1_3 (네이비) M_1_4(그레이) M_1_5(레드) M_1_detail(클릭시)
      $itemPos="left:37%;top:35%;width:23.066666666666666%;height:20.333333333333332%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_4"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
  }

  ?>


  <?
	foreach($contents->result() as $row){
		if ($row->store_id == $nowPage){
			$storeName = $row->store_name;
			$storeExplain = $row->store_explain;
			$itemImage = $row->store_image;
			break;
		}
	}
?>

<!-- 제품에 들어간 작품 부분 시작-->
<div class="container">
<div class="row row_padding-xs"  style="margin-top:40px;">
  <div class="col-xs-12" style="padding-bottom:40px;" >
  <div class="artwork">
    <img style="margin: 0 auto;" src="<?echo $itemImage;?>" class="img thumbnail img-responsive" >
  </div>
  </div>
  <div class="col-xs-12" style="margin-top:40px;" >
    <span style="margin:0 auto; display:table;">작 품 해 설</span>
  </div>
  <div class="col-xs-12" style="margin-top:20px;" >
    <span style="margin:0 auto; width:30px; display:table; border-bottom:2px solid #D3D3D3;">    </span>
  </div>
  <div class="col-xs-12" style="margin-top:20px;border-bottom: 1px solid #D3D3D3;
    padding-bottom: 30px;" >
  <div class="t2">
    <?echo $storeExplain;?>
  </div>
</div>
<div class="col-xs-12" style="margin-top:40px;" >
  <span style="margin:0 auto; display:table;">작 가 소 개</span>
</div>
<div class="col-xs-12" style="margin-top:20px;" >
  <span style="margin:0 auto; width:30px; display:table; border-bottom:2px solid #D3D3D3;"></span>
</div>
<?php
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
foreach ($contents->result() as $row){
  if ($numPath == $row->store_id){
    $artistType = $row->artist_type;
    $artistIntro = $row->artist_intro;
    $artistProfile = $row->artist_profile;
  }
}

?>
<div class="col-xs-12" style="margin-top:30px;" >
  <div style="display:inline-block; width:30%;">
    <div><img src="<?php echo $artistProfile;?>" class="pp img img-circle img-responsive"></div>
    <div>  <a onclick="facebook_for_artist()" style="cursor:pointer;">
        <img src="/source/image/fb_user.png" class="img img-responsive" style="margin:0 auto;">
      </div>
    </a></div>
  </div>
  <div style="display:inline-block; width:70%;">
    <div >
      <span style="font-size:16px; font-weight:400;"><?php echo $userName;?> (<?php echo $artistType;?>)</span>
    </div>
    <div>
      <span style="font-size:13px; font-weight:300;"><?php $lineArtistIntro = str_replace(" ","\n",$artistIntro); echo $lineArtistIntro;?></span>
    </div>
    <div>
      <div style="display:inline-block; width:20%;height:50px;"></div>
      <div style="display:inline-block; width:20%;height:50px;"></div>
      <div style="display:inline-block; width:20%;height:50px;"></div>
      <div style="display:inline-block; width:20%;height:50px;"></div>
    </div>
  </div>
</div>

</div>
<!-- 제품에 들어간 작품부분 끝 -->
<!-- style="border-bottom:2px solid #96AFB5; color:#96AFB5;" -->

<!-- 에코백일경우에만 뜨는 메뉴 시작 -->
<?php
if ($itemType == "E_1" || $itemType == "E_2" || $itemType == "E_3" || $itemType == "E_4"){
	echo '

<div class="row row_padding-xs" style="margin-top:20px;" id="here">
    <div class="col-md-12" id="E-location" style="position:relative; height:25px; padding-bottom:40px;border-bottom: 2px solid #687C87;
    border-top: 1px solid #D3D3D3;">
<div class="menu">
  <div class="menu_item" style="width:23%;  '; if($itemType == "E_1")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?E_1#here' . '">숄더(컬러)</a>
  </div>
  <div class="menu_item" style="width:27%;'; if($itemType == "E_2")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?E_2#here' . '">숄더(아이보리)</a>
  </div>
  <div class="menu_item" style="width:25%; '; if($itemType == "E_3")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?E_3#here' . '">토트/크로스</a>
  </div>
  <div class="menu_item" style="width:20%; '; if($itemType == "E_4")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?E_4#here' . '">크로스</a>
  </div>
</div>
</div>
</div>
';}?>
<!-- 에코백일경우에만 뜨는 메뉴 끝 -->
<!-- 맨투맨/후드에만 뜨는 메뉴 시작 -->
<?php
if ($itemType == "M_1" || $itemType == "H_1"){
	echo '

<div class="row row_padding-xs" style="margin-top:20px;" id="here">
    <div class="col-md-12" id="E-location" style="position:relative; height:25px; padding-bottom:40px;     border-bottom: 2px solid #687C87;
    border-top: 1px solid #D3D3D3;">
<div class="menu" style="width: 80px;margin-left: -40px;">
  <div class="menu_item" style="width:47% '; if($itemType == "M_1")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?M_1#here' . '">맨투맨</a>
  </div>
  <div class="menu_item" style="width:47% '; if($itemType == "M_2")echo " background: #687C87;
  color: white;";
  echo '">
    <a href="/funding/product/' . $itemNum . '?H_1#here' . '">후드</a>
  </div>
</div>
</div>
</div>
';}?>
<!-- 맨투맨/후드에만 뜨는 메뉴 끝 -->


<!-- 제품 정보 시작 -->
<div class="row row_padding-xs"  style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; border-bottom:1px solid #D3D3D3;">
    <div class="t1-grey">제품 이미지</div>
    <!-- 반복되는 부분 시작-->
    <? for($i=0;$i<count($itemBed);$i++){?>
    <div class="product_area" style="margin-top:20px;">
        <image class="product_bed img-responsive" src="<?echo $itemBed[$i]?>">
        <div class="product" style="<?echo $itemPos;?>">
          <img src="<?echo $itemImage;?>" class="img img-responsive">
        </div>
      </div>
      <?}?>
    <!-- 반복되는 부분 끝 -->
  </div>
</div>
<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; border-bottom:1px solid #D3D3D3;">
      <div class="t1-grey">제품 상세 이미지</div>
      <img src="<?echo $itemDetail;?>" class="img img-responsive">
    </div>
  </div>

<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; border-bottom:1px solid #D3D3D3;">
    <div class="t1-grey">제품 사이즈</div>
    <div class="t2" style="margin-top:10px;">*눕혀서 잰 치수이니 참고 바랍니다.</div>
    <img src="<?echo $itemSizeImg;?>" style="margin: 0 auto;" class="img img-responsive">
  </div>
</div>

<!-- 제품 정보 끝 -->
<!-- 주의사항 시작 -->

<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; ">
    <div class="t1-grey">주의사항 및 안내</div>
    <div class="t2" style="margin-top:20px;">
      무통장 입금 확인 완료 시, 구매 인원에 반영이됩니다.<br/><br/>
      기간이 마감된 제품은 제작 진행 상태로, 취소가 불가합니다.<br/><br/>
      블랭킷의 모든 제품은 주문제작으로, 교환/환불이 불가합니다.<br/><br/>
      하자가 있는 제품 한에서 환불이 가능합니다. (교환 불가)<br/><br/>
      기간 마감 후 최대 10일 내에 제작이 되어 발송합니다.<br/><br/>
      기간 내에 목표치 미도달 시, 전액이 환불됩니다.<br/><br/>
    </div>
  </div>
</div>
</div>
<!-- 주의사항 끝 -->
