<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>Quirk Responsive Admin Templates</title>

  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/lib/weather-icons/css/weather-icons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles-full.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/lib/jquery.gritter/jquery.gritter.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/lib/animate.css/animate.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>includes/admin/css/quirk.css">

  <script src="<?php echo base_url(); ?>includes/admin/lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body>

  <header>
    <div class="headerpanel">

      <div class="logopanel">
        <h2><a href="index.html">Quirk</a></h2>
      </div><!-- logopanel -->

      <div class="headerbar">

        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

        <div class="searchpanel">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div><!-- input-group -->
        </div>

        <div class="header-right">
        <ul class="headermenu">
          <li>
            <div id="noticePanel" class="btn-group">
              <button class="btn btn-notice alert-notice" data-toggle="dropdown">
                <i class="fa fa-globe"></i>
              </button>
              <div id="noticeDropdown" class="dropdown-menu dm-notice pull-right">
                <div role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="active"><a data-target="#notification" data-toggle="tab">Notifications (2)</a></li>
                    <li><a data-target="#reminders" data-toggle="tab">Reminders (4)</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="notification">
                      <ul class="list-group notice-list">
                        <li class="list-group-item unread">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">New message from Weno Carasbong</a></h5>
                              <small>June 20, 2015</small>
                              <span>Soluta nobis est eligendi optio cumque...</span>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item unread">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Renov Leonga is now following you!</a></h5>
                              <small>June 18, 2015</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Zaham Sindil is now following you!</a></h5>
                              <small>June 17, 2015</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-thumbs-up"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Rey Reslaba likes your post!</a></h5>
                              <small>June 16, 2015</small>
                              <span>HTML5 For Beginners Chapter 1</span>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <i class="fa fa-comment"></i>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Socrates commented on your post!</a></h5>
                              <small>June 16, 2015</small>
                              <span>Temporibus autem et aut officiis debitis...</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <a class="btn-more" href="">View More Notifications <i class="fa fa-long-arrow-right"></i></a>
                    </div><!-- tab-pane -->

                    <div role="tabpanel" class="tab-pane" id="reminders">
                      <h1 id="todayDay" class="today-day">...</h1>
                      <h3 id="todayDate" class="today-date">...</h3>

                      <h5 class="today-weather"><i class="wi wi-hail"></i> Cloudy 77 Degree</h5>
                      <p>Thunderstorm in the area this afternoon through this evening</p>

                      <h4 class="panel-title">Upcoming Events</h4>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <h4>20</h4>
                              <p>Aug</p>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">HTML5/CSS3 Live! United States</a></h5>
                              <small>San Francisco, CA</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <h4>05</h4>
                              <p>Sep</p>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">Web Technology Summit</a></h5>
                              <small>Sydney, Australia</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <h4>25</h4>
                              <p>Sep</p>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">HTML5 Developer Conference 2015</a></h5>
                              <small>Los Angeles CA United States</small>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <div class="row">
                            <div class="col-xs-2">
                              <h4>10</h4>
                              <p>Oct</p>
                            </div>
                            <div class="col-xs-10">
                              <h5><a href="">AngularJS Conference 2015</a></h5>
                              <small>Silicon Valley CA, United States</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <a class="btn-more" href="">View More Events <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <img src="images/photos/loggeduser.png" alt="" />
                Elen Adarna
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-chat alert-notice">
              <span class="badge-alert"></span>
              <i class="fa fa-comments-o"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
  </div><!-- header-->
</header>

<section>

  <div class="leftpanel">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <div class="media-left">
          <a href="#">
            <img src="../images/photos/loggeduser.png" alt="" class="media-object img-circle">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Elen Adarna <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
          <span>Software Engineer</span>
        </div>
      </div><!-- leftpanel-profile -->

      <div class="leftpanel-userinfo collapse" id="loguserinfo">
        <h5 class="sidebar-title">Address</h5>
        <address>
          4975 Cambridge Road
          Miami Gardens, FL 33056
        </address>
        <h5 class="sidebar-title">Contact</h5>
        <ul class="list-group">
          <li class="list-group-item">
            <label class="pull-left">Email</label>
            <span class="pull-right">me@themepixels.com</span>
          </li>
          <li class="list-group-item">
            <label class="pull-left">Home</label>
            <span class="pull-right">(032) 1234 567</span>
          </li>
          <li class="list-group-item">
            <label class="pull-left">Mobile</label>
            <span class="pull-right">+63012 3456 789</span>
          </li>
          <li class="list-group-item">
            <label class="pull-left">Social</label>
            <div class="social-icons pull-right">
              <a href="#"><i class="fa fa-facebook-official"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </li>
        </ul>
      </div><!-- leftpanel-userinfo -->

      <ul class="nav nav-tabs nav-justified nav-sidebar">
        <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
        <li class="tooltips unread" data-toggle="tooltip" title="Check Mail"><a data-toggle="tab" data-target="#emailmenu"><i class="tooltips fa fa-envelope"></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="Contacts"><a data-toggle="tab" data-target="#contactmenu"><i class="fa fa-user"></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="Settings"><a data-toggle="tab" data-target="#settings"><i class="fa fa-cog"></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="signin.html"><i class="fa fa-sign-out"></i></a></li>
      </ul>

      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title">Favorites</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="widgets.html"><span class="badge pull-right">10+</span><i class="fa fa-cube"></i> <span>Widgets</span></a></li>
            <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
          </ul>

          <h5 class="sidebar-title">Main Menu</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li class="nav-parent">
              <a href=""><i class="fa fa-check-square"></i> <span>Forms</span></a>
              <ul class="children">
                <li><a href="general-forms.html">Form Elements</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="form-wizards.html">Form Wizards</a></li>
                <li><a href="wysiwyg.html">Text Editor</a></li>
              </ul>
            </li>
            <li class="nav-parent active"><a href=""><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
              <ul class="children">
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="icons.html">Icons</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li class="active"><a href="alerts.html">Alerts &amp; Notifications</a></li>
                <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                <li><a href="sliders.html">Sliders</a></li>
                <li><a href="graphs.html">Graphs &amp; Charts</a></li>
                <li><a href="panels.html">Panels</a></li>
                <li><a href="extras.html">Extras</a></li>
              </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>Tables</span></a>
              <ul class="children">
                <li><a href="basic-tables.html">Basic Tables</a></li>
                <li><a href="data-tables.html">Data Tables</a></li>
              </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
              <ul class="children">
                <li><a href="asset-manager.html">Asset Manager</a></li>
                <li><a href="people-directory.html">People Directory</a></li>
                <li><a href="timeline.html">Timeline</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="blank.html">Blank Page</a></li>
                <li><a href="notfound.html">404 Page</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li><a href="signup.html">Sign Up</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- tab-pane -->

        <!-- ######################## EMAIL MENU ##################### -->

        <div class="tab-pane" id="emailmenu">
          <div class="sidebar-btn-wrapper">
            <a href="compose.html" class="btn btn-danger btn-block">Compose</a>
          </div>

          <h5 class="sidebar-title">Mailboxes</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
            <li><a href="email.html"><i class="fa fa-inbox"></i> <span>Inbox (3)</span></a></li>
            <li><a href="email.html"><i class="fa fa-pencil"></i> <span>Draft (2)</span></a></li>
            <li><a href="email.html"><i class="fa fa-paper-plane"></i> <span>Sent</span></a></li>
          </ul>

          <h5 class="sidebar-title">Tags</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk nav-label">
            <li><a href="#"><i class="fa fa-tags primary"></i> <span>Communication</span></a></li>
            <li><a href="#"><i class="fa fa-tags success"></i> <span>Updates</span></a></li>
            <li><a href="#"><i class="fa fa-tags warning"></i> <span>Promotions</span></a></li>
            <li><a href="#"><i class="fa fa-tags danger"></i> <span>Social</span></a></li>
          </ul>
        </div><!-- tab-pane -->

        <!-- ################### CONTACT LIST ################### -->

        <div class="tab-pane" id="contactmenu">
          <div class="input-group input-search-contact">
            <input type="text" class="form-control" placeholder="Search contact">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div>
          <h5 class="sidebar-title">My Contacts</h5>
          <ul class="media-list media-list-contacts">
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user1.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Christina R. Hill</h4>
                  <span><i class="fa fa-phone"></i> 386-752-1860</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user2.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Floyd M. Romero</h4>
                  <span><i class="fa fa-mobile"></i> +1614-650-8281</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user3.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Jennie S. Gray</h4>
                  <span><i class="fa fa-phone"></i> 310-757-8444</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user4.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Alia J. Locher</h4>
                  <span><i class="fa fa-mobile"></i> +1517-386-0059</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user5.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Nicholas T. Hinkle</h4>
                  <span><i class="fa fa-skype"></i> nicholas.hinkle</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user6.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Jamie W. Bradford</h4>
                  <span><i class="fa fa-phone"></i> 225-270-2425</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user7.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Pamela J. Stump</h4>
                  <span><i class="fa fa-mobile"></i> +1773-879-2491</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user8.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Refugio C. Burgess</h4>
                  <span><i class="fa fa-mobile"></i> +1660-627-7184</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user9.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Ashley T. Brewington</h4>
                  <span><i class="fa fa-skype"></i> ashley.brewington</span>
                </div>
              </a>
            </li>
            <li class="media">
              <a href="#">
                <div class="media-left">
                  <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                </div>
                <div class="media-body">
                  <h4 class="media-heading">Roberta F. Horn</h4>
                  <span><i class="fa fa-phone"></i> 716-630-0132</span>
                </div>
              </a>
            </li>
          </ul>
        </div><!-- tab-pane -->

        <!-- #################### SETTINGS ################### -->

        <div class="tab-pane" id="settings">
          <h5 class="sidebar-title">General Settings</h5>
          <ul class="list-group list-group-settings">
            <li class="list-group-item">
              <h5>Daily Newsletter</h5>
              <small>Get notified when someone else is trying to access your account.</small>
              <div class="toggle-wrapper">
                <div class="leftpanel-toggle toggle-light success"></div>
              </div>
            </li>
            <li class="list-group-item">
              <h5>Call Phones</h5>
              <small>Make calls to friends and family right from your account.</small>
              <div class="toggle-wrapper">
                <div class="leftpanel-toggle-off toggle-light success"></div>
              </div>
            </li>
          </ul>
          <h5 class="sidebar-title">Security Settings</h5>
          <ul class="list-group list-group-settings">
            <li class="list-group-item">
              <h5>Login Notifications</h5>
              <small>Get notified when someone else is trying to access your account.</small>
              <div class="toggle-wrapper">
                <div class="leftpanel-toggle toggle-light success"></div>
              </div>
            </li>
            <li class="list-group-item">
              <h5>Phone Approvals</h5>
              <small>Use your phone when login as an extra layer of security.</small>
              <div class="toggle-wrapper">
                <div class="leftpanel-toggle toggle-light success"></div>
              </div>
            </li>
          </ul>
        </div><!-- tab-pane -->


      </div><!-- tab-content -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="contentpanel">

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="index.html"><i class="fa fa-home mr5"></i> Home</a></li>
        <li><a href="buttons.html">UI Elements</a></li>
        <li class="active">Alerts &amp; Notifications</li>
      </ol>

      <div class="row">

        <div class="col-md-6">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Modal Box</h4>
              <p>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">

              <!-- Button trigger modal -->
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Launch Modal
              </button>
            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Tooltips</h4>
              <p>The tooltip is a common graphical ui element. The user hovers the pointer over an item, without clicking it, and a tooltip may appear.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">

              <div class="tooltip-example">
                <button title="Tooltip on right" data-placement="right" data-toggle="tooltip" class="btn btn-primary tooltips" type="button">Tooltip Right</button>
                <button title="" data-placement="left" data-toggle="tooltip" class="btn btn-primary tooltips" type="button" data-original-title="Tooltip on left">Tooltip Left</button>
                <button title="Tooltip on top" data-placement="top" data-toggle="tooltip" class="btn btn-primary tooltips" type="button">Tooltip Top</button>
                <button title="Tooltip on bottom" data-placement="bottom" data-toggle="tooltip" class="btn btn-primary tooltips" type="button">Tooltip Bottom</button>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Popovers</h4>
              <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">

              <div class="popover-example">
                <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="left" data-toggle="popover" data-container="body" class="btn btn-success popovers" type="button" data-original-title="" title="Popover Left">
                  Popover Left
                </button>
                <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-toggle="popover" data-container="body" class="btn btn-success popovers" type="button" data-original-title="" title="Popover Top">
                  Popover Top
                </button>
                <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="bottom" data-toggle="popover" data-container="body" class="btn btn-success popovers" type="button" data-original-title="" title="Popover Bottom">
                  Popover Bottom
                </button>
                <button data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="right" data-toggle="popover" data-container="body" class="btn btn-success popovers" type="button" data-original-title="" title="Popover Right">
                  Popover Right
                </button>
              </div>

            </div>
          </div><!-- panel -->

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Growl Notifications</h4>
              <p>Growl is a jQuery plugin designed to provide informative messages in the browser.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
              <button class="btn btn-default mr5" id="growlRegular">Basic Growl</button>
              <button class="btn btn-default mr5" id="growlSticky">Sticky Growl</button>
              <button class="btn btn-default" id="growlIcon">Using Icon</button>

              <div class="mb10"></div>

              <button class="btn btn-primary mr5 mb10" id="growlPrimary">Primary</button>
              <button class="btn btn-success mr5 mb10" id="growlSuccess">Success</button>
              <button class="btn btn-warning mr5 mb10" id="growlWarning">Warning</button>
              <button class="btn btn-danger mr5 mb10" id="growlDanger">Danger</button>
            </div>
          </div><!-- panel -->

        </div><!-- col-md-6 -->

        <div class="col-md-6">

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">Alert Messages</h4>
              <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">

              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Well done!</strong> You successfully read this <a href="" class="alert-link">important alert message</a>.
              </div>

              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Heads up!</strong> This <a href="" class="alert-link">alert needs your attention</a>, but it's not super important.
              </div>

              <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Warning!</strong> Best check yo self, you're <a href="" class="alert-link">not looking too good</a>.
              </div>

              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Oh snap!</strong> Change a <a href="" class="alert-link">few things</a> up and try submitting again.
              </div>

              <div class="alert alert-info fade in nomargin">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button>
                <h4>Announcements!</h4>
                <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                <div class="mb15"></div>
                <p>
                  <button class="btn btn-primary" type="button">Take this action</button>
                </p>
              </div>

            </div>
          </div><!-- panel -->

        </div><!-- col-md-6 -->

      </div><!-- row -->

    </div><!-- contentpanel -->
  </div><!-- mainpanel -->

</section>


<!-- Modal -->
<div class="modal bounceIn animated" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Content goes here...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->


<script src="<?php echo base_url(); ?>includes/admin/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url(); ?>includes/admin/lib/jquery.gritter/jquery.gritter.js"></script>

<script src="<?php echo base_url(); ?>includes/admin/js/quirk.js"></script>

<script>
$(document).ready(function() {

  'use strict';

  // Regular
  $('#growlRegular').click(function(){
    $.gritter.add({
      title: 'This is a regular notice!',
      text: 'This will fade out after a certain amount of time.'
    });
  });

  // Sticky
  $('#growlSticky').click(function(){
    $.gritter.add({
      title: 'This is a sticky notice!',
      text: 'This doesn\'t run on a fade timer. Just sits here until you manually removes this by clicking close button.',
      sticky: true
    });
  });

  // Using Icons
  $('#growlIcon').click(function(){
    $.gritter.add({
      title: 'notice using icon!',
      text: 'Adding icon to the notice is class based.',
      class_name: 'with-icon send-o'
    });
  });

  // Primary
  $('#growlPrimary').click(function(){
    $.gritter.add({
      title: 'This is a primary notice',
      text: 'Having class name primary applied to it.',
      class_name: 'with-icon question-circle primary'
    });
  });

  // Success
  $('#growlSuccess').click(function(){
    $.gritter.add({
      title: 'This is a success notice',
      text: 'Having class name success applied to it.',
      class_name: 'with-icon check-circle success'
    });
  });

  // Warning
  $('#growlWarning').click(function(){
    $.gritter.add({
      title: 'This is a warning notice',
      text: 'Having class name warning applied to it.',
      class_name: 'with-icon exclamation-circle warning'
    });
  });

  // Danger
  $('#growlDanger').click(function(){
    $.gritter.add({
      title: 'This is a danger notice',
      text: 'Having class name danger applied to it.',
      class_name: 'with-icon times-circle danger'
    });
  });

});
</script>

</body>
</html>
