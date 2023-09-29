<?php
     $con=mysqli_connect('localhost','root','','qldoan')
         or die('lỗi kết nối');
         //tạo và thực hiện chèn dữ liệu vào bảng loại sách
         $mdt=''; $tdt='';$tgbd='';$tgkt='';$nth='';$gvhd='';$mt='';
         if(isset($_POST['btnLuu'])){

            $mdt=$_POST['txtmaDT'];
            $tdt=$_POST['txttenDT'];
            $tgbd=$_POST['txttgBD'];
            $tgkt=$_POST['txttgKT'];
            $nth=$_POST['txtnguoiTH'];
            $gvhd=$_POST['txtgiangvienHD'];
            $mt=$_POST['txtmota'];
     
     // kiem tra du lieu rỗng
             if($mdt==''){
                 echo "<script>alert('phải nhâp mã đề tài')</script>";
             }
             //$sql="UPDATE `dsdetai` SET `tenDT`='[value-1]',`thoiGianDB`='[value-3]',`thoiGianKT`='[value-4]',`nguoiThuchien`='[value-5]',`giangVienhd`='[value-6]',`motaDT`='[value-7]' WHERE 1";
     //kiem tra khóa chính
     
             else {
             $sql1="SELECT * FROM dsdetai WHERE maDT ='$mdt'";
             $dt=mysqli_query($con,$sql1);
            
                 //$sql="INSERT INTO tacgia VALUES ('$dc',' $dt','$em','$mtg','$tg')";
                 $sql="INSERT INTO dsdetai (maDT,tenDT,thoiGianDB,thoiGianKT,nguoiThuchien,giangVienhd,motaDT) VALUES ('$mdt','$tdt','$tgbd','$tgkt','$nth','$gvhd','$mt')";
                 $kq=mysqli_query($con,$sql);
                 if($kq==true){
                     echo"<script>alert('Thêm mới thành công!')</script>";
                     echo "<script>window.location.href = 'ds_detai.php';</script>";
                 }else{
                     echo"<script>alert('Thêm mới thất bại!')</script>";
                     echo "<script>window.location.href = 'ds_detai.php';</script>";
                 }
         }
        }
        
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
    <form method="post" action="">
            <table style="padding-left: 50px;">
            <tr>
                <td colspan="2" style="text-align: center;"><h3>Cập nhập thông tin đề tài</h3></td>
            </tr>
            <tr>
                <td class="col1">Tên đề tài:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttenDT" value="<?php echo $mdt?>" >
                </td>
            </tr>
            <tr>
                <td class="col1">Mã đề tài:</td>
                <td class="col2">
                    
                    <input class="form-control" type="text" name="txtmaDT" value="<?php echo $tdt ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Thời gian bắt đầu:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttgBD" value="<?php echo $tgbd ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Thời gian kết thúc:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttgKT" value="<?php echo $tgkt ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Người thực hiện:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtnguoiTH" value="<?php echo $nth ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Giảng viên hướng dẫn:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtgiangvienHD" value="<?php echo $gvhd ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Mô tả đề tài:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtmota" value="<?php echo $mt ?>">
                </td>
            </tr>
            <tr>
                <td class="col1"><input type="submit" value="luu" name="btnLuu">
                <input type="submit" name="btnback" value="Trở lại"></td>
            </tr>
            </table>
    </form>

</body>
</html>