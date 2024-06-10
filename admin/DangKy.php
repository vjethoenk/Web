<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Web.css" />
    <title>Teelab</title>
</head>

<body>
    <form action="" method="post">
        <div class="main">
            <div class="header">
                <div class="header-logo">
                    <a href="#"><img
                            src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1710226595388" /></a>
                </div>
                <div class="header-menu">
                    <ul>
                        <li><a href="Web.html" class="header-menu-item">TRANG CHỦ</a></li>
                        <li>
                            <a href="#" class="header-menu-item">SẢN PHẨM</a>
                            <div class="header-menu-procduct">
                                <div class="header-menu-procduct-type">
                                    <ul>
                                        <li>
                                            <a href="">ÁO</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Áo sơ mi</a></li>
                                                <li><a href="">Áo phông</a></li>
                                                <li><a href="">Áo polo</a></li>
                                                <li><a href="">Áo hoodie</a></li>
                                                <li><a href="">Áo sweater</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">QUẦN</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Quần jogger</a></li>
                                                <li><a href="">Quần jean</a></li>
                                                <li><a href="">Quần short</a></li>
                                                <li><a href="">Quần cargo</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">ÁO KHOÁC</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Áo phao</a></li>
                                                <li><a href="">Áo cadigan</a></li>
                                                <li><a href="">Áo bomber</a></li>
                                                <li><a href="">Áo gió</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">PHỤ KIỆN</a>
                                            <ul class="header-menu-procduct-type-item">
                                                <li><a href="">Túi hộp</a></li>
                                                <li><a href="">Khẩu trang</a></li>
                                                <li><a href="">Balo</a></li>
                                                <li><a href="">Mũ</a></li>
                                                <li><a href="">Tất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-menu-procduct-img">
                                    <div class="header-menu-procduct-img-bar"></div>
                                    <img
                                        src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/365453628_832764981752126_6364933266422488966_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFkAiIl97rpwvRN0jtwAaCdK1IBT97ZrtErUgFP3tmu0fckDJoWxNOQOPLFIGOGc7h2oRnNLrgxNBpfwIhdLV16&_nc_ohc=EBcn4ogFnNcQ7kNvgH0GvKq&_nc_ht=scontent.fhan14-1.fna&oh=00_AYAi9tZ_5jOIuvpB6zTZdq-oLf765vNS11JlOb9Xv2cJtQ&oe=66570453" />
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="header-menu-item">ĐỔI TRẢ</a></li>
                        <li><a href="#" class="header-menu-item">BẢNG SIZE</a></li>
                    </ul>
                </div>
                <div class="header-tool">
                    <div class="header-tool-search">
                        <input type="text" placeholder="Tìm kiếm" />
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-search_f3577f42c6314038a0636c20100bd8d9.svg" /></a>
                    </div>
                    <div class="header-tool-cart">
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-cart_d075fce117f74a07ae7f149d8943fc33.svg" /></a>
                    </div>
                    <div class="header-tool-acc">
                        <a href="#"><img
                                src="https://file.hstatic.net/200000642007/file/icon-account_5d386c88832c4872b857c0da62a81bbc.svg" /></a>
                    </div>
                </div>
            </div>
            <div class="banner"></div>
            <div class="connectd">
                <form action="" method="post">
                    <div class="connect-dangky">
                        <h3>Đăng ký tài khoản</h3>
                        <label for="">Họ và tên:</label>
                        <input type="text" id="TenKH" name="TenKH" />
                        <label for="">Email:</label>
                        <input type="text" id="Email" name="Email" />
                        <label for="">Mật khẩu:</label>
                        <input type="text" id="MatKhau" name="MatKhau" />
                        <label for="">Nhập lại mật khẩu:</label>
                        <input type="text" id="ConfirmMatKhau" />
                        <label for="">Số điện thoại:</label>
                        <input type="text" id="Sdt" name="Sdt" />
                        <label for="">Địa chỉ:</label>
                        <input type="text" id="DiaChi" name="DiaChi" />
                        <button name="btnDK">Đăng ký</button>
                    </div>
                </form>
            </div>
            <?php
                require 'connect.php';
                if(isset($_POST['btnDK'])){
                    $TenKH =$_POST['TenKH'];
                    $Email =$_POST['Email'];
                    $MatKhau =$_POST['MatKhau'];
                    $Sdt =$_POST['Sdt'];
                    $DiaChi =$_POST['DiaChi'];

                    if(!$conn){
                    echo 'Ket loi khong thanh cong';
                    }
                    else{
                    $query ="INSERT INTO `tbl_khachhang` (`TenKH`,`Email`,`MatKhau`,`Sdt`,`DiaChi`) VALUE (' $TenKH','$Email','$MatKhau','$Sdt','$DiaChi')";
                    $result= mysqli_query($conn, $query);
                    if($result>0){
                        
                        echo '<script>
                        alert("Luu thanh cong");
                        window.location.href ="";
                        </script>';
                    }
                    else{
                        echo 'that bai';
                    }
                    }
                }
                ?>

            <div class="footer">
                <div class="footer-title">
                    <a href=""><img
                            src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1710226595388"
                            data-src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_footer.png?1710226595388" /></a>
                    <div class="footer-title-name">
                        <b>HKD Vũ Thị Quỳnh Anh</b>
                        <p>
                            Giấy chứng nhận đăng ký HKD số 17A80041952 do Phòng Tài chính -
                            Kế hoạch, Uỷ ban nhân dân thành phố Thái Nguyên cấp ngày
                            30/5/2019 <br />Địa chỉ: Số 235, Đường Quang Trung, Tổ 7, Phường
                            Tân Thịnh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam
                            <br />
                            Email: teelabvn@gmail.com <br />
                            Điện thoại: 0865539083
                        </p>
                        <img src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo_bct.png?1710226595388"
                            alt="" />
                    </div>
                </div>
                <div class="footer-box">
                    <h4>ĐĂNG KÝ</h4>
                    <input type="text" placeholder="Nhập địa chỉ email" />
                    <button>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAlxJREFUSEvtlk+ITmEUxn+PvxPJRiFJKGrC1tQI
              GylEZKFILLDA5M/EkNAkC02Nf2WpUcparCVRysJGLEg2WFggTKIe99W90/1m7v3uez9fzcbdfud9f+c573PO+cQ4fRonLv/Bbau87TlAL3AAeAWslfQ9A7S91LYXAn3AHmB
              KTkmXpKdtB9teDpwBtgMTCkrXKell28C21wCngPUV7zRX0sd/BtvenAK7Io3RIelnS2DbE4GdwEmgMxIYwoYlTcvHR5nLdgewDzgOLKgBzELfS5oXDbY9EzgEHAFmRQDflS
              T2QtKySrDt2bkenBEBDH16ATgBrCiIfyRpdSk47cHg0N3A1AjghyTmfKLyJnAfWFdy5q6kLYVg26uAB0nmkyKA34BLwICkYdtXgJ4m54YkhYEy8o2Yy3Z4y2sV0N/AjWRA9
              Ev6FGJtH0ze/3rFuUFJx8rAk5OZuiOdPksKLroDnJb0NvvN9gbgHlRuuXOS+mPMtTE1SjDEw+BqSc/zB20HEz0Bpkc8TY+khmo27WPbiyW9GX1xunmeAQ292SSBXZJuVypu
              psB2UBiUFrVN2dFNkoLrx5orolx/Q2wvTdbdRWBb7BmgW1JItnVwzliLgKPA3oh3bliJ4Y6oWZ0qfZz2bhgGziUQxup+4DAwv6QKDSuxLjiDhfE4ANyS9CuXQNhc4U9AqML
              KUQk0rMRWwdmdYan3SRoqcH03EAbGVuC1pDFzoU6pR8qbqPqSqr6aTKSvZSazHXzwI//PI4utC/4MDAKXmwFj3F4HfLYdwNqKY1TUiYlWXOfSmNg/96C5HwBulRsAAAAASU
              VORK5CYII=" />
                    </button>
                    <p>Theo dõi Teelab từ các nền tảng khác nhau nhé!</p>
                    <div class="footer-box-logo">
                        <a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/facebook.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/instagram.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/tiktok.svg?1710226595388"
                                alt="" /></a><a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/shopeeico.png?1710226595388"
                                alt="" /></a>
                        <a href=""><img
                                src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/lazadaico.png?1710226595388"
                                alt="" /></a>
                    </div>
                </div>
                <div class="footer-about">
                    <h4>ABOUT US</h4>
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Tất cả sản phẩm</a></li>
                        <li><a href="">Bảng Size</a></li>
                        <li><a href="">Kiểm tra đơn hàng</a></li>
                        <li><a href="">Hệ Thống Cửa Hàng</a></li>
                    </ul>
                </div>
                <div class="footer-policy">
                    <h4>CHÍNH SÁCH</h4>
                    <ul>
                        <li><a href="">Chính sách mua hàng</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Phương thức thanh toán</a></li>
                        <li>
                            <a href="">Chính sách giao nhận, vận chuyển, kiểm hàng</a>
                        </li>
                        <li><a href="">Chính sách đổi trả</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    <script>
    document.getElementById('btnDK').addEventListener('click', function(event) {
        var password = document.getElementById('MatKhau').value;
        var confirmPassword = document.getElementById('ConfirmMatKhau').value;

        if (password !== confirmPassword) {
            alert('Mật khẩu và Nhập lại mật khẩu không trùng khớp');
            event.preventDefault();
        }
    });
    </script>
</body>

</html>