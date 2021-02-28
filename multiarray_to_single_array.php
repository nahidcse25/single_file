<?php
    //$multi_arraytt=Array([0] => Array([0] => Array( [plan] => basic)[1] => Array( [plan] => small )[2] => Array(  [plan] => novice)[3] => Array( [plan] => professional)[4] => Array([plan] => master)[5] => Array [plan] => promo)[6] => Array ([plan] => newplan)));
    $multi = Array
        (
        [0] => Array
            (
                [0] => Array
                    (
                        [plan] => basic
                    ),
        
                [1] => Array
                    (
                        [plan] => small
                    ),
        
                [2] => Array
                    (
                        [plan] => novice
                    ),
        
                [3] => Array
                    (
                        [plan] => professional
                    ),
        
                [4] => Array
                    (
                        [plan] => master
                    ),
        
                [5] => Array
                    (
                        [plan] => promo
                    ),
        
                [6] => Array
                    (
                        [plan] => newplan
                    )
        
            )
        
        );
    $singleArray = array();
    foreach ($multi as $key => $value){
        $singleArray[$key] = $value['plan'];
    }
    echo '<pre>';
    var_dump($singleArray);

    /*$list = array('red', 'blue', 'white', 'green', 'black', 'orange', 'brown', 'violet', 'magenta'); 
        unset($list[3]);
        $l = $list[$voucher_id];
        var_dump($l);die;
        unset($list[array_search('orange', $list)]);
        var_dump($list);die;*/

        //var_dump($voucher_id);die;
            $voucher = array($voucher_id=>$voucher_id);
            echo 'given_v_id'.'<pre>';
            var_dump($voucher);
            $select = array('voucher_id','voucher_name');
            $data['contra_list'] = $this->Master_model->select_data('ac_voucher_setup',$select,$where)->result_array();
            $data['contra_list_pop'] = array_column($data['contra_list'], 'voucher_name','voucher_id');
            echo 'total_v_id'.'<pre>';
            var_dump($data['contra_list_pop']);
            unset($data['contra_list_pop'][array_search($voucher[$voucher_id], $data['contra_list_pop'])]);
            echo 'dif_v_id'.'<pre>';
            var_dump($data['contra_list_pop']);die;
        
?>