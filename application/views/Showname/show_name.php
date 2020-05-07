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
  <form action="<?php echo base_url(); ?>ShowName/getname">
    <div class="col-sm-3">
      <!-- select -->
      <div class="form-group">
        <label for="generation1" id="typeMatch">รายการแข่งขัน :</label>
        <select class="form-control" name="activity" id="generation1" va onchange="myFunction3()">
          <option>เลือกรายการ</option>
          <option value="77">Walailal Day</option>
          <option value="85">Walailal Day6</option>
        </select>
      </div>
    </div>

    <div class="col-sm-3">
      <!-- select -->
      <div class="form-group">
        <label for="generation">ประเภทการแข่งขัน :</label>
        <select class="form-control" id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
          <option>เลือกประเภท</option>
          <option value="2">ประชาชน</option>
          <option value="1">เยาวชน</option>
        </select>
      </div>
    </div>

    <div class="col-sm-3">
      <!-- select -->
      <div class="form-group">
        <label for="slct2"> รุ่นผู้แข่งขัน :</label>
        <select class="form-control" id="slct2" name="slct2">
        </select>
      </div>
    </div>
    <div class="col-sm-3">
      <!-- select -->
      <div class="form-group">
        <br>
        <button type="submit" class="btn btn-info" onclick="showhide()">ค้นหา</button>
      </div>
    </div>

  </form>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-sm-10" style="margin-left: 20">

      <table id="tb1" class="table">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>ชื่อทีม</th>
            <th>ชื่อผู้เข้าแข่ง</th>
            <th>เพศ</th>
            <th>อายุ</th>
            <th>รายการแข่ง</th>
            <th>ชื่อสโมสร</th>
            <th>รุ่นที่แข่ง</th>
          </tr>
        </thead>
        <?php
        $i = 1;
        foreach ($data as $value => $row) {
          if ($row['type'] == "เยาวชน") {
        ?>
            <tbody>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['team'] ?></td>
                <td><?php echo $row['name1'] ?></td>
                <td><?php echo $row['sex1'] ?></td>
                <td><?php echo $row['old1'] ?></td>
                <td><?php echo $row['competition'] ?></td>
                <td><?php echo $row['club1'] ?></td>
                <td>รุนอายุไม่เกิน <?php echo $row['generation'] ?> ปี</td>
              </tr>
            </tbody>
          <?php } else { ?>
            <tbody>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['team'] ?></td>
                <td><?php echo $row['name1'] ?><br><?php echo $row['name2'] ?></td>
                <td><?php echo $row['sex1'] ?><br><?php echo $row['sex2'] ?></td>
                <td><?php echo $row['old1'] ?> ปี<br><?php echo $row['old2'] ?> ปี</td>
                <td><?php echo $row['competition'] ?></td>
                <td><?php echo $row['club1'] ?> <br><?php echo $row['club2'] ?></td>
                <td>มือ <?php echo $row['generation'] ?></td>
              </tr>
            </tbody>
        <?php }
          $i++;
        }
        ?>
      </table>



    </div>
    <div class="col-md-1">

    </div>
  </div>
  </section>


  <!-- /.content -->
</div>
<!-- /.content-wrapper -->