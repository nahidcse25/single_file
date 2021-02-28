<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<a href="#" class='prev_row'>previous row</a>
<table>
    <tr class="row">
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
	<td>1</td>
        <td>
            <a href="#">remove</a>
        </td>
    </tr>
    <tr class="row">
	<td>2</td>
	<td>2</td>
	<td>2</td>
	<td>2</td>
	<td>2</td>
	<td>2</td>
        <td>
            <a href="#">remove</a>
        </td>
    </tr>
    <tr class="row">
	<td>3</td>
	<td>3</td>
	<td>3</td>
	<td>3</td>
	<td>3</td>
	<td>3</td>
        <td>
            <a href="#">remove</a>
        </td>
    </tr>
    <tr class="row">
	<td>4</td>
	<td>4</td>
	<td>4</td>
	<td>4</td>
	<td>4</td>
	<td>4</td>
        <td>
            <a href="#">remove</a>
        </td>
    </tr>
    <tr class="row">
	<td>5</td>
	<td>5</td>
	<td>5</td>
	<td>5</td>
	<td>5</td>
	<td>5</td>
        <td>
            <a href="#">remove</a>
        </td>
    </tr>
</table>
<script>
    $(function() {
        var row_index = [];
        var i = 0;
        $('table tr td a').click(function() { //alert("Row index is: " + $(this).closest('tr').index());
            row_index[i++] = $(this).closest('tr').index();
            $(this).closest(".row").hide();
        });
        $('.prev_row').click(function(){ 
            $('.row').eq(row_index[--i]).show();
        });
    });
</script>
<!--script>
    $(function() {
        row_index = [];
        j = 0;
        var i = 0;
	var k=0;
        $(document).on('click','table tr td a',function() { //alert("Row index is: " + $(this).closest('tr').index());
            row_index[i++] = $(this).closest('tr').index();
            //console.log(row_index);
            $(this).closest(".row").hide();
            //alert(row_index);
        });
	
        $('.prev_row').click(function(){ 
	    if (k==0) {
		row_index.reverse();
	    }
	    k++;
            //alert(row_index[j]);
            $('.row').eq(row_index[j++]).show();
	    //alert(row_index);
        });
	/*$(document).on('click','.prev_row',function() { //alert(row_index);
            alert(row_index[i]);
            $('.row').eq(row_index[i--]).show();
        });*/
    });
</script-->
<!--script>
    $(function() {
        row_index = [];
        j = 0;
        var i = 0;
        $(document).on('click','table tr',function() { //alert("Row index is: " + $(this).index());
            row_index[i++] = $(this).index();
            console.log(row_index);
            $(this).closest(".row").hide();
            //alert(row_index);
        });
        $('.prev_row').click(function(){
            //alert(row_index[j]);
            $('.row').eq(row_index[j++]).show();
        });
    });
</script-->