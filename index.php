<?php
	require('Fonksiyonlar.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Instagram Image Save</title>
	<style type="text/css">
		
		*{
			font-family: arial;
		}

	</style>
</head>
<body>

<div>
	
	<center><h2>Instagram Image Save</h2></center>

	<form action="" method="POST" style="width: 500px; margin: auto;">
			
		<input type="text" name="ImageUrl" style="padding: 10px; width: 450px; border-radius: 3px; border: 1px solid #ddd;" placeholder="Image URL" /><br />
		<input type="submit" value="Save Image" style="padding: 10px; width: 470px; border-radius: 3px; border: 1px solid #ddd; background-color: #f6f6f6; margin-top: 10px;" />

	</form>

</div>

<?php
	
	if(isset($_POST['ImageUrl'])){

	$Url = $_POST['ImageUrl'];
	$Source = Connect($Url);
	$Image = preg_match('@image" content="(.*?)"@', $Source, $Image)?end($Image):false;

		if($Image){

			$ImageName = 'images/'.uniqid().'.jpg';
			$ImageSource = Connect($Image);
			if(file_put_contents($ImageName, $ImageSource)){

				echo '<center><h2>Image Saved</h2></center>';
				echo '<center><img src="'.$ImageName.'" width="500" /></center>';
	
			}

		}else{

			echo '<center><h2>Image Not Found or Private</h2></center>';

		}

	}

?>

</body>
</html>