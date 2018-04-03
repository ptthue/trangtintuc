<?php
	$sql = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
?>
<div id="slide-left">
	<div id="slideleft-main">
		<img src="upload/tintuc/<?php echo $row['urlHinh']; ?>"  /><br />
		<h2 class="title">
			<a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a>
		</h2>
		<div class="des">
			<?php echo $row['TomTat'] ?> 
		</div>
		<!-- <p class="tlq">
			<a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a>
		</p> -->

	</div>
	<div id="slideleft-scroll">

		<div class="content_scoller width_common">
			<ul>
				<?php
					$sql = "SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,9";
			   		$query = mysqli_query($con,$sql);
			   		while($row = mysqli_fetch_array($query)){
				?>
				<li>
					<div class="title_news">
						<a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>" class="txt_link"> <?php echo $row['TieuDe'] ?> </a> 
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>


