<?php if(isset($data)){
      foreach ($data as $project) {?>
<div class="row profile-wrapper">
  <div class="col-xs-12 col-md-3 col-lg-2 profile-left">
  
    <div class="profile-left-heading">
      <a href="" class="profile-photo"><img class="img-circle img-responsive" src="<?php echo base_url(); ?>includes/admin/images/photos/profilepic.png" alt=""></a>
      <h2 class="profile-name"><?php echo $project->name;?></h2>

      <ul class="list-group">
        <li class="list-group-item">Plots <a href="timeline.html">1,333</a></li>
        <li class="list-group-item">Sold <a href="people-directory.html">541</a></li>
        <li class="list-group-item">Available <a href="people-directory-grid.html">32,434</a></li>
      </ul>

<!-- 
<button class="btn btn-danger btn-quirk btn-block profile-btn-follow">Follow</button> -->
    </div>
    <div class="profile-left-body">
      <h4 class="panel-title">Location</h4>
      <p><i class="glyphicon glyphicon-map-marker mr5"></i> <?php echo $project->location;?></p>

      <h4 class="panel-title">Description</h4>
      <p><?php echo $project->category;?></p>

      <hr class="fadeout">

    </div>
    
  </div>
  <div class="col-md-9 col-lg-12 profile-right">
    <div class="profile-right-body">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified nav-line">
        <li class=""><a href="#agent" data-toggle="tab" aria-expanded="false"><strong>Agents</strong></a></li>
        <li class=""><a href="#investor" data-toggle="tab" aria-expanded="false"><strong>Investors</strong></a></li>
        <li class=""><a href="#customers" data-toggle="tab" aria-expanded="false"><strong>Customers</strong></a></li>
        <li class="active"><a href="#income" data-toggle="tab" aria-expanded="true"><strong>Income</strong></a></li>
        <li><a href="#expense" data-toggle="tab"><strong>Expense</strong></a></li>
      </ul>

    <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane" id="agent">
              <div class="row">
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_agent/index/<?php echo $project->id;?>" class="btn btn-primary pull-right">Add New Agent</a></div>
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_agent/agent_list/<?php echo $project->id;?>" class="btn btn-primary pull-right">Link Existing Agent</a></div>
              </div>
              <br>

              <div class="table-responsive">
                <table id="dataTable1" class="table table-bordered table-striped-col">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>CNIC</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php if(isset($agent)){
                  foreach ($agent as $agent) {?>
                    <tr>
                      <td><?php echo $agent->name ?></td>
                      <td><?php echo $agent->address ?></td>
                      <td><?php echo $agent->phoneno ?></td>
                      <td><?php echo $agent->email ?></td>
                      <td><?php echo $agent->cnic ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="plot_profile.php" id="">Details</a></li>
                            <li><a class="editMe" href="#" data-toggle="modal" data-target="#editModal" id="">Edit</a></li>
                            <li><a href="#" id="">Cancel</a></li>
                          </ul>
                        </div><!-- btn-group -->
                      </td>
                    </tr>
                    <?php }}?>
                  </tbody>
                </table>
              </div>

            </div><!-- tab-pane -->
            <div class="tab-pane" id="investor">
              <div class="row">
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_investor/index/<?php echo $project->id;?>" class="btn btn-primary pull-right">Add New Investor</a></div>
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_investor/investor_list/<?php echo $project->id;?>" class="btn btn-primary pull-right">Link Existing Investor</a></div>
              </div>
              <br>

              <div class="table-responsive">
                <table id="dataTable1" class="table table-bordered table-striped-col">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Phone</th>
                      <th>Amount</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php if(isset($investor)){
                  foreach ($investor as $investor) {?>
                    <tr>
                      <td><?php echo $investor->name ?></td>
                      <td><?php echo $investor->address ?></td>
                      <td><?php echo $investor->phoneno ?></td>
                      <td><?php echo $investor->amount ?></td>
                      <td><?php echo $investor->description ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Action <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="plot_profile.php" id="">Details</a></li>
                            <li><a class="editMe" href="#" data-toggle="modal" data-target="#editModal" id="">Edit</a></li>
                            <li><a href="#" id="">Cancel</a></li>
                          </ul>
                        </div><!-- btn-group -->
                      </td>
                    </tr>
                    <?php }}?>
                  </tbody>
                </table>
              </div>

            </div><!-- tab-pane -->

          <div class="tab-pane" id="customers">
            <div class="row">
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_customer/index/<?php echo $project->id;?>" class="btn btn-primary pull-right">Add New Customer</a></div>
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_customer/customer_list/<?php echo $project->id;?>" class="btn btn-primary pull-right">Link Existing Customer</a></div>
            </div>
            <br>

            <div class="table-responsive">
              <table id="dataTable1" class="table table-bordered table-striped-col">
                <thead>
                  <tr>
                    <th>MR No</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>CNIC</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                <?php if(isset($customer)){
                  foreach ($customer as $customer) {?>
                  <tr>
                    <td><?php echo $customer->mr_no ?></td>
                    <td><?php echo $customer->name ?></td>
                    <td><?php echo $customer->phoneno ?></td>
                    <td><?php echo $customer->email ?></td>
                    <td><?php echo $customer->cnic ?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="customer_profile.php" id="">Details</a></li>
                          <li><a class="editMe" href="#" data-toggle="modal" data-target="#editModal" id="">Edit</a></li>
                          <li><a href="#" id="">Delete</a></li>
                        </ul>
                      </div><!-- btn-group -->
                    </td>
                  </tr>   
                  <?php }}?>            
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane active" id="income">
             <div class="row">
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_income/index/<?php echo $project->id;?>" class="btn btn-primary pull-right">Add New Income</a></div>
            </div>
            <br>

            <div class="table-responsive">
              <table id="dataTable1" class="table table-bordered table-striped-col">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Customer</th>
                    <th>Agent</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                <?php if(isset($income)){
                  foreach ($income as $income) {?>
                  <tr>
                    <td><?php echo $income->createddate ?></td>
                    <td><?php echo $income->amount ?></td>
                    <td><?php echo $income->customer_name ?></td>
                    <td><?php echo $income->agent_name ?></td>
                    <td><?php echo $income->description ?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          
                          <li><a class="editMe" href="#" data-toggle="modal" data-target="#editModal" id="">Edit</a></li>
                          <li><a href="#" id="">Delete</a></li>
                        </ul>
                      </div><!-- btn-group -->
                    </td>
                  </tr>  
                  <?php }}?>    
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="expense">
             <div class="row">
                <div class="col-sm-2 pull-right"><a href="<?php echo base_url();?>project_management/project_expense/index/<?php echo $project->id;?>" class="btn btn-primary pull-right">Add New Expense</a></div>
            </div>
            <br>

            <div class="table-responsive">
              <table id="dataTable1" class="table table-bordered table-striped-col">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Expense by</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                <?php if(isset($expense)){
                  foreach ($expense as $expense) {?>
                  <tr>
                    <td><?php echo $expense->createddate ?></td>
                    <td><?php echo $expense->amount ?></td>
                    <td><?php echo $expense->expense_by ?></td>
                    <td><?php echo $expense->description ?></td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          
                          <li><a class="editMe" href="#" data-toggle="modal" data-target="#editModal" id="">Edit</a></li>
                          <li><a href="#" id="">Delete</a></li>
                        </ul>
                      </div><!-- btn-group -->
                    </td>
                  </tr>
                  <?php }}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }}?>