<a style="color: #900;font-weight: bold;" href="">Trang chủ</a><span style="color: #900;font-weight: bold;"> >></span>
<a style="color: #900;font-weight: bold;" href="">Thời sự</a><span style="color: #900;font-weight: bold;"> >></span>
<a style="color: #900;font-weight: bold;" href="">Tin tức</a>

<?php
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }
    else{
        $trang = 1;
    }
    if(isset($_GET['idLT'])){
        $idLT = $_GET['idLT'];
    }
    $rowsPerPage=10;
    $perRow=$trang*$rowsPerPage-$rowsPerPage;
    $sql = "SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT $perRow,$rowsPerPage";
    $query = mysqli_query($con,$sql);
    $totalRows=mysqli_num_rows(mysqli_query($con,"SELECT * FROM tin WHERE idLT=$idLT"));
    $totalPages=ceil($totalRows/$rowsPerPage);
    $listPages="";
    for($i=1;$i<=$totalPages;$i++){
        if($trang==$i){
            $listPages.='<li class="active"><a href="index.php?page=tintrongloai&idLT='.$idLT.'&trang='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPages.='<li><a href="index.php?page=tintrongloai&idLT='.$idLT.'&trang='.$i.'">'.$i.'</a></li>';
        }
    }
    while ($row = mysqli_fetch_array($query)) {
?>
<div class="box-cat">
    
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>

<?php } ?>

<!-- box cat-->



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