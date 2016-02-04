<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

    <!-- 펀딩 세부페이지 페이스북 (일반인용)-->
    <?
  	if($this->uri->segment(1) == "funding" && $this->uri->segment(2) == "product"){
  		$idURL = $this->uri->segment(3); // 제품번호
  		foreach ($contents->result() as $row){
  			if ($idURL == $row->store_id){
  				$userName = $row->user_name;
  				$storeName = $row->store_name;
  				$storeExplain = $row->store_explain;
  				$storeImage = $row->store_image;
  				break;
  			}
  		}
  	?>
    <meta property="fb:app_id" content="214340015575657"/>
    <meta property="og:url"                content="<?php echo $actual_link;?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="<?php echo $userName . " 아티스트의 " . $storeName;?>" />
    <meta property="og:description"        content="<?php echo "독립 아티스트를 응원해주세요! 작품 설명: " . $storeExplain;?>" />
    <meta property="og:image"              content="<?php echo 'http://blankit.kr' . $storeImage;?>" />

    <?}?>

    <!-- 작품 제출완료 페이지 페이스북 (작가용)-->
    <?
  	if($this->uri->segment(1) == "submit" && $this->uri->segment(2) == "complete"){
  		$idURL = $_GET['id']; // 제품번호
  		foreach ($contents->result() as $row){
  			if ($idURL == $row->store_id){
  				$userName = $row->user_name;
  				$storeName = $row->store_name;
  				$storeExplain = $row->store_explain;
  				break;
  			}
  		}
  	?>
    <meta property="fb:app_id" content="214340015575657"/>
    <meta property="og:url"                content="<?echo $actual_link; ?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="<?echo $userName . "아티스트의 " . $storeName;?>" />
    <meta property="og:description"        content="<?echo "저의 작품으로 제품을 출시합니다. 작품 설명: " . $storeExplain;?>" />
    <meta property="og:image"              content="<?echo "http://blankit.kr/source/image/facebook_share_image.png" ?>" />
    <?}?>

    <!-- 스토어 세부페이지와 submit 페이지에서만 출력 끝-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>blank it</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" crossorigin="anonymous" ></script>
    <script src="/source/js/jquery-ui.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="/source/js/jquery.bxslider.min.js"></script>
    <script src="/source/js/dropzone.js" ></script>
    <script src="/source/js/common.js" ></script>
    <script src="/source/js/jquery.lazyload.min.js" ></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/source/css/dropzone.css" >
    <link rel="stylesheet" href="/source/css/common.css">
    <!-- jQuery library (served from Google) -->

    <!-- bxSlider Javascript file -->


  <!-- bxSlider CSS file -->
    <link href="/source/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/source/css/jquery-ui.theme.css" rel="stylesheet" />
    <link href="/source/css/jquery-ui.structure.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
	<header role="banner" class="navbar  navbar-default" >
    <!-- <nav class="navbar navbar-default"> -->
      <div class="container-fluid">

        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"
          style="margin-left: 10px; z-index: 9999;">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img id="logo" alt="blankit" src="
	<?
	/*** 스토어 상품의 시간만료 체크 ***/
	/*** 여기까지, 스토어 상품의 시간만료 체크 ***/

    	if($actual_link=="http://blankit.kr/"||$actual_link=="http://blankit.kr/artist"||$actual_link=="http://blankit.kr/funding"||$actual_link=="http://blankit.kr/funding/cloth"||$actual_link=="http://blankit.kr/funding/ecobag"||$actual_link=="http://blankit.kr/funding/pouch"||$actual_link=="http://blankit.kr/funding/done"||$actual_link=="http://blankit.kr/submit"||$actual_link=="http://www.blankit.kr/"||$actual_link=="http://www.blankit.kr/artist"||$actual_link=="http://www.blankit.kr/funding"||$actual_link=="http://www.blankit.kr/funding/cloth"||$actual_link=="http://www.blankit.kr/funding/ecobag"||$actual_link=="http://www.blankit.kr/funding/pouch"||$actual_link=="http://www.blankit.kr/funding/done"||$actual_link=="http://www.blankit.kr/submit")
      		echo "/source/image/logo_white.png";
    	else
      		echo "/source/image/logo.png";
    ?>

            ">
          </a>
        </div>
        <div class="side-collapse in" style="    ">
        <nav role="navigation" style="" class="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a class="nav-color navbar-left" href="/aboutus" style="    width: 100px;">about us</a></li>
            <li><a class="nav-color navbar-left" href="/artist">artist</a></li>
            <li class="dropdown">
              <a href="/funding" id="store_menu" class="nav-color navbar-left dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">funding</span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/funding/cloth">의류</a></li>
                  <li><a href="/funding/ecobag">에코백</a></li>
                  <li><a href="/funding/pouch">파우치</a></li>
                </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<?php
          		//로그인 & 로그아웃 변화
          		if ($this->session->userdata('status') == "1"){
          			echo '<li><a class="navbar-right main-page-navbar-right" href="/login/func_logout">logout</a></li>';
          		}
          		else {
          			echo '<li><a class="navbar-right main-page-navbar-right" href="/login">login/join</a></li>';
          		}
				// my blankit & cart 로그인 시에만 뜨기
          		if ($this->session->userdata('status') == "1"){
          			echo '<li><a class="navbar-right main-page-navbar-right" href="/mypage">my blankit</a></li>
            			<li><a class="navbar-right main-page-navbar-right" href="/order/cart">cart</a></li>';
          		}
          	?>

            <li><a style="" class="navbar-right main-page-navbar-right" href="/help">help</a></li>
            <li><a style="margin-right:40px;" class="navbar-right" href="/submit"><div class="YourButton" style="margin-top: -5px; width: 140px;">내 작품 판매하기</div></a></li>
          </ul>
        </nav>
      </div>


      <!-- 지워진 부분 -->
    </div>

      </div>
      
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73326444-1', 'auto');
  ga('send', 'pageview');

</script>
    </header>
    <div id="root_container" class="container " style="overflow-x:hidden; overflow-y:hidden;">
