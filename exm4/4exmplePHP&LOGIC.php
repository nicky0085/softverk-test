
<?php


class GroupNumber
{
	public function getGroupNumber($group)
	{
		$group = array(20,15,9,5,3);

		for($i=1; $i<=500; $i++){

			if($i%20)echo $i.",";

			if($i%15)echo $i.",";

			if($i%9)echo $i.",";

			if($i%5)echo $i.",";
			
			if($i%3)echo $i.",";

			$group = $i;
		}

		return $group; 
	} 
}
		
			// switch ($group) {
			//     case 20:
			//     	$i % 20 ==0;
			//         echo $i.",";
			//         break;
			//     case 15:
			//     	$i % 15 ==0;
			//         echo $i.",";
			        
			//         break;
			//     case 9:
			//         $i % 9 == 0;
			//         echo $i.",";
			//         break;
			//     case 5:
			//         $i % 5 ==0;
			//         echo $i.",";
			//         break;
			//     case 3:
			//         $i % 3 ==0;
			//         echo $i.",";
			//         break;
			//     default: ;      
			// }



	$group_number = new GroupNumber();
	
	 	$group_20 = $group_number->getGroupNumber(20);
	  	$group_10 = $group_number->getGroupNumber(15);
	   	$group_9 = $group_number->getGroupNumber(9);
	    $group_5 = $group_number->getGroupNumber(5);
	    $group_3 = $group_number->getGroupNumber(3);


		echo 'Group#20:'.implode(',', $group_20);
		echo 'Group#15:'.implode(',', $group_15);
		echo 'Group#9:'.implode(',', $group_9);
		echo 'Group#5:'.implode(',', $group_5);
		echo 'Group#3:'.implode(',', $group_3);

		
		// $group = array("20","15","9","5","3");
		// echo implode(" ",$group);
	
?>