<?php
include("connection.php");
$id = $_GET['id'];

$query ="DELETE from signup WHERE id= '$id' ";
$data = mysqli_query($conn,$query);
if($data){
	echo "<script>alert('Record Deleted')</script>";
	?>
	<meta http-equiv = "refresh" content = "0; url = http://localhost/authentication/display.php" />
	<?php
}
else{
		echo "<script>alert('Failed to Delete')</script>";

}
?>