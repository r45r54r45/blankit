<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blank.It</title>
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

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header" style="padding-top: 10px;">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/">
            <img id="logo" alt="blankit" src="
	<?
	/*** 스토어 상품의 시간만료 체크 ***/
	
	
	
	/*** 여기까지, 스토어 상품의 시간만료 체크 ***/
  	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    	if($actual_link=="http://blankit.kr/")
      		echo "/source/image/logo_white.png";
    	else
      		echo "/source/image/logo.png";
    ?>

            ">
          </a>
          <?php echo "Welcome" . $this->session->userdata('user_name');
          // echo $_SESSION['facebook_access_token'];


          ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="    padding-top: 10px;">
          <ul class="nav navbar-nav">
            <li><a class="nav-color navbar-left" href="/aboutus">about us</a></li>
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
            <li><a style="margin-right:40px;" class="navbar-right" href="/submit"><div class="YourButton" style="margin-top: -5px;">내 작품 판매하기</div></a></li>
          </ul>
    </div>

      </div>
    </nav>
    <div id="root_container" class="container" style="overflow-x:hidden; overflow-y:hidden;">
