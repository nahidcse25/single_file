<script src="jquery.min.js"></script>
<form name="form1" method="post" action="" >
	<table class="calculate">
		<tr>
			<th>Item_1</th>
			<th>Item_2</th>
			<th>Quantity</th>
			<th>Rate</th>
			<th>total</th>
		</tr>
		<tr>
			<td><input type="text" name="Item_1" id="Item_1" class="item_1" value="5" readonly />
			<td><input type="text" name="Item_2" id="Item_2" class="item_2" value="5" readonly /></td>
			<td><input type="text" name="qty" id="qty" class="qty" />
			<td><input type="text" name="rate" id="rate" class="rate" value="" /></td>
			<td><input type="text" name="total" id="total" class="total" readonly /></td>
		</tr>
		<tr>
			<td><input type="text" name="Item_1" id="Item_1" class="item_1" value="10" readonly/>
			<td><input type="text" name="Item_2" id="Item_2" class="item_2" value="10" readonly /></td>
			<td><input type="text" name="qty" id="qty" class="qty" />
			<td><input type="text" name="rate" id="rate" class="rate" value="" /></td>
			<td><input type="text" name="total" id="total" class="total" readonly /></td>
		</tr>
		<tr>
			<td><input type="text" name="Item_1" id="Item_1" class="item_1" value="15" readonly/>
			<td><input type="text" name="Item_2" id="Item_2" class="item_2" value="15" readonly /></td>
			<td><input type="text" name="qty" id="qty" class="qty" />
			<td><input type="text" name="rate" id="rate" class="rate" value="" /></td>
			<td><input type="text" name="total" id="total" class="total" readonly /></td>
		</tr>
		<tr>
			<td><input type="text" name="Item_1" id="Item_1" class="item_1" value="20" readonly/>
			<td><input type="text" name="Item_2" id="Item_2" class="item_2" value="20" readonly /></td>
			<td><input type="text" name="qty" id="qty" class="qty" />
			<td><input type="text" name="rate" id="rate" class="rate" value="" /></td>
			<td><input type="text" name="total" id="total" class="total" readonly /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				Total_Qty:<span class="total_qty"></span>
			</td>
			<td></td>
			<td>
				Total:<span class="total_sum"></span>
			</td>
		</tr>
	</table>
</form>

<script>
	$(function(){ 
		$('.qty:first').focus(); //set default cursor in qty field
		// press enter and row button to move next field
		$('.qty').keydown(function (e) {
	     	if (e.which === 13 || e.which === 39) { 
	     		var rate_index = $(this).closest('tr').index()-1;
		        $('.rate').eq(rate_index).focus();
	     	}
	     	if (e.which === 37) { 
	     		var rate_index = $(this).closest('tr').index()-2;
		        $('.rate').eq(rate_index).focus();
	     	}
	     	if (e.which === 38) { 
	     		var rate_index = $(this).closest('tr').index()-2;
		        $('.qty').eq(rate_index).focus();
	     	}
	     	if (e.which === 40) { 
	     		var rate_index = $(this).closest('tr').index();
		        $('.qty').eq(rate_index).focus();
	     	}
	    });
	    $('.rate').keydown(function (e) {
	     	if (e.which === 13 || e.which === 39) { 
	     		var qty_index = $(this).closest('tr').index();
		        $('.qty').eq(qty_index).focus();
	     	}
	     	if (e.which === 37) { 
	     		var qty_index = $(this).closest('tr').index()-1;
		        $('.qty').eq(qty_index).focus();
	     	}
	     	if (e.which === 38) { 
	     		var rate_index = $(this).closest('tr').index()-2;
		        $('.rate').eq(rate_index).focus();
	     	}
	     	if (e.which === 40) { 
	     		var rate_index = $(this).closest('tr').index();
		        $('.rate').eq(rate_index).focus();
	     	}
	    });
	    //<-- Restriction for typing 
		$('.qty,.rate').on('input', function() { //alert(this.value);
			this.value = this.value.replace(/[^.0-9]/g, ''); 
		});
		// Type value in input to calculate total 
        var qty = 0 ; 
        var rate = 0 ; 
        var amt = 0; 
        var item_1 = 0 ;
        var item_2 = 0;          
	 	$(".calculate").on(" keyup",'.qty,.rate', function() { 
	 		var class_name = $(this).attr("class");
	 		if(class_name=='qty'){
            	qty = parseFloat($(this).closest('tr input.qty').val());
	 		}else{
            	qty = parseFloat($(this).closest('tr').find('input.qty').val());
			}
			if(class_name=='rate'){
            	rate = parseFloat($(this).closest('tr input.rate').val());
	 		}else{
            	rate = parseFloat($(this).closest('tr').find('input.rate').val());
			}
            item_1 = parseFloat($(this).closest('tr').find('input.item_1').val());
            item_2 = parseFloat($(this).closest('tr').find('input.item_2').val());
            if(!qty){  qty = 0;  }
            if(!rate){  rate = 0;  }
            if(!item_1){  item_1 = 0;  }
            if(!item_2){  item_2 = 0;  }
            amt = parseFloat(item_1+item_2+qty+rate); 
            var sum_qty = 0;   
            var sum_total = 0;  
            $(this).closest('tr').find('input.total').val(amt);
            $('.qty').each(function(){
                if($(this).val() !='' && !isNaN($(this).val())) { 
                    sum_qty = parseFloat($(this).val())+sum_qty; 
                }
            });
            $('.total').each(function(){
                if($(this).val() !='' && !isNaN($(this).val())) { 
                    sum_total = parseFloat($(this).val())+sum_total; 
                }
            });
            $('.total_qty').text(sum_qty);
            $('.total_sum').text(sum_total);
	    });
	});
</script>