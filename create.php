<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TPR</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="js/bootstrap.js"></script>  
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    
</head>
<body>

    <?php require "component/Header.html" ?>
    <div class="container-sm">
        <h1 style="text-align: center;">Create</h1>
        <hr>
        <form action="create.php" method="post">
            Titulo: <input type="text" name="Titulo" maxlength="255">
            <br>
            Descrição: <textarea class="form-control" name="descrição" rows="3" maxlength="200"></textarea>
            <br>
            Conteudo: <textarea class="form-control" name="Conteudo" rows="5"></textarea>
            <br>
            <input type="submit" name="submit">
        </form>


        <?php
            require "component/database.php";
    
            if (isset($_POST['submit'])){
                $titulo = $_POST['Titulo'];
                $desc = $_POST['descrição'];
                $cont = $_POST['Conteudo'];
            
                if (isset($titulo) && isset($desc) && isset($cont)){
                    $sql = "INSERT INTO posts (title, body, description) VALUES (?,?,?)";
                    $stmt= $connection->prepare($sql);
                    $stmt->execute([utf8_decode($titulo),utf8_decode($cont),utf8_decode($desc)]);
                    echo "done";
                }
            }
        ?>
    </div>
    
    
    
    
    
    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>