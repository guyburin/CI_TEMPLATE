<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h2>รายงานผลการแข่งขัน</h2>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class=""><a href="<?php echo base_url('ReportScores') ?>">การแข่งขันแบทมินตันวลัยลักษณ์</a></li>
			<li class="active">รายงานผลการแข่งขัน</li>
		</ol>
	</section>
	<!-- Main content -->
	<br>
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">การแข่งขัน</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form role="form">
						<div class="box-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<!-- <div class="form-group">
          <label for="list">รายการแข่งขัน :</label>
          <select class="form-control select2" id="list" onchange="myFunctions()">
            <option value="">เลือกรายการแข่งขัน</option>
            <option value="Walailak1">วลัยลักษณ์ครั้งที่ 1</option>
            <option value="Walailak2">วลัยลักษณ์ครั้งที่ 2</option>
            <option value="Walailak3">วลัยลักษณ์ครั้งที่ 3</option>
            <option value="Walailak4">วลัยลักษณ์ครั้งที่ 4</option>
          </select>
        </div> -->

										<form id="type">
											<div class="form-group">
												<label for="generation">ประเภทการแข่งขัน :</label>
												<select class="form-control select2" id="generation" onchange="myFunction()">
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
												<select class="form-control select2" id="competition_type" onchange="myFunction()">
													<option value="">เลือกประเภทผู้แข่งขัน</option>
													<option value="Women2">หญิงเดี่ยว</option>
													<option value="Men2">ชายเดี่ยว</option>
												</select>
											</div>

											<div class="form-group">
												<label for="competition_type">รุ่นอายุ :</label>
												<select class="form-control select2" id="competition_type" onchange="myFunction()">
													<option value="">เลือกรุ่นอายุ</option>
													<option value="๊U9">อายุไม่เกิน 8 ปี</option>
													<option value="U11">อายุไม่เกิน 10 ปี</option>
													<option value="U13">อายุไม่เกิน 12 ปี</option>
													<option value="U15">อายุไม่เกิน 14 ปี</option>
													<option value="U17">อายุไม่เกิน 16 ปี</option>
												</select>
											</div>
										</form>
										<form id="competition2" hidden>
											<div class="form-group">
												<label for="competition_type">ประเภทผู้แข่งขัน :</label>
												<select class="form-control select2" id="competition_type" onchange="myFunction()">
													<option value="">เลือกประเภทผู้แข่งขัน</option>
													<option value="men2">ชายคู่</option>
													<option value="Women2">หญิงคู่</option>
													<option value="Men2">คู่ชาย-หญิง</option>
												</select>
											</div>
											<div class="form-group">
												<label for="competition_type">รุ่นผู้แข่งขัน :</label>
												<select class="form-control select2" id="competition_type" onchange="myFunction()">
													<option value="">เลือกรุ่นผู้แข่งขัน</option>
													<option value="handN">มือ N</option>
													<option value="handS-">มือ S-</option>
													<option value="handS+">มือ S+</option>
													<option value="handP-">มือ P-</option>
													<option value="handP+C">มือ P+C</option>
												</select>
											</div>
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
															<td>5 - 6</td>
															<td><span class="label label-success">สัณห์สินี รักเนียม</span></td>
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
															<td> 6 - 14</td>
															<td><span class="label label-success">ปัญญพัฒน์ เจือบุญ</span></td>
														</tr>
														<!-- <tr>
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
                </tr> -->
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
															<td>2 - 10</td>
															<td><span class="label label-success">ทีม B</span></td>
														</tr>
														<!-- <tr>
                  <td>18.30 น.</td>
                  <td>พงศธร รักทอง<br>สุทธิพงษ์ จินตาแก้ว</td>
                  <td>ชัชวาล สุคนธปฏิภาค<br>ตู่ ภพธร</td>
                  <td>9 - 0</td>
                  <td>11 - 0</td>
                  <td> - </td>
                  <td><span class="label label-success">ทีม A</span></td>
                </tr> -->
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
															<td>5 - 8</td>
															<td><span class="label label-success">ทีม B</span></td>
														</tr>
														<!-- <tr>
                  <td>19.30 น.</td>
                  <td>วรเมธ ขวัญนิมิตร<br>วิทวัส ช่วยพนัง</td>
                  <td>สิทธินนท์ เดิมหลิ่ม<br>สุวิจักขณ์ พิศสุพรรณ</td>
                  <td>9 - 0</td>
                  <td>11 - 0</td>
                  <td> - </td>
                  <td><span class="label label-success">ทีม A</span></td>
                </tr> -->
													</table>
												</div>
											</div>
										</div>
									</div>

								</form>
							</div>
						</div>
						<!-- /.box-body -->


					</form>
				</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
