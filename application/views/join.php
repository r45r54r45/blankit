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
  display:inline-block;
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
  width:95px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:32px;
}
.menu_input_phone_2{
  width:50px;
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
</style>
<script>
function id_check(){
$.ajax({
url: "/join/id_check?id="+$("input[name='id']").val(),
success:function(data){
  if(data=='true'){
      $("#id_check").val("true");
      $("input[name='id']").attr("readonly",true);
      $("#uuu").css("display","none");
      alert('사용할 수 있는 아이디입니다.');
  }else{
      alert('사용할 수 없는 아이디입니다.');
  }

}
});
}
var pongpong;
function phone_check(){

$.ajax({
url: "/join/phone_check?phone="+$("input[name='phone1']").val()+$("input[name='phone2']").val()+$("input[name='phone3']").val(),
success:function(data){
    pongpong=data;
    $("#kkll").css("display","none");
    $("#kkll2").css("display","");
    $("input[name='phone1']").attr("readonly",true);
      $("input[name='phone2']").attr("readonly",true);
        $("input[name='phone3']").attr("readonly",true);
    alert('인증번호가 발송되었습니다.');

}
});
}
function phone_check2(){
  $('#ddd').append(pongpong);
  console.log($("#kkk").text());
  if($("input[name='sisisisi']").val()!=$("#kkk").text())alert('인증번호가 틀렸습니다.');
  else{
    $(".pp").css("display","none");

    $("#phone_check").val("hello");
    alert('인증되었습니다.');
  }
}

var myDropzone1;
$(function(){
  $("#info_see").on("click",function(){
    $("#info_see_content").css("display","");
  });
  $("#usage_see").on("click",function(){
    $("#usage_see_content").css("display","");
  });
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

  //  $("#portfolio").dropzone({ url: "/file/post",maxFilesize:1 });
  // var myDropzone = new Dropzone("div#portfolio", { url: "/main",maxFilesize:1,maxFiles:1});

  // $("#sibal").on("click",function(){
  //   myDropzone.processQueue();
  // });


  if ($('#profile').length) {
  myDropzone1 = new Dropzone("#profile", { url: "/file/profile", paramName: "userfile",maxFiles:1,addRemoveLinks:true,autoProcessQueue: false,dictRemoveFile:"파일 삭제",dictMaxFilesExceeded:"1개만 업로드할 수 있습니다."});

  };
});
$(document).on("load",function(){

});
// $(window).on("load",function(){
//   var myDropzone1 = new Dropzone("#profile", { url: "/file/profile", paramName: "userfile",maxFiles:1,addRemoveLinks:true,autoProcessQueue: false,dictRemoveFile:"파일 삭제",dictMaxFilesExceeded:"1개만 업로드할 수 있습니다."});
//   myDropzone1.on("addedfile", function(file) {
//   });
//
//   var myDropzone2 = new Dropzone("#portfolio", { url: "/main", paramName: "portfolio",autoProcessQueue: false,maxFiles:0});
//   myDropzone2.on("addedfile", function(file) {
//   });
// });
Dropzone.autoDiscover = false;
// Dropzone.options.portfolio = {
//         url : '/main',
//         paramName: "file", // The name that will be used to transfer the file
//         maxFiles:1,
//         autoProcessQueue: false,
//         maxFilesize: 5, // MB
//         acceptedFiles: ".jpg, .png, .jpeg",
//         createImageThumbnails: true,
//         maxThumbnailFilesize: 15, // MB,
//     };

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
  myDropzone1.processQueue();
}

</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Join</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">약관 동의</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="title2">개인 정보 수집 및 안내</span>
    <span id="info_see" style="cursor:pointer; color:blue;">(펼치기)</span>
  </div>
  <div id="info_see_content" class="row row-padding-xs-100 " style="display:none; margin-top:10px;">
    <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto;  padding:5px;">
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div style="float:right">
      <input type="checkbox" id="info_checkbox">
      <label for="info_checkbox" style="margin-left:5px;">(필수) 약관에 동의합니다</label>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="title2">이용 약관</span>
    <span id="usage_see" style="cursor:pointer; color:blue;">(펼치기)</span>
  </div>
  <div id="usage_see_content" class="row row-padding-xs-100 " style="display:none; margin-top:10px;">
    <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto; padding:5px;">
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
      Hello my name is Jinjin. Nice to meet you.<br>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div style="float:right">
      <input type="checkbox" id="usage_checkbox">
      <label for="usage_checkbox" style="margin-left:5px;">(필수) 약관에 동의합니 </label>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">회원 정보</span>
  </div>
  <form action="/join/func_join_ok" method="post" id="formform">
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <div class="menu">아이디</div>
    <input class="menu_input" name="id" type="text">
    <a onclick="id_check()"><div id="uuu" class="menu_button myButton" style="border-radius:5px;">중복확인</div><a>
      <input type="text" style="display:none;" id="id_check">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">비밀번호</div>
      <input class="menu_input" name="pw" type="password">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu title2">비밀번호 확인</div>
      <input class="menu_input" id="pw_check" type="password">
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
      <a onclick="phone_check()"><div class="pp menu_button myButton" style="border-radius:5px;" id="kkll">인증번호 발송</div><a>
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
            <!-- <select id="artist_type">
              <option value="1">아티스트</option>
              <option value="2">아티스트</option>
              <option value="3">아티스트</option>
            </select> -->
            <input class="menu_input" name="job" type="text">
          </div>
          <div class="row row-padding-xs-100 " style="margin-top:10px;">
            <div class="menu title2" style="margin-bottom:10px;">프로필사진</div>
            <div id="profile" class="dropzone">
            <div class="dz-default dz-message"><span>프로필 사진은 한 개만 업로드 할 수 있습니다<br>( 클릭 또는 파일을 드래그 해주세요! )</span></div>
          </div>
        </div>
        <div class="row row-padding-xs-100 " style="margin-top:10px;">
          <div class="menu title2" style="margin-bottom:10px;">소개글</div>
          <textarea name = "introduction" style="border-radius:10px;
          width:100%; height:150px; border:2px solid rgba(0, 0, 0, 0.3);"  ></textarea>
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
        <a onclick="submitCheck();"><div class="myButton" style="width:200px; font-size:20px;">가입하기</div></a>
      </div>
    </div>
  </div>
