<script>
    function myFunction1() {
        var x = document.getElementById("slct2").value;
        var y = $("#slct2").val();
        var yy = $("#generation1").val();
        if (y == "U09" && yy == "wu1") {
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
        } else if (y == "U11" && yy == "wu1") {
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
        } else if (y == "U13" && yy == "wu1") {
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
        } else if (y == "U15" && yy == "wu1") {
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
        } else if (y == "U17" && yy == "wu1") {
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
        } else if (y == "handN" && yy == "wu1") {
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
        } else if (y == "handS-" && yy == "wu1") {
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
        } else if (y == "handS+" && yy == "wu1") {
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
        } else if (y == "handP-" && yy == "wu1") {
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
        } else if (y == "handP+C" && yy == "wu1") {
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
        } else if (y == "handN" && yy == "wu2") {
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
        } else {
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

<script>
    function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "national") {
            var optionArray = [
                "|มือ",
                "handN|มือ N",
                "handS-|มือ S-",
                "handS+|มือ S+",
                "handP-|มือ P-",
                "handP+C|มือ P+C",
            ];
        } else if (s1.value == "Youth") {
            var optionArray = [
                "|รุ่นอายุ",
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