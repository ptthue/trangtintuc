<?php
	if(isset($_GET['trang'])){
		$trang = $_GET['trang'];
	}
	else $trang = 1;
	$rowPerPage = 10;
	$perRow = $trang*$rowPerPage-$rowPerPage;

	if(isset($_POST['stext'])){
		$stext = $_POST['stext'];
	}
	else $stext = $_GET['stext'];
	
	$stextNew = trim($stext);
	$arr_stextNew = explode(' ', $stextNew);
	$stextNew = implode('%', $arr_stextNew);
	$stextNew = '%'.$stextNew.'%';
	/*echo $stextNew;*/

	
	$totalRows = mysqli_num_rows(mysqli_query($con,"SELECT * FROM tin WHERE TieuDe LIKE '$stextNew'"));
	$totalPages = ceil($totalRows/$rowPerPage);
	$listPages = "";
	for($i=1;$i<=$totalPages;$i++){
        if($trang==$i){
            $listPages.='<li class="active"><a href="index.php?page=timkiem&stext='.$stext.'&trang='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPages.='<li><a href="index.php?page=timkiem&stext='.$stext.'&trang='.$i.'">'.$i.'</a></li>';
        }
    }


	$sql = "SELECT * FROM tin WHERE TieuDe LIKE '$stextNew' ORDER BY idTin DESC LIMIT $perRow,$rowPerPage";
	$query = mysqli_query($con,$sql);

?>
<h2 style="padding: 10px 0;">Kết quả tìm được với từ khóa "<?php echo $stext ?>" là:</h2>
<?php
	while ($row = mysqli_fetch_array($query)) {
?>

<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" >
                        <a href="#"><?php echo $row['TieuDe'] ?></a>
                    </h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>

<!-- Pagination -->
<div id="pagination">
    <nav aria-label="Page navigation">
      <ul class="pagination modal-1">
        <?php
            echo $listPages;
        ?>
      </ul>
    </nav>
</div>            
<!-- End Pagination -->