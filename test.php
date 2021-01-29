<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Prograstinator</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
                if($row['id'] = $id){
                    echo $row['body'];
                    break;
                }
            }
            ?>
        </div>
    </div>


      
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>


