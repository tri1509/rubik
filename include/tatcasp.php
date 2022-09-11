<div class="body-allsp">
    <div class="grid wide container-body">
        <div class="categories_all">
            <ul class="categories">
                <li class="hassub hassup-one">
                    <span></span>
                    <i class="icon-categories fa-solid fa-table-cells"></i>
                    Rubik cơ bản
                    <ul class="categories-list categories-list-one">
                    <?php
                        $sql_category_danhmuc = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
                        while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
                            if($row_category_danhmuc['category_id']<=9){
                    ?>
                        <li class="categories-item"><a href="#<?php echo $row_category_danhmuc['category_id']; ?>">Rubik <?php echo $row_category_danhmuc['category_name'] ?></a> </li>
                    <?php }} ?>
                    </ul>
                </li>
                <li class="hassub hassup-two"><span></span><i class="icon-categories fa-solid fa-table-cells"></i>Rubik nâng cao
                    <ul class="categories-list categories-list-two">
                    <?php
                        $sql_category_danhmuc2 = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
                        while($row_category_danhmuc2 = mysqli_fetch_array($sql_category_danhmuc2)){
                            if($row_category_danhmuc2['category_id'] > 9) {
                    ?>
                        <li class="categories-item"><a href="#<?php echo $row_category_danhmuc2['category_id']; ?>">Rubik <?php echo $row_category_danhmuc2['category_name'] ?></a> </li>
                    <?php }} ?>
                    </ul>
                </li>

                <li class="hassub"><i class="icon-categories fa-solid fa-star-of-david"></i><a href="#baiviet">Bài viết</a> </li>

                <li class="hassub hassup-three"><span></span><i class="icon-categories fa-solid fa-tags"></i>Phụ Kiện Rubik
                    <ul class="categories-list categories-list-three">
                        <li class="categories-item">Stickers - Đề can dán rubik</li>
                        <li class="categories-item">Core & Ốc</li>
                        <li class="categories-item">Silicone - Dầu bôi trơn</li>
                        <li class="categories-item">Đồng hồ đo thời gian</li>
                        <li class="categories-item">Keychain - Móc khóa Rubik</li>
                        <li class="categories-item">Bag - Túi đựng Rubik</li>
                        <li class="categories-item">Sticker Razor - Đồ bóc sticker</li>
                    </ul>
                </li>
                <li class="hassub"><i class="icon-categories fa-solid fa-up-down-left-right"></i>Xếp Hình Nam Châm</li>
                <li class="hassub"><i class="icon-categories fa-solid fa-atom"></i>Board Game</li>
                <li class="hassub hassup-four"><span></span><i class="icon-categories fa-solid fa-atom"></i>Discount
                    <ul class="categories-list categories-list-four">
                        <li class="categories-item">Sale off - Clear stock</li>
                        <li class="categories-item">Discontinue Cube</li>
                        <li class="categories-item">Beginner Cube 3x3x3</li>
                        <li class="categories-item">Beginner Cube 2x2x2</li>
                    </ul>
                </li>
                <li class="hassub"><i class="icon-categories fa-solid fa-jet-fighter"></i>Spinner - Figdet</li>
            </ul>
        </div>

        <div class="homebanner">
            <div class="owl-carousel-center owl-carousel owl-theme owl-loaded" style="text-align: center">
                <div class="item" style="text-align: center">
                    <a href=""><img src="./img/bn3.jpg" alt="" width="680" height="320"></a>
                </div>
                <div class="item" style="text-align: center">
                    <a href=""><img src="./img/bn4.jpg" alt="" width="680" height="320"></a>
                </div>
            </div>
            <script>
                $('.owl-carousel').owlCarousel({
                loop:true,
                nav:true,
                // dots:true,
                autoplay:true,
                autoplayTimeout:6000,
                navText:
                ['<i class="fa-solid fa-chevron-left categories-icon categories-icon-l"></i>',
                '<i class="fa-solid fa-chevron-right categories-icon categories-icon-r"></i>'],
                item:1,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
                })
            </script>
        </div>

        <div class="homenews">
            <a href=""><img src="./img/adsrighthome.jpg" alt="" width="270" height="155"></a>
            <a href=""><img src="./img/adsrighthomee.jpg" alt="" width="270" height="155" style="margin-top: 10px"></a>
        </div>  
        <div class="clr clearfix" style="margin-top: 10px;">
            <div class="clr clearfix" style="margin-top: 10px;"></div>
        </div>
            
    <?php
        $sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
        while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
            $id_category = $row_cate_home['category_id'];
    ?>
        <div class="main-one">
            <p class="main-header" id="<?php echo $id_category ?>">Rubik <?php echo $row_cate_home['category_name'] ?></p>
            <div class="owl-carousel owl-carousel-sp owl-theme container-owl-theme ">
            <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)) {
                    if($row_sanpham['category_id']==$id_category){
            ?>
                <div class="item">
                    <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>" class="home-product__danhmuc-link" title="<?php echo $row_sanpham['sanpham_name']?>">
                        <div class="home-product__danhmuc">
                            <div class="home-product__danhmuc-img"><img src="./img/<?php echo $row_sanpham['hinh']?>" alt="" width="100%" height="auto"></div>
                            <h4 class="home-product__danhmuc-name"><?php echo $row_sanpham['sanpham_name']?></h4>
                            <div class="home-product__danhmuc-price">
                                <span class="home-product__danhmuc-price-new"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai'])."₫"?></span>
                                <span class="home-product__danhmuc-price-old"><?php echo number_format($row_sanpham['sanpham_gia'])."₫"?></span>
                            </div>
                        </div>
                        <div class="promotion clr"><i class="item-span"><i class="fa-solid fa-feather"></i>Freeship đơn hàng từ 500.000 đ</i></div>
                    </a>
                </div>
            <?php }} ?>
            </div>
        </div>

    <?php } ?>
    
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:false,
        autoplayTimeout:false,
        dots:false,
        margin:20,
        nav:true,
        navText:
        ['<i class="fa-solid fa-angle-left container-item-nav"></i>',
        '<i class="fa-solid fa-angle-right container-item-nav"></i>'],
        item:5,
        responsive:{
            0:{
                items:5
            },
            600:{
                items:5
            },
            1000:{
                items:5
            }
        }
        })
    </script>
        <?php
            $sql_tenbaiviet = mysqli_query($con,"SELECT * FROM tbl_baiviet ORDER BY RAND() LIMIT 1,4");
        ?>	 	
        <div class="main-baiviet" id="baiviet">
            <p class="main-header">bài viết</p>
            <div class="row">
                <?php while($row_bai = mysqli_fetch_array($sql_tenbaiviet)) { ?>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <a href="?quanly=baiviet&id=<?php echo $row_bai['baiviet_id'] ; ?>" class="home-product__danhmuc-link" title="<?php echo $row_bai['tenbaiviet'] ; ?>">
                        <div class="home-product__baiviet">
                            <div class="home-product__baiviet-img"><img src="./img/<?php echo $row_bai['hinh']; ?>" alt="" width="100%" height="150px"></div>
                            <h4 class="home-product__baiviet-name"><?php echo $row_bai['tenbaiviet'] ; ?></h4>
                            <i class="tomtat"><?php echo $row_bai['tomtat'] ; ?></i>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="body-allsp-mobile show-mobile">
    <div class="homebanner-mobil show-mobile">
        <div class="owl-carousel-center owl-carousel owl-theme owl-loaded" style="text-align: center">
            <div class="item" style="text-align: center">
                <a href=""><img src="./img/bn3.jpg" alt="" width="412px" height="auto"></a>
            </div>
            <div class="item" style="text-align: center">
                <a href=""><img src="./img/bn4.jpg" alt="" width="412px" height="auto"></a>
            </div>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
            loop:true,
            nav:true,
            // dots:true,
            autoplay:true,
            autoplayTimeout:6000,
            navText:
            ['<i class="fa-solid fa-chevron-left categories-icon categories-icon-l"></i>',
            '<i class="fa-solid fa-chevron-right categories-icon categories-icon-r"></i>'],
            item:1,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
            })
        </script>

    <?php
        $sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
        while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
            $id_category = $row_cate_home['category_id'];
    ?>
        <div class="main-one-mobile show-mobile">
            <p class="main-header-mobile main-header" id="<?php echo $id_category ?>">Rubik <?php echo $row_cate_home['category_name'] ?></p>
            <div class="main-mobile">
            <?php
                $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
                while($row_sanpham = mysqli_fetch_array($sql_product)) {
                    if($row_sanpham['category_id']==$id_category){
            ?>
                <div class="item main-mobile-item">
                    <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ; ?>" class="home-product__danhmuc-link" title="<?php echo $row_sanpham['sanpham_name'] ; ?>">
                        <div class="home-product__danhmuc-img"><img src="./img/<?php echo $row_sanpham['hinh']; ?>" alt="" width="100%" height="auto"></div>
                        <h4 class="home-product__danhmuc-name"><?php echo $row_sanpham['sanpham_name'] ; ?></h4>
                        <div class="home-product__danhmuc-price">
                            <span class="home-product__danhmuc-price-new"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai'])."₫" ; ?></span>
                            <span class="home-product__danhmuc-price-old"><?php echo number_format($row_sanpham['sanpham_gia'])."₫" ; ?></span>
                        </div>
                        <div class="promotion clr"><i class="item-span"><i class="fa-solid fa-feather"></i>Freeship đơn hàng từ 500.000 đ</i></div>
                    </a>
                </div>
            <?php }} ?>
            </div>
        </div>
    <?php } ?>
        <div class="main-one-mobile show-mobile">
            <p class="main-header-mobile main-header" id="baiviet">Bài Viết</p>
            <div class="main-mobile-bv">
        <?php
            $sql_tenbaiviet = mysqli_query($con,"SELECT * FROM tbl_baiviet");
            while($row_bai = mysqli_fetch_array($sql_tenbaiviet)) { 
        ?>
                <div class="item main-mobile-item-bv">
                    <a href="?quanly=baiviet&id=<?php echo $row_bai['baiviet_id'] ; ?>" class="home-product__danhmuc-link" title="<?php echo $row_sanpham['sanpham_name'] ; ?>">
                        <div class="row">
                            <div class="col-4">
                                <div class="home-product__danhmuc-img"><img src="./img/<?php echo $row_bai['hinh']; ?>" alt="" width="100px" height="auto"></div>
                            </div>
                            <div class="col-6">
                                <h4 class="home-product__danhmuc-name-bv" style="margin-top:20px"><?php echo $row_bai['tenbaiviet']; ?></h4>
                                <i class="tomtat-mobile"><?php echo $row_bai['tomtat'] ; ?></i>
                            </div>
                        </div>
                    </a>
                </div>
        <?php } ?>
            </div>
        </div>
    </div>
</div>

        


    
