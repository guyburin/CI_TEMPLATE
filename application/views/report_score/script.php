<script>
    function myFunction() {
        var x = document.getElementById("generation").value;
        var y = $("#generation").val();
        if (y == "Youth") {
            $("#competition1").show();
            // $("#form1").show();
            $("#competition2").hide();
            // $("#form2").hide();
            $("#btn").show();
        } else if (y == "national") {
            $("#competition1").hide();
            // $("#form1").hide();
            $("#competition2").show();
            // $("#form2").show();
            $("#btn").show();
        }

        var xx = document.getElementById("competition1").value;
        var com1 = $("#competition_type1").val();
        var com2 = $("#competition_type2").val();
        if (com1 == "Women1" && com2 == "๊U9") {
            $("#form1").show();
            $("#form2").hide();
            $("#btn").show();
        } else {
            $("#form1").hide();
            $("#form2").hide();
            $("#btn").show();
        }


        document.getElementById("demo").innerHTML = "You selected: " + y;
    }

    function myFunction2() {
        var yy = document.getElementById("competition2").value;
        var com3 = $("#competition_type3").val();
        var com4 = $("#competition_type4").val();
        if (com3 == "Men2" && com4 == "handN") {
            $("#form1").hide();
            $("#form2").show();
            $("#btn").show();
        } else {
            $("#form1").hide();
            $("#form2").hide();
            $("#btn").show();
        }
        document.getElementById("demo").innerHTML = "You selected: " + y;
    }
</script>