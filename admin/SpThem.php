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
                            <li><a href="DanhSachSP.php">Sản phẩm</a></li>
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
                <div class="right">
                    <div class="right-procduct">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="right-procduct-tool">
                                <div class="right-procduct-tool-picture">
                                    <label for="img">Ảnh</label> <br />
                                    <div class="right-procduct-tool-picture-box">
                                        <input style="border: none" type="file" id="imgSP" name="imgSP" accept=""
                                            onchange="displayImage(this)" />
                                    </div>
                                </div>
                                <div class="right-procduct-tool-img" id="imageContainer"></div>
                                <div class="right-procduct-tool-qr">
                                    <label for="">Mã sản phẩm</label> <br />
                                    <input type="text" name="MaSP" id="MaSP" />
                                </div>
                                <div class="right-procduct-tool-name">
                                    <label for="">Tên sản phẩm</label> <br />
                                    <input type="text" name="TenSP" id="TenSP" />
                                </div>
                                <div class="right-procduct-tool-class">
                                    <label for="">Danh mục</label> <br />
                                    <select name="DanhMuc" id="DanhMuc">

                                        <?php 
                                      require "connect.php";
                                      $sql = "SELECT id, tenDM, loaiDM FROM danh_muc";
                                      $result = $conn->query($sql);

                                      if ($result->num_rows > 0) {
                                          $LoaiDM = [
                                              'ao' => [],
                                              'quan' => [],
                                              'ao_khoac' => [],
                                              'phu_kien' => []
                                          ];
                                          while($row = $result->fetch_assoc()) {
                                              $LoaiDM[$row['loaiDM']][] = $row;
                                          }
                                          foreach ($LoaiDM as $loai => $items) {
                                              echo '<optgroup label="' . ucfirst(str_replace('_', ' ', $loai)) . '">';
                                              foreach ($items as $item) {
                                                  echo '<option value="' . $item['tenDM'] . '">' . $item['tenDM'] . '</option>';
                                              }
                                              echo '</optgroup>';
                                          }
                                      } 

                                      $conn->close();
                                    ?>
                                    </select>
                                </div>
                                <div class="right-procduct-tool-date">
                                    <label for="">Ngày nhập</label> <br />
                                    <input type="date" id="NgayNhap" name="NgayNhap" />
                                </div>
                                <div class="right-procduct-tool-Sl">
                                    <label for="">Số lượng</label> <br />
                                    <input type="text" id="SoLuong" name="SoLuong" />
                                </div>
                                <div class="right-procduct-tool-price">
                                    <label for="">Giá tiền</label> <br />
                                    <input type="text" id="Gia" name="Gia" />
                                </div>
                                <button class="btnThem" name="btnThem">Thêm</button>
                                <?php 
                                require "connect.php";
                                if(isset($_POST['btnThem'])){
                                  
                                  $MaSP=$_POST['MaSP'];
                                  $TenSP=$_POST['TenSP'];
                                  $DanhMuc=$_POST['DanhMuc'];
                                  $NgayNhap = $_POST['NgayNhap'];
                                  $SoLuong=$_POST['SoLuong'];
                                  $Gia=$_POST['Gia'];
                                  $target_dir = "uploads/";
  
                                  
                                  $target_file = $target_dir . basename($_FILES['imgSP']["name"]);
                                  $uploadOk = 1;
                                  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                              
                                  if (move_uploaded_file($_FILES['imgSP']['tmp_name'], $target_file)) {
                                      $query ="INSERT INTO `tbl_sanpham` (`imgSP`,`MaSP`,`TenSP`,`DanhMuc`,`NgayNhap`,`SoLuong`,`Gia`) VALUE ('$target_file','$MaSP','$TenSP','$DanhMuc','$NgayNhap', '$SoLuong','$Gia')";
                                      $result= mysqli_query($conn, $query);
                                      if($result>0){
                                        echo '<script>
                                          alert("Luu thanh cong");
                                          window.location.href ="DanhSachSP.php";
                                          </script>';
                                      }
                                      else{
                                      echo 'that bai';
                                      }
                                  } else {
                                      echo "Lỗi";
                                      }
                                  }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
        function displayImage(input) {
            var imageContainer = document.getElementById("imageContainer");
            imageContainer.innerHTML = "";
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var image = document.createElement("img");
                    image.src = e.target.result;
                    image.setAttribute("width", "70px");
                    imageContainer.appendChild(image);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
    </body>

    </html>