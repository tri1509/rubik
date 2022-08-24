<div class="carousel-r2">
    <div class="owl-carousel owl-theme">
        <?php
            $sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
            while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
                $id_category = $row_cate_home['category_id'];
                if($row_cate_home['category_id']>9){
        ?>
            <div class="item">
                <nav class="category-2">
                    <h3 class="category__heading">
                        Rubik <?php echo $row_cate_home['category_name'] ?>
                    </h3>
                    <?php
                        $sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
                        while($row_sanpham = mysqli_fetch_array($sql_product)) {
                            if($row_sanpham['category_id']==$id_category){
                    ?>
                        <a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ; ?>" class="category__link-2">
                            <div class="row no-gutters row-magrin">
                                <div class="col-xl-4 col-lg-4">
                                    <img src="./img/<?php echo $row_sanpham['hinh']; ?>" alt="" width="100%" height="70">
                                </div>
                                <div class="col-xl-8 col-lg-8">
                                    <div class="right-text">
                                        <?php echo $row_sanpham['sanpham_name'] ; ?>
                                    </div>
                                    <div class="gia">
                                        <del class="giacu"><?php echo number_format($row_sanpham['sanpham_gia'])."đ" ; ?></del>
                                        <span class="giamoi"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai'])."đ" ; ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                        }
                    }
                    ?>
                </nav>
            </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:8000,
    dots:false,
    padding:10,
    nav:true,
    navText:
    ['<i class="fa-solid fa-chevron-left nav-icon nav-icon-left"></i>',
    '<i class="fa-solid fa-chevron-right nav-icon nav-icon-right"></i>'],
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
