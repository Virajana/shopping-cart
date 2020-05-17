<?php
    session_start();
    session_unset();
    session_destroy();
?>
 <?php include 'header.php'; ?>  
        <div>
        <br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
        <br><br><br><br><br>
        <?php include 'footer.php'; ?>
    </body>
</html>
