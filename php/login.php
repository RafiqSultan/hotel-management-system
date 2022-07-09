<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css"/>
</head>
<body>
<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="../img/htl.png"/>
        <br>
        <div class="result">
            <?php
            if (isset($_POST['login']))
            {
                if(empty($_POST['email-or-username']) or empty($_POST['password'])){
                    echo '<div class="alert dangers">Error in username or password </div>'; 
                }
            } 
            ?>
            
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Username or Email</label>
                    <input type="text" name="email-or-username" class="form-control" placeholder="" required  data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" required data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="login">LOGIN</button>

        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->




<!-- Link of js Jequery -->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <!-- Link of js bootstarp -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Link of js valditor -->
    <script src="../js/validator.min.js"></script>
</body>
</html>