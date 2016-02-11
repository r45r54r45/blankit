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
.ss{
    color:#868686;
    text-align: center;
    font-size: 12px;
    /*padding-bottom: 0px !important;*/
}
tr{
  height:40px;
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
          <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;">
            <a href="/help">공지사항</a>
          </div>
          <div class="menu_item" >
            <a href="/help/faq">FAQ</a>
          </div>
          <div class="menu_item">
            <a href="/help/cs">고객센터</a>
          </div>

        </div>
      </div>
    </div>

    <div class="row row-padding-xs-100" style="margin-top:20px;">
      <table class="table">
        <thead>
          <tr style="height:30px; border-bottom:2px solid #96AFB5;">
            <td class="ss" style="width:10%;">번호</td>
            <td class="ss" style="width:70%;">제목</td>
            <td class="ss" style="width:20%;">작성일</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>블랭킷 시작합니다~</td>
            <td>2016-02-03</td>
          </tr>
          <? for($i=0; $i<8; $i++){?>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <? } ?>
        </tbody>
      </table>
    </div>

</div>
