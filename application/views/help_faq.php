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
      <a href="/help/faq?menu=1" class="sisisi"<?=($menu==1?" style=\"color:#96AFB5;\"":"")?>>funding</a>
    </div>
    <div class="sisi col-xs-4 col-sm-2">
      <div style="width:6px;height:6px; <?=($menu==2?"background:#96AFB5;":"")?>display:block;margin:0 auto 3px; border-radius:3px;"></div>
      <a href="/help/faq?menu=2" class="sisisi"<?=($menu==2?" style=\"color:#96AFB5;\"":"")?>>store</a>
    </div>
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
  array_push($data[0],['누구나 아티스트로 참여가 가능한가요?','블랭킷은 모든 아티스트를 응원합니다. 전문가가 아니더라도 간단한 포토샵/일러스트레이터만 다룰 수 있다면 블랭킷에 본인의 작품을 내놓을 수 있습니다. 그동안 감춰왔던 당신의 감성을 뽐내주세요!']);
  array_push($data[0],['추천하고 싶은 아티스트가 있습니다. 어떻게 추천하나요?','블랭킷의 웹사이트/페이스북/카카오톡 옐로우아이디를 알려주세요! 만약 직접 연락이 어렵다면 블랭킷 고객센터에 아티스트 정보를 남겨주시면 블랭킷에서 컨택해보도록 하겠습니다.']);
  array_push($data[0],['[오늘의 아티스트] 선정 기준은 무엇인가요?','[오늘의 아티스트]는 제품 관심도, 활동치 등을 종합하여 선정합니다.']);
  array_push($data[0],['아티스트의 수익금은 어떻게 책정되나요?','아티스트 수익금은 최소 목표 수량에 따라 상이합니다. 최소 목표 수량이 많을수록 아티스트는 제작비를 제외한 순수익의 최대 40%까지 지급받을 수 있습니다.']);
  array_push($data[1],['구입을 희망하는 제품의 기간이 종료되었습니다. 리오더 신청을 할 수 있나요?','안타깝지만 블랭킷은 제품의 희소성을 위하여 리오더는 지원하지 않고 있습니다. 다만, 고객센터를 통해 충분한 수요가 들어올 경우, 아티스트분과 협의는 가능합니다.']);
  array_push($data[1],['상품 설명 중에 %는 무슨 의미인가요?','상품 설명의 %는 해당 제품의 목표 수량까지의 도달 정도를 나타냅니다. 100% 이상을 도달해야 제품은 주문이 들어갑니다.']);
  array_push($data[1],['상품 설명 중에 ‘앞으로 00일’은 무슨 의미인가요?','상품 설명의 ‘앞으로 00일’은 설정된 기간만큼의 남은 일수를 나타냅니다. 설정된 기간 내에 목표 인원 이상을 도달해야 제품이 주문에 들어갑니다.']);
  array_push($data[1],['기간 내에 목표 인원 도달시 어떻게 되나요?','기간 내에 목표 인원 도달시, 제품은 제작에 들어가게 되며 최소수량에 따라 일정 수익금이 아티스트에게 전달됩니다.']);
  array_push($data[1],['기간 내에 목표 인원 미도달시 어떻게 되나요?','기간 내에 목표 인원 미도달시, 제품은 제작에 들어가지 않으며 결제한 금액은 전액환불 됩니다.']);
  array_push($data[1],['기간 전에 목표 인원 이상 도달시 어떻게 되나요?','기간 전에 목표 인원 도달시, 제품은 기간 종료일까지 펀딩에 그대로 기재되며 기간 도달시 제작에 들어가게 됩니다.']);
  array_push($data[1],['어떤 상품들을 제작/구입할 수 있나요?','블랭킷에서는 맨투맨, 후드, 6종류의 에코백, 그리고 파우치를 판매합니다.']);
  array_push($data[1],['제품화가 어려운 작품은 무엇이 있나요?','표절이거나, 음란성 및 비방성 컨텐츠는 제품화가 불가합니다. 이에 대한 금전적 책임과 법적 책임은 등록자에게 있습니다.']);
  array_push($data[1],['작품이 어느 크기로 인쇄가 되나요?','작품은 제품마다 크기가 다르게 인쇄됩니다. 각 제품의 상세페이지에 들어가시면 본 제품의 작품 인쇄 규격을 확인할 수 있습니다.']);
  array_push($data[2],['Funding과 Store는 어떻게 다른가요?','Funding은 일정 구매자를 확보했을때 제품의 주문제작이 들어가는 크라우드 펀딩 형태입니다. Store는 블랭킷의 공모전이나 단기 프로젝트로 제작이 된 완제품을 판매하는 쇼핑몰 형태입니다.']);
  array_push($data[2],['Store의 수량은 얼마나 되나요?','
스토어의 각 제품의 수량은 최소 5개로, 적은 수량을 기본으로 합니다.
']);
  array_push($data[2],['어떤 상품들을 구입할 수 있나요?','블랭킷에서는 맨투맨, 후드, 6종류의 에코백, 그리고 파우치를 판매합니다.']);
  array_push($data[2],['품절 상품이 재입고되기도 하나요?','스토어의 제품들은 프로젝트성으로 제작되어 재입고가 어렵습니다. 구입을 희망하신다면 서둘러주세요!']);
  array_push($data[3],['아티스트 회원이 아닙니다. 제 제품을 올릴 수 있나요?','물론입니다. 블랭킷은 모든 회원의 참여를 응원합니다. 마이블랭킷-내정보관리에 들어가셔서 회원 구분을 [아티스트 회원]으로 변경해주시고, 직업과 소개글을 작성해주세요. 저장 후, 우측 상단에 submit을 클릭하여 안내된 절차를 밟아 지원해주세요. 좋은 결과가 있기를 기원합니다.']);
  array_push($data[3],['제품 등록 절차는 어떻게 되나요?','블랭킷의 제품 등록은 4단계의 간단한 절차를 거치면 됩니다. Submit 페이지에서 원하는 제품의 파일을 다운로드 받아주세요. 다운로드 받은 폴더 내의 작업 가이드대로 파일을 작업하여 본 페이지에서 업로드해주세요. 업로드 버튼을 누르면 자동으로 아티스트님의 작품이 제품으로 업로드 됩니다. 업로드 완료 후 페이스북 공유도 잊지마세요! 이때 표절, 비방성, 음란성 등 유해 컨텐츠 및 페이스북 공유 내용을 준수하지 않은 컨텐츠는 무통보 삭제될 수 있습니다. ']);
  array_push($data[3],['제품 편집은 어떻게 하나요?','Submit 페이지에서 작업 가이드 파일을 다운로드해주세요. 작업에 필요한 파일이 준비되어있습니다. 파일에 기재된 가이드 텍스트를 준수하여 업로드 해주세요.']);
  array_push($data[3],['작업 파일을 png로 올려야하는 이유는 무엇인가요?','올려주신 작품의 배치를 확인하기 위해 png로만 작업 파일을 받습니다. 상세 페이지에 제품의 이미지를 보여주기 위하여, 배경이 투명하게 처리된 png외 다른 파일은 받지 않습니다.']);
  array_push($data[3],['목표 구매자수는 무엇인가요?','목표 구매자수에 도달해야 제품은 주문제작이 들어갑니다. 목표 수량에 따라 아티스트-블랭킷의 수익 배분율이 상이합니다. 아티스트는 본인의 인지도, 파급력, SNS 팔로워수 등을 고려하여, 제품 업로드시 직접 목표 구매자수를 설정할 수 있습니다.']);
  array_push($data[3],['같은 작품으로 여러 제품군에 등록이 가능한가요?','물론입니다! 단, 각 제품군을 따로 등록해주어야 합니다. 예를 들어, 의류-에코백-파우치 제품을 모두 등록하기를 원하신다면, 각 파일을 다운로드 받아 작업을 하여 의류 따로, 에코백 따로, 파우치 따로, 총 세번을 업로드해주셔야 합니다.']);
  array_push($data[3],['[소개글]에는 어떤 내용을 입력하면 되나요?','구매자가 아티스트님의 이력이나 스타일을 파악하기 위해 참고할 수 있는 자료입니다. 아티스트님의 간략한 자기소개와 작품 스타일 전반에 대해 소개해주시면 됩니다.']);
  array_push($data[3],['
[소개글]에는 어떤 내용을 입력하면 되나요?
','
구매자가 아티스트님의 이력이나 스타일을 파악하기 위해 참고할 수 있는 자료입니다. 아티스트님의 간략한 자기소개와 작품 스타일 전반에 대해 소개해주시면 됩니다.
']);
  array_push($data[3],['
심사 기준은 어떻게 되나요?
','
블랭킷은 아주 기본적인 심사를 통해 지원작을 사이트에 업로드합니다. 지원한 작품은 비방성, 음락성이거나 표절이어서는 안되며, 제공된 가이드에 따라 적절한 형태의 파일을 제공해야합니다. 인쇄가 어려울 것이라고 판단되는 디자인은 심사에 통과하지 못 할 수 있습니다. 가능한 다양한 작품들을 수용하도록 블랭킷은 노력하겠습니다.
']);
  array_push($data[3],['
등록된 제품의 펀딩 기간과 목표치 수정은 어떻게 하나요?
','크라우드 펀딩 특성상 펀딩 기간이나 목표치 수정은 불허가합니다.']);
  array_push($data[3],['
등록된 제품의 파일 및 설명 수정은 어떻게 하나요?
','고객센터로 문의 주시면 신속히 처리해드리겠습니다.']);
  array_push($data[3],['등록된 제품을 취소할 수 있나요?','가능합니다. 단, 구매자가 0명인 상태에서만 가능하며, 이에 대한 문의는 고객센터로 부탁드립니다.']);
  array_push($data[3],['등록 절차 중, 페이스북 공유는 무엇인가요?','블랭킷은 제작비용 0원에 아티스트 님의 작품을 편집, 업로드, 제작해드립니다. 단, 아티스트는 페이스북에 블랭킷과의 콜라보레이션 사실을 공유해주셔야 할 의무가 있습니다. 공유용 자료는 업로드 페이지에서 확인할 수 있으며, 업로드 이후에 한번의 클릭으로 공유할 수 있습니다. 이때 공유한 자료는 펀딩 기간 종료시까지 기재해주셔야 하며, 공유 미실시 및 기간 내에 삭제시 페널티가 있습니다. (구매자 0명시 제품은 무통보 취소처리될 수 있으며, 구매자가 있을 경우 제품 판매에 대한 수익금이 아티스트에 전달되지 않습니다.)']);
  array_push($data[4],['교환/환불이 가능한가요?','블랭킷의 펀딩 제품은 주문제작으로, 교환 및 환불이 불가합니다. 단, 하자 제품에 한하여 환불을 해드립니다. 스토어 제품은 교환 및 환불이 가능합니다. 이때 단순변심에 의한 교환 및 환불에 대한 배송비 부담은 구매자에게 있습니다.']);
  array_push($data[4],['제작기간과 배송기간은 어떻게 되나요?','제작기간은 기간 만료일 기준 7-10일 이내이며, 배송은 영업일 기준 2-5일입니다. 최대한 빠른 배송을 위해 노력하겠습니다.']);
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
