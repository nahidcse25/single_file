





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>--Title--</title>
	
	<link rel="stylesheet" type="text/css" href="docs/style.css" />
	<link rel="stylesheet" type="text/css" href="css/form_design.css" />
	<link rel="stylesheet" type="text/css" href="css/style_main.css" />
	<link rel="stylesheet" 				   href="css/top_menu.css" />		<!--for top menu css-->
	<link rel="stylesheet" 				   href="css/view_data.css" />		<!--for view data css-->
	<!-- Calender  >
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.0-beta.1/themes/smoothness/jquery-ui.css">
	<!--link rel="stylesheet" 				   href="css/datepicker.css" />		<!-- Calender  -->
	
	<link rel="stylesheet" 				   href="css__header.css" />    <!--for view data css-->
	<link rel="stylesheet" type="text/css" href="css__set_validation.css" />
	<link rel="stylesheet" type="text/css" href="css__form1.css" />
	<!--link rel="stylesheet" type="text/css" href="style.css" /-->
	<link rel="stylesheet" type="text/css" media="screen" href="css__add__item_row.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="auto_complete/2016_jun_01_autocomplete.css" />
	<link rel="stylesheet" type="text/css" href="css__tree_report.css" />
	<!--link rel="stylesheet" type="text/css" href="css__array_of_tree.css" /-->
	<STYLE TYPE="text/css">
	<!-- /* $WEFT -- Created by: Mashrur Sobhan (sovon_create@yahoo.com) on 5/21/2008 -- */
	  @font-face {
		font-family: Boishakhi;
		font-style:  normal;
		font-weight: normal;
		src: url(BOISHAK0.eot);
	  }
	-->
	.analysis_sql{
		border:1px solid black;
		margin-top:2px;
		margin-left:20px;
		padding:3px;
		}
	#web_activity, #web_activity a{
	color:#DDD;
	font-size:9px;
	border:0px solid black;
	margin-top:0px;
	}
	</STYLE>
<style>
.fixed{
	  position:fixed;
	  top:0;
	  width:auto;
	  display:none;
}
#up{
    position: fixed;
    width:80px;
    height:25px;
    top: 95%;
	right:14px;
    padding-top: 5px;
    text-align: center;
    background-color: #60c8f2;
    border-radius: 7px;
	display:none;
}
</style>
	
	
	
	
	<!--for Calender From Hanif Bhy-->
	<style type="text/css">
	<!--
		@import "calender/calendar-mos.css";
	-->	
	</style>
	<script language="javascript" type="text/javascript" src="calender/calendar.js"></script>
	<script language="javascript" type="text/javascript" src="calender/calendar-en.js"></script>
	<script language="javascript" type="text/javascript" src="calender/showDiv.js"></script>
	<script type="text/javascript" src="jquery/jquery-1.7.2.min.js" ></script>
	<!--End for Calender-->
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	
	
	<!-- SELECT  SEARCHABLE-->
	<script type="text/javascript" src="jquery/jQuery_v1.8.3.js"	></script>
	<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script-->
	<script type="text/javascript" src="jquery/jquery_searchAbleDropDown_1.0.8_details.js"></script>
	
	
	<script type="text/javascript">
		/*$(window).keydown(function(event){
			if(event.keyCode == 13) {
				//event.preventDefault();
				//return false;
			}
		});*/
		
		$(document).keydown(function(e) {
				// Set self as the current item in focus
			var self = $(':focus'),
				// Set the form by the current item in focus
				form = self.parents('form:eq(0)'),
				focusable,
				next;
			// Array of Indexable/Tab-able items
			//focusable = form.find('input,a,select,button,textarea,div[contenteditable=true]').filter(':visible');
			focusable = form.find('input,select,button,textarea,div[contenteditable=true]').filter(':visible');
			if (e.which === 13 && !self.is('textarea,div[contenteditable=true]'))
			{	// If not a regular hyperlink/button/textarea
				if ($.inArray(self, focusable) && (!self.is('a,button'))){
					// Then prevent the default [Enter] key behaviour from submitting the form
					e.preventDefault();
				} // Otherwise follow the link/button as by design, or put new line in textarea
				// Focus on the next item (either previous or next depending on shift)
				next = focusable.eq(focusable.index(self) + (e.shiftKey ? -1 : 1));
				if(next.length==1)
				{	next.focus();
				}
				else if(   $(':focus').prev().is('INPUT')
						&& $(':focus').attr('type')=="submit"
						&& $(':focus').attr('name')=="submit"
						&& $(':focus').prev().prop('nodeName')=="INPUT"
				)
				{	form.submit();
				}
				else
				{	e.preventDefault();
				}
				return false;
			}
		});

		$(document).ready(function() {
			/*
			$(".row_08").j_apply_style_qty_();
			$(".row_09").j_apply_style_amnt();
			$(".row_13").j_apply_style_amnt();
			$(".row_17").j_apply_style_amnt();
			$(".row_18").j_apply_style_amnt();
			*/
			$(".addrow").click(function(){
				v3_add__item_row( $(this).attr("name"), row_values=[] );
				v3_add__item_row( $(this).attr("name"), row_values=[] );
				v3_add__item_row( $(this).attr("name"), row_values=[] );
				v3_add__item_row( $(this).attr("name"), row_values=[] );
				v3_add__item_row( $(this).attr("name"), row_values=[] );
			});
			$(".delete").live('click',function(){
					 if( $(this).attr("name")=="1" )	{	var add_name = "copy_1_";}
				else if( $(this).attr("name")=="2" )	{	var add_name = "copy_2_";}
				
				var john=$(this).parents("."+add_name+"item_row").html();
				var n=john.indexOf(add_name+"table_prim_id_");
				if( n!=-1 )
				{	var j=john.indexOf("\" name=\""+add_name+"table_prim_id_");
					john="#"+john.slice(n,j);
					var delete_row=$(john).val();
					
					if( document.getElementById("deleted_id") )	{ $("#deleted_id").val($("#deleted_id").val()+"@"+delete_row);	}
					else										{ alert('<input type="hidden" id="deleted_id"		name="deleted_id"		value=""		/>');	}
				}
				$(this).parents("."+add_name+"item_row").remove();
				v2_update_total($(this).attr("name"));
				if( $(".delete").length < 2 ) $(".delete").hide();	
			});
		});
	</script>
	<!--JqueryUI - Datepicker == http://www.tutorialspoint.com/jqueryui/jqueryui_datepicker.htm#datepicker_options == -->
	<!--script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script-->
	<script type="text/javascript" src="jquery/jQuery_v1.10.4.js"></script>
	
	<script>
		$(function() {
			$("#_date_1_,#_date_2_,#_date_3_").datepicker({
				dateFormat:"yy-mm-dd",
				changeMonth: true
			});
			$("#date1,#date2,#date_from_,#date_to___,#transaction_date__").datepicker({
				//appendText:" (yyyy-mm-dd)",
				dateFormat:"yy-mm-dd",
				changeMonth: true,
				minDate: $("#_SOFTWARE_START_DATE_").val(),
				maxDate: $("#_SOFTWARE_END_DATE___").val(),
				//changeMonth: true,
				//constrainInput: false,
				//defaultDate: -2,
				//firstDay: 0,
				//gotoCurrent: true,
				//altField: "#datepicker-4",
				//altFormat: "DD, d MM, yy",
				onClose: function() 
				{
					var n = $(this).val().split("-");
					if( n.length==3 )
					{
						if( n[0].length<=2 )	{ n[0] = 2000+parseInt(n[0]);	}
							 if( parseInt(n[1])<1 )  { n[1] = 1;		}
						else if( parseInt(n[1])>12 ) { n[1] = 12;		}
							 if( parseInt(n[2])<1 )  { n[2] = 1;		}
						else if( parseInt(n[2])>31 ) { n[2] = 31;		}
						
						a = n[0]+","+n[1]+","+n[2];
						a = new Date(a);
						
						_min = new Date( $("#_SOFTWARE_START_DATE_").val() );
						_max = new Date( $("#_SOFTWARE_END_DATE___").val() );
						
							 if( a.getTime() < _min.getTime() )	{ a = _min;	}
						else if( a.getTime() > _max.getTime() )	{ a = _max;	}
						
						y = $.datepicker.formatDate('yy-mm-dd', a );
					}
					else
					{
						y = "";
					}
					$(this).val( y );
				}
			});
		});
		$(function() {
			if( $("#date1,#date2,#date_from_,#date_to___,#transaction_date__").attr("type")=="text" )
			{
				if( !$("#date1,#date2,#date_from_,#date_to___,#transaction_date__").prop("disabled") )
					$("#date1,#date2,#date_from_,#date_to___,#transaction_date__").datepicker( "option", "appendText", " (yyyy-mm-dd)" );
			}
			else if( $("#date1,#date2,#date_from_,#date_to___,#transaction_date__").attr("type")=="hidden" )
			{
				if( $("#date1,#date2,#date_from_,#date_to___,#transaction_date__").prop("readonly") )
					$("#date1,#date2,#date_from_,#date_to___,#transaction_date__").datepicker( "option", "appendText", " (yyyy-mm-dd)" );
			}
		});
	</script>
	<script type="text/javascript" src="auto_complete/2016_jun_01_autocomplete.js"></script>
	<script type="text/javascript" src="JavaScript_v3__add__item_row.js"	></script>
	<script type="text/javascript" src="JavaScript_v2__down.js"	></script>
	<script type="text/javascript" src="JavaScript_v1__onBlur_attr_set.js"	></script>
	<script type="text/javascript" src="JavaScript_v3__auto_suggestion__validity_check.js"	></script>
	<script type="text/javascript" src="JavaScript_v2__extra__functions.js"	></script>
	<script type="text/javascript" src="JavaScript_v2__update_total.js"	></script>
	<script type="text/javascript" src="JavaScript_v2__add__voucher_commission.js"></script>
	<script type="text/javascript" src="JavaScript_v2__calculate__comm.js"></script>
	<script type="text/javascript" src="JavaScript_v1__set_validation.js" ></script>
	<script type="text/javascript" src="JavaScript_v1_number_format.js"	></script>
	<script type="text/javascript" src="JavaScript_v1__style.js"	></script>
	
	<!--script type="text/javascript" src="JavaScript_nahid_table_head_lock.js"	></script-->
	
</head>

<body>


<table width="100%" border="2" cellspacing="0" cellpadding="0" style="border:1px solid #CCCCCC; border-top:none; background:#FFFFFF;">
	<tr>
		<td colspan="2" width="95%" height="0" style="color:#FFFFFF; padding:0px 20px;" valign="top">
			<!--div style="width: 50%"><img src="" width="170" height="71" /></div>
			<div style=" float:right; font-weight: bold; font-size: 14px; color: #FF0000; margin: 0px; padding: 0px;">Web Accounting Software</div-->
		</td>
	</tr>
	<tr>
		<td align="left" width="62%" bgcolor="#CCCCCC" style="color:black; padding:5px;  border-left:1px solid #CCCCCC;">
						Welcome to HAMKO Corporation Ltd(HAMKO Electric & Electronics), Financial Year : March 1, 2015 to December 31, 2016
			
		</td>
		<td align="right" width="38%" bgcolor="#CCCCCC" style="color:black; padding-right:5px; border-right:1px solid #CCCCCC;">
			<a href="admin.php?page=log_out_immediate"><img src="image/log_out_immediate.png" title="This will Lock Your account." /> Lock Account</a> Mohiuddin, User Type:[Super Admin], <a href="log_out.php" style="background-color:#3976A4; padding:4px;"><font color="white"> Sign out<Font></a>
		</td>
	</tr>
	<tr>
	<td colspan="4" style="border-bottom:1px solid #CCCCCC; padding-bottom:4px;">
	</td>
	</tr>
	<tr>
		<td colspan="4">
			<table border="2" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td valign="top" style="padding-right:5px; padding-left:5px;">
					
						

<style type="text/css">
option.optgroup
{
/*background-color:#D7D7FD;*/
font-weight: bold;
/*color: white;*/
}
</style>


		<div class="actioncontain">
			<div class="header icon-48-addedit">
				<span title="">Party Ledger</span>
				
			</div>
			<div class="toolbarcon"> 
				<table class="toolbar">
					<tr>
																																			<td class="button" >	<a class="toolbar"	href="javascript:frmSubmit('report__party_ledger');" >																														<span class="icon-32-print"		title="Print Preview"			></span>Print Preview</a>	</td>										<td class="button" >	<a class="toolbar"	href="admin.php?action=reports&page=reports_gallery" >																<span class="icon-32-cancel"	title="Close and go to Root"	></span>Close</a>	</td>					<td class="button" >	<a class="toolbar"	href="#" 		  onclick="#" >																									<span class="icon-32-help"		title="Help"					></span>Help</a>	</td>					</tr>
				</table>
			</div><!--End of toolbarcon-->
		</div><!--End of actioncontain-->
		



<script type="text/javascript">
$(document).ready(function() {
	$("select").searchable();
});
function frmSubmit(rpl_page_name__n__n)
{
	if( vrfy() )
	{
		$("#rpl_page_name__n__n").val( rpl_page_name__n__n );
		$("#rpf_date_from__n__n").val( $("#date_from_").val() );
		$("#rpf_date_to__n__n__").val( $("#date_to___").val() );
		$("#rpf_ledger__n__n__n").val( $("#ledger__n_").val() );
		
		//alert(rpl_page_name__n__n);
		document.rp_report_print.submit();
	}
}
function vrfy()
{
	if( document.getElementById("ledger__n_") && document.getElementById("ledger__n_").value=="" )	{	document.getElementById("ledger__n_").focus();	return false;	}
	
	return true;
}
</script>
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
    $('table tbody tr td a').click(function() { alert('ghfhffj');
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

<form name="rp_report_print" method="post" target="_blank" action="report.php" style="border:1px solid red;display:none;" ><br/><input type="text" name="rpf_user_table_id__" id="rpf_user_table_id__" placeholder="rpf_user_table_id__" readonly="" value="23" /><br/><input type="text" name="rpf_date_from__n__n" id="rpf_date_from__n__n" placeholder="rpf_date_from__n__n" readonly="" value="" /><br/><input type="text" name="rpf_date_to__n__n__" id="rpf_date_to__n__n__" placeholder="rpf_date_to__n__n__" readonly="" value="" /><br/><input type="text" name="rpf_ledger__n__n__n" id="rpf_ledger__n__n__n" placeholder="rpf_ledger__n__n__n" readonly="" value="" /><br/><input type="text" name="rpl_page_name__n__n" id="rpl_page_name__n__n" placeholder="rpl_page_name__n__n" readonly="" value="" /><br/></form>

<form class="form" name="day_book" action="#" target="_self" method="post" style="height:120px;" onSubmit="return vrfy(this);" >
	<div class="right">
		<ol></ol>
		<ol><h4><span id="closing_balance">&nbsp;</span></h4></ol>
	</div>
	<div class="left">
		<ol><label for="">Party Name : </label></ol>
		<ol><label for="">Date From : </label>	<input type="text"   name="date_from_" id="date_from_" size="22" value="2016-09-01" autocomplete="off" /></ol>
		<ol><label for="">Date To : </label>	<input type="text"   name="date_to___" id="date_to___" size="22" value="2016-09-04" autocomplete="off" /></ol>
		<ol><label for=""></label>				<input type="submit" class="submit" name="submit" value="Search" /></ol>
	</div>
</form>

<script type="text/javascript">
v1_set_select_validation( element_id="ledger__n_", title="Party Name" );
</script>


<div id="admin_home">
	<div id="left_in">
		<div id="form_id">
			<div id="news_show">
				
<p href="#" class='prev_row'>previous row</p>
				<table class="back_row" width="95%" id="rounded-corner" >
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
					<tfoot>
						<tr>
							<td colspan="7" ><em>Party Ledger.</em></td>
						</tr>
					</tfoot>
				</table>			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#closing_balance").html("Closing Balance : 3,55,79,484.07 Cr");
	</script>					</td>
				</tr>
				<tr>
					<td colspan="2">
<div id="footer">
	Copyright &copy; 2013.
</div></td>
				</tr>
			</table>
		</td>
	</tr>
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
        $('.back_row tbody tr').eq(row_index[--i]).show();  //For LIFO
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

	

</body>
</html
