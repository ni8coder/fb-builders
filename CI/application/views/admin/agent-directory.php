    <ol class="breadcrumb breadcrumb-quirk">
          <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
          <li><a href="buttons.html">Pages</a></li>
          <li class="active">People Directory</li>
        </ol>

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 people-list">
            <div class="people-options clearfix">
              <div class="btn-toolbar pull-left">
                <a href="<?php echo base_url(); ?>user_management/agent/index"><button type="button" class="btn btn-success btn-quirk">Add New Agent</button></a>
              </div>

              <div class="btn-group pull-right people-pager">
              <?php echo $links;?>
                <!-- <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button> -->
              </div>
              <span class="people-count pull-right">Showing <strong>1-10</strong> of <strong>34,404</strong> users</span>
            </div><!-- people-options -->
          <?php foreach ($data as $agent) {?>
            <div class="panel panel-profile list-view">
              <div class="panel-heading">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="<?php echo base_url(); ?>includes/admin/images/photos/user1.png" alt="">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><?php echo $agent->name ?></h4>
                    <p class="media-usermeta"><i class="glyphicon glyphicon-briefcase"></i> Agent</p>
                  </div>
                </div><!-- media -->
                <ul class="panel-options">

                  <li><a class="tooltips" href="<?php echo base_url(); ?>user_management/agent/edit_agent/<?php echo $agent->id; ?>" data-toggle="tooltip" title="View Options"><button type="button" class="btn btn-default">Edit</button></a></li>
                  <li><a class="tooltips" href="<?php echo base_url(); ?>user_management/agent/delete_agent/<?php echo $agent->id; ?>" data-toggle="tooltip" title="View Options"><button type="button" class="btn btn-default">Delete</button></a></li>
                </ul>
              </div><!-- panel-heading -->

              <div class="panel-body people-info">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>Location</label>
                      <?php echo $agent->address ?>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>Email</label>
                      <?php echo $agent->email ?>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>Phone</label>
                      <?php echo $agent->phoneno ?>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>Username</label>
                      <?php echo $agent->username ?>
                    </div>
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>CNIC</label>
                      <?php echo $agent->cnic ?>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="info-group">
                      <label>Date of Birth</label>
                      <?php echo $agent->dob ?>
                    </div>
                  </div>
                </div><!-- row -->
              </div>

            </div><!-- panel -->
          <?php } ?>



