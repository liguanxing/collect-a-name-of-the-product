<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>提交数据</title>
</head>
<body>
<?php
$serverName = "ZZDIC-8FBD74DF4, 2400"; 
$connectionInfo = array( "Database"=>"gps", "UID"=>"gps", "PWD"=>"y2e0a1r2");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}
$cp=iconv('utf-8','GB2312//IGNORE',$_GET["product"]);
$mz=iconv('utf-8','GB2312//IGNORE',$_GET["name"]);
$wx=iconv('utf-8','GB2312//IGNORE',$_GET["weixin"]);
$dh=iconv('utf-8','GB2312//IGNORE',$_GET["telephone"]);
$tj=iconv('utf-8','GB2312//IGNORE',$_GET["stat"]);
$js=iconv('utf-8','GB2312//IGNORE',$_GET["explain"]);
if($_GET["product"]&&$_GET["name"]&&$_GET["product"]!='产品名称:(必填)'&&$_GET["name"]!='产品名称:(必填)'){
$sql = "INSERT INTO vote (product,name,weixin,telephone,stat,explain) VALUES ('$cp','$mz','$wx','$dh','$tj','$js')";
$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql, $params);
echo <<<script
<script>
window.location.href="redirect.php";
alert('你已经成功提交数据!');
</script>
script;
exit;   
}
else
{echo <<<script
<script>
alert('请填写数据!');
window.history.go(-1);
//window.location.href="redirect.php";
</script>
script;
exit;}
if( $stmt === false ) {     
}
sqlsrv_close($conn); 
?> <br> 
</body>
</html>  
