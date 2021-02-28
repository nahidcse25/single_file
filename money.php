<?php
class BanglaNumberToWord{
    var $eng_to_bn = array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5','6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '0'=>'0');
    var $num_to_bd = array('0'=>'zero','1'=>'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five','6'=>'six','7'=>'seven','8'=>'eight', '9'=>'nine','10'=>'ten','11'=>'eleven','12'=>'twelve','13'=>'thirten','14'=>'fourten','15'=>'fiften','16'=>'sixten','17'=>'seventen','18'=>'eighten','19'=>'nineten','20'=>'twenty','21'=>'twenty one','22'=>'twenty two','23'=>'twenty three','24'=>'twenty four','25'=>'twenty five','26'=>'twenty six','27'=>'twenty seven','28'=>'twenty eight','29'=>'twenty nine','30'=>'thirty','31'=>'thirty one','32'=>'thirty two','33'=>'thirty three','34'=>'thirty four','35'=>'thirty five','36'=>'thirty six','37'=>'thirty seven','38'=>'thirty eight','39'=>'thirty nine','40'=>'fourty','41'=>'fourty one','42'=>'fourty two','43'=>'fourty three','44'=>'fourty four','45'=>'fourty five','46'=>'fourty six','47'=>'fourty seven','48'=>'fourty eight','49'=>'fourty nine','50'=>'fifty','51'=>'fifty one','52'=>'fifty two','53'=>'fifty three','54'=>'fifty four','55'=>'fifty five','56'=>'fifty six','57'=>'fifty seven','58'=>'fifty eight','59'=>'fifty nine','60'=>'sixty','61'=>'sixty one','62'=>'sixty two','63'=>'sixty three','64'=>'sixty four','65'=>'sixty five','66'=>'sixty six','67'=>'sixty seven','68'=>'sixty eight','69'=>'sixty nine','70'=>'seventy','71'=>'seventy one','72'=>'seventy two','73'=>'seventy three','74'=>'seventy four','75'=>'seventy five','76'=>'seventy six','77'=>'seventy seven','78'=>'seventy eight','79'=>'seventy nine','80'=>'eighty','81'=>'eighty one','82'=>'eighty two','83'=>'eighty three','84'=>'eighty four','85'=>'eighty five','86'=>'eighty six','87'=>'eighty seven','88'=>'eighty eight','89'=>'eighty nine','90'=>'ninety','91'=>'ninety one','92'=>'ninety two','93'=>'ninety three','94'=>'ninety four','95'=>'ninety five','96'=>'ninety six','97'=>'ninety seven','98'=>'ninety eight','99'=>'ninety nine');
    var $num_to_bn_decimal = array('0'=>'zero','1'=>'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five','6'=>'six','7'=>'seven','8'=>'eight', '9'=>'nine');
    var $hundred = 'hundred';
    var $thousand = 'thousand';
    var $lakh = 'lakh';
    var $crore = 'crore';
    public function engToBn($number){
        $bn_number = strtr($number,$this->eng_to_bn);
        return $bn_number;
    }
    public function numToWord($number){
		if (($number < 0) || ($number > 999999999999)) 
        { 
            echo "Number is out of range";
        }else{
			if (!is_numeric($number) ) return 'Not a Number';
			if(is_float($number)){
				$dot = explode(".", $number);
				return $this->numberSelector($dot[0]).' point '.$this->numToBnDecimal($dot[1]);
			}else{
				return $this->numberSelector($number);
			}
		}
        
    }
    public function numToBn($number){
        $word = strtr($number,$this->num_to_bd);
        return $word;
    }
    public function numToBnDecimal($number){
        $word = strtr($number,$this->num_to_bn_decimal);
        return $word;
    }
    public function numberSelector($number){
        if($number > 9999999){
            return $this->crore($number);
        }elseif($number > 99999){
            return $this->lakh($number);
        }elseif($number > 999){
            return $this->thousand($number);
        }elseif($number > 99){
            return $this->hundred($number);
        }else{
            return $this->underHundred($number);
        }
    }
    public function underHundred($number){
        $number = ($number == 0)?'zero': $this->numToBn($number);
        return $number;
    }
    public function hundred($number){
        $a = (int)($number/100);
        $b = $number%100;
        $hundred = ($a == 0)?'': $this->numToBn($a).' '.$this->hundred;
        return $hundred.' ,'.$this->underHundred($b);
    }
    public function thousand($number){
        $a = (int)($number/1000);
        $b = $number%1000;
        $thousand = ($a == 0)?'': $this->numToBn($a).' '.$this->thousand;
        return $thousand.' ,'.$this->hundred($b);
    }
    public function lakh($number){
        $a = (int)($number/100000);
        $b = $number%100000;
        $lakh = ($a == 0)?'': $this->numToBn($a).' '.$this->lakh;
        return $lakh.' ,'.$this->thousand($b);
    }
    public function crore($number){
        $a = (int)($number/10000000);
        $b = $number%10000000;
        $more_than_core = ($a>99)?$this->lakh($a):$this->numToBn($a);
        return $more_than_core.' '.$this->crore.' ,'.$this->lakh($b);
    }
}
	
	$obj = new BanglaNumberToWord();

	//echo $obj->engToBn(5207.56).'<br/>'; 

	echo '89999,99,99,9,99.3254 = '.$obj->numToWord(989999.3254).'<br/>'; 

	//echo '0.56 = '.$obj->numToWord(0.56); 
?>