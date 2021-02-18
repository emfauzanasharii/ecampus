<?php  
//4
$i=1;
for ($i=1; $i <=50 ; $i++) { 

	if ($i%3==0 and $i%5 ==0) {
		echo $i. " fooBar <br>";
	
	}elseif ($i%3==0) {
		echo $i." Foo <br>";
	}elseif ($i%5==0) {
		echo $i." Bar <br>";

	}else{
		echo $i."<br>";
	}
	
}
?>