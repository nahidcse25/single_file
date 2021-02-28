<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

<?php
	include_once "php_html__date.php";
?>


<script type="text/javascript">
$(function(){ $(".creation").on('click',function()	{ if($(this).is(':checked')){ $(".creation_m").click();$('.create_n_m').val('Yes');$(".creation_v").click();$('.create_n_v').val('Yes');} else {$(".creation_m").click();$('.create_n_m').val('No');$(".creation_v").click();$('.create_n_v').val('No');} }); });
$(function(){ $(".creation_m").on('click',function()	{ if($(this).is(':checked')) $('.create_n_m').val('Yes'); else $('.create_n_m').val('No'); }); });
$(function(){ $(".creation_v").on('click',function()	{ if($(this).is(':checked')) $('.create_n_v').val('Yes'); else $('.create_n_v').val('No'); }); });
$(function(){ $(".alteration").on('click',function(){ if($(this).is(':checked')){ $(".alteration_m").click();$('.alter__n_m').val('Yes');$(".alteration_v").click();$('.alter__n_v').val('Yes');} else { $(".alteration_m").click();$('.alter__n_m').val('No');$(".alteration_v").click();$('.alter__n_v').val('No');}}); });
$(function(){ $(".alteration_m").on('click',function(){ if($(this).is(':checked')) $('.alter__n_m').val('Yes'); else $('.alter__n_m').val('No'); }); });
$(function(){ $(".alteration_v").on('click',function(){ if($(this).is(':checked')) $('.alter__n_v').val('Yes'); else $('.alter__n_v').val('No'); }); });
$(function(){ $(".deletion").on('click',function()	{ if($(this).is(':checked')){ $(".deletion_m").click();$('.delete_n_m').val('Yes');$(".deletion_v").click();$('.delete_n_v').val('Yes');} else {$(".deletion_m").click();$('.delete_n_m').val('No');$(".deletion_v").click();$('.delete_n_v').val('No');} }); });

$(function(){ $(".deletion").on('click',function()	{ if($(this).is(':checked')) $('.delete_n_').val('Yes'); else $('.delete_n_').val('No'); }); });
$(function(){ $(".deletion_m").on('click',function(){ if($(this).is(':checked')) $('.delete_n_m').val('Yes'); else $('.delete_n_m').val('No'); }); });
$(function(){ $(".deletion_v").on('click',function(){ if($(this).is(':checked')) $('.delete_n_v').val('Yes'); else $('.delete_n_v').val('No'); }); });

$(function(){ $(".displaying").on('click',function(){ if($(this).is(':checked')){ $(".displaying_m").click();$('.display__m').val('Yes');$(".displaying_v").click();$('.display__v').val('Yes');$(".displaying_r").click();$('.display__r').val('Yes');} else {$(".displaying_m").click();$('.display__m').val('No');$(".displaying_v").click();$('.display__v').val('No');$(".displaying_r").click();$('.display__r').val('No');} }); });
$(function(){ $(".displaying_m").on('click',function(){ if($(this).is(':checked')) $('.display__m').val('Yes'); else $('.display__m').val('No'); }); });
$(function(){ $(".displaying_v").on('click',function(){ if($(this).is(':checked')) $('.display__v').val('Yes'); else $('.display__v').val('No'); }); });
$(function(){ $(".displaying_r").on('click',function(){ if($(this).is(':checked')) $('.display__r').val('Yes'); else $('.display__r').val('No'); }); });

$(function(){ $(".printing").on('click',function(){ if($(this).is(':checked')){ $(".printing_m").click();$('.print__n_m').val('Yes');$(".printing_v").click();$('.print__n_v').val('Yes');$(".printing_r").click();$('.print__n_r').val('Yes');} else {$(".printing_m").click();$('.print__n_m').val('No');$(".printing_v").click();$('.print__n_v').val('No');$(".printing_r").click();$('.print__n_r').val('No');} }); });
$(function(){ $(".printing_m").on('click',function(){ if($(this).is(':checked')) $('.print__n_m').val('Yes'); else $('.print__n_m').val('No'); }); });
$(function(){ $(".printing_v").on('click',function(){ if($(this).is(':checked')) $('.print__n_v').val('Yes'); else $('.print__n_v').val('No'); }); });
$(function(){ $(".printing_r").on('click',function(){ if($(this).is(':checked')) $('.print__n_r').val('Yes'); else $('.print__n_r').val('No'); }); });

$(function(){ $(".printing").on('click',function()	{ if($(this).is(':checked')) $('.print__n_').val('Yes'); else $('.print__n_').val('No'); }); });
</script>
<script>
function change() 
{
    var elem = document.getElementById("Button");
    if (elem.value=="no"){
        elem.value = "yes";
        $('.col').css({'color':'#0000FF','font-weight': '900','height':'25','width':'40'});
    }
    else {
         elem.value = "no";
        $('.col').css({'color':'#669999','font-weight': '900','height':'25','width':'40'});
    }
}
</script>


<div id="admin_home">
	<div id="left_in">
		<div id="form_id">
			<p class="bold bigsize">Add User Privileges</p>
<?php
if(isset($_GET['id']))	{ $id = $_GET['id'];	}
else					{ $id = false;			}

		  $q_ar = "SELECT * FROM admin_user_info WHERE user_level !='1' ";
if($id){ $q_ar .= "AND userid='$id' ";	}
		  $q_ar .= "ORDER BY user_id ";
//echo $q_ar."<br/>";
?>
<form class="from" name="news_add" method="post" action="admin.php?action=admin&page=add" enctype="multipart/form-data">
	<fieldset>
	<legend>Add User Privileges</legend>
		<ol>
			<li><label for="title">User Id:</label><select name="user_id" >
				
				<?php 
				if(!$id){ ?><option value="all"> &nbsp;-All-</option><?php	}
				
				$q_ar1 = mysql_query($q_ar) or die(mysql_error());
				while($q_ar2 = mysql_fetch_array($q_ar1))
				{
					?><option value="<?=$q_ar2['userid']?>" ><?=$q_ar2['user_id']?></option><?php
				}
				?>
				</select><div class="req">[Required]</div>
				</li>
			<li><label for="title">Date:</label><?=html__date("date1",$value='')?><div class="req">[Required]</div></li>
	
<li>
<table width="95%" id="rounded-corner" >
<tr>
	<th colspan="2">Title</th>
	<th><input class="creation" type="checkbox" name="ch_group" value="Bike">Create</th>
	<th><input class="alteration" type="checkbox" name="ch_alter" value="Bike">Alter</th>
	<th><input class="deletion" type="checkbox" name="ch_delete" value="Bike">Delete</th>
	<th><input class="displaying" type="checkbox" name="ch_display" value="Bike">Display</th>
	<th><input class="printing" type="checkbox" name="ch_print" value="Bike">Print</th>
</tr>
<tr>
	<td colspan="2"><b><i>Master-Accounts</i></b><?php $serial=1;?></td>
	<td><input class="creation_m" type="checkbox" name="ch_group" value="Bike">Create</td>
	<td><input class="alteration_m" type="checkbox" name="ch_group" value="Bike">Alter</td>
	<td><input class="deletion_m" type="checkbox" name="ch_group" value="Bike">Delete</td>
	<td><input class="displaying_m" type="checkbox" name="ch_display" value="Bike">Display</td>
	<td><input class="printing_m" type="checkbox" name="ch_print" value="Bike">Print</td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Group"/>Group</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input name="create_n_[]" type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Ledger"/>Ledger</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Voucher Type"/>Voucher Type</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Stock Group"/>Stock Group</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Stock Item"/>Stock Item</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Stock Color"/>Stock Color</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Standard Price"/>Standard Price</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Selling Price"/>Selling Price</td>
	<td><input name="create_n_[]"onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Wholesale Price"/>Wholesale Price</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]"onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Godown"/>Godown</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Distribution Center"/>Distribution Center</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Section"/>Section</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Units of Thickness"/>Units of Thickness</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Units of Measure"/>Units of Measure</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="master"/><input type="hidden" name="title[]" value="Unit of Size"/>Unit of Size</td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_m" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_m" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_m" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__m" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_m" id="Button"></input></td>
</tr>


<tr>
	<td colspan="2"><b><i>Voucher List</i></b><?php $serial=1;?></td>
	<td><input class="creation_v" type="checkbox" name="ch_group" value="Bike">Create</td>
	<td><input class="alteration_v" type="checkbox" name="ch_group" value="Bike">Alter</td>
	<td><input class="deletion_v" type="checkbox" name="ch_group" value="Bike">Delete</td>
	<td><input class="displaying_v" type="checkbox" name="ch_display" value="Bike">Display</td>
	<td><input class="printing_v" type="checkbox" name="ch_print" value="Bike">Print</td>
</tr>
<?php
$q_vn = "SELECT voucher_name,voucher_id FROM voucher_setup ";
$q_vn1 = mysql_query($q_vn) or die(mysql_error());
while($q_vn2 = mysql_fetch_array($q_vn1))
{			
?>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="voucher"/><input type="hidden" name="title[]" value="<?php echo $q_vn2['voucher_id'];?>"/><?php echo $q_vn2['voucher_name'];?></td>
	<td><input name="create_n_[]" onclick="change()" type="button" value="yes" class="col create_n_v" id="Button"></input></td>
	<td><input name="alter__n_[]" onclick="change()" type="button" value="yes" class="col alter__n_v" id="Button"></input></td>
	<td><input name="delete_n_[]" onclick="change()" type="button" value="yes" class="col delete_n_v" id="Button"></input></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__v" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_v" id="Button"></input></td>
</tr><?php
}?>

<tr>
	<td colspan="2"><b><i>Report List</i></b><?php $serial=1;?></td>
	<td></td>
	<td></td>
	<td></td>
	<td><input class="displaying_r" type="checkbox" name="ch_display" value="Bike">Display</td>
	<td><input class="printing_r" type="checkbox" name="ch_print" value="Bike">Print</td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Day Book"/>Day Book</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Challan"/>Challan</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Bill"/>Bill</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input</td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Item Monthly Summary"/>Item Monthly Summary </td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Stock Group Summary"/>Stock Group Summary </td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Cash/Bank Book"/>Cash/Bank Book </td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Trial Balance"/>Trial Balance </td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Profit & Loss"/>Profit & Loss</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Balance Sheet"/>Balance Sheet</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Party Ledger"/>Party Ledger</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Party Ledger Details"/>Party Ledger Details</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Groupwise party ledger"/>Groupwise party ledger</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_[]" id="Button"></input</td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Group Analysis"/>Group Analysis</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__[]" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_[]" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Ledger Analysis"/>Ledger Analysis</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__[]" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_[]" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Sales/MRP Price"/>Sales/MRP Price</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Sectionwise Stock"/>Sectionwise Stock</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_[]" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Stock Item Analysis"/>Stock Item Analysis</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Voucher Exchange"/>Voucher Exchange</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input onclick="change()" name="display__[]" type="button" value="yes" class="col display__r" id="Button"></input></td>
	<td><input onclick="change()" name="print__n_[]" type="button" value="yes" class="col print__n_r" id="Button"></input></td>
</tr>
<tr>
	<td align="right" width="50px" ><?=$serial++;?></td>
	<td><input type="hidden" name="status[]" value="report"/><input type="hidden" name="title[]" value="Warehousewise Stock"/>Warehousewise Stock</td>
	<td></td>
	<td></td>
	<td></td>
	<td><input name="display__[]" onclick="change()" type="button" value="yes" class="col display__[]" id="Button"></input></td>
	<td><input name="print__n_[]" onclick="change()" type="button" value="yes" class="col print__n_[]" id="Button"></input></td>
</tr>
</tbody>
</table>
</li>

</ol>
		<input type="hidden" name="tbl_name" value="user_privileges" />
	</fieldset>
	<fieldset class="submit">
		<input class="submit" type="submit" name="submit" value="Submit" />
	</fieldset>
<?php
$array[0] = "user_id";
$array[1] = "date1";
$array[2] = "title";
$array[3] = "status";
$array[4] = "create_n_";
$array[5] = "alter__n_";
$array[6] = "delete_n_";
$array[7] = "display__";
$array[8] = "print__n_";	
$_SESSION['array'] = $array;
?>
</form>
</div>
</div>
<div id="right"></div>
</div>