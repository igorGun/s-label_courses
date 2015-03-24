<?php
                      //1
/*
//$maxV=0;                    
$arr=array(1,2,5,6,6,9,3,5,5,0);
$arrN=array_count_values ($arr);
ksort($arrN);
foreach ($arrN as $k => $v) {
	if ($v>$maxV) {
		$maxV=$v;
		$maxK=$k;
	}
}
echo 'Число '.$maxK.' повторений '.$maxV.'<br>';
print_r($arrN);
*/
                   //2
/*
$arr=range(-50, 49);
shuffle($arr);
$c=count($arr);
//print_r($arr);
for ($i=0; $i < $c; $i++) { 
	if ($arr[$i]>=-5 && $arr[$i]<=5) {
		$newArr[]=$arr[$i];
	}
}print_r($newArr);
*/

               //3(not end)list?

$arr1=array(1, 10,0,64,11,-5,9);
$arr2=array(2,7,19,4,42,5, 15);
$c1=count($arr1);
$c2=count($arr2);
for ($i=0; $i < $c1; $i++) { 
		for ($j=0; $j < $c2; $j++) { 
		
		if ($arr1[$i]<$arr2[$j] && $arr1[$i]!=$arr2[$j]) {
			
			$arr2[]=$arr1[$i];
			//echo $arr2[$j].'<br>';	
		}
}

		
}

//print_r($arr1);
print_r($arr2);

                 //4
/*
$res=0;
$arr=range(-5, -1);
$c=count($arr);
for ($i=0; $i < $c; $i++) { 
	$res+=$arr[$i];
	
}
print_r($res/$c) ;
*/
                //5
/*                
$arr=range(-20, 20);
shuffle($arr);
foreach ($arr as $key => $val) {
	if ($val>0 && $key%2==0) {
		$newArr[]=$val;
	}
}
$sum=array_sum($newArr);
print_r($arr);
print_r($newArr);
echo $sum;
*/
                  //6(question)
/*
$arr=array(1,2,89,4,0,87,2,7,4,146,9,6,5);
$max=0;
for ($i=0; $i < count($arr); $i++) { 
	if ($max<= $arr[$i]) {
		$max=$arr[$i];
	}

}
for ($i=0; $i < count($arr); $i++) { 
	if ($arr[$i]==$max) {
		unset($arr[$i]);
		$arr=array_values($arr);
	}
}
$arr[]=$max;
echo $max.'<br>';
print_r($arr);
*/
                  //7
/*
$arr=array(2,5,8,56,90,34,27,38,8,68,4);
$cou=count($arr);
$mid=array_sum($arr)/$cou;
//echo $mid;
foreach ($arr as $k => $v) {
	$per=abs(($v-$mid)/$mid);
	echo $per.'<br>';
	if ($per>0.5) {
		$newArr[]=$v;
	}
	}
print_r($newArr);
*/
                //8
/*
$cart =array(array('number'=> 5, 'id'=>'1384'),array('number'=> 1, 'id'=>'1434'));
$names =array('1384'=> 'Рыба Клоун','1434'=>'Карась отборный');
$prices = array('1384'=>5000,'1434'=> 6500);
foreach ($cart as $key => $val) {
	foreach ($prices as $k => $v) {	
	if ($val['id']==$k) {
		$sum+=($val['number']*$v);
		//echo $v.'<br>';
	}}
}
echo $sum;
*/
                 //9
/*
$arr=range(-10, 15);
shuffle($arr);
$c=0;
$s=1;
for ($i=0; $i < count($arr); $i++) { 
	if ($arr[$i]>0) {
		//if ($c==0 || $c<7) {
			$c++;
		//}
		if ($c==1 || $c==3 ||$c==6) {
			echo $arr[$i]."<br>";
            $s*=$arr[$i];
            $newArr[]=$i;
		}	
	}	 
}	
echo $s.'<br>';
print_r($newArr);
print_r($arr);
*/
           //10(not end)
/*
$max=0;
$count=0;
$newCount=0;
$arr=array(2,8,94,45,67,78,456,89,34,940);
foreach ($arr as $key => $val) {
	if ($max<$val) {
		$max=$val;
	    $count++;
	    $newArr[]=$val;
	    
	    
	}
	else{
		 if ($count>$newCount) {
		 	$newCount=$count;
		 	$finArr=$newArr;
		 }elseif ($count<$newCount){
        $count=0;
        $m=$val;
	    unset( $newArr);
	   // $newArr[]=$m;
        }
        //$newArr[]=$m;
	}
	
}
echo $newCount;
print_r($finArr);*/
/*
$max=0;
$count=0;
$newCount=0;
$arr=array(2,8,94,102,45,67,78,456,89,34,940);
$prev = $arr[0] - 1;
$finArr = array();
 
foreach ($arr as $key => $val) {
 
	if($prev < $val) {
		$finArr[$newCount][] = $val;
	} else {
		$newCount++;
		$finArr[$newCount][] = $val;
	}
 
	$tempCount = count($finArr[$newCount]);
	$count = $tempCount > $count ? $tempCount: $count;
	$prev = $val;
}
 
foreach($finArr as $k => $arr) {
	if(count($arr) < $count) unset($finArr[$k]);
}
 
echo $count . "\n";
print_r($finArr);*/

/*
$a=5;
for ($i=0; $i < 6; $i++) { 
	if ($i==6) {	
	echo '<br>';}
	else{echo $a;}
	for ($j=0; $j < 6; $j++) { 
		
		echo $a;
	}
	}
	*/
	/*
$arr = array(array(5,5,5),array(5,0,0),array(5,0,7));
$firstThreeStr = ''; // для первых 3х строк
$lastThreeStr = ''; // для последних 3х строк
 
foreach($arr as $el) {
	$firstStrPart = ''; // для первых 3 чисел каждой  строки
	$lastStrPart = '';// для последних 3 чисел каждой  строки
 
	foreach($el as $number) {
		$firstStrPart = $firstStrPart . $number; 
		$lastStrPart = $number . $lastStrPart;
	}
 
	$firstThreeStr = $firstThreeStr . $firstStrPart.$lastStrPart . '<br>';
	$lastThreeStr = $firstStrPart . $lastStrPart .'<br>'.$lastThreeStr;
}
echo $firstThreeStr.$lastThreeStr;
*/
?>
