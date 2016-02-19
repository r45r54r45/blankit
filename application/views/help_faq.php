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
.q{
  text-align: left;
  color:#96AFB5;
  border-top: 2px solid #96AFB5;
  padding:10px 0px 17px 0px;
  font-weight: bold;
}
.a{
  text-align: left;
  color:#868686;
  padding:10px 0px 17px 0px ;
  border-top: 1px solid #D3D3D3;
  font-weight: bold;
}
.qd{
  border-top: 2px solid #96AFB5;
  padding:10px 0px 17px 0px;
  color:#443333;
  font-size: 13px;
  font-weight: bold;
}
.sisi{
  text-align: center;
  color:#868686;
  font-weight: 400;
  display:inline-block;
  height:50px;
}
.sisisi{
  cursor: pointer;

}
.ad{
  padding:10px 0px 17px 0px;
  color:#868686;
  font-size: 12px;
  border-top: 1px solid #D3D3D3;

}
.myButton {
  background-color:#687c87;
  border-radius:12px;
  border:2px solid #687c87;
  display:inline-block ;
  cursor:pointer;
  color:white !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:12px;
  font-weight:regular;
  padding:3px 12px;
}
.myButton:hover {
  background-color: white;
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
.menu{
  width:90px;
  display:inline-block;
}
.menu_input{
  width:150px;
}
.menu_input_radio{
  width:130px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:40px;
}
.menu_input_phone_2{
  width:50px;
}
.margin-bottom-5{
  margin-bottom: 5px;

}
input[type="radio"] + label{
  margin-left: 7px;
  font-size:13px;
}
.title1{
  font-size: 20px;
  color:#868686;
}
.title2{
  font-size: 15px;
  color:#443333;
}
.order_border{
  border:1px solid #B7B7B7;
  border-radius: 6px;
  padding: 5px;
}
.order_border:hover{
  background: #D3D3D3;
}
.order_result_1{
  font-size:10px;
  color:#D3D3D3;
  float:right;
}
.order_result_2{
  margin-left: 10px;
  font-size:12px;
  color:#443333;
  float:right;
}
.order_title{
  color:#868686;
  margin: 0px 0px 0px 3px;
}
.order_content{
  color:#443333;
  margin: 0px 0px 0px 3px;
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
  width:32%;
  height:100%;
  cursor: pointer;
}
.menu_item:hover{
  color: #96AFB5;
  border-bottom:2px solid #96AFB5;
}
</style>
<script>
$(function(){

});
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin:70px 0px 40px;">
    <div class="col-xs-12 gal" style="text-align:center;display:block;">
      <span style="font-size:32px; font-weight:500;">HELP</span>
    </div>
  </div>
</div>



<div class="container" >
  <div class="row row-padding-xs-100" style="margin-bottom:10px;">
    <div class="col-md-12" style="position:relative; height:25px; border-bottom: 1.5px solid #D3D3D3;">
      <div class="menu">
        <div class="menu_item" >
          <a href="/help">공지사항</a>
        </div>
        <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;">
          <a href="/help/faq">FAQ</a>
        </div>
        <div class="menu_item">
          <a href="/help/cs">고객센터</a>
        </div>

      </div>
    </div>
  </div>

<? $menu; if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
  }else $menu=0;
  ?>
  <div class="row row-padding-xs-100" style="margin-bottom:10px; margin-top:20px;">
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px;   <?=($menu==0?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=0" class="sisisi" <?=($menu==0?" style=\"color:#96AFB5;\"":"")?>> artist</a>
    </div>
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==1?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=1" class="sisisi"<?=($menu==1?" style=\"color:#96AFB5;\"":"")?>>gallery</a>
    </div>
    <!-- <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==2?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=2" class="sisisi"<?=($menu==2?" style=\"color:#96AFB5;\"":"")?>>store</a>
    </div> -->
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==3?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=3" class="sisisi"<?=($menu==3?" style=\"color:#96AFB5;\"":"")?>>submit</a>
    </div>
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==4?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=4" class="sisisi"<?=($menu==4?" style=\"color:#96AFB5;\"":"")?>> delivery</a>
    </div>
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==5?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=5" class="sisisi"<?=($menu==5?" style=\"color:#96AFB5;\"":"")?>>  member</a>
    </div>
  </div>

  <div class="row row-padding-xs-100" style="margin-top:20px;">

<?
  $data=array();
  for ($i=0; $i <6 ; $i++) {
    array_push($data,$i);
    $data[$i]=array();
  }
  array_push($data[0],['누구나 아티스트로 참여가 가능한가요?','
블랭킷에서는 누구나 아티스트입니다.
전문가가 아니더라도 간단한 편집능력만 있다면 블랭킷에 본인의 작품을 내놓을 수 있습니다.
그동안 감춰왔던 당신의 감성을 뽐내주세요!
']);
  array_push($data[0],['추천하고 싶은 아티스트가 있습니다. 어떻게 추천하나요?','블랭킷의 웹사이트/페이스북/카카오톡 옐로우아이디로 알려주세요!
만약 직접 연락이 어렵다면 블랭킷 고객센터에 아티스트 정보를 남겨주시면
블랭킷에서 직접 컨택해보도록 하겠습니다.']);

  array_push($data[0],['아티스트의 수익금은 어떻게 책정되나요?','아티스트 수익금은 최소 목표 수량에 따라 상이합니다.
자세한 내용은 [내 작품 판매하기] 페이지의 아티스트 가이드북을 참고해주세요.']);

  array_push($data[1],['어떤 상품들을 제작/구입할 수 있나요?','블랭킷에서는 맨투맨, 후드, 6종류의 에코백, 그리고 파우치를 판매합니다.
추후에 더 많은 제품을 추가할 예정입니다.']);
  array_push($data[1],['제품화가 어려운 작품은 무엇이 있나요?','표절이거나, 음란성 및 비방성 컨텐츠는 제품화가 불가합니다.
이에 대한 금전적 책임과 법적 책임은 등록자에게 있습니다.']);
  array_push($data[1],['작품이 어느 크기로 인쇄가 되나요?','작품은 제품마다 크기가 다르게 인쇄됩니다.
각 제품의 상세페이지에 들어가시면 본 제품의 작품 인쇄 규격을 확인할 수 있습니다.']);
array_push($data[1],['제품의 수량은 몇 개인가요?','제품은 1:1 주문제작으로, 정해진 수량이 없습니다.
단, 아티스트의 판매 중단 의사에 따라 판매가 종료될 수 있습니다.']);

  array_push($data[3],['아티스트 회원이 아닙니다. 제 제품을 올릴 수 있나요?','물론입니다. 블랭킷은 모든 회원의 참여를 응원합니다.
마이블랭킷-내정보관리에 들어가셔서 회원 구분을 [아티스트 회원]으로 변경해주시고,
우측 상단에 submit을 클릭하여 안내된 절차를 밟아 지원해주세요.
좋은 결과가 있기를 기원합니다.']);
  array_push($data[3],['제품 등록 절차는 어떻게 되나요?','블랭킷의 제품 등록은 4단계의 간단한 절차를 거치면 됩니다.
Submit 페이지에서 간략한 작품 설명과 파일을 제출해주세요.
간단한 내부 심사 후 최종 등록을 위한 개별 연락을 드립니다.
최종 등록을 위한 폼을 작성해주시고 원본 파일과 함께 제출해주세요.
제출된 내용을 바탕으로 작품이 갤러리에 제품으로 등록이 됩니다.
등록된 작품을 일주일 내에 SNS에 공유해주시면 등록이 완료됩니다.

이때 표절, 비방성, 음란성 등 유해 컨텐츠 및
진행 절차를 준수하지 않은 컨텐츠는 무통보 삭제될 수 있습니다.  ']);

  array_push($data[3],['
심사 기준은 어떻게 되나요?
','
블랭킷은 아주 기본적인 심사를 통해 지원작을 사이트에 업로드합니다.
지원한 작품은 비방성, 음락성이거나 표절이어서는 안되며,
제공된 가이드에 따라 적합한 형태의 파일을 제공해야합니다.
인쇄가 어려울 것이라고 판단되는 디자인은 심사에 통과하지 못 할 수 있습니다.
가능한 다양한 작품들을 수용하도록 노력하겠습니다.
']);

  array_push($data[3],['
등록된 제품의 파일 및 설명 수정은 어떻게 하나요?
','고객센터로 문의 주시면 신속히 처리해드리겠습니다.']);
  array_push($data[3],['등록된 제품의 판매를 중단할 수 있나요?','가능합니다. 이에 대한 문의는 고객센터로 부탁드립니다.']);
  array_push($data[3],['등록 절차 중, SNS 공유는 무엇인가요?','블랭킷은 제작비용 0원에 아티스트 님의 작품을 편집, 업로드, 제작해드립니다.
단, 아티스트는 SNS에 블랭킷과의 콜라보레이션 사실을 공유해주셔야 할 의무가 있습니다.
공유 미실시 및 판매 기간 내에 삭제시 페널티가 있습니다.']);
  array_push($data[4],['교환/환불이 가능한가요?','블랭킷의 제품은 주문제작으로, 교환 및 환불이 불가합니다. 단, 하자 제품에 한하여 환불을 해드립니다. ']);
  array_push($data[4],['제작기간과 배송기간은 어떻게 되나요?','매주 월요일에 제작 주문이 들어가며 평일 기준 3-5일 내에 제작이 되어 2-5일 내에 배송됩니다. 최대한 빠른 배송을 위해 노력하겠습니다']);
  array_push($data[5],['회원 탈퇴는 어떻게 하나요?','고객센터로 문의를 주시면 신속히 처리해드리겠습니다.']);
  array_push($data[5],['일반 회원과 아티스트 회원은 어떻게 다른가요?','일반 회원은 사이트의 구매 기능을 이용가능하며, 아티스트 회원은 작품 업로드 및 프로필 입력이 가능합니다. 일반 회원은 언제든지 아티스트 회원이 될 수 있습니다.']);



  $menu;
  if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
  }else $menu=0;

  for($i=0;$i<count($datum=$data[$menu]);$i++){ ?>
    <div>
      <div style="clear: both;">
        <div class="col-xs-1 q">Q</div>
        <div class="col-xs-11" style="padding-left:20px; padding-right:0px;">
          <div class="qd" style="width:100%;">
            <span><?=$datum[$i][0]?></span>
          </div>
        </div>
      </div>
      <div style="clear: both;">
        <div class="col-xs-1 a">A</div>
        <div class="col-xs-11" style="padding-left:20px;padding-right:0px;">
          <div style="width:100%;" class="ad">
            <span><?=$datum[$i][1]?></span>
          </div>
        </div>
      </div>
    </div>
<? } ?>

  </div>

</div>
