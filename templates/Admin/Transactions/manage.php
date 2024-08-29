<style>
	.isdeleted{
		white-space: nowrap;
		padding: 5px 10px;
		margin: 0 3px;
		font-size: 13px;
		color: #fff!important;
		font-weight: 600;
		background: #a94242;
		border-radius: 3px;
	}
	.table_listing .download_report{
		margin: 0 3px 5px;
		display: inline-block;
	}
	.cus{
		font-size: small;
	}
	.heading-title {
	  color: #444;
	  float: left;
	  font-size: 17px;
	  font-weight: 600;
	  margin: 0 0 5px;
	  padding: 0;
	  width: 100%;
	}
	.modal-dialog {
 	 	margin: 30px auto;
  		width: 1100px;
	}
	.content {
  		margin-left: auto;
  		margin-right: auto;
  		min-height: 610px;
  		padding: 15px;
	}
	.modal-content {
  		border: 0 none;
  		border-radius: 5px;
  		box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125);
	}
	.main_info_sec{
		margin-top: 0px;
	}
	.parsley-errors-list{padding:0;list-style:none;color:red;}
</style>
<div class="content-wrapper">
<?php echo  $this->Flash->render();?>
    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
      <h2 class="global_title"><i class="fa fa-building-o"></i> Manage Transaction</h2>
       <div class="main_info_sec">
		   <div class="row" style="margin-bottom:1%;padding:0 20px 10px">
			   <div class="col-lg-12">
					<a href="#" class="btn btn-info openwindow"><i class="fa fa-plus"></i> Add Record</a>
			   </div>
		   </div>
        	<style>
			   .text-center.overlape {
        				position: absolute;
    					width: 100%;
   						z-index: 9999;
    					left: 0;
    					top: 39%;
				}
			   .table_listing{
				   position:relative;}
		   </style>
            
            <!-- Table -->
            
             <div class="table_listing rep_content">
				<div class="text-center overlape" id="loader" style="display:none">
				   <img src ="/img/loading.gif" width="60px" height="60px">
			    </div>
            	<div class="table-responsive">
                    <table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th align='left'><?php echo $this->Paginator->sort('name', 'Name');?></th>
								<th align='left'><?php echo $this->Paginator->sort('contact_person', 'Goverment Fees');?></th>
								<th align='left'><?php echo $this->Paginator->sort('phone', 'Typing Fees');?></th>
								<th align='left'><?php echo $this->Paginator->sort('created', 'Created');?></th>
								<th align='left'>Action</th>
							</tr>
							<?php if($transactions){
									foreach($transactions as $transaction){
								?>
								<tr>
									<td><?php echo $transaction->name;?></td>
									<td><?php echo $transaction->gov_fees;?></td>
									<td><?php echo $transaction->typing_fees;?></td>
									<td><?php echo date('j F,Y H:i:s',strtotime($transaction->mod_date));?></td>
									<td>
									<?php	
									
										$edit = '<a href=# data-toggle=""><i class="fa fa-edit editwindow" data-Id="'.base64_encode($transaction->id).'" title="Edit" ></i></a>';
										
										$delete = '<a href="'.BASE_URL.'/admin/Transactions/delete/'.base64_encode($transaction->id).'" onclick="return confirm('."'Are you sure you want to delete?'".');">
										<i class="fa fa-remove" title="Delete" ></i></a>';				
										echo $edit.'  '.$delete;									
									?>
									</td>
								</tr>
								<?php }		}else{ ?>
							   <tr><td colspan="8" class="no_record">No Record Found</td></tr>
							  <?php } ?>
						</thead>
					</table>
                </div>
				<div class="table_page_info">
					<div class="row">
						<div class="col-lg-5 col-sm-5 col-xs-12">
							<p>
								<?php echo $this->Paginator->counter('Showing {{start}} to {{end}} of {{count}}');?>
							</p>
						</div>
						
						<div class="col-lg-7 col-sm-7 col-xs-12">
							<ul class="pagination">
							<?php echo $this->Paginator->prev('  ' . __('Previous'));?>
							  <?php echo $this->Paginator->numbers();?>
							  <?php echo $this->Paginator->next('  ' . __('Next'));?>
							</ul>
						</div>
					</div>
				</div>				
            </div>            
        </div>
    </section>
    <!-- /.content -->
  </div>

  <style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>


// Add Record Model Window  Start //
 
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add Record</h4>
	            </div>
		           <section class="content">
				      <!-- Your Page Content Here -->				    
						<div class="main_info_sec">	
				            <?php echo $this->Form->create('Transaction', array('url' =>'/admin/Transactions/add','id' => 'fileupload', 'class' => 'form-horizontal form-request check-form add-property {is_required:"false"}  js-normal-fileupload', 'enctype' => 'multipart/form-data'));?>
								<div class="global_form">
									<div class="row">
										<div class="col-lg-12 col-sm-12 col-xs-12">
											<div class="form_block">
												<label class = "nitin">Transaction<span class="clor"> * </span> :</label>
											  <?php echo $this->Form->input('name', array('required' => 'required', 'class' => 'input_field', 'label' => false));  ?>
											</div>
										</div>
										
										<div class="col-lg-12 col-sm-12 col-xs-12">
											<div class="form_block">
												<label class = "nitin">Goverment Fees<span class="clor"> * </span> :</label>
											  <?php echo $this->Form->input('gov_fees', array('required' => 'required', 'class' => 'input_field', 'label' => false));  ?>
											</div>
										</div>
										
										<div class="col-lg-12 col-sm-12 col-xs-12">
											<div class="form_block">
												<label class = "nitin">Typing Fees<span class="clor"> * </span> :</label>
											  <?php echo $this->Form->input('typing_fees', array('required' => 'required', 'class' => 'input_field', 'label' => false));  ?>
											</div>
										</div>             
															
										<div class="col-lg-12 col-sm-12 col-xs-12">
											<div class="global_btn_info">
												<button class="save"><i class="fa fa-floppy-o"></i> Submit</button>
											</div>
										</div>
									</div>                    
				              </div>
				        </div>
		    	</section>
		    	<?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>

    <!--Edit Record Pop Window-->

    <div id="editRecord" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	            </div>
		        <div id="editData">
				<div>
            </div>
        </div>
    </div>
	
	

<script type="text/javascript">
$(document).ready(function(){
	$(".openwindow").click(function(){
		$("#myModal").modal('show');		
	});
	
	var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
	
	$(".editwindow").click(function(){
			var trnascId = $(this).attr('data-Id');
			if(trnascId != ''){
				$.ajax({
						type: "POST",
						url: "<?php echo BASE_URL ?>/admin/Transactions/editTransaction/"+trnascId,
						data: 'transaction_id=' + trnascId,
						success: function(data){
							$('#editData').empty();
							$('#editData').append(data);
							$("#editRecord").modal('show');		

						}
					  });
			}
		
	});

	$('#fileupload').parsley();
});
</script>
  <!-- /.content-wrapper -->
<!---------------- / course------------->