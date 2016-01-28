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
</style>
<script>
function banner_generator(){
  var width = document.documentElement.clientWidth;
  $(".banner>img").css("margin-left","-"+($(".banner>img").width()-width)/2+"px");
}
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
  banner_generator();
  $(window).on("resize",function(){
    $("#root_container").css("height",$(".banner").height()+"px");
    banner_generator();
  });
  $("#goalNum").selectmenu();
  $("#goalNum-button").css("margin-top","10px");
});

function checkSubmit(){
	if ($this->session->userdata('user_id')){
	  	alert('성공적으로 업로드 되었습니다.');
	  	$("#formform").submit();
	}
	else {
		alert('로그인 하셔야 작품을 제출할 수 있습니다.');
	}
}
</script>
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
      <img src="/source/image/submit_guide.png" class="img img-responsive" style="margin-top: 30px;d">
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
  </div>
  <div class="row hidden-sm hidden-md hidden-lg" style="margin-top:30px; margin-bottom:30px; ">
    <span style="display:block; text-align:center;">작업 파일 다운로드는 PC에서만 제공합니다.</span>
  </div>
  <div class="row hidden-xs" style="margin-top:30px; margin-bottom:30px; ">
    <div class="col-xs-2">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B7DWyelmxAOpbHJIRmlONWpxNzg/view?usp=sharing">
        <img src="/source/image/download_1.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B7DWyelmxAOpbUVETEhxUkdlaEE/view?usp=sharing">
        <img src="/source/image/download_2.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-1">
    </div>
    <div class="col-xs-2 download_cover">
      <a href="https://drive.google.com/file/d/0B7DWyelmxAOpXzhRNWhXaUVSZWc/view">
        <img src="/source/image/download_3.png" class="download_img img img-responsive">
      </a>
    </div>
    <div class="col-xs-2">
    </div>
  </div>
  <form action="/submit/func_checkSubmit" method="post" id="formform">
  <div class="row">
    <div class="col-xs-12" style="margin-top:30px;margin-bottom:20px; border-top: 1px solid #D3D3D3;">
      <span style="margin-top:30px; text-align:center; display:block; font-size: 25px; color:#655453; font-weight:bold;">
        제품 파일 업로드
      </span>
    </div>
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
            <input type="radio" name="storeType" id="type1" value="1"><label for="type1">의류</label>
          </div>
          <div class="menu_input_radio">
            <input type="radio" name="storeType" id="type2" value="2"><label for="type2">에코백</label>
          </div>
          <div class="menu_input_radio">
            <input type="radio" name="storeType" id="type3" value="3"><label for="type3">파우치</label>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-xs-12">
          <div class="tt" >블랭킷 X 아티스트 목표 구매자수</div>
          <select id="goalNum" style=" width:100%" name="storeGoal">
            <option value="default">선택</option>
            <option value="5">5개</option>
            <option value="10">10개</option>
            <option value="20">20개</option>
            <option value="40">40개</option>
          </select>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-xs-12">
          <div  class="tt">블랭킷 X 아티스트 작품 파일</div>
          <input type="file" style="margin-top:10px;width:100%;">
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
  </div>
  <div class="row" style="margin-top:20px;">
    <div class="col-xs-12" style="text-align:center;">
      <a onclick="checkSubmit();" style="cursor:pointer;"><div style="display:block; width:200px; border:1px solid #337ab7; margin:10px auto; padding:10px 0px; border-radius:10px; color:#337ab7; font-size:15px; font-weight:500;">업로드하기</div></a>
    </div>

  </div>

</form>

</div>
