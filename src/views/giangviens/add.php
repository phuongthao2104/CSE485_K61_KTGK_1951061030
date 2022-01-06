<?php
    
    require "header.php";
?>

<div class="container">
            <h5 class="text-center text-primary mt-5">Thêm mới giảng viên</h5>
<div>

<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container">
<form method="post" action="">
    <div class="form-group">
    Họ và tên :
    <input type="text" class="form-control" name="HOVATEN" value="" />
    </div>
    <br />
    Ngày sinh :
    <input type="text" class="form-control" name="NGAYSINH" value="" />
    <br />
    Giới tinh :
    <input type="text" class="form-control" name="GIOITINH" value="" />
    <br />
    Trình độ :
    <input type="text" class="form-control" name="TRINHDO" value="" />
    <br />
    Chuyên môn :
    <input type="text" class="form-control" name="CHUYENMON" value="" />
    <br />
    Cơ quan :
    <input type="text" class="form-control" name="COQUAN" value="" />
    <br />
    <input type="submit" name="submit" value="Save" />
</form>
</div>
