 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
 <button class="button" type="button">Press Me!</button></br> 
 <button class="button" type="button">Press Me!</button> </br>
 <button class="button" type="button">Press Me!</button> </br> 
 <button class="button" type="button">Press Me!</button> </br> 
 <button class="button" type="button">Press Me!</button></br> 
 <input class="inputs" name="" type="text"  />
<script>
   	$('.button').keydown(function (e) {
     	if (e.which === 39 || e.which === 40) { //alert($('.button').index(this));
	        var index = $('.button').index(this) + 1;
	       //alert(index);
	        $('.button,.inputs').eq(index).focus();
     	}
     	if (e.which === 37 || e.which === 38) {
	        var index = $('.button').index(this) - 1;
	        $('.button').eq(index).focus();
     	}
    });
</script>