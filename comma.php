<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

Set Comma:
 <select name="comma" id="comma" type="text">
  <option value="0">select</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><br /> <br />
After Point:
 <select name="point" id="point" type="text">
  <option value="0">select</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
  <option value="4">Four</option>
</select><br /> <br />

Enter Number:<input class="num" id="number" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number" type="text" /> <br /> <br />


<script>
$(document).ready(function () {
        Number.prototype.format = function(n, x) {
            var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
            return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
        };
        
        $(".num").blur( function (event) {
	 		var set_comma = $('#comma').val();
	 		var after_point = $('#point').val();
	 		comma( set_comma,after_point, this );
        });
	function comma( set_comma,after_point, elem )
	{ 
	 	if ($(elem).val()!='' && !isNaN($(elem).val())) {
			$('.num').each(function(){ 
				if ($(this).val()!='' && !isNaN($(this).val())) { 
					//var number2 = [];
					//var i = 0;
					//number2[i++] = $(this).val();
					$(this).focus(function() {// alert($(this).val()+'     remove    '+ $(this).val().replace(/,/g, ""));
						var remove_comma = $(this).val().replace(/,/g, "");
						var int = remove_comma.toString().split(".")[0];
						var flat = remove_comma.toString().split(".")[1];
						//alert($(this).val()+'     '+remove_comma+'   '+int+'    '+flat)
						if (flat) {
						  flat = flat.replace(/\.?0+$/, '');
						  if (flat>0) {
						   flat = flat;
						   real_number = int+'.'+flat
						  }else{
						   flat = '';
						   real_number = int;
						  }
						}
						//alert( $(this).val() );
						//$(this).val(number2);
						$(this).val(real_number);
					});
				}
			});
		       //alert( $(elem).val() );
			var length = $(elem).val().length;
			//alert(length);
			var int = $(elem).val().toString().split(".")[0];
			var flat = $(elem).val().toString().split(".")[1];
			
			if (flat) { //alert(flat);
				if (flat.length>2) {
				    if (after_point=='2') {
					if(flat.charAt(2)>=5 && flat.charAt(2)>=flat.charAt(1)){
						flat = flat.charAt(0)+flat.charAt(1);
						flat = Number(flat)+1;
						//alert(flat);
					}else{
						flat = flat.charAt(0)+flat.charAt(1);
						//alert(flat);
					}
				    }
				    if (after_point=='3') {
				      if (flat.length>3) {
					if(flat.charAt(3)>=5 && flat.charAt(3)>=flat.charAt(2)){
						flat = flat.charAt(0)+flat.charAt(1)+flat.charAt(2);
						flat = Number(flat)+1;
						//alert(flat);
					}else{
						flat = flat.charAt(0)+flat.charAt(1)+flat.charAt(2);
						//alert(flat);
					}
				      }else{
					   flat = flat;
				      }
				    }
				    if (after_point=='4') {
				      if (flat.length>=4) {
					if(flat.charAt(4)>=5 && flat.charAt(4)>=flat.charAt(3)){
						flat = flat.charAt(0)+flat.charAt(1)+flat.charAt(2)+flat.charAt(3);
						flat = Number(flat)+1;
						//alert(flat);
					}else{
						flat = flat.charAt(0)+flat.charAt(1)+flat.charAt(2)+flat.charAt(3);
						//alert(flat);
					}
				      }
				      if (flat.length==3) {
					   flat = flat.charAt(0)+flat.charAt(1)+flat.charAt(2)+'0';
				      }
				    }
				}else{
				    if (after_point=='2') {
					if (flat.length==1) {
						flat = flat+'0';
					}else{
						flat = flat;
					}
				    }
				    if (after_point=='3') {
					if (flat.length==1) {
						flat = flat+'00';
					}else{
						flat = flat+'0';
					}
				    }
				    if (after_point=='4') {
					if (flat.length==1) {
						flat = flat+'000';
					}else{
						flat = flat+'00';
					}
				    }
				}
			}else{
			    if (after_point=='2') {
				flat = '00';
			    }
			    if (after_point=='3') {
				flat = '000';
			    }
			    if (after_point=='4') {
				flat = '0000';
			    }
			}
			if (int) { //alert(int);
				int = int;
			}else{ //alert(int);
				int = '';
			}
			//alert(int.length);
			if ($(elem).val().length==0) {
				$(elem).val();
			}else{	//alert($('#comma').val());
				if (set_comma=='2') {
					if (int.length<=3) {
						var seperate_comma = int+'.'+flat;
						$(elem).val(seperate_comma);
					}else{
						var last = int.substr(int.length-3);
						var first = int.slice(0, -3);
						//alert(first+'   '+last);
						for (var i = 0, len = first.length; i < len; i++) { 
						    var seperate_comma = Number(first).format(0, 2)+','+last+'.'+flat;
						    $(elem).val(seperate_comma);
						}
					}
				}
				if (set_comma=='3') {
					for (var i = 0, len = int.length; i < len; i++) { 
						var seperate_comma = Number(int).format(0, 3)+'.'+flat;
						$(elem).val(seperate_comma);
				        }
				}
			}
		}
	}
});
</script>