  <div id="container" class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center">Edit Project</h2>
			<br><br>
		<form method="post" action="<?php echo base_url(); ?>project_management/project/update_data/<?php echo $edit_data->id; ?>" class="form-horizontal" pmbx_context="656015A6-0CC3-416A-8981-2ACD5F993540">
			
			<label class="col-sm-3 control-label">Name<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="name" value="<?php echo $edit_data->name?>" class="form-control"">
            </div>
            <label class="col-sm-3 control-label">Location<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="location" value="<?php echo $edit_data->location; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-sm-3 control-label">Type<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="type" value="<?php echo $edit_data->type; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
            <label class="col-sm-3 control-label">Category<span class="text-danger">*</span></label>
			<div class="col-sm-8">
                <input type="text" name="category" value="<?php echo $edit_data->category; ?>" class="form-control" placeholder="" required="" pmbx_context="7C7F34F0-48DC-4F9A-B8E4-907A5C49B032">
            </div>
    
            <div class="col-sm-9 col-sm-offset-3">
	            <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
	            <button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
	        </div>			
			
		  </form>
		</div>
	</div>
</div>