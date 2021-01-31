<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
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
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                }
                echo '<div class="row-md bg-light">';
                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                        echo '<a href="delete.php?id='.$row['id'].'" ><h3 class="project">'.utf8_encode($row['title']).'</h3></a>';
                    }
                echo '</div>';

                if (isset($id)){
                    $sql = "DELETE FROM posts WHERE id=".$id;
                    $stmt= $connection->prepare($sql);
                    $stmt->execute();
                    echo "done";
                    header("Refresh:0; url=delete.php");
                }
            ?>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>