<?php
    if(isset($_POST['Submit'])){ 
        $number = $_POST['number'];
        //$number = 1111111111.0;
        echo 'Given Number='.$number.'<br/>';
        if (strpos($number, '.') !== false) {
            $integer = split ("\.", $number)[0];
            $float = '.'.split ("\.", $number)[1];
        }else{
           $integer = $number;
            $float = '';
        }
        $last_3_digit = substr($integer,-3);
        $first = substr($integer, 0, -3);
        $len = strlen($first);
        if($len>=2){
            if($len%2!=0){
                $remove = substr($first, 0, 1).',';
                $rest = substr($first, 1);
            }else{
                $remove = '';
                $rest = $first;
            }
            $array = str_split($rest,2);
            $merge_value = '';
            for($i=0;$i<sizeof($array);$i++){
                //echo $array[$i].',';
                $merge_value .= $array[$i].',';
            }
            $merge_value .= $last_3_digit;
            echo 'Convert Number='.$remove.$merge_value.$float;
        }elseif($len==1){
            echo 'Convert Number='.$first.','.$last_3_digit.$float;
        }else{
            echo 'Convert Number='.$last_3_digit.$float;
        }
    } 
    
?>
 <form action="comma_two.php"  method="post">
  Enter Number:<input type="text" name="number"><br>
  <input type="submit" name="Submit">
</form> 