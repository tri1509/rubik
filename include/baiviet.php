<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = '';
    }

    if ($id=='1'){
        include('bv1.html');
    }elseif($id=='2'){
        include('bv2.html');
    }elseif($id=='3'){
        include('bv3.html');
    }elseif($id=='4'){
        include('bv4.html');
    }elseif($id=='5'){
        include('bv5.html');
    }else{
        include('include/tatcasp.php');
    }
?>