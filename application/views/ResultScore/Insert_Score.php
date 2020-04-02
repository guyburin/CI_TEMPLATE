<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h2>ผลการแข่งขัน</h2>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">ผลการแข่งขัน</li>
		</ol>
	</section>

	<!-- Main content -->
	<br>
	<section class="content">
		<label for="generation" id="typeMatch">ประเภทการแข่งขัน :</label>
		<select id="generation" onchange="myFunction()">
			<option>เลือกประเภท</option>
			<option value="national">ประชาชน</option>
			<option value="Youth">เยาวชน</option>
		</select>
		<script>
			function myFunction() {
				var x = document.getElementById("generation").value;
				var y = $("#generation").val();
				if (y == "national") {
					$("#form1").show();
          $("#form2").hide();
          $("#btn").show();
				} else {
					$("#form1").hide();
          $("#form2").show();
          $("#btn").show();
				}
				document.getElementById("demo").innerHTML = "You selected: " + y;
			}

		</script>
		<label for="competition_type"> รุ่นผู้แข่งขัน :</label>
		<select id="competition_type">
			<option value="handN">มือ N</option>
			<option value="handS-">มือ S-</option>
			<option value="handS+">มือ S+</option>
			<option value="handP-">มือ P-</option>
			<option value="handP+C">มือ P+C</option>
		</select>

		<br><br>
		<form id="form1" hidden>
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อทีมที่ 1</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br><br> <br><br>
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 1</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br><br> <br><br>
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 2</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br /> <br /> <br /> <br />
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 1 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder=" คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 2 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder=" คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 3 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<br> <br /> <br /> <br />
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อทีมที่ 2</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br> <br /> <br /> <br />
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 1</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br><br> <br><br>
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 2</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br /> <br /> <br /> <br />
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 1 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder=" คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 2 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 3 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<br /> <br /><br /> <br />
			<div class="col-lg-3">
				<label for="exampleInputEmail1">ผู้ชนะ : </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder=" ชื่อทีม" name="Username">
			</div>
		</form>


		<form id="form2" hidden>

			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 1</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br /> <br /> <br /> <br />
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 1 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 2 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 3 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<br> <br /> <br /> <br />
			<div class="col-lg-6">
				<label for="exampleInputEmail1">ชื่อผู้เข้าแข่งคนที่ 2</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ชื่อผู้เข้าแข่ง"
					name="Username"><br />
			</div>
			<br /> <br /> <br /> <br />
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 1 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 2 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<div class="col-lg-2">
				<label for="exampleInputEmail1">คะแนนรอบที่ 3 </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="คะแนน เช่น 19" name="Username">
			</div>
			<br /> <br /><br /> <br />
			<div class="col-lg-3">
				<label for="exampleInputEmail1">ผู้ชนะ : </label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder=" ชื่อผู้แข่งขัน"
					name="Username">
			</div>
		</form>
		<br /> <br /><br /> <br />
		<div id="btn" hidden>
			<button type="submit" class="btn btn-primary">Submit</button>
			<button type="" class="btn btn-danger">Cancle</button>
		</div>

	</section>


	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
