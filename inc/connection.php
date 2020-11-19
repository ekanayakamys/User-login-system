<?php  

		$conn = mysqli_connect('localhost', 'root', '','newdb');

		if ($conn -> connect_error) {
			die ("database connection error" . $conn ->connect_error());
		}else{
		//	echo 'Database connection succesful.';
		}
?>