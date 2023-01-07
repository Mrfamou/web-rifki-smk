<?php

    $conn= mysql_connect("localhost","root","");
      $db= mysql_select_db("abc",$conn);
      
//creAT CONECTION
$connection = new mysqli($conn,$db);
  
  //check koneksi
  if ($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
  }
//read all row fromdatabase table
$sql = "SELECT * FROM `abc` WHERE 1";
$result = connection->query($sql);

//raech data of each row
while($row =$result->fetch_assoc()) {
}
      
      
      
     $name=     $_POST['Name'];
     $name=     $_POST[Email];
     $name=     $_POST[Pesan];


?>
