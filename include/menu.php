<?php
	$sql_header = mysqli_query($con,"SELECT * FROM tbl_header");
    $row_header = mysqli_fetch_array($sql_header);
    $sql_category = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
    $sql_category_danhmuc = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
    $sql_category_danhmuc2 = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
?>

<nav class="category">
    <h3 class="category__heading">
        <a href="?quanly=tatcasp"> Danh mục sản phẩm</a>
    </h3>

    <ul class="category__list">
        <li class="category__iteam category__iteam-active">
            <a href="" class="category__iteam-link">Rubik cơ bản</a>
        </li>

        <?php
            while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
                if($row_category_danhmuc['category_id']<=9){
        ?>
            <li class="category__iteam">
                <a href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id'];?>" class="category__iteam-link">Rubik <?php echo $row_category_danhmuc['category_name'] ?></a>
            </li>
        <?php
            }
        }
        ?>

        <li class="category__iteam category__iteam-active">
            <a href="" class="category__iteam-link">Rubik nâng cao</a>
        </li>
        <?php
            while($row_category_danhmuc2 = mysqli_fetch_array($sql_category_danhmuc2)){
                if($row_category_danhmuc2['category_id'] > 9) {
        ?>
            <li class="category__iteam">
                <a href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc2['category_id'];?>" class="category__iteam-link">Rubik <?php echo $row_category_danhmuc2['category_name'] ?></a>
            </li>
        <?php
            }
        }
        ?>
        

        <li class="category__iteam category__iteam-active">
            <a href="" class="category__iteam-link">Rubik thi đấu</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Sticker</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Sticker-less</a>
        </li>
        <li class="category__iteam">
                <a href="" class="category__iteam-link">Có nam châm</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Có phụ kiện đi kèm</a>
        </li>

        <li class="category__iteam category__iteam-active">
            <a href="" class="category__iteam-link">Phụ Kiện Rubik</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Đế Kê Rubik Moyu (Giao Màu Ngẫu Nhiên)</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Thẻ Công Thức CFOP Qiyi0</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Hộp Đựng Rubik 3x3x3 Qiyi</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Bịt Mắt Một Màu Luyện Chơi Rubik Bịt Mắt (BLD)</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Bộ 3 Thẻ CFOP GAN Cứng ( Giống Thẻ ATM )</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Lube Moyu V2 5ml Tác Dụnh Nhanh</a>
        </li>
        <li class="category__iteam">
            <a href="" class="category__iteam-link">Sticker Moyu Weilong GTS Full Fitted Zbright</a>
        </li>

    </ul>
</nav>
<div class="box"></div>
<div class="stars">
    <form action="">
        <input class="star-input star-input-5" id="star-5" type="radio" name="star"/>
        <label class="star-label star-label-5" for="star-5"></label>
        <input class="star-input star-input-4" id="star-4" type="radio" name="star"/>
        <label class="star-label star-label-4" for="star-4"></label>
        <input class="star-input star-input-3" id="star-3" type="radio" name="star"/>
        <label class="star-label star-label-3" for="star-3"></label>
        <input class="star-input star-input-2" id="star-2" type="radio" name="star"/>
        <label class="star-label star-label-2" for="star-2"></label>
        <input class="star-input star-input-1" id="star-1" type="radio" name="star"/>
        <label class="star-label star-label-1" for="star-1"></label>
    </form>
</div>




