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