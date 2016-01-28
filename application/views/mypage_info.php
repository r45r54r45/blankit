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
.menu1{
  width:320px;
  height:100%;
  position: absolute;
  left:50%;
  bottom:0;
  margin-left: -160px;

  background: white;
}
.menu{
  width:90px;
  display:inline-block;
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
  $("input[name='type']").on("change",function(event){
    switch(event.target.defaultValue){
      case '1':
      $("#artist_content").css("display","none");
      break;
      case '2':
      $("#artist_content").css("display","");
      break;
    }
  });
});
function submitCheck(){
  if($("input[id='info_checkbox']:checked").length==0){
    alert("개인정보 수집 및 안내에 동의해주세요");
    return;
  }
  if($("input[id='usage_checkbox']:checked").length==0){
    alert("이용약관에 동의해주세요");
    return;
  }
  if($("input[name='id']").val()==''){
    alert("아이디를 입력해주세요");
    return;
  }
  //진우 // 아이디 중복확인 넣어야함

  if($("#id_check").val()==''){
    alert("아이디 중복확인을 해주세요");
    return;
  }
  if($("input[name='pw']").val()==''){
    alert("비밀번호를 입력해주세요");
    return;
  }
  if($("input[name='pw']").val()!=$("#pw_check").val()){
    alert("비밀번호 확인이 올바르지 않습니다.");
    return;
  }
  if($("input[name='name']").val()==''){
    alert("이름을 입력해주세요");
    return;
  }
  if($("input[name='phone2']").val()==''||$("input[name='phone3']").val()==''){
    alert("휴대전화를 입력해주세요");
    return;
  }
  //진우 // 핸드폰 인증 넣어야함
  if($("#phone_check").val()==''){
    alert("핸드폰 인증을 해주세요");
    return;
  }
  if($("input[name='type']:checked").length==0){
    alert("회원구분을 선택해주세요");
    return;
  }

  $("#formform").submit();
}
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin:70px 0px 40px;">
    <div class="col-xs-12 gal" style="text-align:center;display:block;">
      <span style="font-size:32px; font-weight:500;">MY BLANKIT</span>
    </div>
  </div>
</div>



  <div class="container" >
    <div class="row row-padding-xs-100" style="margin-bottom:40px;">
      <div class="col-md-12" style="position:relative; height:25px; border-bottom: 1.5px solid #D3D3D3;">
        <div class="menu1">
          <div class="menu_item" >
            <a href="/mypage">주문배송조회</a>
          </div>
          <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;">
            <a href="/mypage/info">내 정보관리</a>
          </div>
          <div class="menu_item">
            <a href="#" onclick="alert('준비중 입니다.')">포트폴리오 관리</a>
          </div>


        </div>
      </div>
    </div>



  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">내 정보 수정</span>
  </div>

  <form action="진우" method="post" id="formform">

      <div class="row row-padding-xs-100 " style="margin-top:10px;">
        <div class="menu title2">비밀번호</div>
        <input class="menu_input" name="pw" type="password">
      </div>

      <div class="row row-padding-xs-100 " style="margin-top:10px;">
        <div class="menu title2">이름</div>
        <input class="menu_input" name="name" type="text">
      </div>
      <div class="row row-padding-xs-100 " style="margin-top:10px;">
        <div class="menu title2">휴대전화</div>
        <input class="menu_input_phone_1" name="phone1" type="text" value="010">-
        <input class="menu_input_phone_2" name="phone2" type="text">-
        <input class="menu_input_phone_2" name="phone3" type="text">

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
        <div id="ddd" style="display:none"></div>
        <div class="row row-padding-xs-100 " style="margin-top:10px;display:none;" id="kkll2">
          <div class="menu"></div>
          <input class="pp menu_input" type="text" name="sisisisi" >
          <a onclick="phone_check2()"><div class="pp menu_button myButton" style="border-radius:5px;" >인증번호 확인</div><a>
            <input style="display:none" type="text"  id="phone_check">
          </div>
          <div class="row row-padding-xs-100 " style="margin-top:10px;">
            <div class="menu title2">회원구분</div>
            <div class="menu_input_radio">
              <input type="radio" name="type" id="type1" value="1"><label for="type1">일반 회원</label>
            </div>
            <div class="menu_input_radio">
              <input type="radio" name="type" id="type2" value="2"><label for="type2">아티스트 회원</label>
            </div>
          </div>
          <div id="artist_content" style="display:none;">
            <div class="row row-padding-xs-100 " style="margin-top:10px; line-height:35px;">
              <div class="menu title2" style="vertical-align:middle;">현재 직업</div>
              <input class="menu_input" name="job" type="text">
            </div>

            <div class="row row-padding-xs-100 " style="margin-top:10px;">
              <div class="menu title2" style="margin-bottom:10px;">소개글</div>
              <SCRIPT type=text/javascript>
  function textarea_maxlength(obj){
  var maxLength = parseInt(obj.getAttribute("maxlength"));
  if(obj.value.length>maxLength) {
  alert('글자수가 '+(obj.value.length-1)+'자 이내로 제한됩니다');
  obj.value=obj.value.substring(0,maxLength);
  }
  }
  </SCRIPT>
              <textarea name = "introduction" style="border-radius:10px;
              width:100%; height:150px; border:2px solid rgba(0, 0, 0, 0.3);"   maxlength="100"
              onkeyup="return textarea_maxlength(this)"></textarea>
            </div>
            <div class="row row-padding-xs-100 " style="margin-top:10px;">
              <div class="menu title2" style="margin-bottom:10px;">포트폴리오</div>
              <form id="portfolio" class="dropzone" action="/main" style="border-radius:10px;
              ">
              <div class="dz-default dz-message"><span>포트폴리오 기능은 아직 지원되지 않습니다.</span></div>
            </form>
          </div>
        </div>
      </form>
      <div class="row row-padding-xs-100 " style="margin-top:30px;">
        <div style="text-align:center; display:block;">
          <a onclick="submitCheck();"><div class="myButton" style="width:200px; font-size:20px;">수정하기</div></a>
        </div>
      </div>

    </div>




</div>
