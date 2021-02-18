 <?php 
function div($a,$b){
	$a -=$a%$b;
	

	for ($i=0; $a !=0 ; $i++) {
		$a -=$b;
	}
	 print_r($i);
}


div(7,2);

