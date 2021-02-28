<?php
    function convert_number($number) 
    { //echo $number;die;
        $my_number = $number;
        if (($number < 0) || ($number > 999999999999)) 
        { 
            throw new Exception("Number is out of range");
        }
        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
            "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
            "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
            "Nineteen"); 
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
            "Seventy", "Eigthy", "Ninety");
        $point_decimal = array('0'=>'zero','1'=>'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five','6'=>'six','7'=>'seven','8'=>'eight', '9'=>'nine');
        $decimal     = ' point ';
        $res = $fraction = null;
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
        $Kt = floor($number / 10000000); /* Koti */
        $number -= $Kt * 10000000;
        $Gn = floor($number / 100000);  /* lakh  */ 
        $number -= $Gn * 100000; 
        $kn = floor($number / 1000);     /* Thousands (kilo) */ 
        $number -= $kn * 1000; 
        $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
        $number -= $Hn * 100; 
        $Dn = floor($number / 10);       /* Tens (deca) */ 
        $n = $number % 10;               /* Ones */ 
        $res = ""; 
        if ($Kt) 
        { 
            $res .= convert_number($Kt) . " crore "; 
        } 
        if ($Gn) 
        { 
            $res .= convert_number($Gn) . " Lakh"; 
        } 
        if ($kn) 
        { 
            $res .= (empty($res) ? "" : " ") . 
                convert_number($kn) . " Thousand"; 
        } 
        if ($Hn) 
        { 
            $res .= (empty($res) ? "" : " ") . 
                convert_number($Hn) . " Hundred"; 
        } 
        if ($Dn || $n) 
        { 
            if (!empty($res)) 
            { 
                $res .= " and "; 
            } 
            if ($Dn < 2) 
            { 
                $res .= $ones[$Dn * 10 + $n]; 
            } 
            else 
            { 
                $res .= $tens[$Dn]; 
                if ($n) 
                { 
                    $res .= "-" . $ones[$n]; 
                } 
            } 
        } 
        if (empty($res)) 
        { 
            $res = "zero"; 
        }
        if (null !== $fraction && is_numeric($fraction)) {
            $res .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $point_decimal[$number];
            }
            $res .= implode(' ', $words);
        } 
        return $res; 
    } 
    $cheque_amt = 89999999999.7812; 
    try
    {
        echo $cheque_amt ." = ". convert_number($cheque_amt,5);
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
?>