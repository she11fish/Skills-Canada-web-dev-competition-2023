<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <?php 
        include 'navbar.php';
        include 'connection.php';
        include 'tools.php';
    ?>
    <form action="./remove_theme.php" method="post">  
        <div class="container d-flex flex-column justify-content-start align-items-center" style="height: calc(100vh - 100px); font-size: 64px; margin-top: 100px;">
            <div>
                <div>Theme to Remove</div>
                <input name="theme"/>
                <button type="submit" class="btn btn-primary d-block" style="font-size: 64px; margin-top: 50px;">Submit</button>
            </div>
        </div>
    </form>
    
    
    <?php 
        if (theme_submitted()) {
            $theme = $_POST['theme'];
            $id = getId($db, $theme);
            if (duplicates($db, $theme)) {
                $query = 'DELETE FROM themes WHERE themeID=(?);';
                $stmnt = $conn->prepare($query);
                $stmnt->bind_param('i', $id);
                $stmnt->execute();
                header('Location: '. '/');
            }
        }
    ?>
</body>
</html>