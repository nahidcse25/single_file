<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<ol id="aa">
	<li>
		<input type='file' class="chang" name="image" value="5"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
	<li>
		<input type='file' class="chang" name="image"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
	<li>
		<input type='file' class="chang" name="image"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
	<li>
		<input type='file' class="chang" name="image"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
	<li>
		<input type='file' class="chang" name="image"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
	<li>
		<input type='file' class="chang" name="image"  multiple="multiple" />
		<img class="" src='' height='60' width='100' />
	</li>
</ol>
<script>
		$("ol").on('change','.chang',function(){ 
			var li = $(this).parents('li');
        	var find = li.find('img').attr('class','preview_pic');
			//alert(find);
			$(this.files).each(function () {
	            var reader = new FileReader();
	            reader.readAsDataURL(this);
	            reader.onload = function (e) {
	            $('.preview_pic')
	               .attr('src', e.target.result)
	                .width(100)
	                .height(80);
	            }
	        });
		});
		$('input').on('blur', function(){
		   $(this).next('img').removeClass('preview_pic');
		})
</script>