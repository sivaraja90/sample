<?php /* Smarty version 2.6.25, created on 2017-01-27 13:34:26
         compiled from phone_postpaidDetails.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'phone_postpaidDetails.tpl', 464, false),)), $this); ?>
	</div><body onLoad="doOnLoad()"> 
        <div class="wrapper wrapper-content animated fadeInRight" >

            <div class="row">
			 <?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
			<div class="isa_success">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['SuccessMessage']; ?>
		 
			</div>
		 <?php endif; ?>
		  <?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
			<div class="isa_error">
			<i class="fa fa-check"></i>
			<?php echo $this->_tpl_vars['ErrorMessage']; ?>
		 
			</div>
		 <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                          <h5 style="padding-left:40%;">Phone Postpaid Details</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" name="phone_postpaid">
							
                        <?php $_from = $this->_tpl_vars['PageList5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['List2Det']):
?>
							  <input type="hidden" id="network2" name="network2" value="<?php echo $this->_tpl_vars['List2Det']['network']; ?>
" />
							   <div class="form-group">
							  
							  <div id="errsimId"> 
							   <label class="col-sm-2 control-label" style="text-align:left;">Sim ID:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><input type="hidden" id="simId" name="simId" value="<?php echo $this->_tpl_vars['List2Det']['simId']; ?>
" /><?php echo $this->_tpl_vars['List2Det']['sim_id']; ?>
</td></div></div>
							   <div id="errsimNo">  
							   <label class="col-sm-2 control-label" style="text-align:left; margin-left:15%">Sim No:</label>
							   <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['List2Det']['sim_no']; ?>
</td></div></div>
							   
							   </div>
                              <div class="form-group">
							   <div id="errmobileNo"> <label class="col-sm-2 control-label" style="text-align:left;"> Mobile No:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><input type="hidden" id="mobileNo" name="mobileNo" value="<?php echo $this->_tpl_vars['List2Det']['mobile_no']; ?>
" /><?php echo $this->_tpl_vars['List2Det']['mobile_no']; ?>
</td></div></div>
							<div id="errserviceNo"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Service No:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['List2Det']['service_no']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errnetwork"> <label class="col-sm-2 control-label" style="text-align:left;">Network:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><input type="hidden" id="network" name="network" value="<?php echo $this->_tpl_vars['List2Det']['network']; ?>
" /><?php echo $this->_tpl_vars['List2Det']['network']; ?>
</td></div></div>
							<div id="errvalidity"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Validity:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['List2Det']['validity']; ?>
</td></div></div>
							</div>
							  <div class="form-group">
							   <div id="errsimType"> <label class="col-sm-2 control-label" style="text-align:left;"> Sim Type:</label>
                               <div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['List2Det']['sim_type']; ?>
</td></div></div>
							<div id="errcircle"> 
							<label class="col-sm-2 control-label" style="text-align:left;margin-left:15%"> Circle:</label>
							<div class="col-md-2 control-label" style="text-align:left;"><td><?php echo $this->_tpl_vars['List2Det']['circle']; ?>
</td></div></div>
							</div>
							<?php endforeach; endif; unset($_from); ?>
								<br/>
							<div align="center">
							<!--<a href="#" onclick="createWindow(this.id);" id="window_postpaid_detail"><input type="button" id="updatebill" name="updatebill" size="29" placeholder="Search" value="<?php echo $this->_supers['post']['updatebill']; ?>
" class="form-control" autocomplete="Off" onfocus="createWindow(this.id);" readonly="true"></a>-->	
							
                                         <button class="btn btn-primary" type="button" id="updatebill" data-toggle="modal" data-target="#myModal" >UpdateBill</button>
	                                     <button class="btn btn-primary" type="button" id="makepayment" name="makepayment" data-toggle="modal" data-target="#myModal2">MakePayment</button>
										 <button class="btn btn-primary" id="back" name="back" type="button">CANCEL</button>
                                      </div>
							
							<br />
							
								 <div class="form-group">
								<table class="table table-striped table-bordered table-hover dataTables-example"  >
								<tr>
								<th><center>Bill Date</center></th>
                                <th><center>Due Date</center></th>
								<th><center>Bill Amount</center></th>
                                <th><center>Paid Amount</center></th>
								<th><center>Paid Date</center></th>
								<th><center>Payment Mode </center></th>
								<th><center>Payment Status </center></th>
								<th><center>Payment Ref </center></th>
								<th><center>Action </center></th>
						        </tr>
						<?php $_from = $this->_tpl_vars['DList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet']):
?>        	
                     <tr class="gradeX">
			<td><?php echo $this->_tpl_vars['ListDet']['bill_date']; ?>
</td>	
		  	<td><?php echo $this->_tpl_vars['ListDet']['due_date']; ?>
</td>			        
		    <td><?php echo $this->_tpl_vars['ListDet']['bill_amt']; ?>
</td>	          	
            <td><?php echo $this->_tpl_vars['ListDet']['paid_amt']; ?>
</td>
			<td><?php echo $this->_tpl_vars['ListDet']['paid_date']; ?>
</td>
			<td><?php echo $this->_tpl_vars['ListDet']['payment_mode']; ?>
</td>			        
		    <td><?php echo $this->_tpl_vars['ListDet']['payment_status']; ?>
</td>	          	
            <td><?php echo $this->_tpl_vars['ListDet']['payment_ref']; ?>
</td>
			<td ><center><a href="./phone_PostpaidEdit.php?sim_id=<?php echo $this->_supers['get']['simId']; ?>
"><i class="fa fa-edit"></i></a></center></td>
				 </tr>
				  <?php endforeach; endif; unset($_from); ?>
						
						 </table> <!--<div align="center">
                                         <button class="btn btn-primary" type="button" id="postpaid" >Recharge</button>
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
									<button class="btn btn-primary" id="back1" type="button">BACK</button>
                                      </div>-->
									  </div>
							     
							  	<br />
								<div class="form-group">
							   <div  id="Bill_Details" style="display:none">
									<table class="table table-striped table-bordered table-hover dataTables-example"  >
								<tr>
								<th><center>Network</center></th>
								<th><center>Recharge_Amount</center></th>
                                <th><center>Recharge_Date</center></th>
								<th><center>No_Of_Validity_Day's</center></th>
                               <th><center>Due_Date</center></th>
							   <th><center>After Due_Date</center></th>
							
                                
						        </tr>
								<tr class="gradeX" >
			  <input type="hidden"  id="hdAction"  name="hdAction" />
			    
			  <td><select  name="network" id="network" value="<?php echo $this->_tpl_vars['network']; ?>
" autocomplete="off">
							   				  <option value="-Select-" >-Select-</option>
  											  <option value="aircel" >Aircel</option>
											  <option value="airtel" >Airtel</option>
											  <option value="bsnl">Bsnl</option>
											  <option value="vodofone">Vodofone</option>
											  <option value="tatadocomo">Tata Docomo</option>
											  <option value="idea">Idea</option>
											  
											</select>	</td>	
		  	<td><input type="text"  id="recharge_amount"  name="recharge_amount"  onkeyup="numericFilter(this)" value="<?php echo $this->_tpl_vars['recharge_amount']; ?>
" autocomplete="off">
			<input type="hidden" id="simId" name="simId" value="<?php echo $this->_tpl_vars['ListDet']['sim_id']; ?>
" ></td>			        
		    <td><input type="text"  id="recharge_date"  name="recharge_date" value="<?php echo $this->_tpl_vars['recharge_date']; ?>
" onKeyUp=""  autocomplete="off" ></td>          	
           <td><input type="text"  id="no_of_validity_days"  name="no_of_validity_days" value="<?php echo $this->_tpl_vars['no_of_validity_days']; ?>
" onKeyUp="validDate();" autocomplete="off" ></td>	 
			
			<td><input type="text"  id="due_date"  name="due_date" value="<?php echo $this->_tpl_vars['due_date']; ?>
" autocomplete="off"  onKeyUp="numericFilter(this);"></td>
			<td><input type="text"  id="afterdue_date"  name="afterdue_date" value="<?php echo $this->_tpl_vars['after']; ?>
" autocomplete="off"  onKeyUp="numericFilter(this);"></td>

</tr>

						 </table>
						 
						  <div align="center">
                                         <button class="btn btn-primary" type="button" id="rechargeReg" name="rechargeReg">Recharge Add</button>
<!--                                        <button class="btn btn-primary" type="button" onClick="validate()">ADD CUSTOMER</button>
-->										<button class="btn btn-primary" id="back2"  name="back2" type="button" >CANCEL</button>
                                      </div>
					
							</div>
							</div>
                                    </form>
										<!--    update bill start                           -->
									<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!--<i class="fa fa-laptop modal-icon"></i>-->
                                            <h4 class="modal-title">Update Bill</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                           <!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '

<script type="text/javascript">

function SetChecked(val){
 ptr=document.ConMgmt;
 len=ptr.elements.length;
 var i=0;
 for(i=0; i<len; i++)
  if (ptr.elements[i].name==\'ConId[]\')
   ptr.elements[i].checked=val;
}
function numericFilter(pay_amts) {
   pay_amts.value = pay_amts.value.replace(/[^\\0-9]/ig, "");

}
function post(){
			FormName = document.add_customer;
  			FormName.method	= "POST";
            FormName.submit();
		}
		
function closeit(){
//	parent.document.forms[\'add_customer\'].elements[\'delivery_mgr\'].value=val;
	parent.dhxWins.window("w1").close();
}
  $("#save").click(function(){
				var fields=["bill_amts"];
				for(i=0;i<fields.length;i++)
				{
		
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}	
              FormName= document.BillMgmt;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
</script>
    <style>
.isa_success
{
	color:#4F8A10;
	background-color:#DFF2BF;
}
.isa_error
{
	color:#D8000C;
	background-color:#FFBABA;
}
.isa_success i,.isa_error i
{
    margin:10px 22px;
	font-size:2em;
	vertical-align:middle;

}
</style>
'; ?>


<table width="100%" cellpadding="2" cellspacing="0" border="0" class="table table-bordered">
	 <form name="BillMgmt" method="post">
<input type="hidden" name="hdAction4" />
	
	<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
	  <tr> 
		<td class="errtxt"><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" /><?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td>
		<td  width=50%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td></tr>
    <tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
	  <tr > 
		<td class="succs_text" width=50%><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td>
		<td width=100%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td></tr>
    <tr>
	<?php endif; ?>
    <tr>
    
	 <td width=100% valign="top">
	 
	<table  class="table table-bordered" >
	
	   <tr>
	   		<th width="80">&nbsp;</th>
	        <th width="80">Mobile No</th>
			<th width="80">Bill Date</th>
			<th width="80">Due Date</th>
	        <th width="80">Bill Amount</th>

        </tr>
				
           <?php $_from = $this->_tpl_vars['DPList1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDP']):
?> 
            <tr>
				
				<td align="center"><input type="checkbox" name="ConId[]" id="ConId<?php echo $this->_tpl_vars['ListDP']['sl_no']; ?>
"  value="<?php echo $this->_tpl_vars['ListDP']['sl_no']; ?>
"></td>
				<input type="hidden" id="mobile_no" name="mobile_no" size="20" value="<?php echo $this->_tpl_vars['ListDP']['mobile_no']; ?>
" readonly="true">
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDP']['mobile_no']; ?>
</td>
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDP']['bill_date']; ?>
</td>
				<td align="center" title="" nowrap><?php echo $this->_tpl_vars['ListDP']['due_date']; ?>
</td>
                <td nowrap><input class="txt" type="text" name="bill_amts" id="bill_amts" name="<?php echo $this->_supers['post']['bill_amts']; ?>
" size="20" style="width:100%" value="" onKeyUp="numericFilter(this);" autoComplete="Off"></td>
            </tr> 
		   <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="5" align="center"><img src="images/warning.gif" border="0">&nbsp; No Records Found, All Bill Amounts are Added.</td>
			</tr>
              <?php endif; unset($_from); ?>
       </table>
     </td>
    
    </tr>
</table>

<table align="center" cellspacing="0" cellpadding="3" width="100%" border=0 class="table table-bordered">
 
  <tr> <td align="center">
        <div class="tabber">
        <!--   <div id="reply" class="tabbertab" align="left">-->
                <p>
                        <p>
                            <div align="center" style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
                                <input class="btn btn-primary" type="submit" name="save" value="Save" id="save">
                                                            </div>
                        </p>
                    </form>                
                </p>
            </div>
    </td>
 </tr>
</table>
</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
							<!--    update bill start                           -->
							
							<!--     make payment start                           -->
							<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <!--<i class="fa fa-laptop modal-icon"></i>-->
                                            <h4 class="modal-title">Make payment</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <!-- SEARCH FORM START -->
<div id="std">            
<!-- SEARCH FORM END -->
<?php echo '

<script type="text/javascript">

function SetChecked(val){
 ptr=document.ConMgmt;
 len=ptr.elements.length;
 var i=0;
 for(i=0; i<len; i++)
  if (ptr.elements[i].name==\'ConId[]\')
   ptr.elements[i].checked=val;
}
function numericFilter(pay_amts) {
   pay_amts.value = pay_amts.value.replace(/[^\\0-9]/ig, "");

}
/*function post(){
			FormName = document.add_customer;
  			FormName.method	= "POST";
            FormName.submit();
		}*/
		
function closeit(){
//	parent.document.forms[\'add_customer\'].elements[\'delivery_mgr\'].value=val;
	parent.dhxWins.window("w1").close();
}
$("#mpayment").click(function(){
				var fields=["pay_amts"];
				for(i=0;i<fields.length;i++)
				{
		
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}	
              FormName= document.ConMgmt;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
</script>

'; ?>


<table border="0PX solid black" class="table table-bordered">
	 <form name="ConMgmt" method="post">
<input type="hidden" name="hdAction1" />
<!--<tr>
				    <td colspan="2" align="right"><?php echo $this->_tpl_vars['LinkPage']; ?>
<?php echo $this->_tpl_vars['PerPageNavigation']; ?>
</td>
				    </tr>
	<tr><td>				-->
	<table class="table table-bordered">
            <tr>
					   <th>Payment Mode:</th>
						<td><select name="pay_mode" id="pay_mode"style="height: 18px;" name="pay_mode">
						<option>-- Mode --</option>
						<option value="Cash" >Cash</option>
						<option value="Cheque" >Cheque</option>
						</select>
						</td>
						<th class="tcolor">Payment Ref No:</th>
						<td align="center"><input type="text" id="p_ref_no" name="p_ref_no" size="20" value="" autocompleate="Off">
						<input type="hidden" id="simId" name="simId" size="25" value="<?php echo $this->_supers['get']['simId']; ?>
" autocomplete="Off">
						<!--</td>
            </tr>-->
			
				
		</table>
		 </td></tr>
	<?php if ($this->_tpl_vars['ErrorMessage'] != ""): ?>
	  <tr> 
		<td class="errtxt"><img src="images/warning.gif" alt="Error:" style="padding: 0px 10px 4px 5px; vertical-align:middle" /><?php echo $this->_tpl_vars['ErrorMessage']; ?>
</td>
		<td  width=50%></td>
	  </tr>
	  <tr>
	<td>&nbsp;</td>
	</tr>
   	<?php endif; ?>
	<?php if ($this->_tpl_vars['SuccessMessage'] != ""): ?>
   <tr> 
		<td class="succs_text" width=50%><?php echo $this->_tpl_vars['SuccessMessage']; ?>
</td>
		<td width=100%></td>
   </tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
    <tr>
	<?php endif; ?>
    <tr>
    
	 <td >
	 
	<table class="table table-bordered">
	
	   <tr>
	   		<th width="80" >Check box</th>
	        <th width="80" >Mobile No</th>
			<th width="80">Bill Date</th>
			<th width="80">Due Date</th>
	        <th width="80">Bill Amount</th>
			<th width="80">Paid Amt</th>
			<th width="80">Pending Amt</th>
			<th width="90">Payment Amt</th>
        </tr><tr>
		<tr>
		
			<?php $_from = $this->_tpl_vars['PageList1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ListDet3']):
?>	
           
            
				 <input type="hidden" id="simId" name="simId" value="<?php echo $this->_tpl_vars['ListDet3']['sim_id']; ?>
" autocomplete="Off"> 
				 <input type="hidden" id="mobile_no" name="mobile_no" value="<?php echo $this->_tpl_vars['ListDet3']['mobile_no']; ?>
" autocomplete="Off">
				<td align="center"><input type="checkbox" name="ConId[]" id="ConId<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
"  value="<?php echo $this->_tpl_vars['ListDet3']['sl_no']; ?>
" ></td>
				
				<td align="center" size="20"><?php echo $this->_tpl_vars['ListDet3']['mobile_no']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['bill_date']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['due_date']; ?>
</td>
                <td align="center" size="20" ><?php echo $this->_tpl_vars['ListDet3']['bill_amt']; ?>
</td>
				<!--<input type="hidden" id="bill_amt" name="bill_amt" size="20" value="<?php echo $this->_tpl_vars['ListDet3']['bill_amt']; ?>
" readonly="true"></td>-->
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['paid_amt']; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['ListDet3']['pending_amt']; ?>
</td>
				<td align="center" ><input  type="text" id="pay_amts" name="pay_amts"   value="" onKeyUp="numericFilter(this);" autoComplete="Off" ></td>
                <input type="hidden" id="paid_date" name="paid_date" size="20" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" readonly="true">
			
			   
            </tr>
			 <?php endforeach; else: ?>
			<tr>
			<td height="20" colspan="8" align="center"><img src="images/warning.gif" border="0">&nbsp; No Records Found, All Bill Amounts are Added.</td>
			</tr>
          
       <?php endif; unset($_from); ?>    
       </table>
     </td>
    
    </tr>
<br>
<table class="table table-bordered">
 
  <tr> <td align="center">
        <div class="tabber">
        <!--   <div id="reply" class="tabbertab" align="left">-->
                <p>
                        <p>
                            <div align="center" style="margin-top: 10px; margin-bottom: 10px;border: 0px;">
                                <input class="btn btn-primary" type="submit" name="mpayment" value="Make Payment" id="mpayment" >
                                <input class="btn btn-primary" type='reset' value='Reset' />
                                <input class="btn btn-white" type='button' id="back3" name="back3" value='Cancel' onClick="closeit()" />
                            </div>
                        </p>
                                    
                </p>
            </div>
    </td>
 </tr>
</table>
</form>
</table>
</div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
							
							
							<!--     make payment start                           -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</body>
		<?php echo '

<script type="text/javascript">
	// dhtml Calendar
	 function getval()
        {
		
		var validity,purchaseDate;
		date=document.getElementById("validity").value;
		to_date=document.getElementById("purchaseDate").value;
		if(validity=="" || purchaseDate=="")
		{
		alert("Please Specify Date");
		return false;
		}
		
        }	
	var myCalendar;
	function doOnLoad() {
    var validity;
	validity=new Date();
	  myCalendar = new dhtmlXCalendarObject(["recharge_date"]);

   
}	

//***********************************************PopUp - Add Customer************************************************
/*function createWindow() {

	var mobileNo = document.getElementById(\'mobileNo\').value;
    dhxWins = new dhtmlXWindows();
    dhxWins.setImagePath("./codebase/imgs/");
  // dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    win = dhxWins.createWindow("w1",500, 90, 600, 250);
    win.setText("Add New Bill");
    win.attachURL("./addNewBill.php?mobile_no="+mobileNo);
	win.denyMove();
}
*/
//***********************************************PopUp - Phone Bill Payment************************************************
/*function createWindow1() {
	
	var network = document.getElementById(\'network\').value;
	dhxWins = new dhtmlXWindows();
	dhxWins.setImagePath("./codebase/imgs/");
    dhxWins.enableAutoViewport(true);
    dhxWins.attachViewportTo("winVP");
	
			
    win = dhxWins.createWindow("w2",300, 80, 800, 380);
	win.setText("Make Phone Bill Payment");
	win.attachURL("./phone_postpaidBillpayment.php?network="+network);
	
	win.denyMove();
}*/

/*function createWindow1(parameter) {	
		dhxWins = new dhtmlXWindows();
		dhxWins.enableAutoViewport(true);
		dhxWins.attachViewportTo("std");
		dhxWins.setImagePath("./codebase/imgs/");
var mobileNo = document.getElementById(\'mobileNo\').value;
//alert(mobileNo);	
switch(parameter)
{

case "makepayment":

		w1 = dhxWins.createWindow("w1", 600, 300, 750, 400);
		w1.setText("dhtmlxWindow");
		w1.button("close").enable();
		w1.button("minmax1").disable();
		w1.progressOn();
		w1.setText("Make Phone Bill Payment");
		w1.attachURL("./phone_postpaidBillpayment.php?mobile_no="+mobileNo);
break;
	}	
	} */


$(document).ready(function() {
$(\'#side-menu\').metisMenu();
		 $("#back").click(function(){

         window.history.back();

         });
		 $("#back1").click(function(){

         window.history.back();

         });
		 $("#back2").click(function(){

         window.history.back();

         });
		 $("#back3").click(function(){

         window.history.back();

         });
		 /*$("#postpaid").click(function(){
					
					document.getElementById(\'Bill_Details\').style.display=\'inherit\';
				});*/
				
				$("#rechargeReg").click(function(){
				var fields=["network","recharge_amount","recharge_date","no_of_validity_days","due_date","afterdue_date"];
				for(i=0;i<fields.length;i++)
				{
		
				current_iteration = document.getElementById(fields[i]).value;
			//alert(fields[i]);
				document.getElementById(fields[i]).style.borderColor="";
						if(current_iteration=="")
						{			
						document.getElementById(fields[i]).focus();
						document.getElementById(fields[i]).style.borderColor="red";									
									return false;
						}	

				}	
              FormName= document.phone_postpaid;
  			  FormName.method= "POST";
              FormName.submit(); 
			                 });
		  });	
		  
		  function validDate()
{
var d = new Date(document.getElementById("recharge_date").value);
var numberOfDaysToAdd = document.getElementById("no_of_validity_days").value;
d.setDate(d.getDate() + +numberOfDaysToAdd);
var dd = d.getDate();
var mm = d.getMonth() + 1;
var y = d.getFullYear();
var someFormattedDate = y + \'-\'+ mm + \'-\'+ dd;
document.getElementById("due_date").value = someFormattedDate;
}	
</script>	
	<script type="text/javascript" src="dhtmlxMessage/codebase/dhtmlxcalendar.js" ></script>
			<script type="text/javascript" src="./codebase/dhtmlxcalendar.js"></script>
			<script type="text/javascript" src="./codebase/dhtmlxcommon.js"></script>
			<script src="jquery/jquery.ui.datepicker.js"></script>

         	
           
           <link rel="stylesheet" type="text/css" href="css/datepickier_main.css">
	 	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	  		<link rel="stylesheet" href="./codebase/dhtmlxcalendar.css" type="text/css">
			<link rel="stylesheet" href="./codebase/dhtmlxcalendar_dhx_skyblue.css" type="text/css"> 
			<link rel="stylesheet" href="./codebase/skins/dhtmlxmessage_dhx_skyblue.css" type="text/css">
			<link rel="stylesheet" type="text/css" href="css/datepicker.css">
		 '; ?>