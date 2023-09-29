<!-- Content Header (Page header) -->
<?php
include('../db/connect.php');
ob_start();
if (isset($_POST['addclass'])) {
    $name = $_POST['name'];
    $faculty_id = $_POST['faculty_id'];
    $course_id = $_POST['course_id'];
    $sqlinsert = "INSERT INTO class(name, faculty_id, course_id) VALUES('" . $name . "', '" . $faculty_id . "', '" . $course_id . "')";
    $result = mysqli_query($mysqli, $sqlinsert);
    if ($result) {
        header('Location:../index.php?action=class');
        ob_end_flush();
    } else {
        echo 'Không thành công';
    }
} elseif (isset($_POST['editclass'])) {
    $name = $_POST['name'];
    $faculty_id = $_POST['faculty_id'];
    $course_id = $_POST['course_id'];
    $id = $_GET['id'];
    $sqlupdate = "UPDATE class set name='$name', faculty_id = '$faculty_id', course_id='$course_id' where id ='$id'";
    $result = $mysqli->query($sqlupdate);
    if ($result) {
        header('Location:../index.php?action=class');
    } else {
        echo 'Không thành công';
    }
    $mysqli->close();
} else {
    $id = $_GET['id'];
    $sqldelete = "delete from class where id = '$id'";
    $result = mysqli_query($mysqli, $sqldelete);
    if ($result) {
        header('Location:../index.php?action=class');
    } else {
        echo 'Không thành công';
    }
}
?>