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
    <!-- 스토어 세부페이지와 submit 페이지에서만 출력 시작-->
    <?if(isset($_GET['url'])){?>
    <meta property="fb:app_id" content="214340015575657"\/>
    <meta property="og:url"                content="<?echo $_GET['url'];?>" \/>
    <meta property="og:type"               content="website" \/>
    <meta property="og:title"              content="<?echo $_GET['title'];?>" />
    <meta property="og:description"        content="<?echo $_GET['description'];?>" />
    <meta property="og:image"              content="<?echo $_GET['image'];?>" />
    <?}?>
    <!-- 스토어 세부페이지와 submit 페이지에서만 출력 끝-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>blank it</title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" crossorigin="anonymous" ></script>
    <script src="/source/js/common.js" ></script>
    <script src="/source/js/dropzone.js" ></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/source/css/dropzone.css" >
    <link rel="stylesheet" href="/source/css/common.css">
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="/source/js/jquery.bxslider.min.js"></script>
    <script src="/source/js/jquery-ui.min.js"></script>
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
  <body style="  display: none;">
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

          <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->

          <a class="navbar-brand" href="/">
            <img id="logo" alt="blankit" src="
	<?
	/*** 스토어 상품의 시간만료 체크 ***/



	/*** 여기까지, 스토어 상품의 시간만료 체크 ***/

    	if($actual_link=="http://blankit.kr/"||$actual_link=="http://blankit.kr/artist"||$actual_link=="http://blankit.kr/store"||$actual_link=="http://blankit.kr/store/cloth"||$actual_link=="http://blankit.kr/store/ecobag"||$actual_link=="http://blankit.kr/store/pouch"||$actual_link=="http://blankit.kr/store/done"||$actual_link=="http://blankit.kr/submit")
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
              <a href="#" id="store_menu" class="nav-color dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">funding</span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/store/cloth">의류</a></li>
                  <li><a href="/store/ecobag">에코백</a></li>
                  <li><a href="/store/pouch">파우치</a></li>
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
            <li><a style="margin-right:40px;" class="navbar-right" href="/submit"><div class="YourButton" style="margin-top: -5px; width: 130px;">내 작품 판매하기</div></a></li>
          </ul>
        </nav>
      </div>


      <!-- 지워진 부분 -->
    </div>

      </div>
    </header>
    <div id="root_container" class="container " style="overflow-x:hidden; overflow-y:hidden;">
