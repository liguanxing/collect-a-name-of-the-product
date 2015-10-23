<?php
$serverName = "ZZDIC-8FBD74DF4, 2400"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"gps", "UID"=>"gps", "PWD"=>"y2e0a1r2");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$stmt=sqlsrv_query($conn,"select MAX(id) from vote");
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}
$id = sqlsrv_get_field( $stmt, 0);
echo "$id";
// sqlsrv_close($conn); 
?>
<?php 
$url = "http://www.goldmel.com/server.php?$id";  
if (!empty($url))    
{    
    Header("HTTP/1.1 303 See Other"); //这条语句可以不写  
    Header("Location: $url");  
}    
?>
