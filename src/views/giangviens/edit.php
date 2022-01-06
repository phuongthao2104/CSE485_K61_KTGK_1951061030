<?php
    
    require "header.php";
?>

<div style="color: blue">
    <?php echo $error; ?>
</div>
<div style = "width:60%" class="container">
    <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px;color:green">Chỉnh sửa thông tin giảng viên</h1>
<form action="" method="post">
Họ và tên:
    <input class="form-control" type="text"
           name="HOVATEN"
           value="<?php
           echo isset($_POST['HOVATEN']) ? $_POST['HOVATEN'] : $giangvien['HOVATEN']?>"
    />
    <br />
    Ngày sinh:
    <input class="form-control" type="text"
           name="NGAYSINH"
           value="<?php
           echo isset($_POST['NGAYSINH']) ? $_POST['NGAYSINH'] : $giangvien['NGAYSINH']?>"
    />
    <br />
    Giới tính:
    <input class="form-control" type="text"
           name="GIOITINH
           value="<?php
           echo isset($_POST['GIOITINH']) ? $_POST['GIOITINH'] : $giangvien['GIOITINH']?>"
    />
    <br />
    Trình độ:
    <input class="form-control" type="text"
           name="TRINHDO"
           value="<?php
           echo isset($_POST['TRINHDO']) ? $_POST['TRINHDO'] : $giangvien['TRINHDO']?>"
    />
    <br />
    Chuyên môn:
    <input class="form-control" type="text"
           name="CHUYENMON"
           value="<?php
           echo isset($_POST['CHUYENMON']) ? $_POST['CHUYENMON'] : $giangvien['CHUYENMON']?>"
    />
    <br />
    <br />
    Cơ quan:
    <input class="form-control" type="text"
           name="COQUAN"
           value="<?php
           echo isset($_POST['COQUAN']) ? $_POST['COQUAN'] : $giangvien['COQUAN']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
</form>
</div>