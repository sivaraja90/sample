
{include file="left.tpl"}
 <body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
	<section class="content-header">
          <h4>
            <small><a href="mail_list.php"><i class="fa fa-list"> <label class="font" style="font-family:Arial, Helvetica, sans-serif">
List Mail</label></i></a></small>&ensp;&ensp;&ensp;
          </h4>
         </section>
        <!-- Main content -->
          <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
				<div class="box-header">
				{foreach from=$SerMailDetail item=View}
				<table width="110%">
				<tr>
				 <td>Created:{$View.created_date}&nbsp;&nbsp;{$View.created_time}</td>
                  <td align="justify">
				 <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Service Mail Details</h4></td>
				<td>Mail Send:{$View.timestamp}</td>
				</tr>
				</table>
				{/foreach}
				</div>

				<form class="form-horizontal" id="detail_view_po" name="detail_view_po">
				<input type="hidden" name="hdAction" />
				<br><br>
				   <div class="box-body">
				  {foreach from=$SerMailDetail item=serMail}	
				  	<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick"><b>Enquiry Id</b></label>
                      <div class="col-sm-6">
                       {$serMail.enquiry_id}
                      </div>
                    </div>
					</div>
					<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 thick" style="margin-left:65px;"><b>Service order No</b></label>
                      <div class="col-sm-6">
                       {$serMail.service_order_no}
                      </div>
                    </div>
					</div>
					</div>
				{/foreach}
<br>
				<table  class="table table-bordered table-striped">

				{foreach from=$SerMailDetail item=serMail}	
				<tr>
				<th style="width:15%;">Mail From</th>	
				<td>{$serMail.mail_from}</td>
				</tr>				
				<tr>
				<th>Mail CC</th>
				<td>{$serMail.mail_cc}</td>
				</tr>
				<tr>
				<th>Subject</th>
				<td>{$serMail.mail_subject}</td>
				</tr>
				<tr>
				<th>Message</th>
				<td>{$serMail.message}</td>
				</tr>
				{if $serMail.mail_attachment1 neq ""}
				<tr>
				<th>Attachment 1</th>
				<td><a href="./images/mail/{$serMail.mail_attachment1}" target="_blank">{$serMail.mail_attachment1}</a> </td>
				</tr>
				{/if}
				{if $serMail.mail_attachment2 neq ""}
				<tr>
				<th>Attachment 2</th>
				<td><a href="./images/mail/{$serMail.mail_attachment2}" target="_blank">{$serMail.mail_attachment2}</a></td>
				</tr>
				{/if}
				{if $serMail.mail_attachment3 neq ""}
				<tr>
				<th>Attachment 3</th>
				<td><a href="./images/mail/{$serMail.mail_attachment3}" target="_blank">{$serMail.mail_attachment3}</a></td>
				</tr>
				{/if}
				</table>
				{/foreach}
								
				
					</form>
</div>
</div>
</div>
</div>
</div>					
  </body>

 