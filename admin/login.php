<?php include('../config/constant.php');?>

<html>
    <head>
        <title>Login ESQBS</title>
        <link rel="stylesheet" href="../design/admin.css">
    </head>
    <body>

    <div class="login">
        <h1 class = "text-center">login Admin</h1>
        <br><br>
        <?php
                if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
                }
             ?>
            
        <form action="" method = "POST" class = "text-center"><br><br>
            Username : <br><br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>
            Password : <br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            
            <input type="submit" name="submit" value="login" class="btn_primary">

        </form>
<br><br>
        <p class = "text-center">#bismillah_rekam_posting_webESQBS</p>
    </div>
    </body>
</html>

<?php
if(isset($_POST['submit'])){
	echo $username = $_POST['username'];
	echo $password = md5($_POST['password']);

	$sql = "SELECT * FROM admin_tbl WHERE username= '$username' AND password= '$password'";

	$res = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($res);

	if($count==1){
		$_SESSION['login'] = "login suksesful";
        $_SESSION['user']= $username;
		header('location:' .SITEURL. 'admin/index-backend.php');
	}
	else{
		$_SESSION['login'] = "<div class='text-center'> login gagalful</div>";
		header('location:' .SITEURL. 'admin/login.php');
	}
}

?>
