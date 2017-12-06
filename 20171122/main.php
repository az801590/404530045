<html>
	<head>
		<title>20171122</title>
		<style type="text/css">
			*
			{
				font-family:monospace;
				font-size:15px;
			}
		</style>
	</head>

	<body>
		<div>
			Height(m):<input type="text" id="hei"><br><br>
			Weight(kg):<input type="text" id="wei"><br><br>
			<input type="button" value="Enter" onclick="bmi()"><br>
			<p id="bmiNumber" style="visibility:hidden">BMI:</p>
		</div>
		<form action="20171122.php" method="post" enctype="multipart/form-data">
			File:<input type="file" name="file" id="file"><br><br>
			<input type="submit" name="submit" value="Upload">
		</form>

		<script type="text/javascript">
			function bmi()
			{
				var height=document.getElementById("hei").value;
				var weight=document.getElementById("wei").value;

				if(height=="" || weight=="")
				{
					document.getElementById("bmiNumber").style.visibility="hidden";
					alert("Please type in all information.");
				}
				else
				{
					var bmiNumber=weight/(height*height);
					document.getElementById("bmiNumber").innerHTML="BMI:"+bmiNumber;
					document.getElementById("bmiNumber").style.visibility="visible";
				}
			}
		</script>

		<?php
			if($_FILES["file"]["error"]>0)
			{
				//empty file
				if($_FILES["file"]["error"]==4)
				{
					echo "Empty file.";
				}
			}
			else
			{
				if($_FILES["file"]["type"] && strstr($_FILES["file"]["type"],"image")==FALSE)
				{
					echo "Wrong file type.";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
					echo '<img src="upload/'.$_FILES["file"]["name"].'"/>';
				}
			}
		?>
	</body>
</html>

