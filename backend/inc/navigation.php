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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name'];?>

                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo ($current_page_active == "dashboard.php") ? 'active' : ''; ?>">
                        <a href="dashboard.php" title="Dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php echo ($current_page_active == "introduction.php") ? 'active' : ''; ?>">
                      <a href="introduction.php" title="Introduction of HUB4GROWTH"><i class="fa fa-fw fa-bank"></i> Introduction</a>
                    </li>
                   
                            <li class="<?php echo ($current_page_active == "about_vision.php" || $current_page_active == "about_collaboration.php" || $current_page_active == "about_contribution.php" || $current_page_active == "about_research.php") ? 'active' : ''; ?>">
                            <a href="about_vision.php" title="About Hub4Growth"><i class="fa fa-fw fa-header"></i> About CIDS</a>
                            
                    </li>
                            <li class="<?php echo ($current_page_active == "list_position.php") ? 'active' : ''; ?>">
                                <a href="list_position.php" title="Member's lists"><i class="fa fa-fw fa-users"></i> List Members</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "contact.php") ? 'active' : ''; ?>">
                            <a href="contact.php" title="Contact Info"><i class="fa fa-fw fa-phone"></i> Contact Info</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "events.php" || $current_page_active == "list_events.php") ? 'active' : ''; ?>">
                            <a href="list_events.php"><i class="fa fa-fw fa-calendar"></i> Events</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "banner_list.php" || $current_page_active == "add_banner.php") ? 'active' : ''; ?>">
                            <a href="banner_list.php"><i class="fa fa-fw fa-picture-o"></i> Banners</a>
                    </li>
                     <li class="<?php echo ($current_page_active == "videoAdd.php" || $current_page_active == "videoAdd.ph") ? 'active' : ''; ?>">
                            <a href="videoAdd.php"><i class="fa fa-fw fa-picture-o"></i> Add Videos</a>
                    </li>

                    <li class="<?php echo ($current_page_active == "enquiry.php") ? 'active' : ''; ?>">
                            <a href="enquiry.php"><i class="fa fa-fw fa-server"></i> List Enquries</a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
