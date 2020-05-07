<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- <h2>สร้าง Scoresheet</h2> -->
        <!-- <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">ผลการแข่งขัน</li>
		</ol> -->
    </section>
    <!-- Main content -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <label>
                <h2>สร้าง Scoresheet</h2>
            </label>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-2"><label for="exampleInputEmail1">
                                    <center>ค้นหาคู่แข่งขัน</center>
                                </label></div>
                            <div class="col-md-8"><input type="email" class="form-control" id="exampleInputEmail1" placeholder="#แมตช์"></div>
                            <div class="col-md-2"><button type="submit" class="btn btn-primary">Submit</button></div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">รายละเอียด</h3>
                    </h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="<?php echo base_url(); ?>thai_pdf_test">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ทีม 1 </label>
                            <input type="text" name="tame1" class="form-control" id="exampleInputEmail1" placeholder="ชื่อทีม">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อผู้เข้าแข่งขันคนที่ 1</label>
                            <input type="text" name="name11" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่งขันคนที่ 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อผู้เข้าแข่งขันคนที่ 2</label>
                            <input type="text" name="name12" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่งขันคนที่ 2">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ทีม 2 </label>
                            <input type="text" name="tame2" class="form-control" id="exampleInputEmail1" placeholder="ชื่อทีม">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อผู้เข้าแข่งขันคนที่ 1</label>
                            <input type="text" name="name21" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่งขันคนที่ 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ชื่อผู้เข้าแข่งขันคนที่ 2</label>
                            <input type="text" name="name22" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่งขันคนที่ 2">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- Button trigger modal -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


