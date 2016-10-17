
	<div id="container" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center">Edit Income</h2>
			<br><br>
		<form method="post" action="<?php echo base_url(); ?>income/update_data/<?php echo $edit_data->id; ?>" class="form-horizontal" pmbx_context="656015A6-0CC3-416A-8981-2ACD5F993540">
			
               
            <label class="col-sm-3 control-label">Amount<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="amount" value="<?php echo $edit_data->amount; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
			<label class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="description" value="<?php echo $edit_data->amount; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
	   
            <div class="col-sm-9 col-sm-offset-3">
	            <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
	            <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
	        </div>			
			
		  </form>
		</div>
	</div>
</div>