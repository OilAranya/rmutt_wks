<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="style.css"> -->

    </head>
    <body>

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <?php 
                    echo $_SESSION['success'];
                ?>
            </div>
        <?php endif; ?>


        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <?php 
                    echo $_SESSION['error'];
                ?>
            </div>
        <?php endif; ?>

        <br>
        <div class="card col-sm-6 mx-auto">
            <div class="card-content">
                <br>
                <div class="card-header">				
                    <center><h2 class="text-dark"><i class="fa fa-user-circle-o" ></i>เข้าสู่ระบบ</h2></center>
                </div>&nbsp;
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <div class="input-group">
                                <label for='username'>Username</label>&nbsp;
                                <input type="text" class="form-control " name="username" placeholder="username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for='password'>password</label>&nbsp;
                                <input type="password" class="form-control" maxlength="8" name="password" placeholder="password" required>
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn-dark btn-lg btn-block ">เข้าสู่ระบบ</button></center><br>
                    </form>
                </div>
            </div>
        </div>

        <!-- <a href="register.php">Go to register</a> -->
    
    </body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>