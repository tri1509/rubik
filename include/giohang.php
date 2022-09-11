<?php
	if(isset($_POST['themgiohang'])){
		$tensanpham = $_POST['tensanpham'];
		$sanpham_id = $_POST['sanpham_id'];
		$hinhanh = $_POST['hinhanh'];
		$gia = $_POST['giasanpham'];
		$soluong = $_POST['soluong'];	
 		$sql_select_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
		$count = mysqli_num_rows($sql_select_giohang);
		if($count>0){
			$row_sanpham = mysqli_fetch_array($sql_select_giohang);
			$soluong = $row_sanpham['soluong'] + 1;
			$sql_giohang = "UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
		}else{
			$soluong = $soluong;
			$sql_giohang = "INSERT INTO tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values ('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')";

		}
		$insert_row = mysqli_query($con,$sql_giohang);
		if($insert_row==0){
			header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);	
		}
	}elseif(isset($_POST['capnhatsoluong'])) {
		for($i=0; $i<count($_POST['product_id']); $i++) {
			$sanpham_id = $_POST['product_id'][$i];
			$soluong = $_POST['soluong'][$i];
			if($soluong<=0){
				$sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
			}else{
				$sql_update = mysqli_query($con,"UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'");
			}
		}
		
	}elseif(isset($_GET['xoa'])){
		$id = $_GET['xoa'];
		$sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE giohang_id='$id'");
	}elseif(isset($_GET['dangxuat'])){
		$id = $_GET['dangxuat'];
		if($id==1){
			unset($_SESSION['dangnhap_home']);
		}
	}elseif(isset($_POST['thanhtoan'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = ($_POST['password']);
		$note = $_POST['note'];
		$address = $_POST['address'];
		$giaohang = $_POST['giaohang'];
		$sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')");
		if($sql_khachhang){
			$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
			$mahang = rand(0,9999);
			$row_khachhang = mysqli_fetch_array($sql_select_khachhang);
			$khachhang_id = $row_khachhang['khachhang_id'];
			$_SESSION['dangnhap_home'] = $row_khachhang['name'];
			$_SESSION['khachhang_id'] = $khachhang_id;
			for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++) {
				$sanpham_id = $_POST['thanhtoan_product_id'][$i];
				$soluong = $_POST['thanhtoan_soluong'][$i];
				$sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
				$sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
				$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
			}
		}
	}elseif(isset($_POST['thanhtoandangnhap'])){
		$khachhang_id = $_SESSION['khachhang_id'];
		$mahang = rand(0,9999);	
		for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
				$sanpham_id = $_POST['thanhtoan_product_id'][$i];
				$soluong = $_POST['thanhtoan_soluong'][$i];
				$sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
				$sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
				$sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
			}
	}
?>

<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12 col-12">
	<ul class="chitietsp">
		<li>
			<a href="index.php">Trang chủ</a>
		</li>
		<i>|</i>
		<li>giỏ hàng </li>
	</ul>
</div>

<div class="container">
	<h3 class="chitiet-khac">Giỏ hàng của bạn</h3>

	<?php 
	if(isset($_SESSION['dangnhap_home'])){
		echo '<p style="color:#000;font-size:1.6rem;">Xin chào bạn: <span style="color: #004993;font-size: 1.5rem;font-weight: 800;">'.$_SESSION['dangnhap_home'].' </span><i> | </i><a href="index.php?quanly=giohang&dangxuat=1" style="color:#6a5af9;font-size:1.7rem;">Đăng xuất</a></p>';
	}else{
		echo "<i class='chuadangnhap'>(Hãy đăng nhập để nhận nhiều ưu đãi hơn)</i>";
	}
	?>
		
	<div class="checkout-right">
		<?php
			$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
		?>
		<div class="table-responsive">
			<form action="" method="POST">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th scope="col">STT</th>
							<th scope="col">Sản phẩm</th>
							<th scope="col">SL</th>
							<th scope="col">Tên hàng</th>
							<th scope="col">Giá</th>
							<th scope="col">Giá tổng</th>
							<th scope="col">QL</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						$total = 0;
						while($row_fetch_giohang = mysqli_fetch_array($sql_lay_giohang)){
							$subtotal = $row_fetch_giohang['soluong'] * $row_fetch_giohang['giasanpham'];
							$total+=$subtotal;
							$i++;
						?>
						<tr class="rem1">
							<td class="invert" data-label="sp số :" scope="row"><?php echo $i ?></td>
							<td class="invert-image">
								<img src="./img/<?php echo $row_fetch_giohang['hinhanh']?>" alt="" width="120" height="auto">
							</td>
							<td class="invert" data-label="số lượng :" >
								<input type="hidden" name="product_id[]" value="<?php echo $row_fetch_giohang['sanpham_id'] ?>">
								<div class="buttons_added">
									<input class="minus is-form" type="button" value="-">
									<input aria-label="quantity" class="input-qty" max="100" min="1" type="number" name="soluong[]" value="<?php echo $row_fetch_giohang['soluong'] ?>">
									<input class="plus is-form" type="button" value="+">
								</div>
							</td>
							<td class="invert" data-label="tên sản phẩm :"><?php echo $row_fetch_giohang['tensanpham'] ?></td>
							<td class="invert" data-label="giá :"><?php echo number_format($row_fetch_giohang['giasanpham'])." ₫" ?></td>
							<td class="invert" data-label="giá tổng :"><?php echo number_format($subtotal)." ₫" ?></td>
							<td class="invert">
								<a class="xoagiohang" href="?quanly=giohang&xoa=<?php echo $row_fetch_giohang['giohang_id'] ?>">Xóa</a>
							</td>
						</tr>
						<?php } ?>
						<tr>
							<td colspan="7" class="invert tudo">Tổng tiền : <span><?php echo number_format($total).'vnđ' ?></span></td>
						</tr>
						<tr>
							<td colspan="7" class="tudo"><input type="submit" class="btn-success" value="Cập nhật giỏ hàng" name="capnhatsoluong" onclick="capnhat()">
							<?php 
								$sql_giohang_select = mysqli_query($con,"SELECT * FROM tbl_giohang");
								$count_giohang_select = mysqli_num_rows($sql_giohang_select);
								if(isset($_SESSION['dangnhap_home']) && $count_giohang_select>0){
									while($row_1 = mysqli_fetch_array($sql_giohang_select)){
							?>
								<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_1['sanpham_id'] ?>">
								<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_1['soluong'] ?>">
							<?php } ?>
							<tr>
								<td colspan="7" class="tudo">
									<input type="submit" class="btn btn-primary" value="Thanh toán giỏ hàng" name="thanhtoandangnhap" onclick="thanhtoan()">
								</td>
							</tr>
							
							<?php
							} 
							?>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
	<script>
		function capnhat() {
		alert("Đã cập nhật giỏ hàng\nBấm OK để tiếp tục mua hàng");
		};
		function thanhtoan() {
		alert("Đã thanh toán giỏ hàng\nVào đơn hàng để xem thông tin");
		}
	</script>

	<?php
		if(!isset($_SESSION['dangnhap_home'])){ 
	?>
	<div class="checkout-left">
		<div class="address_form_agile mt-sm-5 mt-4">
			<h4 class="chitiet-khac">Thêm địa chỉ giao hàng</h4>
			<form action="" method="post" class="creditly-card-form agileinfo_form">
				<div class="creditly-wrapper wthree, w3_agileits_wrapper">
					<div class="information-wrapper">
						<div class="first-row">
							<div class="controls form-group">
								<input class="billing-address-name form-control" type="text" name="name" placeholder="Điền tên" required="">
							</div>
							<div class="w3_agileits_card_number_grids">
								<div class="w3_agileits_card_number_grid_left form-group">
									<div class="controls">
										<input type="text" class="form-control" placeholder="Số phone" name="phone" required="">
									</div>
								</div>
								<div class="w3_agileits_card_number_grid_right form-group">
									<div class="controls">
										<input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="">
									</div>
								</div>
							</div>
							<div class="controls form-group">
								<input type="text" class="form-control" placeholder="Email" name="email" required="">
							</div>
							<div class="controls form-group">
								<input type="text" class="form-control" placeholder="Password" name="password" required="">
							</div>
							<div class="controls form-group">
								<textarea style="resize: none;" class="form-control" placeholder="Ghi chú" name="note" required=""></textarea>  
							</div>
							<div class="controls form-group">
								<select class="option-w3ls" name="giaohang">
									<option>Chọn hình thức giao hàng</option>
									<option value="1">Thanh toán ATM</option>
									<option value="0">Nhận tiền tại nhà</option>
								</select>
							</div>
						</div>
						<?php
						$sql_lay_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang ORDER BY giohang_id DESC");
						while($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)){ 
						?>
							<input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row_thanhtoan['sanpham_id'] ?>">
							<input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row_thanhtoan['soluong'] ?>">
						<?php
						} 
						?>
						<input type="submit" name="thanhtoan" class="btn-success" value="Thanh toán">
						
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
	} 
	?>
</div>

<script>
	$('input.input-qty').each(function() {
var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
if (min == 0) {
    var d = 0
} else d = min
$(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
    if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
    var x = Number($this.val()) + 1
    if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
})
})
</script>
