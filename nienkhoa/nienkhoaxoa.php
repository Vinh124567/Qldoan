<?php
 // INSERT INTO `nienkhoa`(`maNienkhoa`, `tgbatdau`, `tgketthuc`, `malop`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $mnk=$_GET['manienkhoa'];
    //kết nối db
    $con=mysqli_connect('localhost','root','','qldoan')
    or die('Lỗi kết nối');
    //tạo và thực hiện xóa
    $sql="DELETE FROM nienkhoa WHERE maNienkhoa='$mnk'";
    $kq=mysqli_query($con,$sql);
    if($kq==true){
        echo"<script>alert('xóa thành công!')</script>";
        echo "<script>window.location.href = 'nienkhoa.php';</script>";
    }else{
        echo"<script>alert('xóa thất bại')</script>";
        echo "<script>window.location.href = 'nienkhoa.php';</script>";

    }
?>