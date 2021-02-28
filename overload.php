<?php
     class A {
        public function __call($name,$parm){
            echo '<pre>';
            print_r($parm);
        } 
    }	 
    $objA = new A;
    $objA->func1(2);
    $objA->func1(2,3,4);
    $objA->func1(2,3,4,4,5,3,6,4);
    $objA->func2(2,3,4,4,5,3,6,4);
    $objA->func2(2,3,4,4,5,3);
?>