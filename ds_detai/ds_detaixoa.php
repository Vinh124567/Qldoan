<?php
    $mdt=$_GET['madetai'];
    //kết nối db
    $con=mysqli_connect('localhost','root','','qldoan')
    or die('Lỗi kết nối');
    //tạo và thực hiện xóa
    $sql="DELETE FROM dsdetai WHERE maDT='$mdt'";
    $kq=mysqli_query($con,$sql);
    if($kq==true){
        echo"<script>alert('xóa thành công!')</script>";
        echo "<script>window.location.href = 'ds_detai.php';</script>";
    }else{
        echo"<script>alert('xóa thất bại')</script>";
        echo "<script>window.location.href = 'ds_detai.php';</script>";

    }
?>