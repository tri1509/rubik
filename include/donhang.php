<?php
	if(isset($_GET['huydon'])&& isset($_GET['magiaodich'])){
		$huydon = $_GET['huydon'];
		$magiaodich = $_GET['magiaodich'];
	}else{
		$huydon = '';
		$magiaodich = '';
	}
	$sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
	$sql_update_giaodich = mysqli_query($con,"UPDATE tbl_giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");
?>
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12 col-12">
	<ul class="chitietsp">
		<li>
			<a href="index.php">Trang chủ</a>
		</li>
		<i>|</i>
		<li>đơn hàng </li>
	</ul>
</div>
<h3 class="chitiet-khac text-center">Xem đơn hàng</h3>
<div class="row donhang">
	<?php
		if(isset($_SESSION['dangnhap_home'])){
			echo 'Đơn hàng : '.$_SESSION['dangnhap_home'];
		} 
	?>
	<div class="col-xl-12 col-md-12 col-12">
		<?php
			if(isset($_GET['khachhang'])){
					$id_khachhang = $_GET['khachhang'];
				}else{
					$id_khachhang = '';
			}
			$sql_select = mysqli_query($con,"SELECT * FROM tbl_giaodich WHERE tbl_giaodich.khachhang_id='$id_khachhang' GROUP BY tbl_giaodich.magiaodich"); 
		?> 
		<table class="table table-bordered">
			<tr>
				<th>Thứ tự</th>
				<th>Mã giao dịch</th>
				<th>Ngày đặt</th>
				<th>Quản lý</th>
				<th>Tình trạng</th>
				<th>Yêu cầu</th>
			</tr>
			<?php
				$i = 0;
				while($row_donhang = mysqli_fetch_array($sql_select)){ 
					$i++;
			?> 
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row_donhang['magiaodich']; ?></td>
				<td><?php echo $row_donhang['ngaythang'] ?></td>
				<td><a style="color:#007bff" href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&magiaodich=<?php echo $row_donhang['magiaodich'] ?>">Xem chi tiết</a></td>
				<td>
					<?php 
						if($row_donhang['tinhtrangdon']==0){
							echo 'Đã đặt hàng';
						}else{
							echo 'Đã xử lý | Đang giao hàng';
						}
					?>
				</td>
				<td>
					<?php
						if($row_donhang['huydon']==0){ 
					?>
						<a  style="color:#007bff" href="index.php?quanly=xemdonhang&khachhang=<?php echo $_SESSION['khachhang_id'] ?>&magiaodich=<?php echo $row_donhang['magiaodich'] ?>&huydon=1">Yêu cầu hủy</a>
					<?php
						}elseif($row_donhang['huydon']==1){											
					?>
					<div style="height:35px">
						Đang chờ hủy
						<div class="dots-loading">
							<div style="--delay: 1s"></div>
							<div style="--delay: 2s"></div>
							<div style="--delay: 3s"></div>
							<div style="--delay: 4s"></div>
						</div>
					</div>
					
					<?php
						}else{
							echo 'Đã hủy';
						}
					?>
				</td>
			</tr>
				<?php
					} 
				?> 
		</table>
	</div>

	<div class="col-xl-12 col-md-12 col-12">
		<p>Chi tiết đơn hàng</p><br>
		<?php
		if(isset($_GET['magiaodich'])){
			$magiaodich = $_GET['magiaodich'];
		}else{
			$magiaodich = '';
		}
		$sql_select = mysqli_query($con,"SELECT * FROM tbl_giaodich,tbl_khachhang,tbl_sanpham WHERE tbl_giaodich.sanpham_id=tbl_sanpham.sanpham_id AND tbl_khachhang.khachhang_id=tbl_giaodich.khachhang_id AND tbl_giaodich.magiaodich='$magiaodich' ORDER BY tbl_giaodich.giaodich_id DESC"); 
		?> 
		<table class="table table-bordered ">
			<tr>
				<th>Thứ tự</th>
				<th>Mã giao dịch</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Ngày đặt</th>
			</tr>
			<?php
				$i = 0;
				while($row_donhang = mysqli_fetch_array($sql_select)){ 
					$i++;
			?> 
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row_donhang['magiaodich']; ?></td>
				<td><?php echo $row_donhang['sanpham_name']; ?></td>
				<td><?php echo $row_donhang['soluong']; ?></td>
				<td><?php echo $row_donhang['ngaythang'] ?></td>
			</tr>
			<?php
				} 
			?> 
		</table>
	</div>
</div>
