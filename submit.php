<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
		$Name= $_POST['name'];
		$Email= $_POST['email'];
		$Service= $_POST['service'];
		$Mobile= $_POST['mobile'];
		$Date= $_POST['date'];
		$Time= $_POST['time'];
		$Bdesc= $_POST['bdesc'];
}
$insertquery="insert into servicerequests(name, email, service, mobile, date, time, briefdesc) values('$Name','$Email','$Service','$Mobile','$Date','$Time','$Bdesc')";
$iquery=mysqli_query($con,$insertquery);
if($iquery)
{
?>
    <script>
      alert("You have submitted successfully.Thank You!");
      location.replace("index.html");
    </script>
<?php
}