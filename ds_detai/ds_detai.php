<?php
    $con=mysqli_connect('localhost','root','','qldoan')
    or die("Error");
    //tao truy van
    $sql="SELECT * FROM dsdetai";
    $data=mysqli_query($con,$sql);
   
    //tìm kiếm
    $mdt='';$tdt='';
    if(isset($_POST['btntim']) ){
   
    $mdt=$_POST['txtmadt'];
    $tdt=$_POST['txttendt'];
    $sqltk="SELECT * FROM dsdetai WHERE maDT like '%$mdt%' and tenDT like '%$tdt%'";
    $data=mysqli_query($con,$sqltk);
    if(!$data){
        echo "<script>alert('lỗi!')</script>";
    }
}
    if(isset($_POST['btnthem']) ){
        header("Location: ds_detaithem.php");
       exit();
    }
    /*<?php if(isset($data['tl'])) echo $data['tl'] ?>*/
    /* http://localhost/?matacgia=<?php echo $row['maDT'] ?>*/
    
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
                    <h4>THÔNG TIN TÌM DANH SÁCH ĐỀ TÀI</h4>
                </td>
            </tr>
            <tr style="text-align: left;">
                <td class="col1">Mã đề tài</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txtmadt" value="">
                </td>
            </tr>
            <tr style="text-align: left;">
                <td class="col1">Tên đề tài</td>
                <td class="col2">
                    <input class="form-control" type="text" name="txttendt" value="">
                </td>
            </tr>
            
            <tr style="text-align: left;">
            <td class="col1"></td>
                <td class="col2">
                    <input class="btn btn-success" type="submit" name="btntim" value="Tìm kiếm">
                    <input class="btn btn-success" type="submit" name="btnthem" value="Thêm">
                  
                </td>
                
            </tr>
        </table>
        <table class="table table-striped" border="1" cellspacing="0" style="border: silver; width: 100%;padding-left: 15%;padding-right: 15%;">
            <tr style="background: rgb(69, 188, 234);;">
                <th>STT</th>
                <th>Mã đề tài</th>
                <th>Tên đề tài</th>
                <th>Thời gian</th>
                <th>Người thực hiện</th>
                <th>Giảng viên hướng dẫn</th>
                <th>Mô tả đề tài</th>
                <th></th>
            </tr>
            <?php 
                //B3: xử lý kết quả truy vấn: Hiển thị lên các dòng của bảng
                if(isset($data)&&$data!=null){
                    $i=0;
                    while($row=mysqli_fetch_array($data)){
            ?>
                <tr>
                    <td><?php echo ++$i ?></td>
                    <td><?php echo $row['maDT'] ?></td>
                    <td><?php echo $row['tenDT'] ?></td>
                    <td><?php echo $row['thoiGianDB'] ?> - <?php echo $row['thoiGianKT'] ?></td>
                    <td><?php echo $row['nguoiThuchien'] ?></td>
                    <td><?php echo $row['giangVienhd'] ?></td>
                    <td><?php echo $row['motaDT'] ?></td>
                    <td>
                        <a style="color: black;" href="http://localhost/b_qldoan/ds_detaisua.php?madetai=<?php echo $row['maDT'] ?>">Sửa</a>&nbsp;&nbsp;&nbsp;
                        <a style="color: black;" href="http://localhost/b_qldoan/ds_detaixoa.php?madetai=<?php echo $row['maDT'] ?>">Xóa</a>
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