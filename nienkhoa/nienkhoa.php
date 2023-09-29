
<?php
    $con=mysqli_connect('localhost','root','','qldoan')
    or die("Error");
    //tao truy van
    $sql="SELECT * FROM nienkhoa";
    $data=mysqli_query($con,$sql);

    //tìm kiếm
    $mnk='';$ml='';
    if(isset($_POST['btntim']) ){

    $mnk=$_POST['txtmanienkhoa'];
    $mlop=$_POST['txtmalop'];
    $sqltk="SELECT * FROM nienkhoa WHERE maNienkhoa like '%$mnk%' and malop like '%$mlop%'";

    $data=mysqli_query($con,$sqltk);
    if(!$data){
        echo "<script>alert('lỗi!')</script>";
    }
    }
    if(isset($_POST['btnthem']) ){
        header("Location: nienkhoathem.php");
        exit();
    }
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr{
            text-align: center;
        }
    </style>
</head>
<body>
<form  method="post" action="">
        <table style="padding-left:40% ;padding-bottom: 30px;">
            <tr>
                <td colspan="2" style="text-align: center;">
                    <h4>THÔNG TIN NIÊN KHÓA</h4>
                </td>
            </tr>
            <tr style="text-align: left;">
                <td class="col1">Mã niên khóa</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtmanienkhoa" value="">
                </td>
            </tr>
            <tr style="text-align: left;">
                <td class="col1">Mã lớp</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtmalop" value="">
                </td>
            </tr>
            
            <tr style="text-align: left;">
            <td class="col1" ></td>
                <td class="col2">
                    <input class="btn btn-success" type="submit" name="btntim" value="Tìm kiếm">
                    <input class="btn btn-success" type="submit" name="btnthem" value="Thêm">
                  
                </td>
                
            </tr>
        </table>
        <table class="table table-striped" border="1" cellspacing="0" style="border: silver; width: 100%;padding-left: 25%;padding-right: 25%;">
            <tr style="background: rgb(69, 188, 234);;">
                <th>STT</th>
                <th>Mã niên khóa</th>
                <th>Năm học</th>
                <th>Mã lớp</th>
               
                <th></th>
            </tr>
            <?php 
                //B3: xử lý kết quả truy vấn: Hiển thị lên các dòng của bảng
                if(isset($data)&&$data!=null){
                    $i=0;
                    while($row=mysqli_fetch_array($data)){
                        // INSERT INTO `nienkhoa`(`maNienkhoa`, `tgbatdau`, `tgketthuc`, `malop`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
            ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $row['maNienkhoa'] ?></td>
                    <td><?php echo $row['tgbatdau'] ?>-<?php echo $row['tgketthuc'] ?></td>
                    <td><?php echo $row['malop'] ?></td>
                    
                    <td>
                        <a style="color: black;" href="http://localhost/b_qldoan/nienkhoasua.php?manienkhoa=<?php echo $row['maNienkhoa'] ?>">Sửa</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: black;" href="http://localhost/b_qldoan/nienkhoaxoa.php?manienkhoa=<?php echo $row['maNienkhoa'] ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                    }
                }
            ?>
        </table>
    </form>
</body>
</html>