<?php $current_page_active = basename($_SERVER['REQUEST_URI']);//$current_page = $_SERVER ?>
 <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">CIDS Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?>

                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo ($current_page_active == "dashboard") ? 'active' : ''; ?>">
                        <a href="dashboard" title="Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php echo ($current_page_active == "introduction") ? 'active' : ''; ?>">
                      <a href="introduction" title="Introduction of CIDS"><i class="fa fa-fw fa-bank"></i> Introduction</a>
                    </li>

                            <li class="<?php echo ($current_page_active == "about_vision" || $current_page_active == "about_collaboration" || $current_page_active == "about_contribution" || $current_page_active == "about_research") ? 'active' : ''; ?>">
                            <a href="about_vision" title="About CIDS"><i class="fa fa-fw fa-header"></i> About CIDS</a>

                    </li>
                            <li class="<?php echo ($current_page_active == "list_position") ? 'active' : ''; ?>">
                                <a href="list_position" title="Member's lists"><i class="fa fa-fw fa-users"></i> List Members</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "contact") ? 'active' : ''; ?>">
                            <a href="contact" title="Contact Info"><i class="fa fa-fw fa-phone"></i> Contact Info</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "events" || $current_page_active == "list_events") ? 'active' : ''; ?>">
                            <a href="list_events"><i class="fa fa-fw fa-calendar"></i> Events</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "banner_list" || $current_page_active == "add_banner") ? 'active' : ''; ?>">
                            <a href="banner_list"><i class="fa fa-fw fa-picture-o"></i> Banners</a>
                    </li>
                    <li class="<?php echo ($current_page_active == "videoAdd") ? 'active' : ''; ?>">
                            <a href="videoAdd"><i class="fa fa-fw fa-server"></i>Add video</a>
                    </li>
                    <li class="<?php echo ($current_page_active == "enquiry") ? 'active' : ''; ?>">
                            <a href="enquiry"><i class="fa fa-fw fa-server"></i> List Enquries</a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
