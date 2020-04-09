 <!-- Content Wrapper. Contains page content -->
 <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content ">
      <section class="content ">
      <div class="row">
        <!-- left column -->
        <div class="col-md-3 ">
        </div>
        <div class="col-md-6">
        <div class="imgRegis">...................................................<img src="<?php echo base_url(); ?>images/B.png" alt="Smiley face" ></div>
          <!-- general form elements -->
          <div class="box box-solid box-info">
            <div class="box-header with-border">
              <h3 class="box-title">สมัครสมาชิก</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>Auth/registerMember" method="post" id="frm-register" name="formRegister">
              <div class="box-body">
              <div class="col-lg-12">
                  <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้ใช้" name="Username"><br/>
                </div>

                <div class="col-lg-12">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="รหัสผ่าน" name="Password"><br/>
                </div>
                <div class="col-lg-12">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ยืนยันรหัสผ่าน" name="C_Password"><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">ชื่อ</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ชื่อจริง" name="Name"><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">นามสกุล</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="นามสกุล" name="Sername"><br/>
                </div>
                <div class="col-lg-12">
                  <label for="sex">เพศ</label><br/>
                  <input type="radio" id="male" name="gender" value="male" name="sex" value="0">
                  <label for="male">ผู้ชาย</label><br>                 
                  <input type="radio" id="female" name="gender" value="female" name="sex" value="1">
                  <label for="male">ผู้หญิง</label><br/><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">วัน เดือน ปีเกิด</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="เดือน/วัน/ปีเกิด" name="date"><br/>                     
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">สโมสร</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="สโมสร" name="Club"><br/>
                </div>                
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">เบอร์โทร</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="เช่น 0621798521" name="Phone"><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">line ID</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ID LINE" name="Line"><br/>
                </div>
               
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" onclick="hasSelectedRow()">Submit</button>
                <button type="" class="btn btn-danger">Cancle</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">

        </div>
        <script>

        
        <?php
        if(isset($_POST['submit'])){
        if(!empty($_POST['Color'])) {
        echo "<span>You have selected :</span><br/>";
        // As output of $_POST['Color'] is an array we have to use Foreach Loop to display individual value
        foreach ($_POST['Color'] as $select)
        {
        echo "<span><b>".$select."</b></span><br/>";
        }
        }
        else { echo "<span>Please Select Atleast One Color.</span><br/>";}
        }
        ?>


        </script>
    </section>
    </section>

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->