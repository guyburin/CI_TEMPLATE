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
    <label for="generation">ประเภทการแข่งขัน :</label>
      <select id="generation">
        <option value="Youth">เยาวชน</option>
        <option value="national">ประชาชน</option>
      </select>
    
    <label for="competition_type"> ประเภทผู้แข่งขัน :</label>
      <select id="competition_type">
        <option value="Women2">หญิงเดี่ยว</option>
        <option value="Men2">ชายเดี่ยว</option>
      </select>

      <label for="competition_type"> รุ่นอายุ :</label>
      <select id="competition_type">
        <option value="๊U9">อายุไม่เกิน 8 ปี</option>
        <option value="U11">อายุไม่เกิน 10 ปี</option>
        <option value="U13">อายุไม่เกิน 12 ปี</option>
        <option value="U15">อายุไม่เกิน 14 ปี</option>
        <option value="U17">อายุไม่เกิน 16 ปี</option>
      </select>
      <button>ค้นหา</button>
      <br><br> 
      <div style="overflow-x:auto;">
        <table>
          <tr>
            <th>คนที่ 1</th>
            <th>คนที่ 2</th>
            <th>คะแนนรอบที่ 1</th>
            <th>คะแนนรอบที่ 2</th>
            <th>คะแนนรอบที่ 3</th>
            <th>ผู้ชนะ</th>
          </tr>
          <tr>
            <td>อนาตาเซีย</td>
            <td>หวังฟางเจ้า</td>
            <td>9 - 10</td>
            <td>7 - 10</td>
            <td>-</td>
            <td>หวังฟางเจ้า</td>
          </tr>
          <tr>
            <td>มิสโคโรน่า</td>
            <td>มิสโควิด-19</td>
            <td>5 - 5</td>
            <td>7 - 7</td>
            <td> 10 - 8</td>
            <td>มิสโคโรน่า</td>
          </tr>
          <tr>
            <td>เจนนี</td>
            <td>เยจิ</td>
            <td>10 - 10</td>
            <td>7 - 7</td>
            <td>8 - 7</td>
            <td>เจนนี</td>
          </tr>
        </table>
      </div>
    </section>

    <!-- /.content -->
