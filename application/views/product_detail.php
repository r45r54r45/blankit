<style>
.t1-gal{
  font-size: 15px;
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
  left:0
  top:0;
  z-index: 1;
}
.product{
  position: absolute;
  z-index:2;
  }
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
    width:23%;
    height:100%;
    cursor: pointer;
  }
  .menu_item:hover{
    color: #96AFB5;
    border-bottom:2px solid #96AFB5;
  }
</style>
  <?php
  //-----------진우파트 시작--------------
  $itemType="E_1"; //아이템 종류..(string) 이것에 따라 작품들이 제품의 어느 위치에 삽입될 지 결정됨.
  //**여기에 아이템 종류 넣어주삼.**
  $itemNum; //작품의 고유번호 넣어주삼. 작품 이미지 주소 가져오는데 사용
  //-----------진우파트 끝--------------
  $itemImage="/source/image/ecobag_test.png";//작품이미지
  $itemPos; //아이템이 삽입될 위치
  $itemSizeImg; //제품 사이즈 이미지 주소
  $itemBed=array(); //배경으로 쓰일 제품 이미지 목록
  $itemDetail; //제품 설명 이미지
  switch ($itemType){
    case "E_1": //에코백 E_1_1(블랙) E_1_2(카키) E_1_3(네이비)
      $itemPos="left:35.4%;top:46.400000000000006%;width:29.333333333333332%;height:39.93333333333333%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.png");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.png");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.png");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_2": //에코백-숄더 //숄더-아이보리가 이거임
      $itemPos="left:34.599999999999994%;top:46.1%;width:31.1%;height:42.199999999999996%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.png");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_3": //에코백-토트/크로스
      $itemPos="left:35.4%;top:49.6%;width:28.9%;height:39.36666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.png");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "E_4": //에코백 크로스형
      $itemPos="left:37.6%;top:57.199999999999996%;width:25.466666666666665%;height:34.66666666666667%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_bed.png");
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
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.JPG");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_4"."_bed.png");
      array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
    case "M_1": //맨투맨 M_1_1(아이보리) M_1_2(블랙) M_1_3 (네이비) M_1_4(그레이) M_1_5(레드) M_1_detail(클릭시)
      $itemPos="left:37%;top:35%;width:23.066666666666666%;height:20.333333333333332%;";
      $itemSizeImg="/source/product/".$itemType."_size.png";
      array_push($itemBed,"/source/product/".$itemType."_1"."_bed.JPG");
      array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_4"."_bed.jpg");
      array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
      $itemDetail="/source/product/".$itemType."_detail.jpg";
    break;
  }

  ?>

<!-- 제품에 들어간 작품 부분 시작-->
<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; border-bottom:1px solid #D3D3D3;">
  <div class="t1-gal" style="margin-bottom:20px;">제품에 들어간 작품 이름</div>
  <div class="artwork">
    <img src="<?echo $itemImage;?>" class="img thumbnail img-responsive" >
  </div>
  <div class="t2">
    작품 설명 텍스트 입니다. 작품 설명 텍스트 입니다.<br>
    작품 설명 텍스트 입니다. 작품 설명 텍스트 입니다.<br>
    작품 설명 텍스트 입니다. 작품 설명 텍스트 입니다.
  </div>
  </div>
</div>
<!-- 제품에 들어간 작품부분 끝 -->
<!-- 에코백일경우에만 뜨는 메뉴 시작 -->
<!-- style="border-bottom:2px solid #96AFB5; color:#96AFB5;" -->
<!-- 진우 시작 -->
<!-- 이건 에코백일 경우에만 뜨는 메뉴인데, 기본 메뉴는 처음꺼 컬러이고 클릭하면 다른 메뉴로 이동해야함. -->
<div class="row row_padding-xs" style="margin-top:20px;">
    <div class="col-md-12" style="position:relative; height:25px; padding-bottom:40px; border-bottom: 1.5px solid #D3D3D3;">
<div class="menu">
  <div class="menu_item" >
    <a href="">컬러</a>
  </div>
  <div class="menu_item">
    <a href="">숄더</a>
  </div>
  <div class="menu_item">
    <a href="">토트/크로스</a>
  </div>
  <div class="menu_item">
    <a href="">크로스</a>
  </div>
<!-- 진우 끝 -->
</div>
</div>
</div>
<!-- 에코백일경우에만 뜨는 메뉴 끝 -->
<!-- 제품 정보 시작 -->
<div class="row row_padding-xs" style="margin-top:20px;">
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
      <div class="t1-grey">제품 상세이미지</div>
      <img src="<?echo $itemDetail;?>" class="img img-responsive">
    </div>
  </div>
</div>
<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; border-bottom:1px solid #D3D3D3;">
    <div class="t1-grey">제품 사이즈</div>
    <div class="t2" style="margin-top:10px;">*눕혀서 잰 치수이니 참고 바랍니다.</div>
    <img src="<?echo $itemSizeImg;?>" class="img img-responsive">
  </div>
</div>

<!-- 제품 정보 끝 -->
<!-- 주의사항 시작 -->

<div class="row row_padding-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="padding-bottom:40px; ">
    <div class="t1-grey">주의사항 및 안내</div>
    <div class="t2" style="margin-top:20px;">
      무통장 입금 확인 완료시, 구매 인원에 반영이됩니다.<br/><br/>
      기간이 마감된 제품은 제작 진행 상태로, 취소가 불가합니다.<br/><br/>
      블랭킷의 모든 제품은 주문제작으로, 교환/환불이 불가합니다.<br/><br/>
      하자가 있는 제품 한에서 환불이 가능합니다. (교환 불가)<br/><br/>
      기간 마감 후 최대 10일 내에 제작이 되어 발송합니다.<br/><br/>
      기간 내에 목표치 미도달시, 전액이 환불됩니다.<br/><br/>
    </div>
  </div>
</div>
<!-- 주의사항 끝 -->
</div>
