<?php include('partials/navbar.php');?>
        
        <div class = "main-content">
            <div class = "wrapper">
                <h1>Admin</h1>
                <br/><br/>

                
               <!-- php code -->
               <?php
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
                if(isset($_SESSION['UNF'])){
                    echo $_SESSION['UNF'];
                    unset($_SESSION['UNF']);
                }
                if(isset($_SESSION['PNM'])){
                    echo $_SESSION['PNM'];
                    unset($_SESSION['PNM']);
                }
                if(isset($_SESSION['pwsukses'])){
                    echo $_SESSION['pwsukses'];
                    unset($_SESSION['pwsukses']);
                }
                if(isset($_SESSION['pwgagal'])){
                    echo $_SESSION['pwgagal'];
                    unset($_SESSION['pwgagal']);
                }
                ?>
               
                <br><br>

                <a href="add-admin.php" class ="btn-primary">add Admin</a>

                <br/><br/>

                <table class = "tbl-full">
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>

                    <!-- php code -->
                    <?php
                    // ambil data dari database

                        $sql = "SELECT * FROM admin_tbl";
                        $res =mysqli_query($conn, $sql);

                        if($res==TRUE){
                            $count = mysqli_num_rows($res);
                            $sn=1;

                            if($count>0){
                                while($rows=mysqli_fetch_assoc($res)){ // untuk ngedisplay semua data 
                                    $id=$rows['id_admin'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    //display data dari database

                                    ?>
                                     <tr>
                                         <td><?php echo $sn++; ?></td>
                                         <td><?php echo $full_name; ?></td>
                                         <td><?php echo $username; ?></td>
                                         <td>
                                             <a href="<?php echo SITEURL;?>admin/update-pass.php?id_admin=<?php echo $id; ?>" class="btn-primary">change password</a>
                                             <a href="<?php echo SITEURL;?>admin/update-admin.php?id_admin=<?php echo $id; ?>" class = "btn-secondary">Update</a>
                                             <a href="<?php echo SITEURL;?>admin/delete-admin.php?id_admin=<?php echo $id; ?>" class = "btn-danger">Delete</a> 
                                         </td>
                                     </tr>

                                    <?php

                                }
                            }
                            else{
                            }
                        }
                    ?> 
            
                 </table>
            </div>
        </div>
        

        <div class = "clearfix"></div>

            
<?php include('partials/footer.php');?>