<script>
    function myFunctions() {
        var x = document.getElementById("list").value;
        var y = $("#list").val();
        if (y == "Walailak2") {
            $("#type").show();
            $("#btn").show();
        }
        document.getElementById("demo").innerHTML = "You selected: " + y;
    }
    function myFunction() {
        var x = document.getElementById("generation").value;
        var y = $("#generation").val();
        if (y == "Youth") {
            $("#competition1").show();
            $("#form1").show();
            $("#competition2").hide();
            $("#form2").hide();
            $("#btn").show();
        } else {
            $("#competition1").hide();
            $("#form1").hide();
            $("#competition2").show();
            $("#form2").show();
            $("#btn").show();
        }
        document.getElementById("demo").innerHTML = "You selected: " + y;
    }
</script>