<?php
     $con=mysqli_connect('localhost','root','','qldoan')
     or die('lỗi kết nối');
     //tạo và thực hiện chèn dữ liệu vào bảng loại sách
     $mnk=''; $nbd='';$nkt='';$mlop='';
     if(isset($_POST['btnLuu'])){

        $mnk=$_POST['txtnanienkhoa'];
        $nbd=$_POST['txtnambatdau'];
        $nkt=$_POST['txtnamketthuc'];
        $mlop=$_POST['txtlop'];
        
 
 // kiem tra du lieu rỗng
         if($mnk==''){
             echo "<script>alert('phải nhâp mã đề tài')</script>";
         }
        //  INSERT INTO `nienkhoa`(`maNienkhoa`, `tgbatdau`, `tgketthuc`, `malop`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
 //kiem tra khóa chính
 
         else {
         $sql1="SELECT * FROM nienkhoa WHERE maNienkhoa ='$mnk'";
         $dt=mysqli_query($con,$sql1);
        
             $sql="INSERT INTO nienkhoa (maNienkhoa,tgbatdau,tgketthuc,malop) VALUES ('$mnk','$nbd','$nkt','$mlop')";
             $kq=mysqli_query($con,$sql);
             if($kq==true){
                 echo"<script>alert('Thêm mới thành công!')</script>";
                 echo "<script>window.location.href = 'nienkhoa.php';</script>";
             }else{
                 echo"<script>alert('Thêm mới thất bại!')</script>";
                 echo "<script>window.location.href = 'nienkhoa.php';</script>";
             }
     }
    }
    
     if(isset($_POST['btnback'])){
        header("Location: nienkhoa.php");
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
                <td colspan="2" style="text-align: center;"><h3>Cập nhập thông tin niên khóa</h3></td>
            </tr>
            <tr>
                <td class="col1">Mã niên khóa:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtnanienkhoa" value="<?php echo $mnk?>" >
                </td>
            </tr>
            <tr>
                <td class="col1">Năm bắt đầu:</td>
                <td class="col2">
                    
                    <input class="form-control" type="text" name="txtnambatdau" value="<?php echo $nbd ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Năm kết thúc:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtnamketthuc" value="<?php echo $nkt ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Mã lớp:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtlop" value="<?php echo $mlop ?>">
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