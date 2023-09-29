<?php
    $con=mysqli_connect('localhost','root','','qldoan')
    or die('Lỗi kết nối');
    $mnk=$_GET['manienkhoa'];
    $sqlTK = "SELECT * FROM nienkhoa WHERE maNienkhoa = '$mnk' ";//thiếu
    $data = mysqli_query($con,$sqlTK);//thiếu

    if(isset($_POST['btnLuu'])){
        
        $nbd=$_POST['txtnambatdau'];
        $nkt=$_POST['txtnamketthuc'];
        $mlop=$_POST['txtlop'];
        // INSERT INTO `nienkhoa`(`maNienkhoa`, `tgbatdau`, `tgketthuc`, `malop`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
        $sql="UPDATE nienkhoa SET tgbatdau='$nbd',tgketthuc='$nkt',malop='$mlop' WHERE maNienkhoa='$mnk'";
            $kq=mysqli_query($con,$sql);

            if($kq==true){
                echo"<script>alert('Sửa thành công!')</script>";
                echo "<script>window.location.href = 'nienkhoa.php';</script>";
            }else{
                echo"<script>alert('Sửa thất bại')</script>";
                echo "<script>window.location.href = 'nienkhoa.php';</script>";
        
            }
        }
        
         //xuly nut trở về
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
<form  method="post" action="">
    <table>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h3>SỬA THÔNG TIN NIÊN KHÓA</h3>
                </td>
            </tr>
            <?php 
                //B3: xử lý kết quả truy vấn: Hiển thị lên các dòng của bảng
                if(isset($data) && $data!=null){
                   
                    while($row=mysqli_fetch_array($data)){
                           /// INSERT INTO `nienkhoa`(`maNienkhoa`, `tgbatdau`, `tgketthuc`, `malop`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
            ?>
            
            
            

            <tr>
                <td class="col1">Mã niên khóa:</td>
                <td class="col2">
                   <input class="form-control" type="text" name="txtmanienkhoa" value="<?php echo $row['maNienkhoa'] ?>"  disabled>
                </td>
            </tr>
            <tr>
                <td class="col1">Năm bắt đầu:</td>
                <td class="col2">
                    
                    <input class="form-control" type="text" name="txtnambatdau" value="<?php echo $row['tgbatdau'] ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Năm kết thúc:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtnamketthuc" value="<?php echo $row['tgketthuc'] ?>">
                </td>
            </tr>
            <tr>
                <td class="col1">Mã lớp:</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtlop" value="<?php echo $row['malop'] ?>">
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