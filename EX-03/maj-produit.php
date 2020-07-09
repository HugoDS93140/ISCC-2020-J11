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
$sql = "UPDATE produit SET nom= short bleu quantite= 5 WHERE id="1" ";
?>