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
  background-color:transparent;
  border-radius:12px;
  border:2px solid #687c87;
  display:inline-block;
  cursor:pointer;
  color:#687c87 !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:12px;
  font-weight:regular;
  padding:3px 12px;
}
.myButton:hover {
  background-color:#687c87;
  color: white !important;
}
.myButton:active {
  position:relative;
  top:1px;
}
.submit_button{
  display: block;
  text-align: center;
}
</style>
<!-- <script>
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
  console.log('statusChangeCallback');
  console.log(response);
  // The response object is returned with a status field that lets the
  // app know the current login status of the person.
  // Full docs on the response object can be found in the documentation
  // for FB.getLoginStatus().
  if (response.status === 'connected') {
    // Logged into your app and Facebook.
    testAPI();
  } else if (response.status === 'not_authorized') {
    // The person is logged into Facebook, but not your app.
    document.getElementById('status').innerHTML = 'Please log ' +
    'into this app.';
  } else {
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
    document.getElementById('status').innerHTML = 'Please log ' +
    'into Facebook.';
  }
}

// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

window.fbAsyncInit = function() {
  FB.init({
    appId      : '214340015575657',
    cookie     : true,  // enable cookies to allow the server to access
    // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    if (response.status === 'connected') {
   console.log(response.authResponse.accessToken);
 }else{

 }
  });

};

// Load the SDK asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Here we run a very simple test of the Graph API after login is
// successful.  See statusChangeCallback() for when this call is made.
function testAPI() {
  console.log('Welcome!  Fetching your information.... ');
  FB.api('/me', function(response) {
    console.log('Successful login for: ' + response.name);
    document.getElementById('status').innerHTML =
    'Thanks for logging in, ' + response.name + '!';
  });
}
</script> -->
<script>
$(function(){
  var userInputId = getCookie("userInputId");
  $("input[name='id']").val(userInputId);

  if($("input[name='id']").val() != ""){ // 그 전에 ID를 저장해서 처음 페이지 로딩 시, 입력 칸에 저장된 ID가 표시된 상태라면,
    $("#idSaveCheck").attr("checked", true); // ID 저장하기를 체크 상태로 두기.
  }

  $("#idSaveCheck").change(function(){ // 체크박스에 변화가 있다면,
    if($("#idSaveCheck").is(":checked")){ // ID 저장하기 체크했을 때,
      var userInputId = $("input[name='id']").val();
      setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
    }else{ // ID 저장하기 체크 해제 시,
      deleteCookie("userInputId");
    }
  });

  // ID 저장하기를 체크한 상태에서 ID를 입력하는 경우, 이럴 때도 쿠키 저장.
  $("input[name='id']").keyup(function(){ // ID 입력 칸에 ID를 입력할 때,
    if($("#idSaveCheck").is(":checked")){ // ID 저장하기를 체크한 상태라면,
      var userInputId = $("input[name='id']").val();
      setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
    }
  });
});

function submitCheck(){
  if($("input[name='user_id']").val()==''){
    alert("아이디를 입력해주세요");
    return;
  }
  if($("input[name='user_pw']").val()==''){
    alert("비밀번호를 입력해주세요");
    return;
  }
  $("#formformform").submit();
}
</script>


<?php
// 로그인 실패 redirect 시 뜨는 실패 알람

$urlPath = "$_SERVER[REQUEST_URI]";

if ($explodePath = explode('?', $urlPath)){
  if(count($explodePath)==2){
    if ($explodePath[1] == "fail"){
      echo "<script>alert('아이디 혹은 비밀번호를 다시 확인해주세요');</script>";
    }
  }
}
?>

<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Login</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 row_padding-xs" style="margin-top:50px;">
    <div class="col-sm-12 col-md-6 padding-left-0 padding-xs-right-100 " style="">
      <div class="col-xs-12 grey padding-left-0">
        <span style="font-size:20px;">회원 로그인</span>
      </div>
      <div class="col-xs-10 padding-left-0">

        <form action="/login/func_login_check" method="post" id="formformform">

          <div class="row" style="margin-top:20px; height: 25px;">
            <div class="col-xs-4 gal" style="padding-top:4px;">
              <span style="font-size:15px;">아이디</span>
            </div>
            <div class="col-xs-8 gal">
              <input type="text" name="user_id" style="width:100%;">
            </div>
          </div>
          <div class="row" style="margin-top:10px; height: 25px;">
            <div class="col-xs-4" style="padding-top:4px;">
              <span style="font-size:15px;">비밀번호</span>
            </div>
            <div class="col-xs-8">
              <input type="text" name="user_pw" style="width:100%;">
            </div>
          </div>

        </form>

        <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
          </div>
          <div class="col-xs-8">
            <input type="checkbox" id="idSaveCheck" style="">
            <span style="margin-left:6px;">아이디 저장</span>
          </div>
        </div>
        <!-- <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
          </div>
          <div class="col-xs-8"> -->

<?php
// require_once BASEPATH . '../facebook-sdk-v5/autoload.php';
// $fb = new Facebook\Facebook(['app_id' => '214340015575657',
// 'app_secret' => 'cad7051613820a8abbd70964efda8a2f',
// 'default_graph_version' => 'v2.5']);
// $helper = $fb->getRedirectLoginHelper();
// $permissions = ['public_profile','email', 'user_likes']; // optional
// $loginUrl = $helper->getLoginUrl('http://blankit.kr/login/facebook_callback', $permissions);
//
// echo "<div class=\"submit_button\"><a href=\"".$loginUrl."\" class=\"myButton\" style=\"width: 100%;\">페이스북으로 로그인</a></div>";

?>

        <!-- </div>
      </div> -->
      <div class="row" style="margin-top:15px; height: 25px;">
        <div class="col-xs-4" style="padding-top:4px;">
        </div>
        <div class="col-xs-8">
          <div class="col-xs-4 padding-left-0 padding-right-5">
            <a href="/join" style=""><div style="border-radius:5px; width:100%; height:25px; line-height:25px; border: 1px solid #B7B7B7; font-size:11px; text-align:center;"><span style="vertical-align:middle;">회원가입</span></div></a>
          </div>
          <div class="col-xs-8 padding-left-0 padding-right-0">
            <a href="" style=""><div style="border-radius:5px; width:100%; height:25px; line-height:25px; border: 1px solid #B7B7B7; font-size:11px; text-align:center;"><span style="vertical-align:middle;">아이디/비밀번호 찾기</span></div></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-2" style="padding-left: 5px; margin-top:20px;">
      <a onclick="submitCheck();"> <div style="width:60px; height:60px; border-radius:10px; background:#687C87; display:table; ">
        <div style="vertical-align:middle; text-align:center; display:table-cell;">
          <span style="font-size:12px; color:white;">회원<br>로그인</span>
        </div>
      </div></a>
    </div>


  </div>
  <div class="col-sm-12 col-md-6 padding-left-0 margin-xs-top-20 padding-xs-right-100">
    <div class="col-xs-12 grey padding-left-0">
      <span style="font-size:20px;">비회원 로그인</span>
    </div>
    <div class="col-xs-10 padding-left-0">
      <div class="row" style="margin-top:20px; height: 25px;">
        <div class="col-xs-5 col-sm-5 gal" style="padding-top:4px;">
          <span style="font-size:15px;">주문 고객 성명</span>
        </div>
        <div class="col-xs-7 col-sm-7 gal">
          <input type="text" style="width:100%;">
        </div>
      </div>
      <div class="row" style="margin-top:10px; height: 25px;">
        <div class="col-xs-4" style="padding-top:4px;">
          <span style="font-size:15px;">주문번호</span>
        </div>
        <div class="col-xs-8">
          <input type="text" style="width:100%;">
        </div>
      </div>
    </div>
    <div class="col-xs-2" style=" padding-left: 5px; margin-top:20px;">
      <div style="width:60px; height:60px; border-radius:10px; background:#687C87;display:table; ">
        <div style="vertical-align:middle; text-align:center; display:table-cell;">
          <span style="font-size:12px; color:white;">비회원<br>로그인</span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
