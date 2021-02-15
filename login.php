<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TPR</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
        }

    </style>
</head>
<body>

    <?php require "component/Header.html" ?>
    <div class="container-sm">
        <div class="row-sm">
            <div class="col-sm-5 bg-light col-centered border border-dark">

                <div class="col-sm-8 bg-light col-centered">
                    <h4 style="text-align: center;">Login Para admin</h4>
                    <hr>
                    <div class="form-group">
                        <form action="login.php" method="post">
                            <input type="text" class="form-control" name="username" placeholder="user">
                            <input type="password" class="form-control" name="password" placeholder="password">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" name="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        require 'component/database.php';
    
        
        
        if (isset($_POST['submit'])){
            $pass = $_POST['password'];
            $user = $_POST['username'];
            $userpass = 0;
            while($row = $stmL->fetch(PDO::FETCH_ASSOC)){
                if($user == $row['User']){

                    $userpass = password_hash($row['Password'], PASSWORD_BCRYPT);
                }
            }
            if (password_verify($pass, $userpass)){
                header("Refresh:0; url=admin.php");
            } else {
                    echo 'password ou user não existe';
                }
            }

    ?>
    
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>