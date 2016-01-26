<script>
var url=encodeURIComponent("http://blankit.kr/store?url=http%3A%2F%2Fblankit.kr%2Fstore&title=테스트타이틀&description=테스트설명&image=http%3A%2F%2Fblankit.kr%2Fsource%2Fimage%2Fecobag_test.png");
var title='테스트타이틀';
var description='테스트설명';
var image=encodeURIComponent("http://blankit.kr/source/image/ecobag_test.png");
function cl(){
  FB.ui({
  method: 'share',
  href: 'http://blankit.kr/store?url='+url+'&title='+title+'&description='+description+'&image='+image,
}, function(response){});
}
</script>
<div style="height:400px;"></div>
<button onclick="cl()">dd</button>

<!-- https://www.facebook.com/dialog/share?app_id=214340015575657&amp;display=popup&amp;href=http%3A%2F%2Fblankit.kr&amp;redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer -->
