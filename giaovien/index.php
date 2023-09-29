<!-- Content Header (Page header) -->
<?php
include('./db/connect.php');

$sql = "select teachers.*, faculty.name as faculty_name from teachers join faculty on faculty.id = teachers.faculty_id";
$teachers = mysqli_query($mysqli, $sql);

?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý giáo viên</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý sinh viên</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="index.php?action=themgiaovien" class="btn btn-success">Thêm</a>
                                <h3 class="card-title"></h3>
                            </div>
                            <form action="index.php?action=search" method="post">
                                        <div style="width: 400px;" class="input-group">
                                            <input type="text" class="form-control rounded" name="key" placeholder="Search"
                                                aria-label="Search" aria-describedby="search-addon" />
                                            <button type="submit" name="search"
                                                class="btn btn-outline-primary">Tìm kiếm</button>
                                        </div>
                                    </form> 
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Avatar</th>
                                            <th>Tên giáo viên</th>
                                            <th>Thông tin</th>
                                            <th>Khoa</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        ?>

                                        <?php
                                        while ($teacher = mysqli_fetch_array($teachers, MYSQLI_ASSOC)) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <?php
                                                if ($teacher['avatar'] == '') {
                                                ?>
                                                    <td><i> Đang cập nhập ...</i></td>
                                                <?php

                                                } else {

                                                ?>
                                                    <td><img style="width: 100px; height: 100px;" src="./uploads/<?php echo $teacher['avatar'] ?>" alt=""></td>

                                                <?php
                                                }
                                                ?>
                                                <td>
                                                    <?php echo $teacher['name'] ?>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-phone"></i>
                                                            <?php echo $teacher['phone'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-envelope"></i>
                                                            <?php echo $teacher['email'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-location-dot"></i>
                                                            <?php echo $teacher['address'] ?>
                                                        </li>
                                                        <li><i class="fa-solid fa-cake-candles"></i>
                                                            <?php echo $teacher['birthday'] ?>
                                                        </li>
                                                    </ul>

                                                </td>

                                                <td>
                                                    <strong>Khoa:</strong>  <?php echo $teacher['faculty_name'] ?>
                                                </td>
                                                <td>
                                                    <a class="btn-danger btn btn-sm" href="index.php?action=editteacher&id=<?php echo $teacher['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                                    <a class="btn btn-warning btn-sm" onClick="deleteTeacher(<?php echo $teacher['id']; ?>)" name="Delete" ><i class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
        </section>
        <div class="row">

        </div>
    </div><!-- /.container-fluid -->
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script language="javascript">
    function deleteTeacher(delid) {
        if (confirm("Bạn có muốn xóa giáo viên này")) {
            window.location.href = 'giaovien/xuly.php?id=' + delid + '';
            return true;
        }
    }
</script>