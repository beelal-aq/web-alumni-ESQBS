<?php include('partials/navbar.php');?>
        
        <div class = "main-content">
            <h1>DASHBOARD</h1>
<br><br>
            <?php
                if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
                }
             ?>
<br><br>
            <div class = "column text-center">
                <h1>5</h1>
                <br/>
                Alumni
            </div>

            <div class = "column text-center">
                <h1>5</h1>
                <br/>
                Alumni
            </div>

            <div class = "column text-center">
                <h1>5</h1>
                <br/>
                Alumni
            </div>

            <div class = "column text-center">
                <h1>5</h1>
                <br/>
                Alumni
            </div>

            <div class = "clearfix"></div>

        </div>

        <?php include('partials/footer.php');?>

      