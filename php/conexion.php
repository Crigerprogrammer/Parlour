<?php 
$servername = 'tcp:parlor.database.windows.net,1433'; 
try  
{  
    $conn = new PDO( "sqlsrv:server=$servername ; Database=parlour", "parlouradmin", "Pasteleria2021$$");  
}  catch(PDOExcepction $e) {
    echo $e;
} 


if($conn == true)
     echo 'Si se conecto';


//echo 'Hola';