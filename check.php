<?php
include('connect.php');
$s_id =$_POST["s_id"];
$s_name =$_POST["s_name"];
$cmd = "SELECT * FROM student WHERE student_id like '$s_id' and student_name like  '%".$s_name."%' ";
$result = mysqli_query($conn,$cmd);
$row =mysqli_fetch_array($result);
if ($row =="")
{
 	?>
	<script language "javascript">
		alert ('Wrong ID or Name');
		window.history.back();
	</script>
	<?php 
}
else
{
	$s_class = $row["student_class"];
	$s_name = $row["student_name"];
	$s_surname = $row["student_surname"];
    echo "<input type ='text' name='student_class' value='".$s_class.">";
    echo $s_name;
    echo $s_surname;
}
?>

