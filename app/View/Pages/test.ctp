<?php 
$test = array('key1'=>array('subKey1' => 'subValue1'));


foreach ($test as $key => $item){
	if(is_array($item)){
		echo $key.'<br/>';
 		foreach ($item as $subKey => $subItem){
 			echo $subKey.': '.$subItem.'<br/>';
 		}
	}
}
?>