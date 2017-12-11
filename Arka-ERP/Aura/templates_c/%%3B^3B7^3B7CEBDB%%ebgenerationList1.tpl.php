<?php /* Smarty version 2.6.25, created on 2015-12-29 10:51:23
         compiled from ebgenerationList1.tpl */ ?>


<!--         <?php if ($this->_tpl_vars['accordion'] == '0'): ?>

             <input type="hidden" id="hdn_accordion" value="0">

         <?php endif; ?>
         <?php if ($this->_tpl_vars['accordion'] == '1'): ?>

             <input type="hidden" id="hdn_accordion" value="1">
             
         <?php endif; ?> -->


<?php echo '
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <link rel="stylesheet" href="/resources/demos/style.css">     -->       
<script type="text/javascript" src=\'./dhtmlxMessage/codebase/dhtmlxmessage.js\'></script>
         
<script>
    
    
  $(function() {
    $( "#accordion" ).accordion(); 
  
var accd_val= document.getElementById("hdn_accordion").value;  
if(accd_val==1)
{
$( "#accordion" ).accordion("option", "active",1);
}
else
{
$( "#accordion" ).accordion("option", "active",0);   
}
  
});    
    
    
    
var myCalendar;
function doOnLoad() {
    var date;date=new Date();
    myCalendar = new dhtmlXCalendarObject(["eb_date", "from_date", "to_date"]);
    myCalendar2 = new dhtmlXCalendarObject(["to_date"]);
    myCalendar3 = new dhtmlXCalendarObject(["eb_date"]);
   var myEvent = myCalendar2.attachEvent("onClick", function (){
   
   
		if( && document.getElementById("datetodate_site_name").value && document.getElementById("datetodate_htsc_grouping").value        && document.getElementById("from_date").value)
		{

		     document.getElementById("eb_gen_list").submit();
	   }
	   else
	   {
	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please Select From Date!",
						});
						
			document.getElementById("to_date").value="";			
			return false;	
		
		}   
   
           
});    
     var myEvent2 = myCalendar3.attachEvent("onClick", function ()
    {
    document.getElementById("eb_gen_list2").submit();
    });        
    
    
	<!--myCalendar.setSensitiveRange(date,null);-->
}


function showSites()
{
//alert(name);
str= document.getElementById("datetodate_region").value;
var var1=document.getElementById("datetodate_region").id;
var var2=var1.split("_",2);
var prefx=var2[0];
//alert(prefx);
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
	
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
  
	x=xmlhttp.responseText;
	document.getElementById(prefx+"_"+"site_name").innerHTML=x;
        var name_of_site_index =  document.getElementById(prefx+"_"+"site_name").selectedIndex;
       var  name_of_site=   document.getElementById(prefx+"_"+"site_name").options;
       var prefx_append=prefx+"_"+"tht";
        showGroup(name_of_site[name_of_site_index].text,prefx_append);
	   
	   }
	 else 
	   {
	 document.getElementById(prefx+"_"+"site_name").innerHTML="<option value=\'0\'>Please select region</option>";
	 //  document.getElementById("htsc_grouping").innerHTML="<option value=\'0\'>Please select region</option>";
	   
	   }  
       
    }
  }
xmlhttp.open("GET","select_sites_ajax.php?q="+str,true);

xmlhttp.send();
}



function showGroup(str,name)
{
 
 //alert(name);
var var1=name;
var var2=var1.split("_",2);
var prefx=var2[0];       
if (str=="")
  {
  document.getElementById("txtHint").value="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	var x;
	
	//if(xmlhttp.responseText.indexOf("|$|")!=-1)
        if(xmlhttp.responseText)
	   {
             //alert(xmlhttp.responseText);  
  
	x=xmlhttp.responseText;
	document.getElementById(prefx+"_"+"htsc_grouping").innerHTML=x;
  //      var name_of_site_index =  document.getElementById("site_name").selectedIndex;
   //     var  name_of_site=   document.getElementById("site_name").options;
     //   showGroup(name_of_site[name_of_site_index].text);
	   }
	 else 
	   {
	   document.getElementById(prefx+"_"+"htsc_grouping").innerHTML="<option value=\'0\'>Please select region</option>";

	   }  
       
    }
  }
xmlhttp.open("GET","select_htsc_ajax.php?q="+str,true);

xmlhttp.send();


}


 function getval(prefix)
        {
var name_from_event=prefix;
var prefx =name_from_event.split("_",1);         
var region_var,htsc_no_var,site_name_var,from_date_var,to_date_var;
if(prefx=="datetodate")
{
prefx=0;
}
else
{
prefx=1;
}

switch(prefx)
{
   
case 0:    
prefx="datetodate";
region_var=document.getElementById(prefx+"_"+"hdn_region").value;
htsc_no_var=document.getElementById(prefx+"_"+"hdn_htsc_no").value;
site_name_var=document.getElementById(prefx+"_"+"hdn_site_name").value;
from_date_var=document.getElementById(prefx+"_"+"hdn_from_date").value;
to_date_var=document.getElementById(prefx+"_"+"hdn_to_date").value;
 if(region_var==\'\' || htsc_no_var==\'\' || site_name_var==\'\' || from_date_var==\'\' || to_date_var==\'\')
{

	   		dhtmlx.alert({
			title: "Alert !",
			type:"alert-error",
			text: "Please select the details properly for XL Conversion!",
						});

 return false;   
}
else
{
var window_var=window.open(\'report_power_gen_list.php?switch_case=\'+"datetodate_in_ebgeneration"+\'&\'+"region="+region_var+\'&\'+"htsc_no="+htsc_no_var+\'&\'+"site_name="+site_name_var+\'&\'+"from_date="+from_date_var+\'&\'+"to_date="+to_date_var,\'popUpWindow\',\'height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no\')
setInterval(function(){window_var.close();},3000);

}

break;
case 1: 
prefx="datewise";
region_var=document.getElementById(prefx+"_"+"hdn_region").value;
htsc_no_var=document.getElementById(prefx+"_"+"hdn_htsc_no").value;
site_name_var=document.getElementById(prefx+"_"+"hdn_site_name").value;
panel_date_var=document.getElementById(prefx+"_"+"hdn_panel_date").value; 
 if(region_var==\'\' || htsc_no_var==\'\' || site_name_var==\'\' || panel_date_var==\'\')
{
 alert(\'Please select the details properly for XL Conversion\'); 
 return false;   
}
else
{
var window_var=window.open(\'report_power_gen_list.php?switch_case=\'+"datewise_in_ebgeneration"+\'&\'+"region="+region_var+\'&\'+"htsc_no="+htsc_no_var+\'&\'+"site_name="+site_name_var+\'&\'+"panel_date="+panel_date_var,\'popUpWindow\',\'height=150,width=300,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes,url=no\')
setInterval(function(){window_var.close();},3000); 
}

break; 
}

 }

<script src="dhtmlxMessage/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcalendar.js" type="text/javascript"></script>
<script src="codebase/dhtmlxcommon.js" type="text/javascript"></script>
<script>

$(function(Date1) {
				//alert("test");
				$( "#from_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			
$(function(Date2) {
				//alert("test");
				$( "#to_date" ).datepicker({
					altField: "#validity",
					altFormat: "yy-mm-dd"
				});
			});
			
function deleteCats(){

var from_date,to_date,htsc_no;
htsc_no=document.getElementById("datetodate_hdn_htsc_no").value;
from_date=document.getElementById("datetodate_hdn_from_date").value;
to_date=document.getElementById("datetodate_hdn_to_date").value;
dhtmlx.confirm({
    title: "Close",
    type:"confirm-warning",
    text: "Are you sure to Delete Details From \' "+ from_date + " \'  To  \' " + to_date +" \' ?",
    callback: function(result) 
	{
	if(result==true)
	    {

  FormName		= document.eb_gen_list;
  FormName.action	= "ebgenerationList.php?deleid="+htsc_no+"&from_date="+from_date+"&to_date="+to_date;
  FormName.submit();

 		}  
	}
});
 
 }


</script>
'; ?>

<body onLoad="doOnLoad();showSites();">
<div id="nav">
           <!--<ul id="main_nav">
		 <?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
			<?php if ($this->_tpl_vars['roles']['role_name'] == 'List EB Generations'): ?>
           <li><a href="./eb_generation.php" title="List EB Generation"><img src="images/icons/logs.gif" alt="List" border=0>&nbsp;List EB Gen&nbsp;&nbsp;</a></li>
			<?php endif; ?>
		 <?php endforeach; endif; unset($_from); ?>
         

			<li> <a href="./eb_generation.php"><img src="images/icons/refresh.gif" alt="Refresh" border=0>&nbsp;Refresh&nbsp;&nbsp;</a></li>
			<?php $_from = $this->_tpl_vars['RList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['roles']):
?>
				<?php if ($this->_tpl_vars['roles']['role_name'] == 'Add New EB Generation' && $this->_supers['session']['Region'] != 'Chennai'): ?>
			<li><a href="./eb_generation_entry.php" title="EB Generation Entry"><img src="images/add_icon.gif" />&nbsp;EB Generation Entry&nbsp;</a></li>
			<?php endif; ?>
		 <?php endforeach; endif; unset($_from); ?>	
		        </ul>
        <ul id="sub_nav">
            <li align="center"><h2 align="center">EB Generation List</h2></li>
        </ul>-->
		
          <table style="width: 100%">
              <tr>
<!--                  <td>
                      <h3><?php if ($this->_supers['post']['region'] != ""): ?>Region:&nbsp;&nbsp; <?php echo $this->_supers['post']['region']; ?>
<?php endif; ?></h3>
                  </td>
-->                  <td>
                      <h3><?php if ($this->_supers['post']['site_name'] != ""): ?>Site Name:&nbsp;&nbsp;<?php echo $this->_supers['post']['site_name']; ?>
<?php endif; ?></h3>
                  </td>
                  <td>
                      <h3><?php if ($this->_supers['post']['htsc_no'] != ""): ?>HTSC No:&nbsp;&nbsp;<?php echo $this->_supers['post']['htsc_no']; ?>
<?php endif; ?></h3>
                  </td>
              </tr>
          </table>		
		

    <div class="clear"></div>
	<br />
	  </div>
    <div id="content" width="100%" style="margin-top:-2%">
        
<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border=0>
    <tr><th>Date To Date Report</th></tr>
    <div >      
</table>        
<table width="100%" cellpadding="2" cellspacing="0" border="0">
				<!--<tr>
				  	<td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				</tr>-->

<tr>
				  	<td colspan="2" align="right">&nbsp;&nbsp;</td>
</tr>

<?php if ($this->_tpl_vars['SuccessMessage'] != "" && $this->_tpl_vars['ErrorMessage'] == ""): ?> <tr><td class="succs_text"  style="min-width:50%"><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td><td   style="min-width:50%">&nbsp;</td>	</tr><?php endif; ?>
 <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?><tr><td class="errtxt"  style="min-width:50%">	<?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td> <td   style="min-width:50%">&nbsp;</td></tr>  <?php endif; ?>	
 
	
	
	<tr>
        
        
        
        
        
    <form name="eb_gen_list" id="eb_gen_list" method="post">
		<table align="center" class="ticketinfo" cellspacing="1" cellpadding="3" width="100%" border=0 style="margin-top:1%">
<input type="hidden" name="hdAction" id="hdAction"> 
                    
                <tr>
                   <!-- <td>Select Region:</td>
				<?php if ($this->_supers['session']['Region'] != 'Chennai'): ?>	
                 <td><input type="text" name="region" id="datetodate_region" value="<?php echo $this->_supers['session']['Region']; ?>
" readonly="true"></td>
				<?php elseif ($this->_supers['session']['Region'] == 'Chennai'): ?>
				<td>
				<select name="region" id="datetodate_region" onChange="showSites();">
				<option value="tirunelveli">Tirunelveli</option>
				<option value="coimbatore">Coimbatore</option>
				</select>
				</td>
				<?php endif; ?>
				 -->
                    <td>Site:</td>
			     <td><select name="site_name" id="datetodate_site_name" onChange="showGroup(this.value,this.id);"  style="height:18px;">
				<option value=0 selected="selected">----Select Site-----</option>

			    </select>&nbsp;&nbsp;<font class="error"><b>*</b>&nbsp;</font></td>
		
				<td>HTSC No:</td>
                             <td >
                                <select id="datetodate_htsc_grouping" name="htsc_no" style="height:18px;" >   
                                <option value=0 selected="selected">----Please Select Sites-----</option>
                                </select> 
                            </td>                        
	<td><label>From Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="from_date" name="from_date" size="25"  readonly="true" value="<?php echo $this->_tpl_vars['Date1']; ?>
">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>                 
        <td><label>To Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="to_date" name="to_date" size="25"  readonly="true" value="<?php echo $this->_tpl_vars['Date2']; ?>
">&nbsp;&nbsp;<font class="error"   ><b>*</b>&nbsp;</font></td>                                
 <td colspan="2" align="right"><?php if ($this->_tpl_vars['PageList_dtd'] != ""): ?><a href="#"><img src="images/xls.gif" onClick="getval(this.id);" id="datetodate_xlprinter" alt="xls" border=0></a><?php endif; ?>&nbsp;&nbsp;<?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>                 
                 
                 </tr>
 	
		
		</table>
        
<!--                <input type="hidden" id="datetodate_hdn_region" value="<?php echo $_POST['region'] ?>"> 
-->                <input type="hidden" id="datetodate_hdn_htsc_no" value="<?php echo $_POST['htsc_no'] ?>">
                <input type="hidden" id="datetodate_hdn_site_name" value="<?php echo $_POST['site_name'] ?>"> 
                <input type="hidden" id="datetodate_hdn_from_date" value="<?php echo $_POST['from_date'] ?>">
                <input type="hidden" id="datetodate_hdn_to_date" value="<?php echo $_POST['to_date'] ?>">        
        
        
    </form>
 
    </tr>

	
            
    <tr>
	
		<table align="center" class="dtable" cellspacing="1" cellpadding="3" width="100%" border=0 style="margin-top:2%">
		<?php if ($this->_tpl_vars['PageList_dtd'] != ""): ?>
			<tr>
			<!--<th width="8" align="center" >Machine Id</th>-->
	    
<!--	        <th width="4" align="center">Imp Kwh</th>
	        <th width="4" align="center">Exp Kwh</th>
			<th width="4" align="center">Imp Kvarh</th>
                        <th width="4" align="center">Exp Kvarh</th>
			<th width="6" align="center">% Imp Kwh</th>
			<th width="6" align="center">% Exp Kwh</th>
			<th width="9" align="center">% Imp Kvarh</th>
			<th width="9" align="center">% Exp Kvarh</th>
			<th width="32" align="center">Cum Imp Kwh</th>
			<th width="32" align="center">Cum Exp Kwh</th>
			<th width="9" align="center">Cum Imp Kvarh</th>
			<th width="9" align="center">Cum Exp Kvarh</th>
			<th width="20" align="center">Action</th>-->

	        <th width="4" align="center">Imp Kwh</th>
	        <th width="4" align="center">Exp Kwh</th>
			<th width="4" align="center">Imp Kvarh</th>
            <th width="4" align="center">Exp Kvarh</th>
			<th width="4" align="center">Imp KVA</th>
            <th width="4" align="center">Exp KVA</th>			

			<th width="20" align="center">Action</th>			
            </tr><?php endif; ?>
			<!--			 <tr >
                <td align="center"><input type="text" id="machine_id" name="machine_id" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="htsc_no" name="htsc_no" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="mf" name="mf" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="import_kwh" name="import_kwh" value="" size="10" autocomplete="Off"></td>
                <td align="center"><input type="text" id="export_kwh" name="export_kwh" value="" size="10" autocomplete="Off"></td>
				<td align="center"><input type="text" id="import_kvarh" name="import_kvarh" value="" size="10" autocomplete="Off"></td>
				<td align="center"><input type="text" id="export_kwh" name="export_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_imp_kwh" name="percent_imp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_exp_kwh" name="percent_exp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_imp_kvarh" name="percent_imp_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="percent_exp_kvarh" name="percent_exp_kvarh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_imp_kwh" name="cum_imp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_exp_kwh" name="cum_exp_kwh" value="" size="10" autocomplete="off"></td>
				<td align="center"><input type="text" id="cum_imp_kvarh" name="cum_imp_kvarh" value="" size="10" autocomplete="off"></td>
		
                               <td align="center"><input type="text" id="cum_exp_kvarh" name="cum_exp_kvarh" value="" size="10" autocomplete="off"></td>
                              
                         </tr> -->
        
		  <?php $_from = $this->_tpl_vars['PageList_dtd']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>
            <tr >          
                              <!--  <td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['machine_id']; ?>
</a></td>-->
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kwh']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kwh']; ?>
</a></td>		
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kvarh']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kvarh']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['imp_kva']; ?>
</a></td>
				<td align="left"><a  href="#." onClick="closeit('<?php echo $this->_tpl_vars['ListDet']['turbine_id']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_htsc_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['location_no']; ?>
','<?php echo $this->_tpl_vars['ListDet']['turbine_name']; ?>
','<?php echo $this->_tpl_vars['ListDet']['make']; ?>
');"><?php echo $this->_tpl_vars['ListDet']['exp_kva']; ?>
</a></td>		
				<td align="left"><a href="#"><img src="images/icons/delete.png" border="0" align="absmiddle" alt="Delete" onClick="Javascript:deleteCats()" >	</a></td>	
            </tr>
	      <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="12" align="center"><img src="images/warning.gif" border="0">&nbsp;No Records Found</td>
			</tr>
              <?php endif; unset($_from); ?>
		</table>
		
    </tr>
</table>
                
         </div>
                
                
    
                

                
                
</div>
</body>