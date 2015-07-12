<?php


$HOST='cp47.webserver.pt\SQL21012ADV';


$serverName = "cp47.webserver.pt\SQL21012ADV"; //serverName\instanceName
      $connectionInfo = array( "Database"=>"esffra_bdadmin", "UID"=>"asd", "PWD"=>"5Ksux5&1","CharacterSet" => "UTF-8" );
      $conn = sqlsrv_connect( $serverName, $connectionInfo);

      if( $conn ) {
           //echo "Connection established.<br />";
      }else{
           echo "Connection could not be established.<br />";
           die( print_r( sqlsrv_errors(), true));
      }

$query=$query = "SELECT Nome, Foto ";
      $query .= "FROM Utilizador ";
      

$result = sqlsrv_query($conn, $query, array(), array("Scrollable"=>"buffered"));
/* 
$arr = array();
if($result->num_rows > 0) {
    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
     $arr[] = $row;
    }
}
 */
 $arr = array();
if($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 $arr[] = $row;
 }
}
 

# JSON-encode the response
echo $json_response = json_encode($arr);
?>


