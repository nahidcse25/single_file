<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<?php
    $number = 123456.01;
    echo 'Given Number='.$number.'<br/>';
    if (is_float($number)){
        $integer = split ("\.", $number)[0];
        $float = '.'.split ("\.", $number)[1];
    }else{
        $integer = $number;
        $float = '';
    }
    $first = substr($integer, 0, -3);
    $last_3_digit = substr($integer,-3);
    if(isset($_GET['seperate_comma'])){
        $convert_comma = $_GET['seperate_comma'];
        echo 'Convert Number='.$convert_comma.$last_3_digit.$float.'<br/>';
        die;
    } 
?>

<script>
$(document).ready(function () {
    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };
    var int = '<?php echo $first; ?>';
    if (int) {
        var len = int.length;
        for (var i = 0; i < len; i++) { 
            var seperate_comma = Number(int).format(0, 2)+',';
        }
    }else{
        var seperate_comma = '';
    }
    window.location.href = "number_format.php?seperate_comma=" + seperate_comma ;
});
</script>