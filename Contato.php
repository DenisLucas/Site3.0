<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TPR</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .col-centered{
            float: none;
            margin: 0 auto;
        }
    </style>
    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
</head>
<body>
    <?php
        require 'component/Header.html';
    ?>
    <div class="container-sm">
        <div class="row-sm ">
            <div class="col-8 bg-light col-centered">
                <form action="Contato.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" placeholder="Message" name="message" rows="3" cols="40" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
  
        if (isset($_POST['submit'])) {
            ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $email = $_POST['email'];
            $message = $_POST['message'];
            if (isset($message) && isset($email)) {
                if(mail("denislucasvalverdesilva@gmail.com", $email, $message)){
                    echo "email enviado com sucesso";
                } else {
                    echo "Ouve um problema, tente novamente";
                }
            } else{
                echo $email;
                echo $message;
            }
            
        }
    
    ?>
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>


