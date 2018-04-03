<div class="thongtin-title">
	<div class="right">

		<a href="index.php"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>

		<a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>

	</div>
</div>


<div class="thongtin-content">
	<?php
		$sql = "SELECT * FROM theloai";
		$query = mysqli_query($con,$sql);
		while ($row = mysqli_fetch_array($query)) {
			$idTL = $row['idTL'];
	?>
	<ul class="ulBlockMenu">
		<li class="liFirst">
			<h2>
				<a class="mnu_giaoduc" href="/tin-tuc/giao-duc/"><?php echo $row['TenTL'] ?></a>
			</h2>
		</li>
		<?php
			$sql1 = "SELECT * FROM loaitin WHERE idTL=$idTL";
			$query1 = mysqli_query($con,$sql1);
			while ($row = mysqli_fetch_array($query1)) {
		?>
		<li class="liFollow">
			<h2>
				<a href="index.php?page=tintrongloai&idLT=<?php echo $row['idLT'] ?>"><?php echo $row['Ten'] ?></a>
			</h2>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>
</div>




