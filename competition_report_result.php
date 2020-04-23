<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/badminton/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/badminton/public/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/badminton/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost/badminton/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="http://localhost/badminton/public/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    td {
      text-align: left;
      padding: 8px;
    }
    th {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>


</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://localhost/badminton/public/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="http://localhost/badminton/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://localhost/badminton/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header> <!-- Left side column. contains the logo and sidebar -->
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
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>รายงานผลการแข่งขัน</h2>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">รายงานผลการแข่งขัน</li>
      </ol>
    </section>

    <!-- Main content -->
    <br>
    <section class="content">
      <script>

      function myFunctions() {
				var x = document.getElementById("list").value;
				var y = $("#list").val();
				if (y == "Walailak2") {
          $("#type").show();
          $("#btn").show();
				} 
				document.getElementById("demo").innerHTML = "You selected: " + y;
			}
      
			function myFunction() {
				var x = document.getElementById("generation").value;
				var y = $("#generation").val();
				if (y == "Youth") {
          $("#competition1").show();
					$("#form1").show();
          $("#competition2").hide();
          $("#form2").hide();
          $("#btn").show();
				} else {
					$("#competition1").hide();
					$("#form1").hide();
          $("#competition2").show();
          $("#form2").show();
          $("#btn").show();
				}
				document.getElementById("demo").innerHTML = "You selected: " + y;
			}

		</script>


    <div class="row">
      <div class="col-md-3">
      <div class="form-group">
      <label for="list">รายการแข่งขัน :</label>
        <select class="form-control select2"  id="list" onchange="myFunctions()">
          <option value="">เลือกรายการแข่งขัน</option>
          <option value="Walailak1">วลัยลักษณ์ครั้งที่ 1</option>
          <option value="Walailak2">วลัยลักษณ์ครั้งที่ 2</option>
          <option value="Walailak3">วลัยลักษณ์ครั้งที่ 3</option>
          <option value="Walailak4">วลัยลักษณ์ครั้งที่ 4</option>
        </select>
    </div>

    <form id="type" hidden>
      <div class="form-group">
        <label for="generation">ประเภทการแข่งขัน :</label>
          <select class="form-control select2"  id="generation" onchange="myFunction()">
            <option value="">เลือกประเภทการแข่งขัน</option>
            <option value="Youth">เยาวชน</option>
            <option value="national">ประชาชน</option>
          </select>
      </div>
    </form>
      </div>
      <div class="col-md-3">
      <form id="competition1" hidden>
    <div class="form-group">
        <label for="competition_type">ประเภทผู้แข่งขัน :</label>
          <select class="form-control select2"  id="competition_type" onchange="myFunction()">
            <option value="">เลือกประเภทผู้แข่งขัน</option>
            <option value="Women2">หญิงเดี่ยว</option>
            <option value="Men2">ชายเดี่ยว</option>
          </select>
      </div>

      <div class="form-group">
        <label for="competition_type">รุ่นอายุ :</label>
          <select class="form-control select2"  id="competition_type" onchange="myFunction()">
            <option value="">เลือกรุ่นอายุ</option>
            <option value="๊U9">อายุไม่เกิน 8 ปี</option>
            <option value="U11">อายุไม่เกิน 10 ปี</option>
            <option value="U13">อายุไม่เกิน 12 ปี</option>
            <option value="U15">อายุไม่เกิน 14 ปี</option>
            <option value="U17">อายุไม่เกิน 16 ปี</option>
          </select>
      </div>

      <!-- <label for="list">ประเภทการแข่งขัน :</label>
        <select id="list" onchange="myFunctions()">
          <option value="">เลือกรายการแข่งขัน</option>
          <option value="Walailak1">วลัยลักษณ์ครั้งที่ 1</option>
          <option value="Walailak2">วลัยลักษณ์ครั้งที่ 2</option>
          <option value="Walailak3">วลัยลักษณ์ครั้งที่ 3</option>
          <option value="Walailak4">วลัยลักษณ์ครั้งที่ 4</option>
        </select> -->

      <!-- <form id="type" hidden>
      <label for="generation">ประเภทการแข่งขัน :</label>
        <select id="generation" onchange="myFunction()">
        <option value="">เลือกประเภทการแข่งขัน</option>
          <option value="Youth">เยาวชน</option>
          <option value="national">ประชาชน</option>
        </select>
    </form> -->

      <!-- <label for="competition_type"> ประเภทผู้แข่งขัน :</label>
      <select id="competition_type">
      <option value="">เลือกประเภทผู้แข่งขัน</option>
        <option value="Women2">หญิงเดี่ยว</option>
        <option value="Men2">ชายเดี่ยว</option>
      </select> -->

      <!-- <label for="competition_type"> รุ่นอายุ :</label>
      <select id="competition_type">
        <option value="">เลือกรุ่นอายุ</option>
        <option value="๊U9">อายุไม่เกิน 8 ปี</option>
        <option value="U11">อายุไม่เกิน 10 ปี</option>
        <option value="U13">อายุไม่เกิน 12 ปี</option>
        <option value="U15">อายุไม่เกิน 14 ปี</option>
        <option value="U17">อายุไม่เกิน 16 ปี</option>
      </select> -->
      </form>

      <form id="competition2" hidden>

      <div class="form-group">
        <label for="competition_type">ประเภทผู้แข่งขัน :</label>
          <select class="form-control select2"  id="competition_type" onchange="myFunction()">
            <option value="">เลือกประเภทผู้แข่งขัน</option>
            <option value="men2">ชายคู่</option>
            <option value="Women2">หญิงคู่</option>
            <option value="Men2">คู่ชาย-หญิง</option>
          </select>
      </div>

      <div class="form-group">
        <label for="competition_type">รุ่นผู้แข่งขัน :</label>
          <select class="form-control select2"  id="competition_type" onchange="myFunction()">
            <option value="">เลือกรุ่นผู้แข่งขัน</option>
            <option value="handN">มือ N</option>
            <option value="handS-">มือ S-</option>
            <option value="handS+">มือ S+</option>
            <option value="handP-">มือ P-</option>
            <option value="handP+C">มือ P+C</option>
          </select>
      </div>

      <!-- <label for="competition_type"> ประเภทผู้แข่งขัน :</label>
      <select id="competition_type">
        <option value="">เลือกประเภทผู้แข่งขัน</option>
        <option value="men2">ชายคู่</option>
        <option value="Women2">หญิงคู่</option>
        <option value="Men2">คู่ชาย-หญิง</option>
      </select> -->

      <!-- <label for="competition_type"> รุ่นผู้แข่งขัน :</label>
      <select id="competition_type">
        <option value="">เลือกรุ่นผู้แข่งขัน</option>
        <option value="handN">มือ N</option>
        <option value="handS-">มือ S-</option>
        <option value="handS+">มือ S+</option>
        <option value="handP-">มือ P-</option>
        <option value="handP+C">มือ P+C</option>
      </select> -->

      </form>
      </div>
      <div class="col-md-6">

      </div>
    </div>
 
      <br><br>
      <form id="form1" hidden>
      <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">การแข่งขันรอบรองท้าชิง แมทช์ #01</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">เวลา</th>
                <th scope="col">คนที่ 1</th>
                <th scope="col">คนที่ 2</th>
                <th scope="col">เซทที่ 1</th>
                <th scope="col">เซทที่ 2</th>
                <th scope="col">เซทที่ 3</th>
                <th scope="col">ผู้ชนะ</th>
              </tr>
            </thead>

              <tr>
                <td>18.00 น.</td>
                <td>ชุติมา อนันตกูล</td>
                <td>สัณห์สินี รักเนียม</td>
                <td>9 - 10</td>
                <td>7 - 10</td>
                <td>-</td>
                <td><span class="label label-success">สัณห์สินี รักเนียม</span></td>
              </tr>
              <tr>
                <td>18.30 น.</td>
                <td>จิดาภา มูสิกนิลพันธ์</td>
                <td>ณัฏฐณิชา สาขะญาณ</td>
                <td>5 - 5</td>
                <td>7 - 7</td>
                <td> 10 - 8</td>
                <td><span class="label label-success">จิดาภา มูสิกนิลพันธ์</span></td>        
              </tr>
              <tr>
                <td>19.00 น.</td>
                <td>ณัฐธิดา จำปา</td>
                <td>ณีรนุช พันธุภาส</td>
                <td>10 - 10</td>
                <td></td>
                <td></td>
                <td><span class="label label-primary">อยู่ระหว่างแข่งขัน</span></td>
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">การแข่งขันรอบรองท้าชิง แมทช์ #02</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>เวลา</th>
                <th>คนที่ 1</th>
                <th>คนที่ 2</th>
                <th>เซทที่ 1</th>
                <th>เซทที่ 2</th>
                <th>เซทที่ 3</th>
                <th>ผู้ชนะ</th>
              </tr>
              <tr>
                <td>19.30 น.</td>
                <td>เก็จมณี ทองใบ</td>
                <td>ปัญญพัฒน์ เจือบุญ</td>
                <td>9 - 10</td>
                <td>7 - 10</td>
                <td>-</td>
                <td><span class="label label-success">ปัญญพัฒน์ เจือบุญ</span></td>
              </tr>
              <tr>
                <td>20.00 น.</td>
                <td>ศิริรัตน์ วิชิตแย้ม</td>
                <td>เสาวรัตน์ ชวนดี</td>
                <td>5 - 5</td>
                <td>7 - 7</td>
                <td> 10 - 8</td>
                <td><span class="label label-success">ศิริรัตน์ วิชิตแย้ม</span></td>        
              </tr>
              <tr>
                <td>20.30 น.</td>
                <td>ปิยมินทร์ ใจมา</td>
                <td>จิราวรรณ ช่วยแก้ว</td>
                <td>10 - 10</td>
                <td></td>
                <td></td>
                <td><span class="label label-primary">อยู่ระหว่างแข่งขัน</span></td>
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>

      </form>

      <form id="form2" hidden>
      <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">การแข่งขันรอบแบ่งกลุ่ม แมทช์ #01</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>เวลา</th>
                <th>ทีม A</th>
                <th>ทีม B</th>
                <th>เซทที่ 1</th>
                <th>เซทที่ 2</th>
                <th>เซทที่ 3</th>
                <th>ผู้ชนะ</th>
              </tr>
              <tr>
                <td>18.00 น.</td>
                <td>คุณัชญ์ ทองมี<br>ธีนพัฒน์ รัตนวงศ์</td>
                <td>นฤเบศ รีวรรณ<br>บุรินทร์ พันธ์ชาติ</td>
                <td>9 - 10</td>
                <td>7 - 10</td>
                <td>-</td>
                <td><span class="label label-success">ทีม B</span></td>
              </tr>
              <tr>
                <td>18.30 น.</td>
                <td>พงศธร รักทอง<br>สุทธิพงษ์ จินตาแก้ว</td>
                <td>ชัชวาล สุคนธปฏิภาค<br>ตู่ ภพธร</td>
                <td>9 - 0</td>
                <td>11 - 0</td>
                <td>  - </td>
                <td><span class="label label-success">ทีม A</span></td>        
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">การแข่งขันรอบแบ่งกลุ่ม แมทช์ #02</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <div class="input-group-btn">
                  </div>
                </div>
              </div>
            </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>เวลา</th>
                <th>ทีม A</th>
                <th>ทีม B</th>
                <th>เซทที่ 1</th>
                <th>เซทที่ 2</th>
                <th>เซทที่ 3</th>
                <th>ผู้ชนะ</th>
              </tr>
              <tr>
                <td>19.00 น.</td>
                <td>จักรพงษ์ กระต่ายทอง<br>โชติวิชช์ วรเดช</td>
                <td>ธิติพงศ์ ปุรินสุวรรณ<br>นลธวัช แก้วจีน</td>
                <td>9 - 10</td>
                <td>7 - 10</td>
                <td>-</td>
                <td><span class="label label-success">ทีม B</span></td>
              </tr>
              <tr>
                <td>19.30 น.</td>
                <td>วรเมธ ขวัญนิมิตร<br>วิทวัส ช่วยพนัง</td>
                <td>สิทธินนท์ เดิมหลิ่ม<br>สุวิจักขณ์ พิศสุพรรณ</td>
                <td>9 - 0</td>
                <td>11 - 0</td>
                <td>  - </td>
                <td><span class="label label-success">ทีม A</span></td>        
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>

      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer> 


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/badminton/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/badminton/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/badminton/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/badminton/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/badminton/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/badminton/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://localhost/badminton/public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/badminton/public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/badminton/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/badminton/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/badminton/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/badminton/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/badminton/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/badminton/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/badminton/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/badminton/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/badminton/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/badminton/public/dist/js/demo.js"></script>
</body>
</html>