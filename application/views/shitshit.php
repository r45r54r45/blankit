<?
$itemType=$_GET['itemType'];
$itemPos; //아이템이 삽입될 위치
$itemSizeImg; //제품 사이즈 이미지 주소
$itemBed=array(); //배경으로 쓰일 제품 이미지 목록
$itemDetail; //제품 설명 이미지
switch ($itemType){
  case "E_1": //에코백 E_1_1(블랙) E_1_2(카키) E_1_3(네이비)
    $itemPos="left:35.4%;top:46.100000000000006%;width:29.333333333333332%;height:39.93333333333333%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "E_2": //에코백-숄더 //숄더-아이보리가 이거임
    $itemPos="left:34.599999999999994%;top:46.1%;width:31.1%;height:42.199999999999996%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "E_3": //에코백-토트/크로스
    $itemPos="left:35.4%;top:49.6%;width:28.9%;height:39.36666666666667%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "E_4": //에코백 크로스형
    $itemPos="left:37.6%;top:57.199999999999996%;width:25.466666666666665%;height:34.66666666666667%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "P_1": //파우치
    $itemPos="left:23.799999999999997%;top:28.799999999999997%;width:52.56666666666666%;height:42.86666666666667%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "H_1": //후드 H_1_1(아이보리) H_1_2(네이비) H_1_3(블랙) H_1_4(그레이) H_1_5(레드) H_1_detail(클릭시)
    $itemPos="left:38%;top:40.2%;width:20.96666666666667%;height:18.46666666666667%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_4"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
  case "M_1": //맨투맨 M_1_1(아이보리) M_1_2(블랙) M_1_3 (네이비) M_1_4(그레이) M_1_5(레드) M_1_detail(클릭시)
    $itemPos="left:37%;top:35%;width:23.066666666666666%;height:20.333333333333332%;";
    $itemSizeImg="/source/product/".$itemType."_size.png";
    array_push($itemBed,"/source/product/".$itemType."_1"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_2"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_3"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_4"."_bed.jpg");
    array_push($itemBed,"/source/product/".$itemType."_5"."_bed.jpg");
    $itemDetail="/source/product/".$itemType."_detail.jpg";
  break;
}
?>
