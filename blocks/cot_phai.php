<!-- box cat -->
<?php
    $sql = "SELECT * FROM loaitin";
    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);
    $loaitin1 = rand(1,$row);
    $loaitin2 = rand(1,$row);
    $loaitin3 = rand(1,$row);
    $loaitin4 = rand(1,$row);
    echo($loaitin1);echo "<br>";echo($loaitin2);echo "<br>";echo($loaitin3);echo "<br>";echo($loaitin4);
?>
<?php
    $sql = "SELECT * FROM tin INNER JOIN loaitin ON tin.idLT=loaitin.idLT WHERE tin.idLT=$loaitin1 ORDER BY idTin DESC LIMIT 0,1";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a class="cotphai" href="index.php?page=tintrongloai&idLT=<?php echo $row['idLT'] ?>"><?php echo $row['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"> <?php echo $row['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
                <?php
                    $sql = "SELECT * FROM tin WHERE idLT=$loaitin1 ORDER BY idTin DESC LIMIT 1,3";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                <h3 class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<?php
    $sql = "SELECT * FROM tin INNER JOIN loaitin ON tin.idLT=loaitin.idLT WHERE tin.idLT=$loaitin2 ORDER BY idTin DESC LIMIT 0,1";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a class="cotphai" href="index.php?page=tintrongloai&idLT=<?php echo $row['idLT'] ?>"><?php echo $row['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"> <?php echo $row['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
                <?php
                    $sql = "SELECT * FROM tin WHERE idLT=$loaitin2 ORDER BY idTin DESC LIMIT 1,3";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                <h3 class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>





<?php
    $sql = "SELECT * FROM tin INNER JOIN loaitin ON tin.idLT=loaitin.idLT WHERE tin.idLT=$loaitin3 ORDER BY idTin DESC LIMIT 0,1";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a class="cotphai" href="index.php?page=tintrongloai&idLT=<?php echo $row['idLT'] ?>"><?php echo $row['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"> <?php echo $row['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
                <?php
                    $sql = "SELECT * FROM tin WHERE idLT=$loaitin3 ORDER BY idTin DESC LIMIT 1,3";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                <h3 class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>

<?php
    $sql = "SELECT * FROM tin INNER JOIN loaitin ON tin.idLT=loaitin.idLT WHERE tin.idLT=$loaitin4 ORDER BY idTin DESC LIMIT 0,1";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a class="cotphai" href="index.php?page=tintrongloai&idLT=<?php echo $row['idLT'] ?>"><?php echo $row['Ten'] ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title" ><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"> <?php echo $row['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row['TomTat'] ?></div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
                <?php
                    $sql = "SELECT * FROM tin WHERE idLT=$loaitin4 ORDER BY idTin DESC LIMIT 1,3";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                <h3 class="tlq"><a href="index.php?page=chitiettin&idTin=<?php echo $row['idTin'] ?>"><?php echo $row['TieuDe'] ?></a></h3>
                <?php } ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>