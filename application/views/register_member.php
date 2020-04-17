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
              <!-- <form role="form" action="<?php echo base_url(); ?>Auth/userchack" method="post" id="frm-register" name="formcheck"> -->
              <!-- <div class="col-lg-6"> -->
                  <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="Username" placeholder="ชื่อผู้ใช้"  name="Username" required><br/>
              <!-- </div> -->
              <!-- <div class="col-lg-6"> -->
                   <!-- <button type="submit" id="submit" class="btn btn-primary" >ตรวจสอบ</button> -->
              <!-- </div> -->
              <!-- </form> -->
                </div>

                <div class="col-lg-12">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="Password" placeholder="รหัสผ่าน" name="Password" required><br/>
                </div>
                <div class="col-lg-12">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="C_Password" placeholder="ยืนยันรหัสผ่าน"  name="C_Password" required><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">ชื่อ</label>
                  <input type="text" class="form-control" id="Name" placeholder="ชื่อจริง" name="Name" required><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">นามสกุล</label>
                  <input type="text" class="form-control" id="Sername" placeholder="นามสกุล" name="Sername" required><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">ชื่อเล่น</label>
                  <input type="text" class="form-control" id="Nickname" placeholder="ชื่อเล่น" name="Nickname" required><br/>
                </div>
               
                <!-- <div class="col-lg-12">
                  <label for="sex">เพศ</label><br/>
                  <input type="radio" id="male" name="gender" value="male" name="sex" value="0">
                  <label for="male">ผู้ชาย</label><br>                 
                  <input type="radio" id="female" name="gender" value="female" name="sex" value="1">
                  <label for="male">ผู้หญิง</label><br/><br/>
                </div> -->
                <div class="col-lg-6">
                  <label for="exampleInputEmail1">วัน เดือน ปีเกิด</label>
                    <input type="date" class="form-control" id="date" placeholder="เดือน/วัน/ปีเกิด" name="date" required><br/>                     
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">สโมสร</label>
                  <input type="text" class="form-control" id="Club" placeholder="สโมสร" name="Club" required><br/>
                </div>                
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">เบอร์โทร</label>
                  <input type="text" class="form-control" id="Phone" placeholder="เช่น 0621798521" name="Phone" required><br/>
                </div>
                <div class="col-lg-6">
                  <label for="exampleInputPassword1">line ID</label>
                  <input type="text" class="form-control" id="Line" placeholder="ID LINE" name="Line" required><br/>
                </div>
                <div class="col-lg-12">
                    <div class="box-footer">
                    <button type="submit" id="submit" class="btn btn-primary" >Submit</button>
                    <button type="" class="btn btn-danger">Cancle</button>
                  </div>
                </div>
               
             
            </form>
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-3">

        </div>
        <script>
          $(document).ready(function(){
            $("#C_Password").blur(function(){
            $pass1 =  $("#Password").val();
            $pass2 =  $("#C_Password").val();
            if($pass1==$pass2){
              $("#submit").attr("disabled", false);
              // $("#C_Password").css('border-color','green');
              alert("Confirm Password");
            }else{
              $("#submit").attr("disabled", true);
              // $("#C_Password").css('border-color','red');
              alert("Password ไม่ตรงกัน");
            }
            });
          });
        </script>
        <!-- <script>
        $(document).ready(function(){
            $('#username').blur(check_username); //use keyup,blur, or change
        });
        function check_username(){
            var username = $('#username').val();
            jQuery.ajax({
                    type: 'POST',
                    url: 'chack',
                    data: 'username='+ username,
                    cache: false,
                    success: function(response){
                        if(response == 0){
                          alert('available')
                        }
                        else {
                          alert('not available')
                            //do perform other actions like displaying error messages etc.,
                        }
                    }
                });
        }
      </script> -->
    </section>
    </section>

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->