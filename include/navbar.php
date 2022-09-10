<?php
    $sql_category_danhmuc = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
    $sql_category_danhmuc2 = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
?>
<div class="grid-mobile shadow-sm show-mobile">
    <div class="col-3 grid-mobile-col">
        <div class="nav-mobile show-on-mobile">
            <input hidden type="checkbox" name="navmobile" id="navmobile" class="navmobile-check">
            <label for="navmobile" class="pointer"><i class="fa-solid fa-bars nav-mobile-bar"></i>Danh mục</label>
            <label for="navmobile" class="overlay"></label>
            <div class="mobile-menu show-on-mobile">
                <h3 class="category__heading">
                    Các sản phẩm
                </h3>
                <label for="navmobile" class="label-close"><i class="btn-close"></i></label>
                <div class="accordion accordion-mobile" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header category__iteam-active" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Rubik cơ bản
                            </button>
                        </h2>
                        <?php
                            while($row_category_danhmuc = mysqli_fetch_array($sql_category_danhmuc)){
                                if($row_category_danhmuc['category_id']<=9){
                        ?>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body category__iteam">
                                <a href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id'];?>" class="category__iteam-link">Rubik <?php echo $row_category_danhmuc['category_name'] ?></a>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Rubik nâng cao
                            </button>
                        </h2>
                        <?php
                            while($row_category_danhmuc2 = mysqli_fetch_array($sql_category_danhmuc2)){
                                if($row_category_danhmuc2['category_id'] > 9) {
                        ?>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body category__iteam">
                                <a href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc2['category_id'];?>" class="category__iteam-link">Rubik <?php echo $row_category_danhmuc2['category_name'] ?></a>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Rubik thi đấu
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body category__iteam">
                                <a href="#" class="category__iteam-link">Rubik sticker</a>
                            </div>
                        </div>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body category__iteam">
                                <a href="#" class="category__iteam-link">Rubik sticker-less</a>
                            </div>
                        </div>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body category__iteam">
                                <a href="#" class="category__iteam-link">Rubik cổ điển</a>
                            </div>
                        </div>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body category__iteam">
                                <a href="#" class="category__iteam-link">Rubik phức tạp</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3 position-relative grid-mobile-col">
        <label for="giohang" class="pointer position-relative">
            <i class="fa-solid fa-cart-shopping"></i>
                <?php
                    $sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
                    $i = 0;
                    while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){
                        $i++;
                ?>
                    <span class="header__cart-notice"><?php echo $i ?></span>
                <?php
                    } 
                ?>
            Giỏ hàng
        </label>
        <input hidden type="checkbox" name="giohang" id="giohang" class="giohang-mobile-checkbox">
        <label for="giohang" class="overlay2 hide-on-tablet hide-on-pc"></label>
        <div class="giohang-mobile hide-on-tablet hide-on-pc">
            <?php
                $sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
            ?>
                <form action="" method="POST">
                    <div class="header__cart-list">
                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                        <label for="giohang"><i class="btn-close giohang-close"></i></label>
                        <ul class="header__cart-list-item">
                        <?php
                            $total = 0;
                            while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){ 
                                $subtotal = $row_fetch_giohang['soluong'] * $row_fetch_giohang['giasanpham'];
                                $total+=$subtotal;
                            if(!$i == 0) {
                        ?>
                            <li class="header__cart-item">
                                <img src="./img/<?php echo $row_fetch_giohang['hinhanh']?>" alt="" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name"><?php echo $row_fetch_giohang['tensanpham'] ?></h5>
                                        <div class="deader__cart-item-price-wrap">
                                            <span class="header__cart-item-price"><?php echo number_format($row_fetch_giohang['giasanpham']).'vnđ' ?></span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-qnt"><?php echo $row_fetch_giohang['soluong'] ?></span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">
                                            <?php echo number_format($row_fetch_giohang['giasanpham']).'vnđ' ?>
                                        </span>
                                        <span class="header__cart-item-remove">
                                            <a href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['giohang_id'] ?>">Xóa</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php
                            }
                            else{
                                echo "Không có";
                            }
                        }
                        ?>
                    </ul>
                    <a href="?quanly=giohang" class="header__cart-view-cart">Xem giỏ hàng</a>
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_SESSION['dangnhap_home'])){ 
    ?>
        <div class="col-3 position-relative grid-mobile-col">
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="span-nav-menu"><?php echo $_SESSION['dangnhap_home'];?></span>
                </div>
                <ul class="dropdown-menu dropdown-menu-mobile" aria-labelledby="dropdownMenu2">
                    <li>
                        <button class="dropdown-item" type="button">
                            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>">Đơn mua</a>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">Địa chỉ</button>
                    </li>
                    <?php
                        if(isset($_SESSION['dangnhap_home'])){ 
                    ?>
                        <li>
                            <button class="dropdown-item user-item-red" type="button">
                                <a href="index.php?dangxuat=1" class="user-item-red">Đăng xuất</a>
                            </button>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="col-3 position-relative grid-mobile-col">
            <label for="timk" class="nav__input">
                <i class="fa-solid fa-magnifying-glass look-mobile"></i>
            </label>
            <input type="checkbox" class="nav__input" name="" id="timk" hidden>
            
            <div class="timkiem">
                <form action="index.php?quanly=timkiem" method="POST">
                    <input class="input" aria-label="Search" type="search" placeholder="Tìm kiếm ...." name="search_product" id="search_product" required>
                    <button type="submit" class="input-span" name="search_button" id="search_button">
                        <i class="fa-solid fa-magnifying-glass input-span-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    <?php
        }else{
    ?>
        <div class="float-end col-3 position-relative grid-mobile-col">
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user-large nav-mobile-bar"></i>Tài khoản
                </div>
                <ul class="dropdown-menu dropdown-menu-mobile" aria-labelledby="dropdownMenu2">
                    <li>
                        <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#dangnhap">Đăng nhập</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#dangky">Đăng ký</button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="user-item-link">
                            Đơn mua</a>
                        </button>
                    </li>
                    <?php
                        if(isset($_SESSION['dangnhap_home'])){ 
                    ?>
                        <li>
                            <button class="dropdown-item user-item-red" type="button">
                                <a href="index.php?quanly=giohang&dangxuat=1" class="user-item-red">Đăng xuất</a>
                            </button>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="col-3 position-relative grid-mobile-col">
            <label for="timk" class="nav__input">
                <i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm
            </label>
            <input type="checkbox" class="nav__input" name="" id="timk" hidden>
            
            <div class="timkiem">
                <form action="index.php?quanly=timkiem" method="POST">
                    <input class="input" aria-label="Search" type="search" placeholder="Tìm kiếm ...." name="search_product" id="search_product" required>
                    <button type="submit" class="input-span" name="search_button" id="search_button">
                        <i class="fa-solid fa-magnifying-glass input-span-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>

<div class="grid-mobile-bottom shadow-sm show-mobile">
    <div class="col-3 align-items-center">
        <i class="fa-brands fa-facebook grid-mobile-icon"></i>
    </div>
    <div class="col-3 align-items-center">
        <i class="fa-solid fa-phone grid-mobile-phone grid-mobile-icon"></i>
    </div>
    <div class="col-3 align-items-center">
        <i class="fa-solid fa-message grid-mobile-mess grid-mobile-icon"></i>
    </div>
    <div class="col-3 align-items-center">
        <i class="fa-brands fa-telegram grid-mobile-tele grid-mobile-icon"></i>
    </div>
</div>

<script>
    $(document).on('click', '.grid-mobile-col' , function(){
        $(this).addClass('active').siblings().removeClass('active')
    })
</script>


