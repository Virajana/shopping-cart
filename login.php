    <?php
        include 'header.php';
        ?>         
            <br><br>
        <form class="col-lg-4 offset-lg-4">
                <div class="panel panel-primary">
                            <div class="panel-heading">
                            <h1><b>LOG IN</b></h1>
                            </div>
                            <div class="panel-body">
                                <p>Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
            <br><br>
            <?php
        include 'footer.php';
        ?>
</body>
</html>
           
