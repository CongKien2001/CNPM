<?php
    session_start();
    session_destroy();

    echo "<script language='javascript'>alert('Đã đăng xuất! Hãy quay lại vào một ngày gần nhất <3');
    location.href='index.php';";
    echo "</script>";
    
?>