

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
	<br>
	<section class="content">
  <label for="generation1" id="typeMatch">รายการแข่งขัน :</label>
		<select id="generation1" onchange="myFunction3()">
			<option>เลือกรายการ</option>
			<option value="wu1">วลัยลักษณ์ครั้งที่ 1</option>
			<option value="wu2">วลัยลักษณ์ครั้งที่ 2</option>
    </select>
    
		<label for="generation" >ประเภทการแข่งขัน :</label>
		
    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
    <!-- <select id="generation" onchange="myFunction2()"> -->
			<option>เลือกประเภท</option>
			<option value="national">ประชาชน</option>
			<option value="Youth">เยาวชน</option>
    </select>


    <script>
      function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "national") {
          var optionArray = [
            "|",
            "handN|มือ N",
            "handS-|มือ S-",
            "handS+|มือ S+",
            "handP-|มือ P-",
            "handP+C|มือ P+C",
          ];
        } else if (s1.value == "Youth") {
          var optionArray = [
            "|",
            "U09|รุ่นอายุไม่เกิน 8 ปี",
            "U11|รุ่นอายุไม่เกิน 10 ปี",
            "U13|รุ่นอายุไม่เกิน 12 ปี",
            "U15|รุ่นอายุไม่เกิน 14 ปี",
            "U17|รุ่นอายุไม่เกิน 16 ปี",
          ];
        }
        for (var option in optionArray) {
          var pair = optionArray[option].split("|");
          var newOption = document.createElement("option");
          newOption.value = pair[0];
          newOption.innerHTML = pair[1];
          s2.options.add(newOption);
        }


      }
    </script>
    <label for="slct2"> รุ่นผู้แข่งขัน :</label>
    <select id="slct2" name="slct2"onchange="myFunction1()"></select>
        
    <!-- <label for="competition_type1"> ประเภทมือ :</label>
    <select id="competition_type1"onchange="myFunction2()">
    <option>ประเภทมือ</option>
			<option value="handN">มือ N</option>
			<option value="handS-">มือ S-</option>
			<option value="handS+">มือ S+</option>
			<option value="handP-">มือ P-</option>
			<option value="handP+C">มือ P+C</option>
    </select> -->

    <!-- <label for="competition_type2">  รุ่นอายุ :</label>
      <select id="competition_type2"onchange="myFunction1()">
        <option>รุ่นอายุ</option>
        <option value="U09">รุ่นอายุไม่เกิน 8 ปี</option>
        <option value="U11">รุ่นอายุไม่เกิน 10 ปี</option>
        <option value="U13">รุ่นอายุไม่เกิน 12 ปี</option>
        <option value="U15">รุ่นอายุไม่เกิน 14 ปี</option>
        <option value="U17">รุ่นอายุไม่เกิน 16 ปี</option>
      </select>
       -->
      
      
    
    <script>
			function myFunction1() {
        var x = document.getElementById("slct2").value;
        var y = $("#slct2").val();
        var yy = $("#generation1").val();
        if (y == "U09"&&yy == "wu1") {
          $("#form1").show();
          $("#form2").hide();
          $("#form5").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "U11"&&yy == "wu1") {
          $("#form2").show();
          $("#form1").hide();
          $("#form5").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        
        else if (y == "U13"&&yy == "wu1") {
          $("#form3").show();
          $("#form1").hide();
          $("#form5").hide();
          $("#form2").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "U15"&&yy == "wu1") {
          $("#form4").show();
          $("#form1").hide();
          $("#form5").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "U17"&&yy == "wu1") {
          $("#form5").show();
          $("#form1").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "handN"&&yy == "wu1") {
          $("#form1").hide();
          $("#form2").hide();
          $("#form5").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").show();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "handS-"&&yy == "wu1") {
          $("#form2").hide();
          $("#form1").hide();
          $("#form5").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").show();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        
        else if (y == "handS+"&&yy == "wu1") {
          $("#form3").hide();
          $("#form1").hide();
          $("#form5").hide();
          $("#form2").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").show();
          $("#form9").hide();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "handP-"&&yy == "wu1") {
          $("#form4").hide();
          $("#form1").hide();
          $("#form5").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").show();
          $("#form10").hide();
          $("#form12").hide();
          $("#btn").show();
        }
        else if (y == "handP+C"&&yy == "wu1") {
          $("#form5").hide();
          $("#form1").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form12").hide();
          $("#form10").show();
          $("#btn").show();
        }
        else if (y == "handN"&&yy == "wu2") {
          $("#form5").hide();
          $("#form1").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form11").show();
          $("#form12").hide();
          $("#btn").show();
        }
        else {
          $("#form5").hide();
          $("#form1").hide();
          $("#form2").hide();
          $("#form3").hide();
          $("#form4").hide();
          $("#form6").hide();
          $("#form7").hide();
          $("#form8").hide();
          $("#form9").hide();
          $("#form10").hide();
          $("#form11").hide();
          $("#form12").show();
          $("#btn").show();
        }
				document.getElementById("demo").innerHTML = "You selected: " + y;

      }
    </script>
    

	
		<form id="form1" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
        </table>
      </div>
		</form>
		<form id="form2" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
        </table>
      </div>
    </form>
    <form id="form3" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
        </table>
      </div>
    </form>
    <form id="form4" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
        </table>
      </div>
    </form>
    <form id="form5" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
        </table>
      </div>
    </form>
    <form id="form6" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
          
        </table>
      </div>
    </form>
    <form id="form7" hidden>
    <div style="overflow-x:auto;">
        <table>
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
          
          
        </table>
      </div>
    </form>
    <form id="form8" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
          
        </table>
      </div>
    </form>
    <form id="form9" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
          
        </table>
      </div>
    </form>
    <form id="form10" hidden>
    <div style="overflow-x:auto;">
    <table>
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
          
          
        </table>
      </div>
    </form>
    <form id="form11" hidden>
    <div style="overflow-x:auto;">
    <table>
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
            <td>วลัยลักษณ์ครั้งที่ 2</td>
            <td>แบดมินตันนครศรีธรรมราช <br>แบดมินตันนครศรีธรรมราช</td>
            <td>มือ P+C</td>
            <td>0812345678<br>0812345687</td>
            <td>-<br>-</td>
          </tr>
          
          
        </table>
      </div>
    </form>
    <form id="form12" hidden>
    <div style="overflow-x:auto;">
    <table>
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
            <td>ไม่มีข้อมูล</td>
           
          </tr>
          
          
        </table>
      </div>
    </form>
    


	</section>


	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
