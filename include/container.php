<div class="container-fluid">
    <div class="grid wide">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-xs-12 col-12">
                <?php 
                    include('include/menu.php');
                ?>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-8 col-sm-8 col-xs-12 col-12">
                <?php 
                if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }
                    if($tam=='chitietsp'){
                        include('include/chitietsp.php');
                    }elseif ($tam=='timkiem') {
                        include('include/timkiem.php');
                    }elseif($tam=='danhmuc'){
                        include('include/danhmuc.php');
                    }elseif($tam=='giohang') {
                        include('include/giohang.php');
                    }elseif($tam=='xemdonhang') {
                        include('include/donhang.php');
                    }else{
                        include('include/main.php');
                    }
                ?>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 hide-on-mobile-tablet">
                <?php 
                    include('include/carousel.php');
                    include('include/carousel2.php');
                    include('include/contact.php');
                ?>
            </div>
        </div>
    </div>
</div>
                