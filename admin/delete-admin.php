<?php 
include('../config/constant.php');

$id = $_GET['id_admin'];

$sql = "DELETE FROM admin_tbl WHERE id_admin=$id";

$res = mysqli_query($conn, $sql);

if($res==true){
    $_SESSION['delete'] = "admin deleted Successfully";
    header('location:' .SITEURL. 'admin/admin.php');
}
else{
    $_SESSION['delete'] = "Failed to Delete admin.";
    header('location:' .SITEURL. 'admin/admin.php');
}

?>
