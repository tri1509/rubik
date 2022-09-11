<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    }else {
        $page = '1';
    }
    $sobai = 12;
    if($page == '' || $page == 1) {
        $begin = 0;
    }else{
        $begin = ($page*$sobai)-$sobai;
    }
	$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'");
    $sql_spkhac = mysqli_query($con,"SELECT * FROM tbl_sanpham LIMIT $begin,$sobai");
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12 col-12">
        <ul class="chitietsp">
            <li>
                <a href="index.php">Trang chủ</a>
            </li>
            <i>|</i>
            <li>Sản Phẩm </li>
        </ul>
    </div>
    <div class="main-chitiet">
        <input type="range" min="1" max="100" value="10" class="range">
            <?php
                while($row_chitiet = mysqli_fetch_array($sql_chitiet)){
            ?>
                <div class="chitiet-container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                            <img src="./img/<?php echo $row_chitiet['hinh']?>" alt="" width="100%" height="auto" class="chitiet-img">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            <p class="chitiet-header"><?php echo $row_chitiet['sanpham_name']?></p>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-4 chitiet-giakhuyenmai">
                                    <?php echo number_format($row_chitiet['sanpham_giakhuyenmai'])." VND"?>
                                </div>
                                <del class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-4 col-4 chitiet-gia-goc">
                                    <?php echo number_format($row_chitiet['sanpham_gia'])." VND"?>
                                </del>
                                <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-xs-4 col-4 vanchuyen">
                                    Miễn phí vận chuyển
                                </div>
                            </div>
                            <ul class="chitiet-vanchuyen">
                                <li>Thanh toán sau khi nhận hàng</li>
                                <li>Vận chuyển nhanh</li>
                                <li>Bảo hành 1 năm</li>
                                <li>Ưu đãi Ngân hàng Giảm giá đặc biệt 5% * với Thẻ tín dụng Axis Bank BuzzT & CODESET</li>
                            </ul>
                            <hr>
                            <form action="?quanly=giohang" method="post">
                                <fieldset>
                                    <input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sanpham_name'] ?>" />
                                    <input type="hidden" name="sanpham_id" value="<?php echo $row_chitiet['sanpham_id'] ?>" />
                                    <input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sanpham_giakhuyenmai'] ?>" />
                                    <input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['hinh'] ?>" />
                                    <input type="hidden" name="soluongg" value="1" />
                                    <input type="hidden" name="soluong" value="1" />
                                    <input type="submit" value="Thêm vào giỏ hàng" class="btn-chitiet" name="themgiohang">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
    </div>
</div>
<!--  
<section class="chitiet-them hide-on-mobile-tablet">
    <div class="gallery">
        <ul>
            <li>
                <a href="?quanly=chitietsp&id=<?php echo $row_rand1['sanpham_id'] ; ?>"><img src="./img/<?php echo $row_rand1['hinh'] ?>"></a>
            </li>
            <li>
                <a href="?quanly=chitietsp&id=<?php echo $row_rand2['sanpham_id'] ; ?>"><img src="./img/<?php echo $row_rand2['hinh'] ?>"></a>
            </li>
            <li>
                <a href="?quanly=chitietsp&id=<?php echo $row_rand3['sanpham_id'] ; ?>"><img src="./img/<?php echo $row_rand3['hinh'] ?>"></a>
            </li>
            <li>
                <a href="?quanly=chitietsp&id=<?php echo $row_rand4['sanpham_id'] ; ?>"><img src="./img/<?php echo $row_rand4['hinh'] ?>"></a>
            </li>
        </ul>
    </div>
</section>
-->
<div class="position-relative" style="margin-top:30px">
    <p class="chitiet-khac">Các sản phẩm khác</p>
    <a href="?quanly=tatcasp" class="chitietsp-them">Xem tất cả</a>
</div>

    <div class="row">
            <?php
                while($row_spkhac = mysqli_fetch_array($sql_spkhac)) {
            ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="home-product__item">
                        <a href="?quanly=chitietsp&id=<?php echo $row_spkhac['sanpham_id'] ; ?>">
                            <div class="home-product__item-img" style="background-image:url(./img/<?php echo $row_spkhac['hinh']; ?>);"></div>
                        </a>
                        <h4 class="home-product__item-name"><?php echo $row_spkhac['sanpham_name'] ; ?></h4>
                        <div class="home-product__item-price">
                            <span class="home-product__item-price-old"><?php echo number_format($row_spkhac['sanpham_gia'])."đ" ; ?></span>
                            <span class="home-product__item-price-new"><?php echo number_format($row_spkhac['sanpham_giakhuyenmai'])."đ" ; ?></span>
                        </div>
                        <form action="?quanly=giohang" method="post">
                            <fieldset>
                                <input type="hidden" name="tensanpham" value="<?php echo $row_spkhac['sanpham_name'] ?>" />
                                <input type="hidden" name="sanpham_id" value="<?php echo $row_spkhac['sanpham_id'] ?>" />
                                <input type="hidden" name="giasanpham" value="<?php echo $row_spkhac['sanpham_giakhuyenmai'] ?>" />
                                <input type="hidden" name="hinhanh" value="<?php echo $row_spkhac['hinh'] ?>" />
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
        <?php
            include('include/pagination.php');
        ?>
