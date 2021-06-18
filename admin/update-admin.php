<?php include('partials/navbar.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>



        <?php
        $id=$_GET['id_admin'];
        $sql="SELECT * FROM admin_tbl WHERE id_admin=$id";
        $res=mysqli_query($conn, $sql);

        if($res==true){
            $count = mysqli_num_rows($res);

            if($count==1){
                $row=mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];
            }
            else{
                header('location :' .SITEURL. 'admin/admin.php');
            }
        }
        ?>

        <form action="" method="POST" >
            <table class="tblw30">
                <tr>
                    <td>Full name : </td>
                    <td><input type="text" name = "full_name" value="<?php echo $full_name;?>"></td>
                </tr>

                <tr>
                    <td> Username : </td>
                    <td><input type="text" name = "username" value="<?php echo $username;?>"></td>
               </tr>
            </table>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id_admin" value="<?php echo $id; ?>">
                    <input type="submit" name ="submit" value="Update Admin" class="btn-secondary">
                </td>
                    
            </tr>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){

        $id = $_POST['id_admin'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        $sql= "UPDATE admin_tbl SET
        full_name = '$full_name',
        username = '$username'
        WHERE id_admin = '$id'
        ";

        $res = mysqli_query($conn, $sql);

        if($res==true){
            $_SESSION['update'] = "admin update successfully";
            header('location:' .SITEURL. 'admin/admin.php');
        }
        else{
            $_SESSION['update'] = "admin update failed";
            header('location:' .SITEURL. 'admin/admin.php');
        }
    }
    
?>





<?php include('partials/footer.php') ?>