<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPR</title>
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
                $page = $_GET['page'];
                if (!isset($page)) {
                    $page = 1;
                }
                $limit = 5;
                $count = 0;
                $start = ($page * $limit) - 5;
                $max = 0;
                while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                    $max = $row['id'];
                    if ($row['id'] > $start){
                        if ($count < 5){
                            $count++;


                            echo '<div class="row-md-5 bg-light border border-secondary">';
                            echo '<a href="project.php?id='.$row['id'].'" ><h3 class="project">'.utf8_encode($row['title']).'</h3></a>';
                            echo '</div>';
                            echo '<div class="row-md bg-light border">';
                            echo '<p class="project">'.utf8_encode($row['description']).'</p>';
                            echo '</div>';
                        }
                    }
                }
  
        ?>
        
        <?php 
            $page = 0;
            for($i = 0; $i < $max; $i = $i + 5){
                $page++;
            }
        ?>
        <div class="row">        
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php 
                        for ($i = 1; $i <= $page; $i++){
                            echo '<li class="page-item"><a class="page-link" href="projects.php?page='.$i.'">'.$i.'</a></li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
      
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
