 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>InsertScore"><i class="fa fa-circle-o"></i>เพิ่มคะแนนการแข่งขัน</a></li>
            <li><a href="<?php echo base_url(); ?>ReportScores"><i class="fa fa-circle-o"></i>ผลการแข่งขัน</a></li>
            <li><a href="<?php echo base_url(); ?>ShowName"><i class="fa fa-circle-o"></i>รายชื่อผู้เข้าแข่งขัน</a></li>
            <li><a href="<?php echo base_url(); ?>Scoresheet"><i class="fa fa-circle-o"></i>Scoresheet</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>