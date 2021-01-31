<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Prograstinator</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <style>
        [class="project"]{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php require 'component/Header.html'?>
    <?php require 'component/database.php'?>
    <div class="container-sm">
        <?php 
            header('Content-Type: text/html; charset=utf-8');
            echo '<div class="row-md bg-light">';
                while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                    echo '<a href="update.php?id='.$row['id'].'" ><h3 class="project">'.utf8_encode($row['title']).'</h3></a>';
                }
            echo '</div>';
        ?>
        
    </div>

      
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
