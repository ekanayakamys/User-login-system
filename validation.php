<?php require_once('inc/connection.php'); ?>


<?php

	$user = $_POST['user'];
	$password = $_POST['pass'];

	if (empty($user)||empty($password)) {
		echo "login fail";
		
	}else{

		$query = "SELECT * FROM mytable WHERE name = '".$user."' AND password = '".$password."'";
		$my_result = mysqli_query($conn,$query);
		//var_dump($my_result);


		if ($my_result) {
			$row = mysqli_fetch_assoc($my_result);
			//var_dump($row);
				if ($row['name']==$user && $row['password']==$password) {
				echo ('login successful');

				  
			}else{
				echo "invaild user name or password";
				
			}
			
		}

	}
?>
<?php mysqli_close($conn) ?>