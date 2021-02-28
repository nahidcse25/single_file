<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<a href="#" class='prev_row'>previous row</a>
<table class="sum">
    <tr>
        <td>Voucher type</td>
        <td>Voucher no</td>
        <td>Debit</td>
        <td>Credit</td>
    </tr>
    <tr>
        <td>GTN</td>
        <td>1683</td>
        <td><input type="text" value="" class="debit" /><br></td>
        <td><input type="text" value="1" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td>GTN</td>
        <td>1688</td>
        <td><input type="text" value="" class="debit" /><br></td>
        <td><input type="text" value="12" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td>GTN</td>
        <td>1692</td>
        <td><input type="text" value="" class="debit" /><br></td>
        <td><input type="text" value="3" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td>GTN</td>
        <td>1695</td>
        <td><input type="text" value="" class="debit" /><br></td>
        <td><input type="text" value="4" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td>GRN Regular</td>
        <td>GRN-13060/CH-6236</td>
        <td><input type="text" value="15" class="debit" /><br></td>
        <td><input type="text" value="" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td>GRN Regular</td>
        <td>GRN-13070/CH-6270</td>
        <td><input type="text" value="6" class="debit" /><br></td>
        <td><input type="text" value="" class="credit" /><br></td>
        <td><a href="#">remove</a></td>
    </tr>
    <tr>
        <td></td>
        <td>Current Total</td>
        <td><input type="text" value='' id="total_debit" /></td>
        <td><input type="text" value='' id="total_credit" /></td>
    </tr>
    <tr>
        <td></td>
        <td>Opening Balance</td>
        <td><input type="text" value="10" id="op_bal_debit" /></td>
        <td><input type="text" value="" id="op_bal_credit" /></td>
    </tr>
    <tr>
        <td></td>
        <td>Closing Balance</td>
        <td><input type="text" value="" id="cl_bal_debit" /></td>
        <td><input type="text" value="" id="cl_bal_credit" /></td>
    </tr>
</table>
<script>
    var debit = [];
    var d = 0;
    var credit = [];
    var c = 0;
    var cl_bal_debit = 0;
    var cl_bal_credit = 0;
    $('.debit').each(function() { //alert($('#op_bal_debit').val()); 
        var total_debit = 0;
        if ($(this).val()!='' && !isNaN($(this).val())) { //alert($(this).val());
            debit[d++] = $(this).val();
            total_debit = eval(debit.join("+")); //sum array value
            //alert(debit);
        } 
        $('#total_debit').val(total_debit);
        if ($('#op_bal_debit').val()!='' && !isNaN($('#op_bal_debit').val())) {
            cl_bal_debit = total_debit+parseFloat($('#op_bal_debit').val());
        }else{
            cl_bal_debit = total_debit;
        }
        //$('#cl_bal_debit').val(cl_bal_debit);
    });
    $('.credit').each(function() { //alert($('#op_bal_credit').val()); 
        var total_credit = 0;
        if ($(this).val()!='' && !isNaN($(this).val())) { //alert($(this).val());
            credit[c++] = $(this).val();
            total_credit = eval(credit.join("+")); //sum array value
            //alert(total_credit);
            $('#total_credit').val(total_credit);
            if ($('#op_bal_credit').val()!='' && !isNaN($('#op_bal_credit').val())) {
                cl_bal_credit = total_credit+parseFloat($('#op_bal_credit').val());
            }else{
                cl_bal_credit = total_credit;
            }
            //$('#cl_bal_credit').val(cl_bal_credit);
        } 
        
    });
    if (cl_bal_debit>cl_bal_credit) {
        cl_bal_debit = cl_bal_debit-cl_bal_credit;
        $('#cl_bal_debit').val(cl_bal_debit);
    }else{
        cl_bal_credit = cl_bal_credit-cl_bal_debit;
        $('#cl_bal_credit').val(cl_bal_credit);
    }
    //alert(cl_bal_debit);
    //alert(cl_bal_credit);
    $('.debit').keyup(function () {
        var total = 0;
        $('.debit').each(function() {
            if($(this).val()!="")
            {
               total += parseFloat($(this).val());
            }
        });
        $('#total_debit').val(total);
        //alert(total);
        //alert($('#op_bal_debit').val());
        //alert($('#op_bal_credit').val());
        //alert($('#total_credit').val());
        if ($('#op_bal_debit').val()!='' && !isNaN($('#op_bal_debit').val())) {
            var cbl_debit = total+parseFloat($('#op_bal_debit').val());
        }else{
            var cbl_debit = total;
        }
        if ($('#op_bal_credit').val()!='' && !isNaN($('#op_bal_credit').val())) {
            var cbl_credit = parseFloat($('#op_bal_credit').val())+parseFloat($('#total_credit').val());
        }else{
            var cbl_credit = parseFloat($('#total_credit').val());
        }
        //alert(cbl_debit);
        //alert(cbl_credit);
        if (cbl_debit>cbl_credit) {
            cbl_debit = cbl_debit-cbl_credit;
            $('#cl_bal_debit').val(cbl_debit);
            $('#cl_bal_credit').val('');
        }else{
            cbl_credit = cbl_credit-cbl_debit;
            $('#cl_bal_credit').val(cbl_credit);
            $('#cl_bal_debit').val('');
        }
    });
    $('.credit').keyup(function () {
        var total = 0;
        $('.credit').each(function() {
            if($(this).val()!="")
            {
               total += parseFloat($(this).val());
            }
        });
        // alert(sum);
        $('#total_credit').val(total);
        //alert(total);
       // alert($('#op_bal_credit').val());
        //alert($('#op_bal_debit').val());
        //alert($('#total_debit').val());
        
        if ($('#op_bal_credit').val()!='' && !isNaN($('#op_bal_credit').val())) {
            var cbl_credit = total+parseFloat($('#op_bal_credit').val());
        }else{
            var cbl_credit = total;
        }
        //alert(cbl_credit);
        if ($('#op_bal_debit').val()!='' && !isNaN($('#op_bal_debit').val())) {
            var cbl_debit = parseFloat($('#op_bal_debit').val())+parseFloat($('#total_debit').val());
        }else{
            var cbl_debit = parseFloat($('#total_debit').val());
        }
        //alert(cbl_debit);
        if (cbl_debit>cbl_credit) {
            cbl_debit = cbl_debit-cbl_credit;
            $('#cl_bal_debit').val(cbl_debit);
            $('#cl_bal_credit').val('');
        }else{
            cbl_credit = cbl_credit-cbl_debit;
            $('#cl_bal_credit').val(cbl_credit);
            $('#cl_bal_debit').val('');
        }
    });
    
    var row_index = [];
    var value_debit = [];
    var value_credit = [];
    var sub_debit = 0;
    var sub_credit = 0;
    var i = 0;
    var j = 0;
    var k = 0;
    var m = 0;
    $('table tr td a').click(function() {
        var summation_debit = $('#total_debit').val();
        var summation_credit = $('#total_credit').val();
        //alert(summation_credit);
        $(this).closest('tr').find(".debit").each(function() {
            var remove_debit = this.value;
            //alert(remove_debit)
            //alert(summation_debit);
            sub_debit = (summation_debit-remove_debit);
            //alert(sub_debit);
            $('#total_debit').val(sub_debit);
            value_debit[j++]= this.value;
            //alert(value_debit);
            //console.log(value);
        });
        $(this).closest('tr').find(".credit").each(function() {
            var remove_credit = this.value;
            //alert(remove_debit)
            //alert(summation_debit);
            sub_credit = (summation_credit-remove_credit);
            $('#total_credit').val(sub_credit);
            value_credit[k++]= this.value;
            //alert(value_credit);
            //console.log(value);
        });
        //alert(sub_credit);
        //alert(sub_debit);
        //alert("Row index is: " + $(this).closest('tr').index());
        row_index[i++] = $(this).closest('tr').index();
        $(this).closest("tr").hide();
        if ($('#op_bal_credit').val()!='' && !isNaN($('#op_bal_credit').val())) {
            var cbl_credit = sub_credit+parseFloat($('#op_bal_credit').val());
        }else{
            var cbl_credit = sub_credit;
        }
        //alert(cbl_credit);
        if ($('#op_bal_debit').val()!='' && !isNaN($('#op_bal_debit').val())) {
            var cbl_debit = sub_debit+parseFloat($('#op_bal_debit').val());
        }else{
            var cbl_debit = sub_debit;
        }
        //alert(cbl_debit);
        if (cbl_debit>cbl_credit) {
            cbl_debit = cbl_debit-cbl_credit;
            $('#cl_bal_debit').val(cbl_debit);
            $('#cl_bal_credit').val('');
        }else{
            cbl_credit = cbl_credit-cbl_debit;
            $('#cl_bal_credit').val(cbl_credit);
            $('#cl_bal_debit').val('');
        }
        
    });
    $('.prev_row').click(function(){ //alert(value[m++]);
        var debit_total = 0;
        var credit_total = 0;
        var cbl_debit = 0;
        var cbl_credit = 0;
        var return_debit = value_debit[--j];  //For LIFo
       // alert(return_debit);
        var return_credit = value_credit[--k];  //For LIFo
        //var return_value = value[m++];  //For FIFo
        var summation_debit = $('#total_debit').val();
        var summation_credit = $('#total_credit').val();
        //alert(summation_debit);
        //alert(summation_credit);
        if (return_debit!='' && !isNaN(return_debit)) {
            debit_total = parseInt(summation_debit) + parseInt(return_debit);
            $('#total_debit').val(debit_total);
        }else{
            debit_total = $('#total_debit').val();
        }
        //alert(debit_total);
        if (return_credit!='' && !isNaN(return_credit)) {
            credit_total = parseInt(summation_credit) + parseInt(return_credit);
            $('#total_credit').val(credit_total);
        }else{
            credit_total = $('#total_credit').val();
           // alert(credit_total);
        }
        //alert(credit_total);
        $('tr').eq(row_index[--i]).show();  //For LIFO
        //$('tr').eq(row_index[k++]).show(); //For FIFO
        
        if ($('#op_bal_debit').val()!='' && !isNaN($('#op_bal_debit').val())) { //alert(debit_total);
            cbl_debit = parseFloat(debit_total)+parseFloat($('#op_bal_debit').val());
        }else{
            cbl_debit = debit_total;
        }
        //alert(cbl_debit);
        if ($('#op_bal_credit').val()!='' && !isNaN($('#op_bal_credit').val())) { 
            cbl_credit = parseFloat(credit_total)+parseFloat($('#op_bal_credit').val());
        }else{ //alert('crt'+credit_total);
            cbl_credit = credit_total;
        }
        //alert('de:'+cbl_debit);
        //alert('cr:'+cbl_credit);
        if (cbl_debit>cbl_credit) { 
            cbl_debit = cbl_debit-cbl_credit;
            $('#cl_bal_debit').val(cbl_debit);
            $('#cl_bal_credit').val('');
        }else{ //alert(cbl_credit);
            cbl_credit = cbl_credit-cbl_debit;
            $('#cl_bal_credit').val(cbl_credit);
            $('#cl_bal_debit').val('');
        }
    });
    
    
    
    
    
</script>