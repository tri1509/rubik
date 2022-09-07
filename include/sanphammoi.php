<?php
    $sql_sanphammoi = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_moi='1' ORDER BY category_id DESC");
    while($row_sanphammoi = mysqli_fetch_array($sql_sanphammoi)) {
?>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
        <div class="home-product__item">
            <a href="?quanly=chitietsp&id=<?php echo $row_sanphammoi['sanpham_id'] ; ?>" class="home-product__link" title="<?php echo $row_sanphammoi['sanpham_name'];?>">
                <div class="home-product__item-img" style="background-image:url(./img/<?php echo $row_sanphammoi['hinh'];?>);"></div>
                <h4 class="home-product__item-name"><?php echo $row_sanphammoi['sanpham_name'];?></h4>
                <div class="home-product__item-price">
                    <span class="home-product__item-price-old"><?php echo number_format($row_sanphammoi['sanpham_gia'])."đ" ; ?></span>
                    <span class="home-product__item-price-new"><?php echo number_format($row_sanphammoi['sanpham_giakhuyenmai'])."đ" ; ?></span>
                </div>
                <form action="?quanly=giohang" method="post">
                    <fieldset>
                        <input type="hidden" name="tensanpham" value="<?php echo $row_sanphammoi['sanpham_name'] ?>" />
                        <input type="hidden" name="sanpham_id" value="<?php echo $row_sanphammoi['sanpham_id'] ?>" />
                        <input type="hidden" name="giasanpham" value="<?php echo $row_sanphammoi['sanpham_giakhuyenmai'] ?>" />
                        <input type="hidden" name="hinhanh" value="<?php echo $row_sanphammoi['hinh'] ?>" />
                        <input type="hidden" name="soluongg" value="1" />
                        <input type="hidden" name="soluong" value="1" />
                        <input type="submit" class="muahang" name="themgiohang" value="Mua hàng"></input>
                    </fieldset>
                </form>
                <div class="home-product__item-new">
                    <span class="home-product__item-new-chill">Mới</span>
                </div>
            </a>
        </div>
    </div>
<?php
}
?>