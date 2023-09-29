<?php
    $con=mysqli_connect('localhost','root','','qldoan')
    or die('Lỗi kết nối');
    $mdt=$_GET['madetai'];
    $sqlTK = "SELECT * FROM dsdetai WHERE maDT = '$mdt' ";//thiếu
    $data = mysqli_query($con,$sqlTK);//thiếu

    if(isset($_POST['btnLuu'])){
        $tdt=$_POST['txttenDT'];
        $tgbd=$_POST['txttgBD'];
        $tgkt=$_POST['txttgKT'];
        $nth=$_POST['txtnguoiTH'];
        $gvhd=$_POST['txtgiangvienHD'];
        $mt=$_POST['txtmota'];
    //$sql="UPDATE `dsdetai` SET `tenDT`='[value-1]',`thoiGianDB`='[value-3]',`thoiGianKT`='[value-4]',`nguoiThuchien`='[value-5]',`giangVienhd`='[value-6]',`motaDT`='[value-7]' WHERE 1";
    $sql="UPDATE dsdetai SET tenDT='$tdt',thoiGianDB='$tgbd',thoiGianKT='$tgkt',nguoiThuchien='$nth',giangVienhd='$gvhd',motaDT='$mt' WHERE maDT='$mdt'";
            $kq=mysqli_query($con,$sql);

            if($kq==true){
                echo"<script>alert('Sửa thành công!')</script>";
                echo "<script>window.location.href = 'ds_detai.php';</script>";
            }else{
                echo"<script>alert('Sửa thất bại')</script>";
                echo "<script>window.location.href = 'ds_detai.php';</script>";
        
            }
        }
        
         //xuly nut trở về
         if(isset($_POST['btnback'])){
            header("Location: ds_detai.php");
            exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="">
    <table>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h3>SỬA THÔNG TIN ĐỀ TÀI</h3>
                </td>
            </tr>
            <?php 
                //B3: xử lý kết quả truy vấn: Hiển thị lên các dòng của bảng
                if(isset($data) && $data!=null){
                   
                    while($row=mysqli_fetch_array($data)){
                           //$sql="UPDATE `dsdetai` SET `tenDT`='[value-1]',`thoiGianDB`='[value-3]',`thoiGianKT`='[value-4]',`nguoiThuchien`='[value-5]',`giangVienhd`='[value-6]',`motaDT`='[value-7]' WHERE 1";
            ?>
            
            
            <tr>
                <td class="col1">Mã đề tài:</td>
                <td class="col2">
                    
                    <input class="form-control" type="text" name="txtmaDT" value="<?php echo $row['maDT'] ?>" style="width: 70%;" disabled>
                </td>
            </tr>
            <tr>
                <td class="col1">Tên đề tài:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttenDT" value="<?php echo $row['tenDT'] ?>" style="width: 70%;">
                </td>
            </tr>
            <tr>
                <td class="col1">Thời gian bắt đầu:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttgBD" value="<?php echo $row['thoiGianDB'] ?>" style="width: 70%;">
                </td>
            </tr>
            <tr>
                <td class="col1">Thời gian kết thúc:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttgKT" value="<?php echo $row['thoiGianKT'] ?>" style="width: 70%;">
                </td>
            </tr>
            <tr>
                <td class="col1">Người thực hiện:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtnguoiTH" value="<?php echo $row['nguoiThuchien'] ?>" style="width: 70%;">
                </td>
            </tr>
            <tr>
                <td class="col1">Giảng viên hướng dẫn:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtgiangvienHD" value="<?php echo $row['giangVienhd'] ?>" style="width: 70%;">
                </td>
            </tr>
            <tr>
                <td class="col1">Mô tả đề tài:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtmota" value="<?php echo $row['motaDT'] ?>" style="width: 70%;">
                    <textarea name="txtmota" rows="10" cols="105" ><?php echo $row['motaDT'] ?></textarea>
                </td>
            </tr>
            <?php
                    }
                }
            ?>
            <tr>
                <td></td>
                <td>
                    <input class="btn btn-primary" type="submit" name="btnLuu" value="Lưu">
                    <input type="submit" name="btnback" value="Trở lại">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>