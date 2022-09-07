<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");
	$sql_category = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");
	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['category_name'];
?>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 position-relative">
        <ul class="chitietsp">
            <li>
                <a href="index.php">Trang chủ</a>
            </li>
            <i>|</i>
            <li>Sản Phẩm <?php echo $title ?></li>
        </ul>
        <a href="?quanly=tatcasp" class="chitietsp-them">Xem tất cả</a>
    </div>
    <div class="home-product">
        <div class="row">
            <?php
                while($row_sanpham = mysqli_fetch_array($sql_cate)){ 
            ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                    <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>" class="home-product__danhmuc-link" title="<?php echo $row_sanpham['sanpham_name']?>">
                        <div class="home-product__danhmuc">
                            <div class="home-product__danhmuc-img">
                                <img src="./img/<?php echo $row_sanpham['hinh']?>" alt="" width="90%" height="auto">
                            </div>
                            <h4 class="home-product__item-name"><?php echo $row_sanpham['sanpham_name']?></h4>
                            <div class="home-product__item-price">
                                <span class="home-product__item-price-old"><?php echo number_format($row_sanpham['sanpham_gia'])."đ"?></span>
                                <span class="home-product__item-price-new"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai'])."đ"?></span>
                            </div>
                            <form action="?quanly=giohang" method="post">
                                <fieldset>
                                    <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
                                    <input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
                                    <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giakhuyenmai'] ?>" />
                                    <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['hinh'] ?>" />
                                    <input type="hidden" name="soluong" value="1" />
                                    <input type="submit" class="muahang" name="themgiohang" value="Mua hàng">
                                </fieldset>
                            </form>
                        </div>
                    </a>
                </div>
            <?php 
            }
            ?>
        </div>
    </div>
</div>
