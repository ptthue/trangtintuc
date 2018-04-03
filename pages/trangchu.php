<?php
    $sql = "SELECT * FROM theloai";
    $query = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_array($query)) {
        $idTL = $row['idTL'];
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<p><?php echo $row['TenTL'] ?></p>
        </div>
        <div class="child-cat">
            <?php
                $sql1 = "SELECT * FROM loaitin INNER JOIN theloai ON loaitin.idTL = theloai.idTL WHERE loaitin.idTL=$idTL";
                $query1 = mysqli_query($con,$sql1);
                while($row1 = mysqli_fetch_array($query1)){;
            ?>
        	<a href="index.php?page=tintrongloai&idLT=<?php echo $row1['idLT'] ?>"><?php echo $row1['Ten'] ?></a>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
                <?php
                    $sql2 = "SELECT * FROM tin INNER JOIN theloai ON tin.idTL = theloai.idTL WHERE theloai.idTL=$idTL ORDER BY tin.idTin DESC LIMIT 0,3";
                    $query2 = mysqli_query($con,$sql2);
                    $row2 = mysqli_fetch_array($query2);
                ?>
            	<div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row2['idTin'] ?>"><?php echo $row1['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row2['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row2['TomTat'] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
             <p class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row2['idTin'] ?>"> <?php echo $row2['TieuDe'] ?> </a>
                </a></p>
               <p class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row2['idTin'] ?>"><?php echo $row2['TieuDe'] ?></a></p> 
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>

<?php } ?>
<!-- box cat-->



<div class="clear"></div>


