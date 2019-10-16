<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='quiz2';

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
  mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";
  ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
</head>
<body>
	<header>
      <div class="container">
       
       <h1>Java Quizzer</h1>


     </div>
   </header>

   <main>
    <div class="container">
     
     <h2>Your are Done!</h2>


	
<?php 

$result = 0;
if (isset($_POST['submit'])) {
if (!empty($_POST['quizcheck'])) {
$count = count($_POST['quizcheck']);

?>
	
		<?php 
			 echo " You have selected " . $count . " options";
		 ?>
	

		<?php 
			$selected = $_POST['quizcheck'];
			$q = "select * from questions";
			$query = mysqli_query($conn, $q);
			$i = 1;
			while($rows = mysqli_fetch_array($query)) {

			$checked = $rows['ans_id'] == $selected[$i];
			if ($checked) {
			$result++;
			}else{

				 }
			 		$i++;
					
				}
		?>


		<?php 
			echo "Your score is ".$result ;
			}
			else{
				echo "<b>Please Select Atleast One Option.</b>";
				}
				 
				}
				?>

		

<main>
      <div class="container">
       
      
          <a href="login.php"><input type="button" id="logout_btn" value="Logout"></a>
        </div>
     </main>
	
</body>
</html>