<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Create</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    
</head>
<body>

    <?php require "component/Header.html" ?>

    <?php
            require "component/database.php";
            $id = $_GET['id'];
            $titulo = "";
            $desc = "";
            $cont = "";

            while($row = $stm->fetch(PDO::FETCH_ASSOC)){
               if ($row['id'] == $id){
                    $titulo = $row['title'];
                    $desc = $row['description'];
                    $cont = $row['body'];
               }
            }
            
            $title = $_POST['Titulo'];
            $description = $_POST['descrição'];;
            $body = $_POST['Conteudo'];

            function change($id,$title,$description,$body, $connection){
                if (isset($title) && isset($description) && isset($body)){
                    $sql = "UPDATE posts SET title ='$title', description='$description', body='$body' WHERE id=". $_POST['id'];
                    $stmt= $connection->prepare($sql);
                    $stmt->execute();
                    echo $_POST['id'];
                }
            }

            if (isset($_POST['submit'])){
                change($id,$title,$description,$body,$connection);
            }
    ?>
    <div class="container-sm">
        <form action="update.php" method="post">
            Titulo: <input type="text" name="Titulo" value="<?php echo $titulo ?>" maxlength="255">
            <br>
            Descrição: <textarea class="form-control" name="descrição" value= rows="3" maxlength="200"><?php echo $desc ?></textarea>
            <br>
            Conteudo: <textarea class="form-control" name="Conteudo"  rows="5"><?php echo $cont ?></textarea>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <br>
            <input type="submit" name="submit">
        </form>
    </div>
    
    
    
    
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>