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
	
		
		<select class="btn btn-primary dropdown-toggle" id="nameMatch" >
			<option>ชื่อการแข่งขัน</option>
			<option value="1">วลัยลักษณ์เกมครั้งที่ 1 </option>
			<option value="2">วลัยลักษณ์เกมครั้งที่ 2</option>
			<option value="3">วลัยลักษณ์เกมครั้งที่ 3 </option>
			<option value="4">วลัยลักษณ์เกมครั้งที่ 4</option>
		</select>		
		<script>
			function myFunction() {
				var x = document.getElementById("generation").value;
				var y = $("#generation").val();
				if (y == "national") {
					$("#form1").show();
          $("#form2").hide();
          $("#btn").show();
		  $("#formhand").show();
		  $("#formage").hide();
				} else {
					$("#form1").hide();
					$("#formhand").hide();
          $("#form2").show();
          $("#btn").show();
		  $("#formage").show();
				}
				document.getElementById("demo").innerHTML = "You selected: " + y;
			}
		</script>
		
		<label > &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</label>
		<select class="btn btn-warning dropdown-toggle" id="generation" onchange="myFunction()">
			<option>ประเภทการแข่งขัน</option>
			<option value="national">ประชาชน</option>
			<option value="Youth">เยาวชน</option>
		</select>
		<form id="formhand" hidden>
		<br>
		<select class="btn btn-success dropdown-toggle"  id="competition_type">
			<option value="handN">มือ N</option>
			<option value="handS-">มือ S-</option>
			<option value="handS+">มือ S+</option>
			<option value="handP-">มือ P-</option>
			<option value="handP+C">มือ P+C</option>
		</select>
		</form>
		<br>
		<form id="formage" hidden>
		<br>
		<select class="btn btn-success dropdown-toggle"  id="competition_type">
		<option value="๊ "> เลือกรุ่นอายุ </option>
			<option value="๊U9">อายุไม่เกิน 8 ปี</option>
        	<option value="U11">อายุไม่เกิน 10 ปี</option>
		</select>
		</form>
		<br>
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
		<br>
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