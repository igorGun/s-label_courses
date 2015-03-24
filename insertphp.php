<?php

//cho $name.' '.$cost;
$host = "localhost";
$user = "ihor";
$pass = "1234";
$bd_name='main';

 
 	$name=$_POST['name'];
    $cost=$_POST['cost'];
    $arrPost=array('name'=>$name,'price'=>$cost);
   
    $link = mysqli_connect($host,$user,$pass,$bd_name);

    $res = mysqli_query($link, "SELECT name, price FROM `телефоны`");

while($row = mysqli_fetch_assoc($res)) {
   $new[]=$row;
	}
	$c=(count($new)-1);
foreach ($new as $key => $val) {
        
	  if ($val==$arrPost || ($name='' && $cost='')) {
		break;
    }elseif($val!=$arrPost && $key==$c){
        $r = mysqli_query($link, "INSERT INTO телефоны (name, price) VALUES ('$name','$cost')");
        break;
    }
}
	/*if (!in_array($arrPost, $new)){
     $r = mysqli_query($link, "INSERT INTO телефоны (name, price) VALUES ('$name','$cost')");
	}*/
mysqli_close($link);

//include('find.php');
// header("insert.php");
  header("Location:insert.php");//redirect
   exit();
?>

	