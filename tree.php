<?php
    ob_start();
    session_start();
    //database credentials
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define('DBNAME','acc_abco');
    try {

        //create PDO connection
        $PDO = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        //show error
        echo '<p class="bg-danger">'.$e->getMessage().'</p>';
        exit;
    }
    $sql = "SELECT  stock_group_id,stock_group_name,under FROM stock_group";
    $query = $PDO->prepare($sql);
    $query->execute();
    $result_array = $query->fetchAll(PDO::FETCH_ASSOC);
    //echo count($result_array).'<br/>';
    //echo '<pre>';
    //print_r($result_array);die;    
    $new = array();
    foreach ($result_array as $a){
        $new[$a['under']][] = $a;
    }
    $tree = createTree($new, array($result_array[0]));
    
    function createTree(&$list, $parent){
        //echo count($list).'<br/>';
        //echo '<pre>';
        //print_r($list);
        $tree = array();
        foreach ($parent as $k=>$l){
            if(isset($list[$l['stock_group_id']])){
                $l['children'] = createTree($list, $list[$l['stock_group_id']]);
                //echo '<pre>';
                //print_r($l['children']); 
            }
            $tree[] = $l;
        } 
        return $tree;
    }
    foreach ($tree as $value) {
        echo $value['stock_group_name'].'<br/>';
        foreach($value['children'] as $child){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$child['stock_group_name'].'<br/>';         
            foreach($child['children'] as $under_child){
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$under_child['stock_group_name'].'<br/>';
            }
        }
    }
?>