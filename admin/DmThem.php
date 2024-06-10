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
                        <li><a href="">Danh mục</a></li>
                        <li><a href="">Nhà cung cấp</a></li>
                        <li><a href="">Khách hàng</a></li>
                        <li><a href="">Nhân viên</a></li>
                        <li><a href="">Thống kê</a></li>
                        <li><a href="">Tài khoản</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="right-box">
                    <h1>Thêm Danh Mục</h1>
                    <form id="" class="right-box-form" method="post" enctype="multipart/form-data">
                        <label for="">Tên danh mục:</label>
                        <input type="text" id="tenDM" name="tenDM" required />
                        <label for="">Loại danh mục:</label>
                        <select id="loaiDM" name="loaiDM" required>
                            <option value="ao">Áo</option>
                            <option value="quan">Quần</option>
                            <option value="ao_khoac">Áo khoác</option>
                            <option value="phu_kien">Phụ kiện</option>
                        </select>
                        <label for="">Ảnh danh mục:</label>
                        <input type="file" id="imgDM" name="imgDM" style="border: none" />
                        <button type="submit">Thêm</button>
                    </form>
                </div>

                <?php

require "connect.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenDM = $_POST['tenDM'];
    $loaiDM = $_POST['loaiDM'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imgDM"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["imgDM"]["tmp_name"], $target_file)) {
          $imgDM = $target_file;
          
          $sql = "INSERT INTO danh_muc (tenDM, loaiDM, imgDM) VALUES ('$tenDM', '$loaiDM', '$imgDM')";

          if ($conn->query($sql) === TRUE) {
              echo '<script>
            alert("Luu thanh cong");
            </script>';
          } else {
              echo "Lỗi: " . $sql . "<br>" . $conn->error;
          }
      } else {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
}

$conn->close();
?>
            </div>
        </div>
    </div>
</body>

</html>