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
  <div class="row row-padding-xs-100 " style="margin:40px 0px;;">
    <div class="col-xs-12 gal" style="text-align:center;display:block;">
      <span style="font-size:32px; font-weight:500;">MY BLANKIT</span>
    </div>
  </div>
</div>



  <div class="container" >
    <div class="row row-padding-xs-100" style="margin-bottom:40px;">
      <div class="col-md-12" style="position:relative; height:25px; border-bottom: 1.5px solid #D3D3D3;">
        <div class="menu">
          <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;">
            <a href="/mypage">주문배송조회</a>
          </div>
          <div class="menu_item" >
            <a href="/mypage/info">내 정보관리</a>
          </div>
          <div class="menu_item">
            <a href="#" onclick="alert('준비중 입니다.')">포트폴리오 관리</a>
          </div>


        </div>
      </div>
    </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">주문 리스트 확인</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">


   <!-- 주문 목록 반복되는 블럭 시작 -->
   <?
   		foreach($order_list->result() as $row){
   			 $orderRandomId = $row->order_random_id;
   			 $orderDate = $row->order_date;
   			 $realDate = explode(' ', $orderDate);
   			 // 주문정보 [이윤지 아티스트] 개와고양이를 그리는 사람들이다요다요 외 3 해야함
   			 $orderPrice = number_format($row->order_price, 0, '.', ',');
   			 $orderStatus = $row->order_status;
   			 $orderLog = $row->order_log;

   			 switch($orderStatus){
   			 	case 0:
   			 		$textStatus = "입금대기";
   			 		break;
   			 	case 1:
   			 		$textStatus = "입금확인";
   			 		break;
   			 	case 2:
   			 		$textStatus = "배송준비";
   			 		break;
   			 	case 3:
   			 		$textStatus = "배송중";
   			 		break;
   			 	case 4:
   			 		$textStatus = "배송완료";
   			 		break;
   			 	case 7:
   			 		$textStatus = "반송대기";
   			 		break;
   			 	case 8:
   			 		$textStatus = "반송중";
   			 		break;
   			 	case 9:
   			 		$textStatus = "반송완료";
   			 		break;
   			 	default:
   			 		$textStatus = "점검중";
   			 }
   ?>

    <div style="padding: 10px 5px 0px 5px;" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="order_border">
      <div class="row">

        <div class="col-xs-3">
          <span class="order_title">주문번호</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $orderRandomId;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">주문일자</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $realDate[0];?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">주문정보</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">[이윤지 아티스트] 개와고양이를 외 3</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">총 금액</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $orderPrice;?>원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">주문상태</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $textStatus;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">배송조회</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><a href="#">조회</a></span>
        </div>
      </div>
    </div>
  </div>
    <? }?>
    <!-- 주문목록 반복되는 부분 끝 -->


  </div>
    <div class="row row-padding-xs-100 " style="margin-top:30px;">
      <a style="float:right; margin-right:5px;" href="/help/cs"><div class="myButton" style="padding-left:30px; padding-right:30px; font-size:15px; ">1:1 문의 바로가기</div></a>
    </div>

</div>
