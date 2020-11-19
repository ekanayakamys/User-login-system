


<?php

	$user = $_POST['user'];
	$password = $_POST['pass'];
	//var_dump($_POST);

		$conn = mysqli_connect('localhost', 'root', '','newdb');

		if ($conn -> connect_error) {
			die ("database connection error" . $conn ->connect_error());
		}else{
			//echo 'Database connection succesful.';
		}


			$query 		=	"INSERT INTO mytable (id,name,password) VALUES (null,'".$user."',".$password.")";
			$myresult	=	mysqli_query($conn,$query);
			//var_dump($query);

if ($myresult) {
				echo '1 recode add';

			}else {
				echo 'query added failed';
			}
?>
<?php mysqli_close($conn) ?>