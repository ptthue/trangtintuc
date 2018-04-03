
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<?php
                $sql = "SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,7";
                $query = mysqli_query($con,$sql);
                while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col1">
            	<div class="news">
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>"  />
                    <h3 class="title" >
                        <a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a><span class="hit"><?php echo $row['SoLanXem'] ?></span>
                    </h3>
                    <div class="clear"></div>
				</div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="clear"></div>

