<?php 
function connect_to_datbase(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename ="BaseTest01";
    
    try{
        $spo =new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
        $spo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        echo"Connected successfully";
        return $pdo;
    }catch (PDOException $e){
        echo "Connection failed:".$e->getMessage();
    }
}
INSERT_INTO("id8");
VALUES("T-shirt noir","t-shirt coton de couleur noir","15.50","10");
?>
