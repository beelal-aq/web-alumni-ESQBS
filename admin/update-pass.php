<?php include('partials/navbar.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php
        if(isset($_GET['id_admin'])){
            $id=$_GET['id_admin'];
        }
        
        ?>

        <form action="" method="POST">
            <table class="tblw30">
                <tr>
                    <td>Current password : </td>
                    <td>
                        <input type="password" name="current_password" placeholder="old Password">
                    </td>
                </tr>

                <tr>
                    <td>new password : </td>
                    <td>
                        <input type="password" name="new_password" placeholder="new Password">
                    </td>
                </tr>

                <tr>
                    <td>confirm password : </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="confirm Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                    <input type="hidden" name="id_admin" value="<?php echo $id;?>">
                    <input type="submit"name="submit" value="change password" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){

        $id=$_POST['id_admin'];
        $cur_pass = md5($_POST['current_password']);
        $new_pass = md5($_POST['new_password']);
        $con_pass = md5($_POST['confirm_password']);


        $sql = "SELECT * FROM admin_tbl WHERE id_admin=$id AND password='$cur_pass'";

        $res = mysqli_query($conn, $sql);

        if($res==true){

            $count=mysqli_num_rows($res);

            if($count==1){
                if($new_pass==$con_pass){
                    $sql2 = "UPDATE admin_tbl SET
                    password = '$new_pass'
                    WHERE id_admin=$id
                    ";

                    $res2 = mysqli_query($conn, $sql2);

                    if($res2==true){

                        $_SESSION['pwsukses'] = "pass has been changed";
                        header('location:' .SITEURL. 'admin/admin.php');
                    }
                    else{
                        $_SESSION['Pwgagal'] = "pass didnt changed";
                        header('location:' .SITEURL. 'admin/admin.php');
                    }

                }
                else{
                    $_SESSION['PNM'] = "pass didnt match";
                header('location:' .SITEURL. 'admin/admin.php');
                }
            }
            else{
                $_SESSION['UNF'] = "user not found / wrong current pass";
                header('location:' .SITEURL. 'admin/admin.php');
            }
        }
    }




?>



<?php include('partials/footer.php');?>