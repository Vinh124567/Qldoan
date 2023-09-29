<div class="content-wrapper">
    <?php 
        if(isset($_GET['action']) ){
            $tam = $_GET['action'];

        } else {
            $tam ='';
        }
        if($tam == 'sinhvien'){
            include("sinhvien/add.php");
        }
        elseif($tam == 'giaovien' ){
            include("giaovien/index.php");
        }elseif ($tam =='themgiaovien'){
            include("giaovien/add.php");
        } elseif ($tam =='editteacher'){
            include("giaovien/edit.php");
        }elseif($tam=='faculty'){
            include("faculty/index.php");
        }elseif ($tam =='addfaculty'){
            include("faculty/add.php");
        } elseif ($tam =='editfaculty'){
            include("faculty/edit.php");
        }elseif($tam=='course'){
            include("course/index.php");
        }elseif ($tam =='addcourse'){
            include("course/add.php");
        } elseif ($tam =='editcourse'){
            include("course/edit.php");
        }elseif($tam=='class'){
            include("class/index.php");
        }elseif ($tam =='addclass'){
            include("class/add.php");
        }elseif ($tam =='editclass'){
            include("class/edit.php");
        }elseif ($tam =='detailclass'){
            include("class/detail.php");
        }elseif($tam=='student'){
            include("student/index.php");
        }elseif ($tam =='addstudent'){
            include("student/add.php");
        } elseif ($tam =='editstudent'){
            include("student/edit.php");
        }elseif($tam=='project'){
            include("project/index.php");
        }elseif ($tam =='addproject'){
            include("project/add.php");
        } elseif ($tam =='editproject'){
            include("project/edit.php");
        }elseif($tam=='user'){
            include("user/index.php");
        }elseif ($tam =='adduser'){
            include("user/add.php");
        } elseif ($tam =='edituser'){
            include("user/edit.php");
        }elseif ($tam =='search'){
            include("project/search.php");
        }
        else {
            include("dashboard.php");
        }
        

    ?>
    <!-- /.content -->
  </div>
 