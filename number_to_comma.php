<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

Set Comma:
 <select name="comma" id="comma" type="text">
  <option value="0">select</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><br /> <br />

Enter Number:<input class="num" id="number" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number" type="text" /> <br /> <br /> 
Enter Number:<input class="num" id="number2" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number3" type="text" /> <br /> <br />
Enter Number:<input class="num" id="number4" type="text" /> <br /> <br />


<script>
$(document).ready(function () {
        Number.prototype.format = function(n, x) {
            var re = '(\\d)(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
            return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
        };
	$("input").blur(function(event) {
		var id_check = 'number';
		//alert(event.target.id+" and "+$(event.target).attr('class'));
		comma( id_check );
	});
	function comma( id_check ){ //alert(id_check+'    ghfhfgh    '+event.target.id);
		if (id_check===event.target.id) { alert('true');
		var v = id_check;
			$(".num").blur( function (event) { alert(v);//alert($('#comma').val());
				if ($(this).val()!='' && !isNaN($(this).val())) {
					var val_blur = $(this).val();
					//alert(val_blur);
					$('.num').each(function(){
						if ($(this).val()!='' && !isNaN($(this).val())) {
							var number2 = [];
							var i = 0;
							//number2.push($(this).val());
							number2[i++] = $(this).val();
							$(this).click(function() {
								$(this).val(number2)
								//console.log($(this).val(number2));
							});
						}
						console.log(number2);                    
					});
					
					
				}
				//alert(val_blur);
				var length = val_blur.length;
				//alert(length);
				var int = val_blur.toString().split(".")[0];
				var flat = val_blur.toString().split(".")[1];
				
				if (flat) { //alert(flat);
					if (flat.length>2) {
						if(flat.charAt(2)>=5 && flat.charAt(2)>=flat.charAt(1)){
							flat = flat.charAt(0)+flat.charAt(1);
							flat = Number(flat)+1;
							//alert(flat);
						}else{
							flat = flat.charAt(0)+flat.charAt(1);
							//alert(flat);
						}
					}else{
						if (flat.length==1) {
							flat = flat+'0';
						}else{
							flat = flat;
						}
					}
				}else{
					flat = '00';
				}
				if (int) { //alert(int);
					int = int;
				}else{ //alert(int);
					int = '';
				}
				//alert(int.length);
				if (val_blur.length==0) {
					$(this).val();
				}else{	//alert($('#comma').val());
					if ($('#comma').val()=='2') {
						if (int.length<=3) {
							var seperate_comma = int+'.'+flat;
							$(this).val(seperate_comma);
						}else{
							var last = int.substr(int.length-3);
							var first = int.slice(0, -3);
							//alert(first+'   '+last);
							for (var i = 0, len = first.length; i < len; i++) { 
							    var seperate_comma = Number(first).format(0, 2)+','+last+'.'+flat;
							    $(this).val(seperate_comma);
							}
						}
					}
					if ($('#comma').val()=='3') {
						for (var i = 0, len = int.length; i < len; i++) { 
							var seperate_comma = Number(int).format(0, 3)+'.'+flat;
							$(this).val(seperate_comma);
						}
					}
				}
				
			});
		}else{
			if ($(this).val()!='' && !isNaN($(this).val())) {
				var val_blur = $(this).val();
				//alert(val_blur);
				$('.num').each(function(){
					if ($(this).val()!='' && !isNaN($(this).val())) {
						var number2 = [];
						var i = 0;
						//number2.push($(this).val());
						number2[i++] = $(this).val();
						$(this).click(function() {
							$(this).val(number2)
							//console.log($(this).val(number2));
						});
					}
					console.log(number2);                    
				});
				
				
			}
		}
	}
        
});
</script>