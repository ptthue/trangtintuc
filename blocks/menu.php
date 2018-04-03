<ul class="width_common" id="menu_web">
	<li class="active">
		<a href="./"><img class="logo_icon_home" alt="" src="images/img_logo_home.gif"></a>
	</li>
	<?php
		$sql = "SELECT * FROM theloai";
		$query = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($query)) {
			$idTL = $row['idTL'];
	?>
	<li>
  		<a href="./" class="mnu_thoisu"><?php echo $row['TenTL'] ?></a>
  		<ul class="menu_child">
  			<?php
  				$sql1 = "SELECT * FROM loaitin WHERE idTL=$idTL";
  				$query1 = mysqli_query($con,$sql1);
  				while ($row1 = mysqli_fetch_array($query1)) {
  			?>
  			<li><a href="index.php?page=tintrongloai&idLT=<?php echo $row1['idLT'] ?>"><?php echo $row1['Ten'] ?></a></li>
  			<?php } ?>
  		</ul>
	</li>
	<?php } ?>
</ul>