<script>
var url=encodeURIComponent("http://blankit.kr");
var title='테스트타이틀';
var description='테스트설명';
var image=encodeURIComponent("http://blankit.kr/source/image/ecobag_test.png");
function cl(){
  FB.ui({
  method: 'share',
  href: 'http://blankit.kr/test/share?url='+url+'&title='+title+'&description='+description+'&image='+image,
}, function(response){});
}
</script>
<div style="height:400px;"></div>
<button onclick="cl()">dd</button>
