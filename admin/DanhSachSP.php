<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="stylesheet" href="Home.css " />
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="header-logo">
                <a href="#"><img
                        src="//bizweb.dktcdn.net/100/415/697/themes/902041/assets/logo.png?1710226595388" /></a>
            </div>
            <div class="header-hight"></div>
        </div>
        <hr />
        <div class="content">
            <div class="left">
                <div class="left-menu">
                    <ul>
                        <li><a href="">Sản phẩm</a></li>
                        <li><a href="">Đơn hàng</a></li>
                        <li><a href="DmThem.php">Danh mục</a></li>
                        <li><a href="">Nhà cung cấp</a></li>
                        <li><a href="">Khách hàng</a></li>
                        <li><a href="">Nhân viên</a></li>
                        <li><a href="">Thống kê</a></li>
                        <li><a href="">Tài khoản</a></li>
                    </ul>
                </div>
            </div>
            <div class="content-hight"></div>
            <div class="right">
                <div class="right-search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" />
                    <button>
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAoZJREFUSEvllknIjlEUx39fxiwsbAyfKZEhURbfAgspJGxkKoVMoS8lEdlYsUCGIsocKbJgIWxYUTYoylQkUyKFMg/nr/PoerzPc+/71OtbOLv3fc49v3vPPed/bhNtZE1txCUV3BFoAQYBPYDnwAPgGvC5yuZj4H7AVmAq0LkG4ANwBlgDPKlnA2XgFcB2QKeN2SdgGXA45ph9LwLrlKvd6auldy9wCbgLPAQGAEOA8cBSoJ37brCNbkqB1wIvB/b4Yt3jFOBeSbARdv/ngGb3mQ2cjMHz4KHATaCDn24s8CoWBOgNXAH6AO+BwZaJZ2Xr8uALFmCiV6oWP0qAZi4jgevwq1OO2pXMTwV3A1678w5gVR3QzPUEMAd4Cyjet6IY4YlnAKfccTRwtQJ4ZnC/pTFC8Epgp8O6WlW/qwDu71WvpQuAIyknXh+0QvuyNJVsqBPw0b+vBbakgNWP+9yxpwnCiwon7gU89XWzgqv7K1SY6gnARfeYDJyvAJ4GnPV1w4HbKSfuArxxidxvO19SAXwMmAv8cG0vHCD5Pj4NTAe+W3UOcxFJ5auPb7jzARsai1P7WH7SYKVHk0hyOQZ4mUDu68ol2ZQWaHwqe4VWS6sXmQQq1bLH1s+TTBTulMQY5Vrd3X12m8y2xjZbNJ02W1us88WaThoal4PpJDnVVYzzlObjaPMH6z1x5q8ptQtQT8fsiz8IpH6ZlcJjLxDd+TZA7SVxyJu0+JD9udH7d6FNKBVWFB4DZwEE1ZtroL+5NLXuA7cCpcp883D91ub+sFRwLNX574KpQBVfrTnPKv146NQosBghXFWuav9tjQQLIvVTT2tg/JNUR6+m0Scu3MD/B/4JVp9tH2VWMqoAAAAASUVORK5CYII=" />
                    </button>
                    <div class="right-top">
                        <a href="SpThem.php">
                            <img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAfFJREFUSEvtl0FIFGEUx39vlMVDB292sktRF8mDnVMQgm6BRXhTiN3Ri11yFwNnodZZ6NDB2lYEb4IL4i2IgsyzBxeFEDyINxHCoIOFzpMZXW13nHaa2TDBOX3wzff/fe8/733fG+GcHjknLsHgqfQdVLpwpC3y5kR/oLLKduIjluX8ruMHlx428e3GJGgqMtC3UJZIaB+DEzuVKT+4kHmGkG8c9FhJZJ5kru9ssGUZXP35HbgSE1wGTBzdxjBegT7w9FQ6MHNr7rA64mLmFsrXmFCX8JiUPefpTI5do9nZ9MaiT0ja035wId2NyOfYYNUeTHvxROddRo8jzmLmrCjgMsouQitwO3CDDQdXBOs5c9HBZVRHPFtbWlYYsHaZsVrZ2+s8Shh57bO9IRErXzAnugO/ZyGziHC3ar4hYPj7iIWnOLpysplKpahEzOqwyRVkz8UDe7aHqONaq08d2MS0vVOs+sisV59hj7Ta5Dpj3SX431wSl1ZHyOoPILOg/cC90NdiDKvfgzFO6uXy6eU+1gVOFrjv041ZTm7XsIA4Fsn8amB0xdEO1HC7CrevOirPiOBPQAmnKcvQi/WwZwZvn9/EOBgHHqHaW9X61LW6ONrOviQYtjdCA2tffJO+TrP+Ipnf+pPGf/gLEznkcAsPAYRFIC60+2PsAAAAAElFTkSuQmCC" />
                        </a>
                    </div>
                </div>

                <div class="right-procduct-dgv">

                    <?php
                require ('connect.php');
                if(!$conn){
                echo 'ket noi khong thanh cong. Loi ';
                }
                else{
                $query="SELECT * FROM tbl_sanpham";
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0){
                    echo '<table id="tblMain" class="styled-table">
                            <thead>
                            <tr>       
                                <th>Ảnh</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Ngày nhập</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                                <th>Chức năng</th>
                            </tr>
                              </thead>
                            <tbody>';
                          while($row = mysqli_fetch_assoc($result)){
                            $date = date('d-m-Y', strtotime($row["NgayNhap"]));
                      echo ' <tr>
                                <td><img src="'.$row["imgSP"].'" alt="Product Image"></td>
                                <td>'.$row["MaSP"].'</td>
                                <td>'.$row["TenSP"].'</td>
                                <td>'.$row["DanhMuc"].'</td>
                                 <td>'.$date.'</td>
                                <td>'.$row["SoLuong"].'</td>
                                <td>'.$row["Gia"].'</td>
                                <td> <a href="#"
                                      ><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAmBJREFUSEvdls1rE0EYh593KnV3/cSb6EGajeJBrVgP9eDHQRCK2B4UEb17bP0zBCn+Dwr25EH8KBX8BA9F8NCLTVYrijexAXebsmlGdk1kd7sJk5gQcI8z77zP+/vNzM4rDOiTAXHpKzgoc8peZVHGCLMCc8E/P7PbCjmKoEwcsQIW5Rh+MnZtmdMo5tG8sSpMZOGbwEGJGRFuA1tMoBruOi7TyVi/zAkFrwEnHtcsZOEpcPCRfTLENxNgFCPCrFXgVjJea4aqHivA/kyep9Yql5rKU+CGPa/iIoUZqfOhZRGKml3gbd68X+K4EqI8OxLzYR3Gt7m8j4tO7UuJswgvGvacs4u8NFXve4wpOGQXuB+tycDropm0ijxq5usJ2Pc4qTTPI4UarjkuDyLAr2VGlYqF3HRc5pIi/hkclBgXYT5lq+aGXeRevGUeu6RApe11WuvQ6uieCjF0eyaxTirP266uFTegkb12TuINDdeblvcMbAC97Lg8bHcwO1bc2I4nbZRugkZrNKw7Rd51daob0GfA1hw1NQ1Xskr/rtFcSF5PY8XVT5zX9fge5kJFmLQKPE4WVPUoas0SMIwm9V8wBq+VqbaAbohmKvlzaMLb3ZJOwDrH3lCEqazSfoNDUUxYIyy0Or39ULwuiovtoFExPQGbPhamj47xHv+n4D99klkjYGCBVoyKZjYOrXPGPhi3Q/GXstpfYa+q8d0gZ+chigP2CF9ywdFg4DEtmjtg1mEaVjBnu1xt2Qg0Jypf2TNc5UjWEUNIMkyHNZZ2HuZHdm1fG3rjZ7ELRV0vGZji37CXLi5ClekLAAAAAElFTkSuQmCC"
                                    /></a>
                                    <a href="#"
                                      ><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAASxJREFUSEvtlrFKA0EQhuefnIWVPoKPIDYpE6vsptWAhaJvIIgPkN5CHyGgjaDt7aYyeQHxEXwEhYCF54ykUE645PYuwgnutjP/fDvDzM6CGjpoiEvBYB0MWjKbnROwXnhZ1Tduty8wHEpIMsHgD2uviOh0aVDgspWmZ78Gzow5BjAKCahEB4lzt2W+PzJ+N6bLwEOZqI5dVHfXvJ98af8GWI3ZEuaTOhmVaVhkBO+fCzPOi7Xf385ENssCLrMnzC9I06cin4VdnVk7AVFnFbASTRPnuhE8r0As9XcfxOaqM1ZxnPJVi+MUx+kfbSex9k6J9uo8HLlfxj07t19tHxtzCOB6FbCqHiXe31QCz52119sRoEPMG5UuIPLKqlOMx4+LdMEf+krgAOfGwJ/qia8fSJ/DDwAAAABJRU5ErkJggg=="
                                    /></a>
                                </td>
                            </tr>';
                    }
                      echo '</tbody></table>';
                  }
                }
              ?>



                </div>
            </div>
        </div>
    </div>
</body>

</html>