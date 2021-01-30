<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>The Prograstinator</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    
</head>
<body>
    <?php
        require 'component/Header.html';
        require 'component/database.php';
    ?>
    <div class="container-md">
        <div class="row-md">
            <?php 
            $id = $_GET['id'];
            while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                if($row['id'] == $id){
                    $body = $row['body'];
                    break;
                }
            }
            
            echo utf8_encode($body);
            ?>
        </div>
    </div>


</body>
</html>


