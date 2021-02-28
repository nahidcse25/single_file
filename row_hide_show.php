<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<a href="#" class='prev_row'>previous row</a>
<table class="sum">
    <tr>
        <td>Remove First Row</td>
        <td><input type="text" value="1" class="price" /><br></td>
        <td><a class="calculate" href="#">remove</a></td>
    </tr>
    <tr>
        <td>Remove Second Row</td>
        <td><input type="text" value="2" class="price" /><br></td>
        <td><a class="calculate" href="#">remove</a></td>
    </tr>
    <tr>
        <td>Remove Third Row</td>
        <td><input type="text" value="3" class="price" /><br></td>
        <td><a class="calculate" href="#">remove</a></td>
    </tr>
    <tr>
        <td>Remove Fourth Row</td>
        <td><input type="text" value="4" class="price" /><br></td>
        <td><a class="calculate" href="#">remove</a></td>
    </tr>
    <tr>
        <td>Remove Fifth Row</td>
        <td><input type="text" value="5" class="price" /><br></td>
        <td><a class="calculate" href="#">remove</a></td>
    </tr>
</table>
Total=<input type="text" placeholder='Total=' id="total_sum" />
<script>
    var row_index = [];
    var value = [];
    var i = 0;
    var j = 0;
    var k = 0;
    var m = 0;
    $('table tr td a').click(function() {
        var summation = $('#total_sum').val();
        $(this).closest('tr').find("input").each(function() {
            var remove_value = this.value;
            //alert(remove_value)
            //alert(summation);
            var sub_value = (summation-remove_value);
            //alert(sub_value);
            $('#total_sum').val(sub_value);
            value[j++]= this.value;
            //alert(value);
            //console.log(value);
        });
        //alert("Row index is: " + $(this).closest('tr').index());
        row_index[i++] = $(this).closest('tr').index();
        $(this).closest("tr").hide();
        
    });
    $('.prev_row').click(function(){ //alert(value[m++]);
        var return_value = value[--j];  //For LIFo
        //var return_value = value[m++];  //For FIFo
        //alert(b);
        var summation = $('#total_sum').val();
        //alert(summation);
        var sum_total = parseInt(summation) + parseInt(return_value);
        //alert(sum_total);
        $('#total_sum').val(sum_total);
        $('tr').eq(row_index[--i]).show();  //For LIFO
        //$('tr').eq(row_index[k++]).show(); //For FIFO
    });
    $('.sum').each(function(){
        var total = 0;
        $(this).find('input').each(function(){
          total += parseInt($(this).val());
        });
        $('#total_sum').val(total);
    });
    $('.price').keyup(function () {
        var total = 0;
        $('.price').each(function() {
            if($(this).val()!="")
            {
               total += parseFloat($(this).val());
            }
        });
        // alert(sum);
        $('#total_sum').val(total);
    });
</script>