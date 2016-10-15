<div class="row profile-wrapper">
  <div class="col-xs-12 col-md-3 col-lg-2 profile-left">
    <div class="profile-left-heading">
      <a href="" class="profile-photo"><img class="img-circle img-responsive" src="<?php echo base_url(); ?>includes/admin/images/photos/profilepic.png" alt=""></a>
      <h2 class="profile-name">Project Name</h2>

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
      <p><i class="glyphicon glyphicon-map-marker mr5"></i> San Francisco, CA, USA</p>

      <h4 class="panel-title">Description</h4>
      <p>Social media ninja. Pop culture enthusiast. Zombie fanatic. General tv evangelist.</p>
      <p>Alcohol fanatic. Explorer. Passionate reader. Entrepreneur. Lifelong coffee advocate. Avid bacon aficionado. Travel evangelist.</p>

      <hr class="fadeout">

    </div>
  </div>
  <div class="col-md-9 col-lg-12 profile-right">
    <div class="profile-right-body">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-justified nav-line">
        <li class=""><a href="#agent" data-toggle="tab" aria-expanded="false"><strong>Agents</strong></a></li>
        <li class=""><a href="#customers" data-toggle="tab" aria-expanded="false"><strong>Customers</strong></a></li>
        <li class="active"><a href="#income" data-toggle="tab" aria-expanded="true"><strong>Income</strong></a></li>
        <li><a href="#expense" data-toggle="tab"><strong>Expense</strong></a></li>
      </ul>

    <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane" id="agent">
              <div align="right"><button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Plot</button></div>
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
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>1 Canal</td>
                      <td>Mr. Ifran Ullah</td>
                      <td>Sold</td>
                      <td>Sold</td>
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
                  </tbody>
                </table>
              </div>

            </div><!-- tab-pane -->

          <div class="tab-pane" id="customers">
            <div align="right"><button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Customer</button></div>
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
                  <tr>
                    <td>001</td>
                    <td>Abdullah Shah</td>
                    <td>032042934234</td>
                    <td>2,4,60</td>
                    <td>2,4,60</td>
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
                                       
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane active" id="income">
            <div align="right"><button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Income</button></div>
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
                  <tr>
                    <td>25-Mar-2016vvvvvvvvv</td>
                    <td>520,000vvvvvvv</td>
                    <td>Abdullah Shah </td>
                    <td>Abdullah Shah</td>
                    <td>Abdullah Shah</td>
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
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane" id="expense">
            <div align="right"><button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Expense</button></div>
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
                  <tr>
                    <td>25-Mar-2016</td>
                    <td>520,000</td>
                    <td>Salary</td>
                    <td>Abdullah Shah</td>
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
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>