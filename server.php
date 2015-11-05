<?php
require_once "jssdk.php";
$jssdk = new JSSDK(3de61f5929", "bcb88ca806c401b392cab2687f8d0899");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<html>
<head>
  <meta charset="gbk">
<title>
<?php 
$serverName = "BD74DF4, 2400"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"gps", "UID"=>"gps", "PWD"=>"y2e0a1r2");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$ID=$_SERVER['QUERY_STRING'];
$str = explode("&",$ID);
$stmt=sqlsrv_query($conn,"select name from vote where id='$str[0]'");
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$name = sqlsrv_get_field( $stmt, 0);
$Name=iconv('GB2312','utf-8//IGNORE',$name);
echo "$Name",邀请你给他的产品起名！;
?> 
</title>
  <meta name="viewport" content="width=device-width,initital-scale=1">
  <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
  .right{ float:right}
  .left{ float:left}
  .textarea{
   height:30px;
   width:300px;
   font-size:20px;}
  </style>
  <div class="right"><img src="./share.png" width="70" height="70"><p><font size="4" color="#FF0000"> 分享有礼</font></p></div>
<script>
function validation(){
if(document.getElementById('pro').value==''||document.getElementById('pro').value=='产品名称:(必填)'){
   alert('产品名不能为空!');
   return false;
}
if(document.getElementById('nam').value==''||document.getElementById('nam').value=='产品名称:(必填)'){
   alert('您的名字不能为空!');
   return false;
}     //这个基本没有什么说的，就是弹出一个提醒的对话
}
</script>
<script>
var number=3; //定义条目数
function LMYC() {
var lbmc;
    for (i=1;i<=number;i++) {
        lbmc = eval('LM' + i);
        lbmc.style.display = 'none';
    }
}
function ShowFLT(i) {
    lbmc = eval('LM' + i);
    if (lbmc.style.display == 'none') {
        LMYC();
        lbmc.style.display = '';
    }
    else {
        lbmc.style.display = 'none';
    }
}
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      "onMenuShareTimeline",
    ]
  });
  // wx.ready(function () {
    在这里调用 API
	  // wx.onMenuShareTimeline({
      // title: '邀请你给他的产品起名！',
      // link: 'http://www.goldmel.com/server.php?765',
      // imgUrl: 'http://www.goldmel.com/compass.png',
      // trigger: function (res) {
        // alert('用户点击分享到朋友圈');
      // },
      // success: function (res) {
        // alert('已分享');
      // },
      // cancel: function (res) {
        // alert('已取消');
      // },
      // fail: function (res) {
        // alert(JSON.stringify(res));
      // }
    // });
  // });
</script>
</head>
<body align="left" bgcolor="FFFFFF">
<h3>千元现金万元大礼为第二代“护航光动能电子指南针”求产品名称!</h3>
<p><img src="./信息白色.jpg" width="230" height="130"></p>
<div class="center">	
<dl>
<dt onClick=javascript:ShowFLT(3) href="javascript:void(null)"><a href="javascript:;"><img src="./fold.jpg" width="15" height="15">第二代指南针介绍</a></dt>
<dd id=LM3 style="DISPLAY: none">
<li>太阳能供电，透明液晶抬头显示，无需连线,即买即装。
<li>来电,来信息提醒
<li>卫星,气压海拔，卫星同步时钟
<p><img src="./QQ图片20151021155555.jpg" width="230" height="130"></p>
<li>驾驶行为分析<br>
通过内置加速度传感器，采集驾驶员加速度、转弯、减速等行为数据、通过大数据计算，分析驾驶员驾驶行为，给出驾驶建议。
</li>
<li>导航辅助<br>
结合百度导航，给出简明导航辅助信息，并显示在在透明显示屏
</li>
<li>通过蓝牙连接手机，提醒手机信息。</li>
<p><img src="./QQ图片20151021155605.jpg" width="230" height="130"></p>
<li>好友靠近提醒<br>
好友靠近提醒，可打开手机进行进一步交流。</li>
<p><img src="./QQ图片20151021155639.jpg" width="230" height="130"></p>
</dd>
</dl>
</div>
<div>
<form action="middle.php" method="get">	  
<textarea name="product" id="pro" cols=12 rows=1  class="textarea" onblur="if(this.value =='') {this.value = '产品名称:(必填)'}" 
onfocus="if(this.value == '产品名称:(必填)'){ this.value = '';this.style.color='#737e73';}" >产品名称:(必填)</textarea><br>
<textarea name="name" id="nam" cols=12 rows=1  class="textarea" onblur="if(this.value =='') {this.value = '您的名字:(必填)'}" 
onfocus="if(this.value == '您的名字:(必填)'){ this.value = '';this.style.color='#737e73';}" >您的名字:(必填)</textarea><br>
<textarea name="weixin" cols=12 rows=1  class="textarea" onblur="if(this.value =='') {this.value = '微信号码:(选填)'}" 
onfocus="if(this.value == '微信号码:(选填)'){ this.value = '';this.style.color='#737e73';}" >微信号码:(选填)</textarea><br>
<textarea name="telephone" cols=12 rows=1  class="textarea" onblur="if(this.value =='') {this.value = '电话号码:(选填)'}" 
onfocus="if(this.value == '电话号码:(选填)'){ this.value = '';this.style.color='#737e73';}" >电话号码:(选填)</textarea><br>
<textarea name="explain" cols=12 rows=2  class="textarea" onblur="if(this.value =='') {this.value ='名称详细解释'}" 
onfocus="if(this.value == '名称详细解释'){ this.value = '';this.style.color='#737e73';}" >名称详细解释</textarea><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<input type="submit" value="提交" style="width:300px;height:40px;background: #FF0000; color: #fff;" size="12" onclick="validation()">
           <input type="hidden" name="stat" value="<?php echo $_SERVER['QUERY_STRING']; ?>" ><br>
<h3>活动奖励</h3>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp您可以填上您为产品起的名称、您的名字（或昵称）、微信号、电话号码（方便感谢联系您，绝对不发广告）。如果您有兴致，还可以为您选的名字加以详细解释。</p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp如果您起的的名字我最终选定为产品名称，并且您是一个起这个名字的朋
友。我们不但会赠送您一台第二代“护航光动能电子指南针”，更会以1000
元现金形式向您表示感谢。</p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp您还可以将次活动分享给您的朋友圈,我们会统计信息来源。您的朋友起
的名字被我们选中，我们会赠送您一台高大上的汽车护航表（价值1960）。</p>
<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp我们还会在所有起这个名字的朋友中随机抽取10名幸运者,赠送一台第二
 代“护航光动能电子指南针”表示感谢（中奖率很高哦）。</p>		   
<br>
<br>	   
<?php
$serverName = "-8FBD74DF4, 2400"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"gps", "UID"=>"gps", "PWD"=>"y2e0a1r2");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$stmt=sqlsrv_query($conn,"select product,name from vote where id=(select max(id) from vote) and name is not null");
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

$product = sqlsrv_get_field( $stmt, 0);
$Product=iconv('GB2312','utf-8//IGNORE',$product);
$name = sqlsrv_get_field( $stmt, 1);
$Name=iconv('GB2312','utf-8//IGNORE',$name);
?>
<?php
$serverName = "8FBD74DF4, 2400"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"gps", "UID"=>"gps", "PWD"=>"y2e0a1r2");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$stmt=sqlsrv_query($conn,"select top 10 product , name, convert(char,orderdate,120) as date from vote order by id desc");
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
echo "<table border='1px' cellspacing='0px' style='border-collapse:collapse' bordercolor='#FF6347' align='center'>
<tr>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名称</th>
<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp姓名</th>
<th>提交日期</th>
</tr>
<tr>
<td>$Product</td>
<td>$Name</td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp刚刚</td>
</tr>
";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
	$product=iconv('GB2312','utf-8//IGNORE',$row[0]);
	$name=iconv('GB2312','utf-8//IGNORE',$row[1]);
	$date=iconv('GB2312','utf-8//IGNORE',$row[2]);
$Date=date('y.m.d/H:i', strtotime($date));
echo "<tr>";
echo "<td>" .$product."</td>";
echo "<td>" .$name."</td>";
echo "<td>" .$Date."</td>";
echo "</tr>";
}
echo "</table>";
?>		   
</form>
</div>	
<br>
<br>	
<div class="left">	
<dl>
<dt onClick=javascript:ShowFLT(1) href="javascript:void(null)"><a href="javascript:;"><img src="./fold.jpg" width="15" height="15">第一代指南针介绍</a></dt>
<dd id=LM1 style="DISPLAY: none">
<p></p>
<p><img src="./compass2.jpg" width="230" height="130"></p>
<p><img src="./compass.gif" width="230" height="130"></p>
<p><img src="./hhb.jpg" width="230" height="130"></p>
<p><img src="./山之航最后一版_10.jpg" width="230" height="130"></p>
</dd>
</dl>
<a href="http://www.tpy10.net/create.php?id=huhang99">微信关注</a>
<p><img src="./huhang99.jpg" width="130" height="130"></p>
</div>
</body>
</html>
