<?php 
    $sql_trang = mysqli_query($con,"SELECT * FROM tbl_sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $trang = ceil($row_count/$sobai);
?>
<ul class="pagination home-product__pagination">
    <li class="pagination-item">
        <a href="" class="pagination-item__link">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
    </li>

    <?php
        for($i=1;$i<=$trang;$i++) {
    ?>

    <li class="pagination-item pagination-item__link-<?php if ($i == $page) { echo "acctive"; } ?> ">
        <a href="?quanly=chitietsp&trang=<?php echo $i ?>" class="pagination-item__link">
            <?php echo $i ?>
        </a>
    </li>

    <?php } ?>
    <li class="pagination-item">
        <a href="" class="pagination-item__link">
            <i class="fa-solid fa-chevron-right"></i>
        </a>
    </li>
</ul>
