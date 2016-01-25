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
</style>
<script>
$(function(){

});
</script>
<div class="banner">

<?php 
	$urlPath = "$_SERVER[REQUEST_URI]";
	$explodePath = explode('/', $urlPath);
	$backPath = $explodePath[2];
	
	$explodeBackPath =  explode('&', $backPath);
	$codeNum = explode('=', $explodeBackPath[0]);
	$bank = explode('=', $explodeBackPath[1]);
	$account = explode('=', $explodeBackPath[2]);
?>

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Order</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin:30px 0px; text-align:center;  display:block;">
    <span class="title1">주문이 정상적으로 완료되었습니다</span>
  </div>
</div>
<div class="container-fluid" style="background:#F5F6F7; padding:40px 0px; text-align:center;  display:block;">
  <p class="title2">주문번호: <?php echo $codeNum[1];?></p>
  <p class="title2">입금계좌: <?php echo URLDecode($bank[1]);?> <?php echo $account[1];?></p>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px; text-align:center;  display:block;">
    <span class="title2" >주문 내역 확인은 마이블랭킷-주문배송조회에서 가능합니다.<br>
입금확인 시점 기준으로 펀딩 결과에 반영이 됩니다.</span>
  </div>
</div>
