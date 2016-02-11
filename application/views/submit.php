<style>


.arrow{
  padding: 0 30px 0 30px;
  margin:0 auto; display:block;
}
.download_cover{
  background-image: url("/source/image/download_hover.png");
  z-index: 100;
  background-size: contain;
  background-position:15px;
  background-repeat: no-repeat;
}
.download_img{
  z-index: 50;
  opacity:1;
}
.download_cover:hover .download_img{
  z-index: 50;
  opacity:0.5;
}
.banner{
  width:100%;
  height:300px;
  position:absolute;
  left:0;
  top:0;
  overflow:hidden;
}
.banner>img{
  min-height: 300px;
}
.navbar-right{
  color:white !important;
}
.YourButton{
  border: 2px solid white;
  color: white;
}
.menu_input_radio{
  display: inline-block;
  margin-top: 10px;
  margin-right: 20px;
}
.menu_input_radio>label{
  margin-left: 10px;
}
.tt{
  font-weight: 500;
  font-size: 16px;
  color: #655453;
}
#cover{
  background: red;
  z-index: 9000;
}
</style>
<script>
function banner_generator(){
  var width = document.documentElement.clientWidth;
  $(".banner>img").css("margin-left","-"+($(".banner>img").width()-width)/2+"px");
}
    var storeType_event;
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
  banner_generator();
  $(window).on("resize",function(){
    $("#root_container").css("height",$(".banner").height()+"px");
    banner_generator();
  });
  $("#goalNum").selectmenu();
  $("#goalNum-button").css("margin-top","10px");
  $("input[name='storeType']").on("click",function(){
  storeType_event=event.target.value;
    switch (storeType_event) {
      case "1":
      var strVar="";
strVar += "<div class=\"row\" style=\"\">";
strVar += "  <div class=\"col-xs-12\">";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input type=\"radio\" name=\"miribogi_type\" id=\"t1\" value=\"H_1_1\"><label for=\"t1\">후드 - 아이보리 <\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t2\" value=\"H_1_2\"><label for=\"t2\">후드 - 네이비<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t3\" value=\"H_1_3\"><label for=\"t3\">후드 - 블랙<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t4\" value=\"H_1_4\"><label for=\"t4\">후드 - 그레이<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t5\" value=\"H_1_5\"><label for=\"t5\">후드 - 레드<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t6\" value=\"M_1_1\"><label for=\"t6\">맨투맨 - 아이보리<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t7\" value=\"M_1_2\"><label for=\"t7\">맨투맨 - 블랙<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t8\" value=\"M_1_3\"><label for=\"t8\">맨투맨 - 네이비<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t9\" value=\"M_1_4\"><label for=\"t9\">맨투맨 - 그레이<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t10\" value=\"M_1_5\"><label for=\"t10\">맨투맨 - 레드<\/label>";
strVar += "    <\/div>";
strVar += "  <\/div>";
strVar += "<\/div>";

        $("#miribogi_body").html(strVar);
      break;
      case "2":
      var strVar="";
strVar += "<div class=\"row\" style=\"\">";
strVar += "  <div class=\"col-xs-12\">";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t1\" value=\"E_1_1\"><label for=\"t1\">에코백 칼라 - 블랙<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t2\" value=\"E_1_2\"><label for=\"t2\">에코백 칼라 - 카키<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t3\" value=\"E_1_3\"><label for=\"t3\">에코백 칼라 - 네이비<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t4\" value=\"E_2\"><label for=\"t4\">에코백 숄더 - 아이보리<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t5\" value=\"E_3\"><label for=\"t5\">에코백 토트\/크로스<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t6\" value=\"E_4\"><label for=\"t6\">에코백 크로스형<\/label>";
strVar += "    <\/div>";
strVar += "    <!-- <div class=\"menu_input_radio\">";
strVar += "      <input type=\"radio\" id=\"t7\" value=\"M_1_2\"><label for=\"t7\">맨투맨 - 블랙<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input type=\"radio\" id=\"t8\" value=\"M_1_3\"><label for=\"t8\">맨투맨 - 네이비<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input type=\"radio\" id=\"t9\" value=\"M_1_4\"><label for=\"t9\">맨투맨 - 그레이<\/label>";
strVar += "    <\/div>";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input type=\"radio\" id=\"t10\" value=\"M_1_5\"><label for=\"t10\">맨투맨 - 레드<\/label>";
strVar += "    <\/div> -->";
strVar += "  <\/div>";
strVar += "<\/div>";
strVar += "";

        $("#miribogi_body").html(strVar);
      break;
      case "3":
      var strVar="";
strVar += "<div class=\"row\" style=\"\">";
strVar += "  <div class=\"col-xs-12\">";
strVar += "    <div class=\"menu_input_radio\">";
strVar += "      <input name=\"miribogi_type\"  type=\"radio\" id=\"t1\" value=\"P_1\"><label for=\"t1\">파우치<\/label>";
strVar += "    <\/div>";
strVar += "";
strVar += "  <\/div>";
strVar += "<\/div>";
strVar += "";

        $("#miribogi_body").html(strVar);
      break;

    }
    $("input[name='miribogi_type']").on("click",function(event){
      shib=event.target.value;
    });
  });
});
var shib;
function choose(){
  $("#miribogi").val(shib);
  var kk="#type"+storeType_event;
  $("#type1").attr("checked",true);
  $(kk).attr("checked",true);
}
</script>

<?php

if ($session_id !== "" && $session_userType == "2"){
  echo "
  <script>
  function checkSubmit(){
    if($(\"input[name='artwork']\").val()==''){
      alert(\"블랭킷 X 아티스트 작품명을 입력해주세요.\");
      return;
    }
    if($(\"input[name='storeType']:checked\").length==0){
      alert(\"작품 카테고리를 선택해주세요.\");
      return;
    }
    if($(\"input[id='goalNum']\").val()==\"default\"){
      alert(\"목표 구매자 수를 선택해주세요.\");
      return;
    }
    if($(\"input[name='file']\").val()==\"\"){
      alert(\"작품파일을 업로드해주세요\");
      return;
    }
    $(\"#formform\").submit();
  }
  </script> ";
}
else {
  echo '
  <script>
  function checkSubmit(){
    alert("아티스트 회원만 작품 업로드가 가능합니다.");
  }
  </script> ';
}

?>

<div class="banner">
  <img src="/source/image/submit-page-banner.jpg">
  <div class="banner-text">
    <p>혼자 간직해온 작품이 있나요?</p>
    <p>제작비용 0원에 당신만의 제품을 선보이세요.</p>
  </div>
</div>
</div>
<div class="container" >
  <div class="row">
    <div class="col-xs-1">
    </div>
    <div class="col-xs-10">
      <img src="/source/image/submit_guide.png" class="img img-responsive" style="margin-top: 30px;">
    </div>
    <div class="col-xs-1">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="margin-top:30px; border-top: 1px solid #D3D3D3;">
      <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
        작업 파일 다운로드
      </span>
    </div>
    <div style="margin-top:30px;" class="col-xs-12 hidden-sm hidden-md hidden-lg">
      <span style="display:block; text-align:center;">작업 파일 다운로드는 PC에서만 제공합니다.</span>
    </div>
  </div>

  <div class="row hidden-xs" style="margin-top:30px; margin-bottom:30px; ">
    <div class="col-xs-2">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B-DTjWKJzjjsOEtxVGtBWjZQN28/view?usp=sharing">
        <img src="/source/image/download_1.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B-DTjWKJzjjsRzlhNE5FSXphcVk/view?usp=sharing">
        <img src="/source/image/download_2.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B-DTjWKJzjjsUXp5amhrd25ncms/view?usp=sharing">
        <img src="/source/image/download_3.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-2">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="margin-top:30px; border-top: 1px solid #D3D3D3;">

      <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
        아티스트 가이드북 다운로드
      </span>

    </div>
  </div>
  <div class="row" style="margin-top:30px; margin-bottom:30px; text-align:center;">
    <div>  <a style="cursor:pointer;" href="https://drive.google.com/file/d/0B-DTjWKJzjjsR0NRU3JMS29teG8/view?usp=sharing">다운로드 버튼</a>
    </div>
  </div>
  <form action="/submit/func_checkSubmit" enctype="multipart/form-data" method="post" id="formform">
    <div class="row">
      <div class="col-xs-12" style="margin-top:30px;margin-bottom:20px; border-top: 1px solid #D3D3D3;">
        <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
          제품 파일 업로드
        </span>
      </div>
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg" style="margin-top:30px; margin-bottom:30px; ">
        <span style="display:block; text-align:center;">제품 파일 업로드는 PC에서만 제공합니다.</span>
      </div>
      <div class="hidden-xs" style="position:relative;">
        <div class="col-xs-6" style="margin-top:10px;">
          <div class="row">
            <div class="col-xs-12">
              <div class="tt" >블랭킷 X 아티스트 작품명</div>
              <input style="margin-top:10px; width:100%;" class="menu_input" name="artwork" type="text" id="artwork">
            </div>
          </div>

          <div class="row" style="margin-top:20px;">
            <div class="col-xs-12">
              <div class="tt" >블랭킷 X 아티스트 작품 카테고리</div>
              <div class="menu_input_radio">
                <input type="radio" name="storeType" id="type1" value="1" data-toggle="modal" data-target="#myModal2"><label for="type1">의류</label>
              </div>
              <div class="menu_input_radio">
                <input type="radio" name="storeType" id="type2" value="2" data-toggle="modal" data-target="#myModal2"><label for="type2">에코백</label>
              </div>
              <div class="menu_input_radio">
                <input type="radio" name="storeType" id="type3" value="3" data-toggle="modal" data-target="#myModal2"><label for="type3">파우치</label>
              </div>
            </div>
          </div>
          <!-- <div class="row" style="margin-top:20px;">
          <div class="col-xs-12">
          <div class="tt">블랭킷 X 아티스트 작품 메인 제품</div>
          <div class="menu_input_radio">
          <input type="radio" name="bed_color" id="bed1" value="1"><label for="bed1">아이보리</label>
        </div>
        <div class="menu_input_radio">
        <input type="radio" name="bed_color" id="bed2" value="2"><label for="bed2">검정</label>
      </div>
      <div class="menu_input_radio">
      <input type="radio" name="bed_color" id="bed3" value="3"><label for="bed3">등등</label>
    </div>
  </div>
</div> -->
<div class="row" style="margin-top:20px;">
  <div class="col-xs-12">
    <div class="tt" >블랭킷 X 아티스트 목표 구매자 수</div>
    <select id="goalNum" style=" width:100%" name="storeGoal">
      <option value="default">선택</option>
      <option value="5">5개</option>
      <option value="10">10개</option>
      <option value="20">20개</option>
      <option value="40">40개</option>
    </select>
    <span style="    font-size: 10px;">수량에 따라 아티스트 수익금이 상이합니다. 자세한 것은 가이드북을 참고해주세요!</span>
  </div>
</div>
<div class="row" style="margin-top:20px;">
  <div class="col-xs-12">
    <div  class="tt">블랭킷 X 아티스트 작품 파일</div>
    <input type="file" accept="image/png" name="file"  style="margin-top:10px;width:100%;">
  </div>
</div>

</div>
<div class="col-xs-6" style=" margin-top:10px;">
  <div class="row" style="">
    <div class="col-xs-12">
      <div class="tt">블랭킷 X 아티스트 작품 설명</div>
      <textarea style="margin-top:10px;height:292px; border: 1px solid #D3D3D3; width:100%" name="explain"></textarea>
    </div>
  </div>

</div>
<div class="clearfix"></div>
<!-- 진우, 로그인 안되있으면 이부분 출력해줘 시작-->
<?
if ($session_id == "" || $session_userType == "1"){
  echo '
  <div style="background: #D3D3D3;
  height: 360px;
  width: 100%;
  position: absolute;
  left: 0;
  top: 100px;
  z-index: 8999;
  opacity: 0.5; text-align:center;">
  <span style="line-height:360px; vertical-align:middle;font-size:25px;color:#655453;">아티스트 회원만 작품을 업로드할 수 있습니다.</span>
  </div>
  ';}
  ?>
  <!-- 진우, 로그인 안되있으면 이부분 출력해줘 끝-->

</div>
<!-- end of cover -->
</div>
<div class="row hidden-xs" style="margin-top:20px;">
  <div class="hidden-xs col-sm-12">

  </div>
</div>
<div class="row hidden-xs" style="margin-top:20px;">
  <div class="col-xs-12" style="text-align:center;">
    <?php
    if ($session_id !== "" && $session_userType == "2"){ ?>
      <button style="background: transparent;
      border: 1px solid #337ab7;
      margin: 10px auto;
      padding: 10px 100px;
      border-radius: 10px;
      color: #337ab7;
      font-size: 15px;
      font-weight: 500;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      업로드하기
    </button>
    <? }else{ ?>
      <button style="background: transparent;
      border: 1px solid #337ab7;
      margin: 10px auto;
      padding: 10px 100px;
      border-radius: 10px;
      color: #337ab7;
      font-size: 15px;
      font-weight: 500;" type="button" class="btn btn-primary btn-lg" data-toggle="modal"
      onclick="location.href='/login'">
      로그인 해주세요
    </button>
    <?}?>
  </div>

</div>
<input type="text" id="miribogi" name="miribogi">
</form>

</div>
<div style="  z-index: 9000" class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">미리보기 옵션을 선택해주세요</h4>
      </div>
      <div id="miribogi_body" class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="choose()" data-dismiss="modal">선택완료</button>
      </div>
    </div>
  </div>
</div>


<div style="  z-index: 9000" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">알려드립니다.</h4>
      </div>
      <div class="modal-body">
        블랭킷은 제작비용 0원에 아티스트님의 제품을 제작해드립니다.
        아티스트는 본인의 페이스북에 블랭킷과의 콜라보레이션 사실을
        펀딩 기간 동안 전체공개로 기재해 주셔야 합니다. <a onclick="window.open();">(자료 예시 보기)</a>
        해당 자료는 업로드 완료 페이지에서 바로 공유가 가능합니다.
        페이스북이 없는 경우, 고객센터로 1:1 문의 부탁드립니다.
        만일 본 자료를 공유하지 않거나, 펀딩 기간 내에 삭제시,
        제품은 무통보 삭제되며 아티스트에게 수익금은 전달되지 않습니다.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">동의하지 않습니다.</button>
        <button type="button" class="btn btn-primary" onclick="checkSubmit()">동의하고 업로드합니다.</button>
      </div>
    </div>
  </div>
</div>
