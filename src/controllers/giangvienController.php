<?php
require_once 'models/giangvien.php';
class giangvienController {
   
    public function index() {
   
        $giangvien = new giangvien();
        $giangviens = $giangvien->index();
        require_once 'views/giangviens/index.php';
    }

    public function add() {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['HOVATEN'];
            $ngaysinh = $_POST['NGAYSINH'];
            $gioitinh = $_POST['GIOITINH'];
            $trinhdo = $_POST['TRINHDO'];
            $chuyenmon = $_POST['CHUYENMON'];
            $coquan = $_POST['COQUAN'];

            if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                $error = "Tên không được để trống";
            }
            else {
                $giangvien = new giangvien();
              
                $giangvienArr = [
                    'HOVATEN' => $hovaten,
                    'NGAYSINH' => $ngaysinh,
                    'GIOITINH' => $gioitinh,
                    'TRINHDO' => $trinhdo,
                    'CHUYENMON' => $chuyenmon,
                    'COQUAN' => $coquan

                ];
                $isInsert = $giangvien->insert($giangvienArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=giangvien&action=index");
                exit();
            }
        }
        require_once 'views/giangviens/add.php';
    }

    public function edit() {
        if (!isset($_GET['MAGV'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=giangvien&action=index");
            return;
        }
        if (!is_numeric($_GET['MAGV'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=giangvien&action=index");
            return;
        }
        $magv = $_GET['MAGV'];
        $giangvienModel = new giangvien();
        $giangvien = $giangvienModel->getgiangvienById($magv);

        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['HOVATEN'];
            $ngaysinh = $_POST['NGAYSINH'];
            $gioitinh = $_POST['GIOITINH'];
            $trinhdo = $_POST['TRINHDO'];
            $chuyenmon = $_POST['CHUYENMON'];
            $coquan = $_POST['COQUAN'];
            //check validate dữ liệu
            if (empty($hovaten) && empty($ngaysinh) && empty($gioitinh) && empty($trinhdo) && empty($chuyenmon) && empty($hocham) && empty($hocvi) && empty($coquan)) {
                $error = "Tên không được để trống";
            }
            else {
               
                $giangvien = new giangvien();
                
                $giangvienArr = [
                    'HOVATEN' => $hovaten,
                    'NGAYSINH' => $ngaysinh,
                    'GIOITINH' => $gioitinh,
                    'TRINHDO' => $trinhdo,
                    'CHUYENMON' => $chuyenmon,
                    'COQUAN' => $coquan

                ];
                $isUpdate = $giangvienModel->update($giangvienArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$magv thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$magv thất bại";
                }
                header("Location: index.php?controller=giangvien&action=index");
                exit();
            }
        }
        //truyền ra view
        require_once 'views/giangviens/edit.php';
    }

    public function delete() {
  
        $magv = $_GET['MAGV'];
        if (!is_numeric($magv)) {
            header("Location: index.php?controller=giangvien&action=index");
            exit();
        }

        $giangvien = new giangvien();
        $isDelete = $giangvien->delete($magv);

        if ($isDelete) {
            $_SESSION['success'] = "Xóa bản ghi #$magv thành công";
        }
        else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi #$magv thất bại";
        }


        exit();


    }
}