<?php

		$host = "dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com"; $username = "admin";
		$password = "root1234";
		$connect = @mysqli_connect($host, $username, $password) or die("Unable to connect to host");
		$db = @mysqli_select_db($connect, "db_1822157") or die("Cannot connect to database");
		$sql = "select * from Contact";
		$dbrecords = mysqli_query($connect,$sql) or die("Unable to query data");
	
		header("Content-type: json");
		
		while($row = mysqli_fetch_object($dbrecords)) {
				
				echo 
					$arr = array('Name' => $row->Name , 'Address' => $row->Address , 'Contact' => $row->CNumber , 'Status' => $row->CivilStatus);
				 echo "<br/>";				
					echo json_encode($arr);
							}
							return $list;
				
				mysqli_close($connect);


?>
