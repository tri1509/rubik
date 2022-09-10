<?php
	if(isset($_POST['search_button'])){
        $tukhoa = $_POST['search_product'];	
        $sql_timkiem = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_name LIKE '%$tukhoa%' ORDER BY sanpham_id DESC");		
        $title = $tukhoa;
	}		
?> 
    <ul class="chitietsp">
        <li>
            <a href="index.php">Trang chủ</a>
        </li>
    </ul>
<h3 class="chitiet-khac">Từ khóa tìm kiếm : <span class="chitiet-khacc"><?php echo $title ?></span></h3>

<div class="row">
    <?php
    while($row_timkiem = mysqli_fetch_array($sql_timkiem)) {
    ?>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <div class="home-product__item">
                <a href="?quanly=chitietsp&id=<?php echo $row_timkiem['sanpham_id'] ; ?>">
                    <div class="home-product__item-img" style="background-image:url(./img/<?php echo $row_timkiem['hinh']; ?>);"></div>
                </a>
                <h4 class="home-product__item-name"><?php echo $row_timkiem['sanpham_name'] ; ?></h4>
                <div class="home-product__item-price">
                    <span class="home-product__item-price-old"><?php echo number_format($row_timkiem['sanpham_gia'])."đ" ; ?></span>
                    <span class="home-product__item-price-new"><?php echo number_format($row_timkiem['sanpham_giakhuyenmai'])."đ" ; ?></span>
                </div>
                <form action="?quanly=giohang" method="post">
                    <fieldset>
                        <input type="hidden" name="tensanpham" value="<?php echo $row_timkiem['sanpham_name'] ?>" />
                        <input type="hidden" name="sanpham_id" value="<?php echo $row_timkiem['sanpham_id'] ?>" />
                        <input type="hidden" name="giasanpham" value="<?php echo $row_timkiem['sanpham_giakhuyenmai'] ?>" />
                        <input type="hidden" name="hinhanh" value="<?php echo $row_timkiem['hinh'] ?>" />
                        <input type="hidden" name="soluong" value="1" />
                        <input type="submit" class="muahang" name="themgiohang" value="Mua hàng"></input>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php 
    }
    ?>     
</div>
        