

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<a href="#" class='prev_row'>previous row</a>
				
				<table width="95%" id="rounded-corner" >
					<thead>
						<tr>
							<th>SL.</th>
							<th>Date</th>
							<th>Particulars</th>
							<th>Vch Type</th>
							<th>Vch No.</th>
							<th>Debit</th>
							<th>Credit</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td align="left">1</td>
						<td align="left">Sep 01, 2016</td>
						<td align="left">Cash</td>
						<td align="left">Payment Cash</td>
						<td align="left">662</td>
						<td align="right"><span class="debit">20,000.00</span></td>
						<td align="right"><span class="credit"></span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">2</td>
						<td align="left">Sep 03, 2016</td>
						<td align="left">Cash</td>
						<td align="left">Payment Cash</td>	
						<td align="left">671</td>
						<td align="right"><span class="debit">58,959.00</span></td>
						<td align="right"><span class="credit"></span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">3</td>
						<td align="left">Sep 03, 2016</td>
						<td align="left">Carriage-Out-Ward</td>
						<td align="left">Journal Adjustment</td>	
						<td align="left">JV/Sep16/03</td>
						<td align="right"><span class="debit"></span></td>
						<td align="right"><span class="credit">190.00</span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">4</td>
						<td align="left">Sep 03, 2016</td>
						<td align="left">Bonus</td>
						<td align="left">Journal Adjustment</td>	
						<td align="left">JV/Sep16/04</td>
						<td align="right"><span class="debit"></span></td>
						<td align="right"><span class="credit">5,100.00</span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">5</td>
						<td align="left">Sep 03, 2016</td>
						<td align="left">Sales Credit</td>
						<td align="left">Sales Mirpur</td>		
						<td align="left">41483</td>
						<td align="right"><span class="debit">3,500.00</span></td>
						<td align="right"><span class="credit"></span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">6</td>
						<td align="left">Sep 04, 2016</td>
						<td align="left">Rent/Kaptanbazar Showroom</td>
						<td align="left">Journal Adjustment</td>	
						<td align="left">Jv/Sep16/07</td>
						<td align="right"><span class="debit"></span></td>
						<td align="right"><span class="credit">5,000.05</span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td align="left">7</td>
						<td align="left">Sep 04, 2016</td>
						<td align="left">Cash</td>
						<td align="left">Payment Cash</td>		
	 					<td align="left">681</td>
						<td align="right"><span class="debit">50,000.50</span></td>
						<td align="right"><span class="credit"></span></td>
       					<td><a href="#">remove</a></td>
					</tr>
					<tr>
						<td colspan="5" align="right">Current Total : </td>
						<td align="right"><span id="total_debit">1,32,459.50</span></td>
						<td align="right"><span id="total_credit">10,290.05</span></td>
					</tr>
					<tr>
						<td colspan="5" align="right">Opening Balance : </td>
						<td align="right"><span id="op_bal_debit"></span></td>
						<td align="right"><span id="op_bal_credit">3,57,01,653.07</span></td>
					</tr>
					<tr>
						<td colspan="5" align="right"><b>Closing Balance : </b></td>
						<td align="right"><span id="cl_bal_debit"></span></td>
						<td align="right"><span id="cl_bal_credit">3,55,79,483.62</span></td>
					</tr>					
	</tbody>
	</table>
<script>
    
    
    var row_index = [];
    var value_debit = [];
    var value_credit = [];
    var total_debit = 0;
    var total_credit = 0;
    var summation_debit = 0;
    var summation_credit = 0;
    var sub_debit = 0;
    var sub_credit = 0;
    var remove_debit = 0;
    var remove_credit = 0;
    var cbl_debit = 0;
    var cbl_credit = 0;
    var return_debit = 0;
    var return_credit = 0;
    var i = 0;
    var j = 0;
    var k = 0;
    var m = 0;
    $('table tbody tr td a').click(function() {
        summation_debit = $('#total_debit').text();
        total_debit = parseFloat(summation_debit.replace(/,/g, ''));
        summation_credit = $('#total_credit').text();
        total_credit = parseFloat(summation_credit.replace(/,/g, ''));
        $(this).closest('tr').find("span.debit").each(function() {
            remove_debit = parseFloat($(this).closest('tr').find('span.debit').text().replace(/,/g, ''));
            if (remove_debit!='' && !isNaN(remove_debit)) {
                 sub_debit = (total_debit-remove_debit).toFixed(2);
            }else{
                 sub_debit = total_debit;
            }
            value_debit[j++]= $(this).closest('tr').find('span.debit').text();
        });
        comma(sub_debit);
        //alert(seperate_comma);
        $('#total_debit').text(seperate_comma);
        $(this).closest('tr').find("span.credit").each(function() {
            remove_credit = parseFloat($(this).closest('tr').find('span.credit').text().replace(/,/g, ''));
            if (remove_credit!='' && !isNaN(remove_credit)) {
                sub_credit = (total_credit-remove_credit).toFixed(2);
            }else{
                sub_credit = total_credit;
            }
            value_credit[k++]= $(this).closest('tr').find('span.credit').text();
        });
        comma(sub_credit);
       // alert(seperate_comma);
        $('#total_credit').text(seperate_comma);
        row_index[i++] = $(this).closest('tr').index();
        $(this).closest("tr").hide();
        var ope_bal_crd = parseFloat($('#op_bal_credit').text().replace(/,/g, ''));
        if (ope_bal_crd!='' && !isNaN(ope_bal_crd)) {
            cbl_credit = parseFloat(sub_credit) + parseFloat(ope_bal_crd);
        }else{
            cbl_credit = sub_credit;
        }
        var ope_bal_db = parseFloat($('#op_bal_debit').text().replace(/,/g, ''));
        if (ope_bal_db!='' && !isNaN(ope_bal_db)) {
            cbl_debit = parseFloat(sub_debit) + parseFloat(ope_bal_db);
        }else{
            cbl_debit = sub_debit;
        }
        if (cbl_debit>cbl_credit) {
            cbl_debit = cbl_debit-cbl_credit;
            comma(cbl_debit);
            $('#cl_bal_debit').text(seperate_comma);
            $('#cl_bal_credit').text('');
        }else{
            cbl_credit = cbl_credit-cbl_debit;
            comma(cbl_credit);
            $('#cl_bal_credit').text(seperate_comma);
            $('#cl_bal_debit').text('');
        }
        
    });
    $('.prev_row').click(function(){ 
        return_debit = parseFloat(value_debit[--j].replace(/,/g, ''));  //For LIFo
        return_credit = parseFloat(value_credit[--k].replace(/,/g, ''));  //For LIFo
        summation_debit = parseFloat($('#total_debit').text().replace(/,/g, ''));
        summation_credit = parseFloat($('#total_credit').text().replace(/,/g, ''));
        if (return_debit!='' && !isNaN(return_debit)) {
            debit_total = summation_debit + return_debit;
        }else{
            debit_total = summation_debit;
        }
        comma(debit_total);
        $('#total_debit').text(seperate_comma);
        if (return_credit!='' && !isNaN(return_credit)) {
            credit_total = summation_credit + return_credit;
        }else{
            credit_total = summation_credit;
        }
        comma(credit_total);
        $('#total_credit').text(seperate_comma);
        $('tbody tr').eq(row_index[--i]).show();  //For LIFO
        var ope_bal_db = parseFloat($('#op_bal_debit').text().replace(/,/g, ''));
        if (ope_bal_db!='' && !isNaN(ope_bal_db)) {
            cbl_debit = debit_total+ope_bal_db;
        }else{
            cbl_debit = debit_total;
        }
        var ope_bal_crd = parseFloat($('#op_bal_credit').text().replace(/,/g, ''));
        if (ope_bal_crd!='' && !isNaN(ope_bal_crd)) {
            cbl_credit = credit_total+ope_bal_crd;
        }else{
            cbl_credit = credit_total;
        }
        if (cbl_debit>cbl_credit) { 
            cbl_debit = cbl_debit-cbl_credit;
            comma(cbl_debit);
            $('#cl_bal_debit').text(seperate_comma);
            $('#cl_bal_credit').text('');
        }else{ 
            cbl_credit = cbl_credit-cbl_debit;
            comma(cbl_credit);
            $('#cl_bal_credit').text(seperate_comma);
            $('#cl_bal_debit').text('');
        }
    });

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };
    var seperate_comma;
    function comma(set_comma){ //alert(set_comma);
        var int = set_comma.toString().split(".")[0]; //take integer part
        var flat = set_comma.toString().split(".")[1];  //take float part
        if(flat){
            flat = flat;
        }else{
            flat = '00';
        }
        //alert(int +'   '+ flat);
        if (int.length<=3) {
            seperate_comma = int+'.'+flat;
            return seperate_comma;
            //alert(seperate_comma);
          //  retutn seperate_comma;
        }else{
            var last = int.substr(int.length-3);
            var first = int.slice(0, -3);
            //alert(first+'   '+last);
            for (var i = 0, len = first.length; i < len; i++) { 
                seperate_comma = Number(first).format(0, 2)+','+last+'.'+flat;
                return seperate_comma;
               // alert(seperate_comma);
                //retutn seperate_comma;
            }
        }
    }
</script>