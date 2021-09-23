<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGPA CALCULATOR</title>
</head>
<link rel="stylesheet" href="externalStyle.css">

<body>
	<h2>SGPA CALCULATOR</h2>

	<form method="post">
	<div class="dropdown">
		
		<table border="10">
		<tr rowspan="2">
		<th colspan="2">
		<select name="scheme" id="scheme">
  			<option value="null">--scheme--</option>
  			<option value="17">2017</option>
  			<option value="18">2018</option>
		</select>
		</th>


		<th>
		<select name="branch" id="branch">
			<option value="null">--branch--</option>
  			<option value="cs">CSE</option>
  			<option value="ec">ECE</option>
  			<option value="is">ISE</option>
  			<option value="me">MECH</option>
  			<option value="cv">CIVIL</option>
		</select>
		</th>
		
		<th>
		<select name="sem" id="sem" onchange="cycleFunc()">
			<option value="0">--sem--</option>
			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
		</select>
		<div id="hidden_div" style="display:none;">
			<select name="cycle" id="cycle">
				<option value="phy">Physics</option>
				<option value="chem">Chemistry</option>
			</select>
		</div>
		
		</th>
		</tr>
		<tr>
				<th colspan = "4"><input class="button" type="Submit" value="Submit" name="" ></th>
		</tr>
		</table>
	
	</div>
	</form>
	

	<script>
		function myFunc(){
			var sc = document.getElementById("scheme");
			var schemeValue = sc.options[sc.selectedIndex].value;
			var schemeText = sc.options[sc.selectedIndex].text;
		
			var br = document.getElementById("branch");
			var branchValue = br.options[br.selectedIndex].value;
			var branchText = br.options[br.selectedIndex].text;
			
			var sem = document.getElementById("sem");
			var semValue = sem.options[sem.selectedIndex].value;
			var semText = sem.options[sem.selectedIndex].text;

			var cyc = document.getElementById("cycle");
			var cycleValue = cyc.options[cyc.selectedIndex].value;
			var cycleText = cyc.options[cyc.selectedIndex].text;	
		
		
			var mark = document.getElementsByName('marks');
			let sum = 0;
			for( var i = 0; i < mark.length; i ++ ) {
    			var n = mark[i] || 0;
    			sum +=  parseInt(n.value);
    			
			}
			
			alert(sum);

		}


		function cycleFunc(){
			var sem = document.getElementById("sem");
			var semValue = sem.options[sem.selectedIndex].value;
			var semText = sem.options[sem.selectedIndex].text;

			if (semValue=='1'|| semValue=='2'){
    			document.getElementById('hidden_div').style.display = "block";	
   			} else{
    			document.getElementById('hidden_div').style.display = "none";
   			}

		}




	</script>
	
	<?php
		$count=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$host = "localhost";
			$dbUsername = "root";
			$dbPassword = "";
			$dbname = "internship_p2";

			$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
			// Check connection
			if (mysqli_connect_errno())
		  	{
		  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  	}
		  	$scheme = $_POST['scheme'];
			$branch = $_POST['branch']; 
			$sem = $_POST['sem'];
			$cycle = $_POST['cycle'];

			$result = mysqli_query($conn,"SELECT * FROM cal
								WHERE scheme = '$scheme' and 
									(branch = '$branch' or branch = '$cycle')
									and sem = '$sem' ");

			?>
			<form method="post">
			<table border='1'>
					<tr>
					<th>subject</th>
					<th>
						credits
					</th>
					<th>
						Marks
					</th>
					</tr>
			<?php
			while($row = mysqli_fetch_array($result))
			  {
					  echo "<tr>";
					  echo "<td>" . $row['subject'] . "</td>";
					  echo "<td>" . $row['credits'] . "</td>";
					  echo "<td>
					  		<input type='text' placeholder = 'marks' name='marks'> / 100
					  		</td>";
					echo "</tr>";
					
					
			  }
			 
			 echo" 
			 <tr>
				<th colspan = '4'><input class='button' type='Submit' value='Submit' name='' onclick='myFunc()'></th>
			</tr>";

			echo "</table>";

			echo "</form>";


			mysqli_close($conn);

		 }
	?>

	

</body>
</html>