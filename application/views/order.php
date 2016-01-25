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
  font-size: 13px;
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
</style>
<script>
$(function(){
  $("input[name='same_info']").on("change",function(event){
    if(event.target.defaultValue=='1'){
        $("#name2").val($("#name1").val());
        $("#email2").val($("#email1").val());
        $("#phone2_1").val($("#phone1_1").val());
        $("#phone2_2").val($("#phone1_2").val());
        $("#phone2_3").val($("#phone1_3").val());
        $("#location2_1").val($("#location1_1").val());
        $("#location2_2").val($("#location1_2").val());
        $("#location2_3").val($("#location1_3").val());
    }else{
      $("#name2").val("");
      $("#email2").val("");
      $("#phone2_2").val("");
      $("#phone2_3").val("");
      $("#location2_1").val("");
      $("#location2_2").val("");
      $("#location2_3").val("");
    }
  });

});

function submitCheck(){
  if($("input[name='receiver']").val()==''){
	  alert("받으시는 분을 입력해주세요");
	  return;
  }
  if($("input[name='email']").val()==''){
	  alert("이메일을 입력해주세요");
	  return;
  }
  if($("input[name='phone1']").val()==''){
	  alert("휴대전화를 입력해주세요");
	  return;
  }
  if($("input[name='phone2']").val()==''){
	  alert("휴대전화를 입력해주세요");
	  return;
  }
  if($("input[name='phone3']").val()==''){
	  alert("휴대전화를 입력해주세요");
	  return;
  }
  if($("input[name='home1']").val()==''){
	  alert("배송지를 입력해주세요");
	  return;
  }
  if($("input[name='home2']").val()==''){
	  alert("배송지를 입력해주세요");
	  return;
  }
  if($("input[name='home3']").val()==''){
	  alert("배송지를 입력해주세요");
	  return;
  }
  if($("input[name='payer']").val()==''){
	  alert("입금자명을 입력해주세요");
	  return;
  }
  if($("input[name='bank']").val()==''){
	  alert("입금 은행을 입력해주세요");
	  return;
  }
  if($("input[name='account']").val()==''){
	  alert("입금 계좌번호를 입력해주세요");
	  return;
  }

  $("#formform").submit();
}

</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Order</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">주문 리스트 확인</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">


   <!-- 주문 목록 반복되는 블럭 시작 -->
   <?php
   $addPRICE = 0;
   $checker = 0;

   //OrderRandomId 생성
   foreach ($generateOrderRandomId->result() as $one){
   	$seed = $one->seed;
   }

   $curDate = date('Y-m-d H:i:s');
   $curDateNum = strtotime($curDate);
   $seed_date = strtoupper(dechex($curDateNum + $seed));
   //여기까지, OrderRandomId 생성

   foreach ($address->result() as $row2){

   	if($checker == 0){ // 한 번만 주소를 저장해두기
   		$userName = $row2->user_name;
   		$userEmail = $row2->user_email;
   		$userPhone = $row2->user_phone;
   		$userHome = $row2->user_home;
   		$userHome2 = $row2->user_home2;
   		$userHome3 = $row2->user_home3;

   		$userPhone1 = str_split($userPhone,3);
   		$userPhone2 = str_split($userPhone1[1].$userPhone1[2].$userPhone1[3],4);
   	}
   }

   foreach ($cart->result() as $row){

   	$PRICE =  number_format($row->cart_price, 0, '.', ','); // 가격 포맷
   	$addPRICE += $row->cart_price * $row->cart_num;
   ?>

    <div style="padding: 10px 5px 0px 5px;" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" id="<?php echo $row->cart_id;?>">
      <div class="order_border">
      <div class="row">

        <div class="col-xs-3">
          <span class="order_title">제품코드</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $row->store_random_id;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">제품정보</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">[아티스트 <?php echo $row->artist;?>] <?php echo $row->store_name;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">판매가격</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $PRICE;?>원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">수량</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $row->cart_num;?></span>
        </div>
      </div>
    </div>
  </div>
    <? }?>
    <!-- 주문목록 반복되는 부분 끝 -->

  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="order_result_2">총 주문금액 <?php
    										if ($addPRICE == 0) echo "0";
    										else echo number_format($addPRICE + 2500, 0, '.', ',');?>원</span>
    <span class="order_result_1">상품 총 금액 <?php echo number_format($addPRICE, 0, '.', ',');?>원 + 배송비 <?php
    										if ($addPRICE == 0) echo "0";
    										else echo number_format(2500, 0, '.', ',');?>원</span>
  </div>

  <!-- 페이지 로딩시 자동으로 채워지는 부분 *시작* -->
  <div>
    <div class="row row-padding-xs-100 " style="margin-top:30px; ">
      <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
        <span class="title1">주문고객 정보</span>
      </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu" >보내시는 분</div>
      <input id="name1" class="menu_input" type="text" value=<?php echo '"' . $userName . '"';?> disabled>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">이메일</div>
      <input id="email1" class="menu_input" style="width:200px;" type="text" value=<?php echo '"' . $userEmail . '"';?> disabled>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">휴대전화</div>
      <input id="phone1_1" class="menu_input_phone_1" type="text" value="010" disabled>-
      <input id="phone1_2" class="menu_input_phone_2" type="text" value=<?php echo '"' . $userPhone2[0] . '"';?> disabled>-
      <input id="phone1_3" class="menu_input_phone_2" type="text" value=<?php echo '"' . $userPhone2[1] . '"';?> disabled>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2" style="  vertical-align: top;line-height: 100%;padding-top: 5px;">배송지</div>
      <div style="display:inline-block;width:210px;">
        <!-- 주소와 우편번호를 입력할 <input>들을 생성하고 적당한 name과 class를 부여한다 -->
        <input type="text" name="" class="margin-bottom-5 menu_input" placeholder="우편번호" id="location1_1" value=<?php echo '"' . $userHome . '"';?> disabled/><br />
        <input type="text" name="" class="margin-bottom-5 menu_input"  placeholder="기본주소" id="location1_2" value=<?php echo '"' . $userHome2 . '"';?> disabled/><br />
        <input type="text" name="" class="margin-bottom-5 menu_input" placeholder="상세주소" id="location1_3" value=<?php echo '"' . $userHome3 . '"';?> disabled/><br />

        <!-- jQuery와 Postcodify를 로딩한다 -->


        <!-- "검색" 단추를 누르면 팝업 레이어가 열리도록 설정한다 -->
      </div>
    </div>

  </div>
  <!-- 페이지 로딩시 자동으로 채워지는 부분 *종료* -->

  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
      <span id="locInfo" class="title1">배송지 정보</span>
    </div>
  </div>

  <div class="row row-padding-xs-100 " style="margin-top:10px;">
  <div style="" class="menu_input_radio">
    <input type="radio" name="same_info" id="same_info_1" value="1"><label for="same_info_1" >주문고객 정보와 동일</label>
  </div>
  <div class="menu_input_radio" style="width:80px;">
    <input type="radio" name="same_info" id="same_info_2" value="2" ><label for="same_info_2" >새로운 주소</label>
  </div>
</div>

<form action="/order/func_order_ok" method="post" id="formform">
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu">받으시는 분</div>
    <input id="name2" class="menu_input" type="text" name="receiver">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">이메일</div>
    <input id="email2" class="menu_input" style="width:200px;" type="text" name="email">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">휴대전화</div>
    <input id="phone2_1" class="menu_input_phone_1" type="text" value="010" name="phone1"> -
    <input id="phone2_2" class="menu_input_phone_2" type="text" name="phone2"> -
    <input id="phone2_3" class="menu_input_phone_2" type="text" name="phone3">
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2" style="  vertical-align: top;line-height: 100%;padding-top: 5px;">배송지</div>
    <div style="display:inline-block;width:210px;">
      <!-- 주소와 우편번호를 입력할 <input>들을 생성하고 적당한 name과 class를 부여한다 -->
      <input type="text" class="margin-bottom-5 menu_input postcodify_postcode5" id="location2_1" placeholder="우편번호" value="" name="home1"/>
      <a href="#"><button type="button" id="postcodify_search_button" class=" myButton">찾기</button></a><br />
      <input  id="location2_2" type="text" class="margin-bottom-5 menu_input postcodify_address"  placeholder="기본주소" value="" name="home2"/><br />
      <input id="location2_3" type="text" class="margin-bottom-5 menu_input postcodify_details" placeholder="상세주소" value="" name="home3"/><br />

      <!-- jQuery와 Postcodify를 로딩한다 -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="//cdn.poesis.kr/post/search.min.js"></script>

      <!-- "검색" 단추를 누르면 팝업 레이어가 열리도록 설정한다 -->
      <script> $(function() { $("#postcodify_search_button").postcodifyPopUp(); }); </script>
    </div>
  </div>

  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu title2">배송 유의사항</div>
    <input class="menu_input" style="width:200px;" type="text" name="notice">
  </div>

  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px;">
      <span class="title1">결제 정보</span>
    </div>
  </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">입금자 명</div>
      <input class="menu_input" type="text" name="payer">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">입금 은행</div>
      <input class="menu_input" placeholder="입금할 은행" style="width:200px;" type="text" name="bank">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">입금 계좌번호</div>
      <input class="menu_input" placeholder="입금할 계좌번호" style="width:200px;" type="text" name="account">
    </div>
    <input type="text" name="orderRandomId" value="<?echo $seed_date;?>" style="display:none">
</form>

  <div class="row row-padding-xs-100 " style="margin-top:30px; ">
    <div style="border-top: 1px solid #D3D3D3;padding-top:25px; display:block;  text-align:center;">
      <a onclick="submitCheck();"><div style="padding:7px 15px; border-radius:15px; width:150px;" class="myButton">주문하기</div></a>
    </div>

  </div>
</div>
