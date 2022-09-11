<div class="row">
    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12">
        <div class="home-hotline">
            <i class="fa-solid fa-phone"></i>
            <span class="span-home-hotline">
                Hotline:
            </span>
        </div>
        <div class="hotline-number">
            0898303889 <br>
            Zalo: 0898303889
        </div>
    </div>
    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
        <div class="home-news-sale">
            <div class="title">
                Tin Mới:
            </div>
            <marquee direction="left" onmouseout="this.start()" onmouseover="this.stop()" scrollamount="3" scrolldelay="2">
                <a class="title_link" href="https://rubikhanoi.vn/cach-giai-rubik-5x5x5-nhanh-nhat/">Cách giải rubik 5x5x5 nhanh nhất</a>   |
                <a class="title_link" href="https://rubikhanoi.vn/cach-giai-rubik-3x3-nhanh/">Cách giải Rubik 3×3 nhanh</a>   |
                <a class="title_link" href="https://rubikhanoi.vn/huong-dan-giai-rubik-4x4x4-cach-don-gian-nhat/">Hướng dẫn giải rubik 4x4x4 cách đơn giản nhất</a>   |
                <a class="title_link" href="https://rubikhanoi.vn/huong-dan-xoay-rubik-3x3x3-don-gian-nhat/">Hướng dẫn xoay rubik 3x3x3 đơn giản nhất</a>   |
            </marquee>
        </div>
    </div>    
</div>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./img/bn1.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="./img/bn2.jpg" class="d-block w-100" alt="">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <h2>
        <i class="fa-solid fa-cubes"></i>
        Sản Phẩm
        <img src="./img/hot.gif" alt="">
    </h2>
    <h5>Chúng tôi cung cấp sản phẩm Rubik chính hãng chất lượng tốt của các hãng Rubik hàng đầu thế giới.</h5>

    <div class="home-product">
        <div class="row">
            <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = '';
                }
                if($tam=='sanphambanchay'){
                    include('include/sanphambanchay.php');
                }else{
                    include('include/sanphamnoibat.php'); 
                }
            ?>
        </div>
    </div>

    <h2 id="moi">
        <i class="fa-solid fa-cubes"></i>
        Sản Phẩm Mới
        <img src="./img/New.gif" alt="" style="margin-bottom:10px">
    </h2>
    
    <div class="home-product">
        <div class="row">
            <?php
                include('include/sanphammoi.php');
                // include('include/pagination.php');
                ?>
        </div>
    </div>
<?php 
    $sql_rand = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY RAND() LIMIT 1,75");
    $row_rand1 = mysqli_fetch_array($sql_rand);
    $row_rand2 = mysqli_fetch_array($sql_rand);
    $row_rand3 = mysqli_fetch_array($sql_rand);
    $row_rand4 = mysqli_fetch_array($sql_rand);
?>
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
</div>



        