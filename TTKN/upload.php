<?php
    session_start();
    include 'config.php';

    if(isset($_POST['songsubmit'])){
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $giasub = $_POST['giasub'];
        $anh = $_POST['anh'];
        
        $sql = "insert into sanpham (masp, tensp, gia, giasub, anh) values('$masp', '$tensp', '$gia','$giasub', '$anh') ";
        $user = mysqli_query($conn, $sql);

        if($user){
            mysqli_close($conn);
            echo "<script language='javascript'>alert('Đã Upload sản phẩm thành công!');";
            echo " location.href='admin.php';</script>";
        }
        else{
            echo "Upload sản phẩm thất bại" . mysqli_error($conn);
        }
    }

?>