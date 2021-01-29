<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <div class="container-md">
    </form>
        <?php 
            while($row = $stm->fetch(PDO::FETCH_ASSOC)){

                echo '<a href="test.php?id='.$row['id'].'" ><h3 class="project">'.$row['title'].'</h3></a>';
            }
        ?>
    </div>


      
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
