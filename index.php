<!DOCTYPE html>
<html>
	<head>
		<title>
		FTC Scouting
		</title>
	</head>

	<body>
	
	<div style="background-color:#E6B222; height:50px;"> <h1> The Yellow Alliance </h1> </div>
	<div> <p> This website is under construction, and will contain scouting data for teams in Iowa in the near future </p> </div>
	<div> <div> <p style="background-color:#aaaaaa;display:inline;"> Team Information </p> </div>
		<?php	
			//$teamInfo
			$file=fopen("teamInfo.txt", "r") or exit("Unable to open file!");	//opens the file containg team info
			
			if ($file != 0) {			//if the team info file exists,
				chop($file, "\n\r");		//cut the ending line			
				fgets($file);				//and skip over the extra info at the beginning
				echo "<table border='2'> <tr> <th> Team Number</th> <th> Team Name</th> <th>Team Location</th> </tr>";
				while(!feof($file)) {				//loop until the end of the file
					$tempHolder = fgets($file);	//gets the next line of team info
					$tempHolder = chop($tempHolder);	//gets rid of extra whitespace at the end
					$temp = explode("|", $tempHolder, 4);
					//print_r($temp);
					//echo "<br>";
					echo "<tr>";
					echo "<td>". $temp[0] ."</td>";
					echo "<td>". $temp[1] ."</td>";
					echo "<td>". $temp[2] ."</td>";		
					echo "</tr>";						
				}
				echo"</table>";
			}
			fclose($file);
		?>
	</div>
	
	
	</body>
</html>

