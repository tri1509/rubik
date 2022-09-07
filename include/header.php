<?php
    $sql_header = mysqli_query($con,"SELECT * FROM tbl_header");
    $row_header = mysqli_fetch_array($sql_header);
    if(isset($_POST['themgiohang'])){

    }elseif(isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE giohang_id='$id'");
    }elseif(isset($_GET['dangxuat'])){
        $id = $_GET['dangxuat'];
        if($id==1){
            unset($_SESSION['dangnhap_home']);
        }
    }elseif(isset($_POST['thanhtoan'])){
    
    }elseif(isset($_POST['thanhtoandangnhap'])){
    
    }
?>
<header class="header shadow-sm" id="navbar">
    <div class="grid wide">
        <nav class="nav">
            <div class="logo">
                <img src="./img/2.png" alt="" class="logo_mobil-l show-mobile" width="50">
                <a href="index.php"><p class="neon logo_mobil-c">Rubik M.Trí </p></a>
                <img src="./img/5.png" alt="" class="logo_mobil-r show-mobile" width="50">
            </div>
            <div class="contact">
                <ul class="contact-list">
                    <li class="contact-item contact-cart">
                        <label for="giohangtab" class="pointer">
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
                        <input hidden type="checkbox" name="giohangtab" id="giohangtab" class="giohang-tablet-checkbox">
<!-- Giỏ hàng PC -->     
                        <div class="giohang">
                            <?php
                                $sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
                            ?>
                            <form action="" method="POST">
                                <div class="header__cart-list">
                                    <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                    <ul class="header__cart-list-item">
                                    <?php
                                        $total = 0;
                                        while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){ 
                                            $subtotal = $row_fetch_giohang['soluong'] * $row_fetch_giohang['giasanpham'];
                                            $total+=$subtotal;
                                        if($row_fetch_giohang !== 0) {
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
                                            echo "Không có sản phẩm";
                                        }
                                    }
                                    ?>
                                    </ul>
                                    <a href="?quanly=giohang" class="header__cart-view-cart">Xem giỏ hàng</a>
                                </div>
                            </form>
                        </div>
<!--/  Giỏ hàng PC -->     

<!-- Giỏ hàng tablet -->
                        <label for="giohangtab" class="overlay2"></label>
                        <div class="giohang-tablet hide-on-pc hide-on-tablet">
                            <?php
                                $sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
                            ?>
                                <form action="" method="POST">
                                    <div class="header__cart-list">
                                        <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                        <label for="giohangtab"><i class="btn-close giohang-close"></i></label>
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
<!-- / Giỏ hàng tablet -->
                    </li>

<!-- contact PC -->     
                    <?php
                        if(isset($_SESSION['dangnhap_home'])){ 
                    ?>
                        <li class="contact-item contact-user">
                            <label for="usercheck" class="pointer">
                                <i class="fa-solid fa-user-large"></i>
                                <?php echo $_SESSION['dangnhap_home'] ?>
                            </label>
                            <input hidden type="checkbox" name="" id="usercheck" class="usercheck">
                            <div class="user">
                                <ul class="user-list">
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangnhap">
                                        Đăng nhập 
                                        <i class="fa-solid fa-circle-user user-icon"></i>
                                    </li>
                                    <li class="user-item">
                                        Địa chỉ
                                        <i class="fa-solid fa-location-pin user-icon"></i>
                                    </li>
                                    <?php
                                        if(isset($_SESSION['dangnhap_home'])){ 
                                    ?>
                                        <li class="user-item">
                                            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="user-item-link">Đơn hàng <i class="fa-solid fa-chart-bar user-icon"></i></a>
                                        </li>
                                        <li class="user-item user-item-red">
                                            <a href="index.php?dangxuat=1" class="user-item-red">Đăng xuất</a>
                                            <i class="fa-solid fa-right-from-bracket user-icon"></i>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="user-tablet">
                                <ul class="user-list">
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangnhap">
                                        Đăng nhập 
                                        <i class="fa-solid fa-circle-user user-icon"></i>
                                    </li>
                                    <li class="user-item">
                                        Địa chỉ
                                        <i class="fa-solid fa-location-pin user-icon"></i>
                                    </li>
                                    <?php
                                        if(isset($_SESSION['dangnhap_home'])){ 
                                    ?>
                                        <li class="user-item">
                                            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="user-item-link">Đơn mua <i class="fa-solid fa-chart-bar user-icon"></i></a>
                                        </li>
                                        <li class="user-item user-item-red">
                                            <a href="index.php?dangxuat=1" class="user-item-red">Đăng xuất</a>
                                            <i class="fa-solid fa-right-from-bracket user-icon"></i>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php 
                        }
                    else {
                    ?>
                        <li class="contact-item contact-user">
                    <!-- user PC -->
                            <div class="user">
                                <ul class="user-list">
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangnhap">
                                        Đăng nhập 
                                        <i class="fa-solid fa-circle-user user-icon"></i>
                                    </li>
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangky">
                                        Đăng ký
                                        <i class="fa-solid fa-circle-check user-icon"></i>
                                    </li>
                                    <li class="user-item">
                                        Địa chỉ
                                        <i class="fa-solid fa-location-pin user-icon"></i>
                                    </li>
                                    <?php
                                        if(isset($_SESSION['dangnhap_home'])){ 
                                    ?>
                                        <li class="user-item">
                                            <a href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>" class="user-item-link">Đơn hàng <i class="fa-solid fa-chart-bar user-icon"></i></a>
                                        </li>
                                        <li class="user-item user-item-red">
                                            <a href="index.php?dangxuat=1" class="user-item-red">Đăng xuất</a>
                                            <i class="fa-solid fa-right-from-bracket user-icon"></i>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                    <!-- / user PC -->
                            <label for="usercheck" class="pointer">
                                <i class="fa-solid fa-user-large"></i>
                                Tài khoản
                            </label>
                            <input hidden type="checkbox" name="" id="usercheck" class="usercheck">
                    <!-- user tablet -->
                            <div class="user-tablet">
                                <ul class="user-list">
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangnhap">
                                        Đăng nhập 
                                        <i class="fa-solid fa-circle-user user-icon"></i>
                                    </li>
                                    <li class="user-item" data-bs-toggle="modal" data-bs-target="#dangky">
                                        Đăng ký 
                                        <i class="fa-solid fa-circle-check user-icon"></i>
                                    </li>
                                    <li class="user-item">
                                        Địa chỉ
                                        <i class="fa-solid fa-location-pin user-icon"></i>
                                    </li>
                                    <li class="user-item">
                                        Đơn mua
                                        <i class="fa-solid fa-chart-bar user-icon"></i>
                                    </li>
                                    <?php
                                        if(isset($_SESSION['dangnhap_home'])){ 
                                    ?>
                                        <li class="user-item user-item-red">
                                            <a href="index.php?dangxuat=1" class="user-item-red">Đăng xuất</a>
                                            <i class="fa-solid fa-right-from-bracket user-icon"></i>
                                        </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                    <!-- / user tablet -->

        
                        </li>
                    <?php
                        }
                    ?>
                    <li class="contact-item">
                        <label for="tim" class="nav__input">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            Tìm kiếm
                        </label>
                        <input hidden type="checkbox" class="nav__input" name="" id="tim">
                        
                        <div class="timkiem">
                            <form action="index.php?quanly=timkiem" method="POST">
                                <input class="input" aria-label="Search" type="search" placeholder="Tìm kiếm ...." name="search_product" id="search_product" required=""/>
                                <button type="submit" class="input-span" name="search_button" id="search_button">
                                    <i class="fa-solid fa-magnifying-glass input-span-icon"></i>
                                </button>
                            </form>
                        </div>
                    </li>
<!-- / contact PC -->
                </ul>
            </div>
        </nav>
    </div>
</header>



<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap_home'])) {
		$taikhoan = $_POST['email_login'];
		$matkhau = ($_POST['password_login']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<script>alert("Làm ơn không để trống")</script>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap_home'] = $row_dangnhap['name'];
				$_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
				
				// header('Location: index.php?quanly=giohang');
			}else{
				echo '<script>alert("Tài khoản mật khẩu sai")</script>';
			}
		}
	}elseif(isset($_POST['dangky'])){
		$name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $note = $_POST['note'];
        $address = $_POST['address'];
        $giaohang = $_POST['giaohang'];
        $sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')");
 		$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
        $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
        $_SESSION['dangnhap_home'] = $name;
		$_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
		
 		// header('Location:index.php?quanly=giohang');
	}
?> 

<!-- Modal -->
<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title auth-form-header" id="exampleModalLabel">Đăng Nhập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="email_login" id="email_login" required="">
                            <lable class="auth-form__lable">Email</lable>
                        </div>
                        <div class="auth-form__group">
                            <input class="auth-form__input" type="password" name="password_login" id="password_login" maxlength="20" placeholder=" " required="">
                            <lable class="auth-form__lable">Nhập mật khẩu</lable>
                            <span id="showPassword"><i class="fas fa-eye eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="auth-form-link__controls" data-bs-toggle="modal" data-bs-target="#dangky">
                        Bạn chưa có tải khoản ?
                    </a>
                    <button type="button" class="btn btn-secondary auth-form-btn__controls-close" data-bs-dismiss="modal">Thoát</button>
                    <input type="submit" class="auth-form-btn__controls" name="dangnhap_home" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="dangky" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title auth-form-header" id="exampleModalLabel">Đăng Ký</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="phone" id="phone" required="">
                            <lable class="auth-form__lable">Số điện thoại</lable>
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="name" id="name" required="">
                            <lable class="auth-form__lable">Tên khách hàng</lable>
                        </div>
                        <div class="auth-form__group">
                            <input type="email" class="auth-form__input" maxlength="50" placeholder=" " name="email" id="email" required="">
                            <lable class="auth-form__lable">Email</lable>
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="address" id="address" required="">
                            <lable class="auth-form__lable">Địa chỉ</lable>
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" maxlength="50" placeholder=" " name="note" id="note" required="">
                            <lable class="auth-form__lable">Nghề nghiệp</lable>
                        </div>
                        <div class="auth-form__group">
                            <input class="auth-form__input" type="password" name="password" id="password2" maxlength="20" placeholder=" " required="">
                            <lable class="auth-form__lable">Nhập mật khẩu</lable>
                            <span id="showPassword2"><i class="fas fa-eye eye"></i></span>
							<input type="hidden" class="form-control" placeholder="" name="giaohang"  value="0">
                        </div>
                        <!-- <div class="auth-form__group">
                            <input class="auth-form__input" type="password" name="password2" id="password2" maxlength="20" placeholder=" " required="">
                            <lable class="auth-form__lable">Nhập lại mật khẩu</lable>
                            <span id="showPassword"><i class="fas fa-eye eye"></i></span>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary auth-form-btn__controls-close" data-bs-dismiss="modal">Thoát</button>
                    <input type="submit" class="auth-form-btn__controls" name="dangky" value="Đăng ký">
                </div>
            </form>
        </div>
    </div>
</div>

