<?php
$con=new mysqli("localhost","root","","salon");
if($con){
?>
		
<?php
}

else{
?>
		<script>
			alert("Connection Failed");
		</script>
		<?php
}
?>