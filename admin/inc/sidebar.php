<?php $current_page = basename($_SERVER['REQUEST_URI']);?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="assets/images/avatar/profile_pic.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="#"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-home"></i> <span>Home Management</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li class="treeview"><a href="#"><i class="fa fa-copyright"></i> About CIDS
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">M & V</a></li>
                <li><a href="#">Contribution</a></li>
                <li><a href="#">Collabration</a></li>
                <li><a href="#">Shared Values</a></li>
              </ul>
          </li>
          <li><a href="#">Banners</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Featured Content</a></li>
          <li><a href="#">N & R</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>What CIDS Do</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Development Works</a></li>
          <li><a href="#">K & I</a></li>
          <li><a href="#">P & S</a></li>
        </ul>
      </li>
      <li><a href="gallery"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>
      <li><a href="#"><i class="fa fa-youtube"></i> <span>Youtube Video</span></a></li>
      <li><a href="contact_info"><i class="fa fa-phone"></i> <span>Contact Info</span></a></li>
      <li><a href="#"><i class="fa fa-comment-o"></i> <span>Enquiry</span></a></li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
