<script>
    function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "2") {
            var optionArray = [
                "|มือ",
                "6|มือ N",
                "7|มือ S-",
                "8|มือ S+",
                "9|มือ P-",
                "10|มือ P+C",
            ];
        } else if (s1.value == "1") {
            var optionArray = [
                "|รุ่นอายุ",
                "1|รุ่นอายุไม่เกิน 8 ปี",
                "2|รุ่นอายุไม่เกิน 10 ปี",
                "3|รุ่นอายุไม่เกิน 12 ปี",
                "4|รุ่นอายุไม่เกิน 14 ปี",
                "5|รุ่นอายุไม่เกิน 16 ปี",
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

    function showhide(){
        var y = $("#slct1").val();
        if(y=1){
            $("#tb1").show();
        }else{
            $("#tb2").show();
        }
    }

</script>

