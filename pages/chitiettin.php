<?php
	if(isset($_GET['idTin'])){
		$idTin = $_GET['idTin'];
	}
	$sql1 = "UPDATE tin SET SoLanXem = SoLanXem+1 WHERE idTin=$idTin";
	$query1 = mysqli_query($con,$sql1);
?>
<?php
	$sql = "SELECT * FROM tin WHERE idTin=$idTin";
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query);
		$idLT=$row['idLT'];
?>
<h1 class="title"><?php echo $row['TieuDe'] ?></h1>
<div class="des">
	<?php echo $row['TomTat'] ?>
</div>
<div class="chitiet">
<!--noi dung-->
	<?php echo $row['Content'] ?>
<!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795"><?php echo $row['SoLanXem'] ?></span></div>
<!--face-->
	<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
	<!--twister-->
	<div class="left"></div>
	<!--google-->
	<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>
<div id="tincungloai">
	<div class="clear"></div>
	<ul>
		<?php
			$sql = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 0,3";
			$query = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($query)) {
		?>
		<li>       
			<a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><img src="upload/tintuc/<?php echo $row['urlHinh'] ?>" alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br />
			<a class="title" href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a>
			<span class="no_wrap">   
		</li>
		<?php } ?>
	</ul>
</div>
<div class="clear"></div> 





