
<?php

	
	


	
	function TinMoiNhat_MotTin(){
		$sql = "SECLECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
		$query = mysqli_query($con,$sql);
		return($query);
	}






?>