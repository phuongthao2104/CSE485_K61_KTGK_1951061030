<?php

require_once 'views/commons/message.php';
require "header.php";
?>


<div class="container">
    <h1 style="display: flex;align-items: center;justify-content: center;margin-bottom:30px;margin-top:50px">Danh sách giảng viên</h1>
<table border ="1" cellspacing="0" cellpadding="8">
    <tr>
        <th scope="col">Mã giảng viên</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Trình độ</th>
        <th scope="col">Chuyên môn</th>
        <th scope="col">Cơ quan/Đơn vị</th>
        <th scope="col">Manager</th>
        
        
    </tr>
    <?php if (!empty($giangviens)): ?>
        <?php foreach ($giangviens AS $giangvien) : ?>
            <tr>
                <td ><?php echo $giangvien['MAGV'] ?></td>
                <td><?php echo $giangvien['HOVATEN'] ?></td>
                <td><?php echo $giangvien['NGAYSINH'] ?></td>
                <td><?php echo $giangvien['GIOITINH'] ?></td>
                <td><?php echo $giangvien['TRINHDO'] ?></td>
                <td><?php echo $giangvien['CHUYENMON'] ?></td>
                <td><?php echo $giangvien['COQUAN'] ?></td>
                <td>
                    <?php
                    $urlAdd =
                        "index.php?controller=giangvien&action=add&MAGV=" . $giangvien['MAGV'];
                    $urlEdit =
                        "index.php?controller=giangvien&action=edit&MAGV=" . $giangvien['MAGV'];
                    $urlDelete =
                        "index.php?controller=giangvien&action=delete&MAGV=" . $giangvien['MAGV'];
                    ?>
                    <a href= "<?php echo $urlAdd?> ">Thêm</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
</div>
<div style="margin-top : 20px" class="container">
<a href="index.php?controller=giangvien&action=add">
    <button type="button" class="btn btn-success">Thêm mới giảng viên</button>
</a>
</div>


<?php 
    require "footer.php";
?>