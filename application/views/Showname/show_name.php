<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h2>รายชื่อผู้สมัครเข้าแข่งขัน</h2>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">รายชื่อผู้สมัครเข้าแข่งขัน</li>
    </ol>
  </section>
  <!-- Main content -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <br>
  <div class="col-sm-3">
    <!-- select -->
    <div class="form-group">
      <label for="generation1" id="typeMatch">รายการแข่งขัน :</label>
      <select class="form-control" id="generation1" onchange="myFunction3()">
        <option>เลือกรายการ</option>
        <option value="wu1">วลัยลักษณ์ครั้งที่ 1</option>
        <option value="wu2">วลัยลักษณ์ครั้งที่ 2</option>
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- select -->
    <div class="form-group">
      <label for="generation">ประเภทการแข่งขัน :</label>
      <select class="form-control" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
        <option>เลือกประเภท</option>
        <option value="national">ประชาชน</option>
        <option value="Youth">เยาวชน</option>
      </select>
    </div>
  </div>

  <div class="col-sm-3">
    <!-- select -->
    <div class="form-group">
      <label for="slct2"> รุ่นผู้แข่งขัน :</label>
      <select class="form-control" id="slct2" name="slct2" onchange="myFunction1()">
      </select>
    </div>
  </div>

  <form id="form1" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 8 ปี</h3>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>
  <form id="form2" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 10 ปี</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 10 ปี</td>
                  <td>0812345678</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>
  <form id="form3" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 12 ปี</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 12 ปี</td>
                  <td>0812345678</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>
  <form id="form4" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 14 ปี</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 14 ปี</td>
                  <td>0812345678</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>
  <form id="form5" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 16 ปี</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 16 ปี</td>
                  <td>0812345678</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>

  <form id="form6" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ประชาชนประเภทมือ มือ N</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อสมาชิก</th>
                  <th>เพศ</th>
                  <th>อายุ</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>ประเภทที่ลงแข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ประวัติการแข่งขันในปีล่าสุด </th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ N</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ N</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ N</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>

  </form>
  <form id="form7" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ประชาชนประเภทมือ มือ S-</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อสมาชิก</th>
                  <th>เพศ</th>
                  <th>อายุ</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>ประเภทที่ลงแข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ประวัติการแข่งขันในปีล่าสุด </th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>
  <form id="form8" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ประชาชนประเภทมือ มือ S+</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อสมาชิก</th>
                  <th>เพศ</th>
                  <th>อายุ</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>ประเภทที่ลงแข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ประวัติการแข่งขันในปีล่าสุด </th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S+</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S+</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ S+</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>
  <form id="form9" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ประชาชนประเภทมือ มือ P-</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อสมาชิก</th>
                  <th>เพศ</th>
                  <th>อายุ</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>ประเภทที่ลงแข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ประวัติการแข่งขันในปีล่าสุด </th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P-</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>


              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>
  <form id="form10" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ประชาชนประเภทมือ มือ P+C</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อสมาชิก</th>
                  <th>เพศ</th>
                  <th>อายุ</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>ประเภทที่ลงแข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>ประวัติการแข่งขันในปีล่าสุด </th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P+C</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P+C</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์<br>ทรัพย์สิรี แต้รัตนชัย</td>
                  <td>หญิง<br>ชาย</td>
                  <td>21 ปี<br>24 ปี</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
                  <td>มือ P+C</td>
                  <td>0812345678<br>0812345687</td>
                  <td>-<br>-</td>
                </tr>



              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>

  <form id="form11" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เยาวชนรุ่นอายุไม่เกิน 8 ปี</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>สุราษจ้าาา</td>
                  <td>ศิริรัตน์ วิชิตแย้ม</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>นครศรีสู้โว้ย</td>
                  <td>รัชนก อินทนนท์</td>
                  <td>หญิง</td>
                  <td>-/-/-</td>
                  <td>วลัยลักษณ์ครั้งที่ 1</td>
                  <td>แบดมินตันนครศรีธรรมราช</td>
                  <td>รุ่นอายุไม่เกิน 8 ปี</td>
                  <td>0812345678</td>
                </tr>
                <tr>
                  <td>ไม่มีข้อมูล</td>

                </tr>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>

  </form>
  <form id="form12" hidden>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ไม่มีข้อมูล</h3>



            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ลำดับ</th>
                  <th>ชื่อทีม</th>
                  <th>ชื่อผู้เข้าแข่ง</th>
                  <th>เพศ</th>
                  <th>วันเดือนปีเกิด</th>
                  <th>รายการแข่ง</th>
                  <th>ชื่อสโมสร</th>
                  <th>รุ่นที่แข่ง</th>
                  <th>เบอร์ติดต่อ</th>
                </tr>
                <tr>
                  <td>ไม่มีข้อมูล</td>

                </tr>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </form>



  </section>


  <!-- /.content -->
</div>
<!-- /.content-wrapper -->