<?php
	// *convert array to object* 
	$array_name = array(
			'id'=> '321313',
			'username'=>'shahbaz',
			'age'=> 25,
			'email'=>'fshgfg@gmail.com'
		);

	$object = (object) $array_name;

	//now it is converted to object and you can access it.
	echo $object->username.'</br>'.$object->id.'</br>';
	print($array_name['age']);

	$object = new stdClass();
	foreach ($array_name as $key => $value)
	{
	    $object->$key = $value;
	}
	echo '</br>'.$object->email.'</br>';

	
	$array_mul = array(
		'addr'=>array(
			'village'=>'raipur',
			'post'=>'gangni',
			'thana'=>'gangni',
			'dist'=>'meherpur'
		)
	);
	function array_to_obj($array, &$obj)
	{
	    foreach ($array as $key => $value)
	    {
	    	if (is_array($value))
	    	{
	   	        $obj->$key = new stdClass();
	   	 	    array_to_obj($value, $obj->$key);
		    }
		    else
		    {
		    	$obj->$key = $value;
		    }
	    }
    	return $obj;
	}
	function arrayToObject($array)
	{
	 $object= new stdClass();
	 return array_to_obj($array,$object);
	}
	$myobject = arrayToObject($array_mul);
	echo '<pre>';
	print_r($myobject);
	echo '</pre>'.'</br>';
	foreach($myobject as $obj)
	{
	  
	}
	echo $obj->village.'</br>';echo $obj->post;
?>