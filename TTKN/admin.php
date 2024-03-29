<?php 
    session_start();    
    require("config.php");
    $sql = "select * from sanpham";
    $result=mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    if(!isset($_SESSION["username"])){
        echo "<script language='javascript'>alert('Bạn cần phải đăng nhập!');";
        echo " location.href='index.php';</script>";
    }
    if($_SESSION["level"]!=1){
        header("location: user.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTKN</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="icon" type="image/png" href="https://t4.ftcdn.net/jpg/01/87/36/45/240_F_187364576_YxpCOYDgfAFSCDQhgysfvp4hYZ05qRWE.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="header">
        <div class="header_top">
            <div class="header_right">
                <span class="header_ma">TRANGGGGGGG QUẢN LÝ THÔNG TIN SẢN PHẨM</span>
            </div>
            <div class="header_logo">
                <a class="header_phone">
                    <i class="fas fa-phone">  0123456789</i>
                </a>
                <a class="header_icon header_facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="header_icon header_instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="header_icon header_twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="header_icon header_youtube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <div class="header_logo_img">
            <a href="">
                <img class="header_logo_TTKN" src="./assets/img/logo2.png" alt="">
            </a>
            <div class="header_search">
                <input type="text" class="header_search_input" placeholder="Tìm kiếm điện thoại, laptop...">
                <button class="header_search_icon">
                    <a href=""class="header_search_icon_color"><i class="fas fa-search"></i></a>
                </button>
            </div>
            <div class="header_cart">
                <a style="text-decoration: none" class="header_cart-icon header_home_cart js-upload">
                    <span class="header_cart_text">THÊM SẢN PHẨM </span>
                </a>
                <a class="header_cart_logo header_home_cart">
                    <i class="header_home_cart fas fa-shopping-cart"></i>
                </a>
            </div>
            <div class="header_login">
                <button class="header_login_text js-dangnhap js-logout">ĐĂNG XUẤT</button>
            </div>
            <h2 class="user-name"><?php   echo $_SESSION["username"]?> <i class="fas fa-caret-down"></i></h2>

        </div>

        <div class="header_home">
            <a style="text-decoration: none" id="home" class="header_home_text">
                <span>TRANG CHỦ</span>
            </a>
            <a style="text-decoration: none" id="phone" class="header_home_text">
                <span>ĐIỆN THOẠI</span>
            </a>
            <a style="text-decoration: none" id="tablet" class="header_home_text">
                <span>MÁY TÍNH BẢNG</span>
            </a>
            <a style="text-decoration: none" id="phukien" class="header_home_text">
                <span>PHỤ KIỆN</span>
            </a>
            <a style="text-decoration: none" id="oldphone" class="header_home_text">
                <span>MÁY CŨ GIÁ RẺ</span>
            </a>
            <a style="text-decoration: none" id="contact" class="header_home_text">
                <span>LIÊN HỆ</span>
            </a>
        </div>
    </div>

    <div class="content">
        <div class="content_home">
            <div class="content_img">
                <a href="" class="content_down">
                    <i class="fas fa-chevron-down bg-down"></i>
                </a>
            </div>
            <div class="content_heading">
                <span class="content_sinhnhat">SIÊU SALE CHÚC MỪNG SINH NHẬT</span>
                <span class="content_apple">Apple Watch Series 5</span>
                <span class="content_sale">Giảm ngay 1 triệu động từ 15/9-31/9</span>
                <div class="content_xemngay">
                    <button class="btn_xemngay">
                        Xem Ngay
                        <i class="fas fa-chevron-right"></i>                                                
                    </button>
                </div>
            </div>

            <!--  -->
            <div class="content_img_body">
                <div class="content_img_1">
                    <div class="content_bgr">
                    </div>
                    <div class="content_img_heading">
                        <span>ĐIỆN THOẠI</span>
                        <span>Giảm giá 50%</span>
                    </div>
                </div>
                <!--  -->
                <div class="content_img_2">
                    <div class="content_bgr">
                    </div>
                    <div class="content_img_heading">
                        <span>MÁY TÍNH BẢNG</span>
                        <span>Giảm giá 10%</span>
                    </div>
                </div>
                <!--  -->
                <div class="content_img_3">
                    <div class="content_bgr">
                    </div>
                    <div class="content_img_heading">
                        <span>TAI NGHE</span>
                        <span>Giảm giá 20%</span>
                    </div>
                </div>
            </div>
            <!--------------------------------->
            <div class="content_sanpham">
                <div class="content_sanphamhot">
                    <hr>
                    <span>SẢN PHẨM NỔI BẬT</span>
                    <hr>
                </div>
                <!-- iphone -->
                <div class="content_phone_main">
                 
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>

                        <div class="content_phone_items">
                            <div class="content_phone_selling_img">
                                <a class="img" href="">
                                    <img class="content_phone_img" src="<?php echo './assets/img/' .  $row["anh"]?>" alt="">
                                </a>

                                <div class="content_phone_btn">
                                    <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                                </div>
                            </div>
                            <div class="content_phone_info">
                                <div class="content_phone_name">
                                    <span><?php   echo $row["tensp"]?></span>
                                </div>
                                <div class="content_phone_price">
                                    <div class="content_phone_price_old">
                                        <?php   echo $row["giasub"]?>
                                        <sup>đ</sup>
                                    </div>
                                    <div class="content_phone_price_now">
                                        <?php   echo $row["gia"]?>
                                        <sup>đ</sup>
                                    </div>
                                </div>
                                <div class="content_phone_cart">
                                    <a class="content_phone_cart_btn">
                                        <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                        mysqli_close($conn);
                    ?>
                </div>
                
            </div>
            <!-- --------giamgia------------ -->
            <div class="content_giamgia">
                <div class="content_giamgiasoc">
                    <hr>
                    <span>GIẢM GIÁ SỐC</span>
                    <hr>
                </div>
                <!-- -------- -->
                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/table-ipad1.jpg" alt="">
                            </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                            Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 512GB (2021)
                                        </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    42,990,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    41,990,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/table-ipad4.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                        Máy tính bảng iPad Air 4 Wifi 256GB (2020)
                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    23,990,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    22,990,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/table-lenovo1.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                        Máy tính bảng Lenovo Tab P11 Plus
                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    9,990,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    8,990,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/table-ipad2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                        Máy tính bảng iPad mini 6 WiFi Cellular 256GB
                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    25,990,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    24,990,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ==============giao hàng toàn quốc========= -->
            <div class="content_chinhsach">
                <div class="content_baohanh">
                    <div class="content_baohanh_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="content_giaohang">
                        <span>Giao hàng toàn quốc</span>
                    </div>
                    <div class="content_giaohangCOD">
                        <span>Ship COD toàn quốc. Nhận hàng trong vòng 2 đén 3 ngày.</span>
                    </div>
                </div>

                <div class="content_chinhsach">
                    <div class="content_baohanh">
                        <div class="content_baohanh_icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <div class="content_giaohang">
                            <span>Giao hàng toàn quốc</span>
                        </div>
                        <div class="content_giaohangCOD">
                            <span>Ship COD toàn quốc. Nhận hàng trong vòng 2 đén 3 ngày.</span>
                        </div>
                    </div>
                </div>

                <div class="content_chinhsach">
                    <div class="content_baohanh">
                        <div class="content_baohanh_icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="content_giaohang">
                            <span>Giao hàng toàn quốc</span>
                        </div>
                        <div class="content_giaohangCOD">
                            <span>Ship COD toàn quốc. Nhận hàng trong vòng 2 đén 3 ngày.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bản quyền  -->
            <div class="content_footer_background">
                <div class="content_footer_contenner">
                    <div class="footer">
                        <div class="footer-1">
                            <div class="footer_items">
                                <div class="col">
                                    <span class="footer_title">                                   
                                            TTKN
                                            <hr>
                                        </span>
                                    <div class="footer_gioithieu">
                                        TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="footer-1">
                            <div class="footer_items">
                                <div class="col">
                                    <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                        <hr>
                                    </span>
                                    <div class="footer_combo">
                                        <div class="footer_combo_box">
                                            <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                            <div class="footer_combo_heading">
                                                <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                                <div class="footer_combo_money">25,990,000đ</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer_combo">
                                        <div class="footer_combo_box">
                                            <img src="./assets/img/iphone2.jpg" alt="">
                                            <div class="footer_combo_heading">
                                                <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                                <div class="footer_combo_money">34,990,000đ</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer_combo">
                                        <div class="footer_combo_box">
                                            <img src="./assets/img/oppo3.jpg" alt="">
                                            <div class="footer_combo_heading">
                                                <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                                <div class="footer_combo_money">18,990,000đ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="footer-1">
                            <div class="footer_items">
                                <div class="col">
                                    <span class="footer_title">                                   
                                            THÔNG TIN VÀ HƯỚNG DẪN
                                            <hr>
                                        </span>
                                    <div class="footer_info">Giao hàng và thanh toán</div>
                                    <div class="footer_info">Chế độ bảo hành</div>
                                    <div class="footer_info">Nhận hàng và đổi trả</div>
                                    <div class="footer_info">Đập hộp và nhận quà</div>
                                    <div class="footer_infoo">Chính sách bảo mật</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer-1">
                            <div class="footer_items">
                                <div class="col">
                                    <span class="footer_title">                                   
                                           ĐỊA CHỈ CỬA HÀNG
                                            <hr>
                                    </span>
                                    <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                    <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                    <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                    <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content_footer_heading">
                    <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
                </div>
            </div>
        </div>
    </div>
    <!-- =================================================== -->
    <div class="content_phone">
        <div class="content_tablet-header">
            <div class="shop-big-img" style="background-image: url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow1.png),url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow2.png);">
                <div class="content_tablet-content">
                    <div class="content_tablet-content-box">
                        <div class="content_tablet-content-header">
                            <span>Sale Sập Sàn</span>
                        </div>
                        <div class="content_tablet-content-main">
                            <span>BLACK FRIDAY</span>
                        </div>
                        <div class="content_tablet-content-end">
                            <span>OFF 20% TOÀN BỘ CỬA HÀNG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_tablet-body">
            <div class="grid wide">
                <div class="row">
                    <div class="col danhmuc shop_danhmuc">
                        <div class="shop_danhmuc-header">
                            <span>ĐIỆN THOẠI</span>
                        </div>

                        <div class="shop_NSX-header">
                            <span class="shop_NSX-title">HÃNG SẢN XUẤT
                                </span>
                            <div class="shop_NSX-item-box">
                                <div class="shop_NSX-list">
                                    <a style="text-decoration: none" id="IP" class="shop_NSX-a">
                                        <span>IPhone</span>
                                    </a>
                                    <a style="text-decoration: none" id="SA" class="shop_NSX-a">
                                        <span>SAMSUNG</span>
                                    </a>
                                    <a style="text-decoration: none" id="VI" class="shop_NSX-a">
                                        <span>ViVo</span>
                                    </a>
                                    <a style="text-decoration: none" id="XI" class="shop_NSX-a">
                                        <span>Xiaomi</span>
                                    </a>
                                    <a style="text-decoration: none" id="OP" class="shop_NSX-a">
                                        <span>OPPO</span>
                                    </a>
                                    <a style="text-decoration: none" id="RE" class="shop_NSX-a">
                                        <span>Realme</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop_introducing">
                            <iframe width="230" src="https://www.youtube.com/embed/MMdQ-gWBNZE" title="YouTube video player" frameborder="0" allow="accelerometer;
                                autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                        </div>
                    </div>
                    <div class="col sanpham shop_sanpham">
                        <div class="shop_sanpham-title">
                            <span class="shop_sampham-list">Hiển thị 1 - 6 của 12 kết quả</span>
                            <select name="" id="" class="shop_tongsanpham">
                                    <option value="">Mới nhất</option>
                                    <option value="">Thứ tự mặc định</option>
                                    <option value="">Thứ tự mức độ phổ biến</option>
                                    <option value="">Thứ tự theo điểm giá</option>
                                    <option value="">Thứ tự theo giá: Thấp đến cao</option>
                                    <option value="">Thứ tự theo giá: Cao đến thấp</option>
                                </select>

                            <div class="row">
                                <div class="col dt product_selling-item Samsung">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/samsung4.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại Samsung Galaxy Ultra 5G 128Gb</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                26,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                25,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item Iphone">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/iphone2.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                34,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                33,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item Vivo">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/vivo1.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại Vivo Y21</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                4,500,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                4,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item Oppo">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/oppo2.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại OPPO A74</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                6,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                6,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item Oppo">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/oppo3.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                18,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                18,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item Realme">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/realme1.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Điện thoại Realme C11 (2021)</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                3,300,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                2,900,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                       ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------->
    <div class="content_tablet">
        <div class="content_tablet-header">
            <div class="shop-big-img" style="background-image: url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow1.png),url(https://tonycongmmo.com/wp-content/themes/flatsome/assets/img/effects/snow2.png);">
                <div class="content_tablet-content">
                    <div class="content_tablet-content-box">
                        <div class="content_tablet-content-header">
                            <span>Sale Sập Sàn</span>
                        </div>
                        <div class="content_tablet-content-main">
                            <span>BLACK FRIDAY</span>
                        </div>
                        <div class="content_tablet-content-end">
                            <span>OFF 20% TOÀN BỘ CỬA HÀNG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_tablet-body">
            <div class="grid wide">
                <div class="row">
                    <div class="col danhmuc shop_danhmuc">
                        <div class="shop_danhmuc-header">
                            <span>ĐIỆN THOẠI</span>
                        </div>

                        <div class="shop_NSX-header">
                            <span class="shop_NSX-title">HÃNG SẢN XUẤT
                                </span>
                            <div class="shop_NSX-item-box">
                                <div class="shop_NSX-list">
                                    <a href="" class="shop_NSX-a">
                                        <span>IPad</span>
                                        <a href="" class="shop_NSX-a">
                                            <span>SAMSUNG</span>
                                            <a href="" class="shop_NSX-a">
                                                <span>Lenovo</span>
                                            </a>
                                            <a href="" class="shop_NSX-a">
                                                <span>Huawei</span>
                                            </a>
                                </div>
                            </div>
                        </div>
                        <div class="shop_introducing">
                            <iframe width="230" src="https://www.youtube.com/embed/MMdQ-gWBNZE" title="YouTube video player" frameborder="0" allow="accelerometer;
                                autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                        </div>
                    </div>
                    <div class="col sanpham shop_sanpham">
                        <div class="shop_sanpham-title">
                            <span class="shop_sampham-list">Hiển thị 1 - 6 của 12 kết quả</span>
                            <select name="" id="" class="shop_tongsanpham">
                                    <option value="">Mới nhất</option>
                                    <option value="">Thứ tự mặc định</option>
                                    <option value="">Thứ tự mức độ phổ biến</option>
                                    <option value="">Thứ tự theo điểm giá</option>
                                    <option value="">Thứ tự theo giá: Thấp đến cao</option>
                                    <option value="">Thứ tự theo giá: Cao đến thấp</option>
                                </select>

                            <div class="row">
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-lenovo1.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng Lenovo Tab P11 Plus</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                9,200,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                8,200,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-ipad4.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng iPad Air 4 Wifi 256GB (2020)</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                22,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                22,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-ipad3.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng iPad Pro 12.9 inch Wifi 128GB (2020)</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                27,700,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                26,600,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-ipad2.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng iPad mini 6 WiFi Cellular 256GB
                                                </span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                25,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                24,000,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-ipad1.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 512GB (2021)</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                42,999,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                41,900,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!----->
                                <div class="col dt product_selling-item">
                                    <div class="product_selling-box">
                                        <a href="">
                                            <img src="./assets/img/table-huawei2.jpg" alt="">
                                        </a>
                                        <div class="btn product_selling-btn">
                                            QUICK VIEW
                                        </div>
                                    </div>
                                    <div class="product_selling-info">
                                        <div class="product_selling-name">
                                            <span>Máy tính bảng Huawei MatePad T10</span>
                                        </div>
                                        <div class="product_selling-price">
                                            <div class="produc_selling-old">
                                                5,399,000 <sup>đ</sup>
                                            </div>
                                            <div class="produc_selling-now">
                                                4,900,000 <sup>đ</sup>
                                            </div>
                                        </div>
                                        <div class="btn_add">
                                            <a href="" class="shop_NSX-a link_add-cart">
                                                <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                       ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>
    </div>

    <!------------------------------------->
    <div class="content_phukien">
        <div class="shop-big-img" style="background-image: url(https://ezcomclass.com/wp-content/uploads/2020/06/image-0-compressed-16-300x225.jpg);">
        </div>
        <div class="content_phukien_box">
            <div class="content_phukien_header">
                <span class="content_phukien_title">
                        PHỤ KIỆN NỔI BẬT
                    </span>
                <div class="content_phukien_main">
                    <div class="content_phukien_items">
                        <a href="">
                            <div class="content_phukien_items_img">
                                <img src="https://cdn.tgdd.vn/Category/57/5-Pinsa%CC%A3cdu%CC%9B%CC%A3pho%CC%80ng-120x120.png" alt="">
                            </div>
                        </a>
                        <div class="content_header_items_des">
                            Sạc dự phòng
                        </div>
                    </div>

                    <div class="content_phukien_items">
                        <a href="">
                            <div class="content_phukien_items_img1">
                                <img src="https://cdn.tgdd.vn/Category/54/21-Tainghe-120x120.png" alt="">
                            </div>
                        </a>
                        <div class="content_header_items_des">
                            Tai nghe
                        </div>
                    </div>

                    <div class="content_phukien_items">
                        <a href="">
                            <div class="content_phukien_items_img2">
                                <img src="https://cdn.tgdd.vn/Category/2162/22-Loa2-120x120.png" alt=""> </div>
                        </a>
                        <div class="content_header_items_des">
                            Loa
                        </div>
                    </div>

                    <div class="content_phukien_items">
                        <a href="">
                            <div class="content_phukien_items_img3">
                                <img src="https://cdn.tgdd.vn/Category/4727/16-Thie%CC%82%CC%81tbi%CC%A3ma%CC%A3ng-120x120.png" alt=""> </div>
                        </a>
                        <div class="content_header_items_des">
                            Thiết bị mạng
                        </div>
                    </div>

                    <div class="content_phukien_items">
                        <a href="">
                            <div class="content_phukien_items_img4">
                                <img src="https://cdn.tgdd.vn/Category/86/13-Chuo%CC%A3%CC%82tma%CC%81yti%CC%81nh-120x120.png" alt=""> </div>
                        </a>
                        <div class="content_header_items_des">
                            Chuột, bàn phím
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================ -->
        <div class="content_phukien_body">
            <div class="content_sacduphong">
                <div class="content_sacduphong_img">
                    <img src="https://cdn.tgdd.vn/2021/10/banner/pinsac-1200x150.png" alt="">
                </div>

                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img src="./assets/img/sac1.jpg" alt=""> </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Polymer 10.000 mAh Type C Energizer UE10054BK                                        </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    520,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    495,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/sac2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Polymer 10.000 mAh Hydrus PA CK01                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    324,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    204,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/sac3.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Polymer 10.000 mAh Type C Xmobile PJ JP190ST                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    495,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    455,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/sac4.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Polymer 10.000 mAh Type C QC3.0 eValu PA F1 Air                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    550,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    450,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content_phukien_body">
            <div class="content_sacduphong">
                <div class="content_sacduphong_img">
                    <img src="https://cdn.tgdd.vn/2021/10/banner/taignhe-1200x150.png" alt=""> </div>

                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img src="./assets/img/tai-nghe1.jpg" alt=""> </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Tai nghe Bluetooth AirPods Pro                                  </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    4,520,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    3,495,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/tai-nghe2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Tai nghe Bluetooth AirPods 2 Apple MV7N2                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    3,324,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    2,204,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/tai-nghe3.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Tai nghe Bluetooth True Wireless Soundpeats Q                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    795,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    655,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/tai-nghe4.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Tai nghe Bluetooth True Wireless Hydrus TS12BC                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    450,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    350,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content_phukien_body">
            <div class="content_sacduphong">
                <div class="content_sacduphong_img">
                    <img src="https://cdn.tgdd.vn/2021/10/banner/loa-1200x150.png" alt=""> </div>

                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img src="./assets/img/loa1.jpg" alt=""> </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Loa Bluetooth MozardX BM01      </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    1,120,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    995,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/loa2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Loa Bluetooth JBL Charge 4                                   </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    3,324,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    2,204,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/loa3.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Loa Bluetooth Harman Kardon Onyx Studio 6                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    4,495,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    3,455,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/loa4.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Loa Bluetooth JBL Go 3                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    1,000,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    950,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content_phukien_body">
            <div class="content_sacduphong">
                <div class="content_sacduphong_img">
                    <img src="https://cdn.tgdd.vn/2021/10/banner/mang-1200x150.png" alt=""> </div>

                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img src="./assets/img/mang1.jpg" alt=""> </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Router Chuẩn Wifi 6 Băng Tần Kép Asus AX55 Đen                                        </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    2,520,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    1,495,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/mang2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Router Wifi Chuẩn Wifi 6 AX1500 TP-Link Archer                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    1.324,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    1,204,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/mang3.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Router Wifi Chuẩn Wifi 6 Linksys E7350AH Đen                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    2,495,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    2,155,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/mang4.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Router Wifi Chuẩn AC1200 Totolink A720R Đen                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    550,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    450,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content_phukien_body">
            <div class="content_sacduphong">
                <div class="content_sacduphong_img">
                    <img src="https://cdn.tgdd.vn/2021/10/banner/gaming-1200x150-1.png" alt=""> </div>

                <div class="content_phone_main">
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img src="./assets/img/chuot1.jpg" alt=""> </a>
                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Chuột Có Dây Gaming Razer DeathAdder V2                                        </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    2,520,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    1,495,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -------samsung----- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/banphim1.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Bàn Phím Cơ Có Dây Gaming Razer BlackWidow V3                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    3,724,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    3,204,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- ---------------tablehuawei------------------ -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/chuot2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Chuột không dây Gaming Corsair Iron Claw RGB Đen                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    2,195,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    1,455,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- -----------ipad-------------- -->
                    <div class="content_phone_items">
                        <div class="content_phone_selling_img">
                            <a class="img" href="">
                                <img class="content_phone_img" src="./assets/img/banphim2.jpg" alt="">
                            </a>

                            <div class="content_phone_btn">
                                <div class="btn content_phone_btn" name="content_phone_btn">QUICK VIEW</div>
                            </div>
                        </div>
                        <div class="content_phone_info">
                            <div class="content_phone_name">
                                <span>
                                    Bàn Phím Cơ Có Dây Gaming Razer BlackWidow                                    </span>
                            </div>
                            <div class="content_phone_price">
                                <div class="content_phone_price_old">
                                    3,350,000
                                    <sup>đ</sup>
                                </div>
                                <div class="content_phone_price_now">
                                    3,150,000
                                    <sup>đ</sup>
                                </div>
                            </div>
                            <div class="content_phone_cart">
                                <a class="content_phone_cart_btn">
                                    <span class="content_phone_cart_btn_add btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ===================================================================== -->
        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                       ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>
    </div>

    <!-------------------->
    <div class="content_oldphone">

        <div class="content_oldphone-box">
            <div class="grid wide">
                <div class="content_oldphone-title">
                    <span>MÁY CŨ NỔI BẬT</span>
                </div>
                <div class="row">
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu1.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>iPhone XS Max 64GB Cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    25,400,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    15,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu2.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>iPhone 8 Plus 64GB cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    15,999,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    8,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu3.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>iPhone 11 Pro Max 64GB Cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    21,500,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    16,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu4.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>Điện Thoại iPhone 6S Plus 32GB cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    6,999,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    3,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/watch1.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>Apple Watch Series 5</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    5,999,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    3,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu5.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>Máy Tính Bảng iPad 9.7 – 4G – 32GB (2018) cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    7,300,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    5,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu6.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>Macbook Pro 2019 cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    24,999,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    20,000,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!----->
                    <div class="col ddt product_selling-item">
                        <div class="product_selling-box">
                            <a href="">
                                <img src="./assets/img/maycu7.jpg" alt="">
                            </a>
                            <div class="btn product_selling-btn">
                                QUICK VIEW
                            </div>
                        </div>
                        <div class="product_selling-info">
                            <div class="product_selling-name">
                                <span>Loa Sony SRS-XB43 Extra Bass cũ</span>
                            </div>
                            <div class="product_selling-price">
                                <div class="produc_selling-old">
                                    3,300,000 <sup>đ</sup>
                                </div>
                                <div class="produc_selling-now">
                                    2,200,000 <sup>đ</sup>
                                </div>
                            </div>
                            <div class="btn_add">
                                <a href="" class="shop_NSX-a link_add-cart">
                                    <span class="btn_add-cart">THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                       ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>


    </div>

    <!------------------------------------->
    <div class="content_contact">
        <div class="lienhe_body">
            <div class="lienhe_top-box">
                <div class="lienhe_top">
                    <div class="lienhe_connect">
                        <div class="lienhe_connect-title">
                            <span>Hãy Kết Nối Với Chúng Tôi</span>
                        </div>
                        <div class="lienhe_connect-icon-box">
                            <div class="lienhe_connect-icon lienheFB">
                                <a href="" class="shop_NSX-a">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="lienhe_connect-icon lienheIT">
                                <a href="" class="shop_NSX-a">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="lienhe_connect-icon lienheTW">
                                <a href="" class="shop_NSX-a">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="lienhe_connect-icon lienhePH">
                                <a href="" class="shop_NSX-a">
                                    <i class="fas fa-phone"></i>
                                </a>
                            </div>
                            <div class="lienhe_connect-icon lienheYT">
                                <a href="" class="shop_NSX-a">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lienhe_mix">
                <div class="lienhe_mix-items">
                    <div class="lienhe_mix-img">
                        <img src="./assets/img/lienhe-mid1.jpg" alt="">
                    </div>
                    <div class="lienhe_mix-city">
                        <span>Hà Nội</span>
                    </div>
                    <div class="lienhe_mix-street">
                        <span>Số 121 đường Cầu Giấy</span>
                    </div>
                    <div class="lienhe_mix-district">
                        <span>Quận Cầu Giấy, Thành Phố Hà Nội</span>
                    </div>
                    <div class="lienhe_mix-phone">
                        <span>SĐT: 0123456789</span>
                    </div>
                    <div class="lienhe_mix-email">
                        <span>Email: minhnhan04102001@gmail.com</span>
                    </div>
                </div>
                <div class="lienhe_mix-items">
                    <div class="lienhe_mix-img">
                        <img src="./assets/img/lienhe-mid2.jpg" alt="">
                    </div>
                    <div class="lienhe_mix-city">
                        <span>Hồ Chí Minh</span>
                    </div>
                    <div class="lienhe_mix-street">
                        <span>6A3, Phạm Ngũ Lão</span>
                    </div>
                    <div class="lienhe_mix-district">
                        <span>Quận 1, Thành phố Hồ Chí Minh</span>
                    </div>
                    <div class="lienhe_mix-phone">
                        <span>SĐT: 1234567890</span>
                    </div>
                    <div class="lienhe_mix-email">
                        <span>Email: minhnhan04102001@gmail.com</span>
                    </div>
                </div>
            </div>
            <!-- <div class="lienhe_bottom-box">
                        <div class="lienhe_bottom">
                            <div class="lienhe_bottom-title">
                                <hr class="lienhe_hr">
                                <span>
                                    Vị Trí Cửa Hàng Trên Bản Đồ
                                </span>
                                <hr class="lienhe_hr">
                            </div>
                            <div class="lienhe_map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8858.70173270601…YyBCw6FjaCBraG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1635151693471!5m2!1svi!2s"
                                 style="border:0;" allowfullscreen loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div> -->
        </div>

        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                       ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>

    </div>

    <!------------------------------------->
    <div class="content_giohang">
        <div class="content_giohang-box">
            <div class="grid wide">
                <div class="lienhe_bottom-box">
                    <div class="lienhe_bottom">
                        <div class="lienhe_bottom-title">
                            <hr class="lienhe_hr">
                            <span>
                                GIỎ HÀNG CỦA BẠN
                            </span>
                            <hr class="lienhe_hr">
                        </div>

                    </div>
                </div>

                <div class="cart_main">
                    <div class="row">
                        <div class="col dii dtt cart_pc" style="position: relative;">
                            <form action="" method="post">
                                <table class="cart_table">
                                    <tbody>
                                        <tr>
                                            <div class="">
                                                <th class="cart_product">SẢN PHẨM</th>
                                                <th class="cart_price">GIÁ</th>
                                                <th>SỐ LƯỢNG</th>
                                                <th>TẠM TÍNH</th>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="cart_product_foot">
                                    <a href="" class="shop_NSX-b">
                                        <div class="continue_view">
                                            <i class="fas fa-long-arrow-alt-left"></i>
                                            <span>TIẾP TỤC XEM SẢN PHẨM</span>
                                        </div>
                                    </a>
                                    <button type="submit" class="update_cart opacity">
                                        <span style="padding-top: 3px;font-size:13px;">CẬP NHẬT GIỎ HÀNG</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- CART_MOBILE -->
                        <!-- <div class="col dtt cart_mobile" style="position: relative;">
                            <form action="" method="post">
                                <div class="cart_table">
                                        <div class="cart_table_header">  
                                            <span class="">SẢN PHẨM</span>
                                            <span>SỐ LƯỢNG</span>
                                        </div>
                                </div>
                                <div class="cart_product_foot">
                                    <a href="" class="shop_NSX-b">
                                        <div class="continue_view">
                                            <i class="fas fa-long-arrow-alt-left"></i>
                                            <span>TIẾP TỤC XEM SẢN PHẨM</span>
                                        </div>
                                    </a>
                                    <button type="submit" class="update_cart update_cart2 opacity">
                                        <span style="padding-top: 3px;font-size:13px;">CẬP NHẬT GIỎ HÀNG</span>
                                    </button>
                                </div> 
                            </form>
                        </div> -->
                        <div class="col dt dtt cart_right">
                            <div class="cart_right-header">
                                <span>CỘNG GIỎ HÀNG</span>
                            </div>
                            <div class="tam-tinh">
                                <span>Tạm tính</span>
                            </div>
                            <div class="giao-hang">
                                <div class="giao-hang-title flex">
                                    <span> Phí giao hàng</span>
                                </div>
                                <div class="giao-hang-main">
                                    <div class="phi-giao-hang"><span style="padding-top: 4px;padding-right:6px">Đồng giá:</span> <span style="font-weight: 600;">20.000<sup>đ</sup></span></div>
                                </div>
                            </div>
                            <div class="phieu-uu-dai">
                                <i class="fas fa-tag"></i>
                                <span style="font-weight: 600;font-size:17px;">Phiếu ưu đãi</span>
                            </div>
                            <div class="ma-uu-dai">
                                <input type="text" placeholder="Mã ưu đãi">
                                <button type="submit">Áp dụng</button>
                            </div>
                            <div class="total_money">
                                <div class="total_money-title">
                                    <span>Tổng tiền:</span>
                                </div>
                            </div>
                            <a href="" class="shop_NSX-a ">
                                <div class="thanh-toan">
                                    <span>TIẾN HÀNH THANH TOÁN</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content_footer_background">
            <div class="content_footer_contenner">
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        TTKN
                                        <hr>
                                    </span>
                                <div class="footer_gioithieu">
                                    TTKN là công ty con của tập đoàn TTKN GROUP, đứng đầu trong chuỗi cửa hàng bán lẻ lớn nhất Việt Nam. TTKN sẽ mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">SẢN PHẨM ĐÁNH GIÁ CAO
                                    <hr>
                                </span>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="https://github.com/CongKien2001/CNPM/blob/main/TTKN/assets/img/samsung4.jpg?raw=true" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại Samsung Galaxy S21 Ultra 5G 128GB</span>
                                            <div class="footer_combo_money">25,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/iphone2.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại iPhone 13 Pro Max 128GB</span>
                                            <div class="footer_combo_money">34,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer_combo">
                                    <div class="footer_combo_box">
                                        <img src="./assets/img/oppo3.jpg" alt="">
                                        <div class="footer_combo_heading">
                                            <span>Điện thoại OPPO Reno6 Pro 5G</span>
                                            <div class="footer_combo_money">18,990,000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                        THÔNG TIN VÀ HƯỚNG DẪN
                                        <hr>
                                    </span>
                                <div class="footer_info">Giao hàng và thanh toán</div>
                                <div class="footer_info">Chế độ bảo hành</div>
                                <div class="footer_info">Nhận hàng và đổi trả</div>
                                <div class="footer_info">Đập hộp và nhận quà</div>
                                <div class="footer_infoo">Chính sách bảo mật</div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer-1">
                        <div class="footer_items">
                            <div class="col">
                                <span class="footer_title">                                   
                                    ĐỊA CHỈ CỬA HÀNG
                                        <hr>
                                </span>
                                <div class="footer_address">Số 207a, Trần Duy Hưng</div>
                                <div class="footer_address">Số 108, Trần Hưng Đạo</div>
                                <div class="footer_address">Số 201, Phạm Ngũ Lão, Quận 1</div>
                                <div class="footer_address">Số 04, Nguyễn Huệ, Quận 1</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_footer_heading">
                <span>Copyright 2021 © Bản quyến thuộc về tập đoàn TTKN GROUP</span>
            </div>
        </div>

    </div>

    <div class="modal-register">
        <div class="loginmain">
            <div class="logincontent">
                <h2 class="loginheading center">Đăng ký tài khoản</h2>
                <p class="loginheading-sub center">Cùng nhau tận hưởng công nghệ
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="register.php" method="POST" class="input">
                    <div class="loginrow">
                        <p>Nhập tên</p>
                        <input type="text" name="username" required placeholder="VD: Dream Team">
                    </div>
                    <div class="loginrow">
                        <p>Email</p>
                        <input type="email" name="email" required placeholder="VD: onedream@gmail.com">
                    </div>
                    <div class="loginrow">
                        <p>Mật khẩu</p>
                        <input type="password" name="password" required placeholder="Nhập mật khẩu">
                    </div>
                    <div class="loginrow">
                        <p>Nhập lại mật khẩu</p>
                        <input type="password" name="repassword" required placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="loginrow">
                        <input type="submit" name="signin" value="Đăng ký" class="loginbton">
                    </div>

                </form>
            </div>
        </div>

    </div>

    <div class="modal-login">
        <div class="loginmain js-loginMain">
            <div class="logincontent">
                <h2 class="loginheading center">Đăng nhập tài khoản</h2>
                <p class="loginheading-sub center">Cùng nhau tận hưởng công nghệ
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="login.php" method="POST" class="input">
                    <div class="loginrow ">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="username" required placeholder="VD: Dream Team">
                    </div>
                    <div class="loginrow padding-top-20">
                        <p>Mật khẩu</p>
                        <input type="password" name="password" required placeholder="Nhập mật khẩu">
                    </div>
                    <div class="loginrow padding-top-20">
                        <input type="submit" name="submit" value="Đăng nhập" class="loginbton">
                        <a href="#">Quên mật khẩu</a>
                    </div>
                    <div class="loginrow">
                        <button class="loginbtnton js-dangky" name="btnDangKy">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal-logout">
        <div class="logout">
            <div class="logincontent">
                <h2 class="loginheading center">Đăng xuất</h2>
                <p class="songheading-sub center">Cùng nhau tận hưởng công nghệ
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="logout.php" method="POST" class="input">

                    <div class="loginrow padding-top-20">
                        <input type="submit" name="submit" value="Đăng xuất" class="loginbton">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal-upload">
        <div class="songmain">
            <div class="songcontent">
                <h2 class="songheading center">Thêm sản phẩm</h2>
                <p class="songheading-sub center">Cùng nhau tận hưởng công nghệ
                    <i class="fa fa-heartbeat"></i>
                </p>
                <form action="upload.php" method="POST" class="input">
                    <div class="songrow">
                        <p>Mã sản phẩm</p>
                        <input type="text" name="masp" required placeholder="VD: IP12">
                    </div>
                    <div class="songrow">
                        <p>Tên sản phẩm</p>
                        <input type="text" name="tensp" required placeholder="VD: IPhone 12 Mini">
                    </div>
                    <div class="songrow">
                        <p>Giá</p>
                        <input type="text" name="gia" required placeholder="32.000.000">
                    </div>
                    <div class="songrow">
                        <p>Giá Sub</p>
                        <input type="text" name="giasub" required placeholder="33.000.000">
                    </div>
                    <div class="songrow">
                        <p>Ảnh</p>
                        <input type="file" name="anh" required placeholder="Nhập link nhạc(mp3)">
                    </div>
                    <div class="songrow songsubmit">
                        <input type="submit" name="songsubmit" value="Upload" class="songbton">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/logout.js"></script>
    <script>
        // upload 
        const tbnUpload = document.querySelector('.js-upload');
        const modalUpload = document.querySelector('.modal-upload');
        const SongMain = document.querySelector('.songmain');

        function showUpload() {
            modalUpload.classList.add('open');
        }

        function hideUpload() {
            modalUpload.classList.remove('open');
        }

        tbnUpload.addEventListener('click', showUpload);

        modalUpload.addEventListener('click', hideUpload);

        SongMain.addEventListener('click', function(event) {
            event.stopPropagation();
        })
    </script>

    
    <script src="./assets/js/main.js"></script>

</body>

</html>