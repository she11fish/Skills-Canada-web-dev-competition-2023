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
    <div class="container container d-flex flex-column justify-content-start align-items-center" style="height: calc(100vh - 100px); font-size: 32px; margin-top: 100px;">
        <form action="./register.php" method="post">
            <div>
                <div style="font-size: 32px;">Useraname</div>
                <input name="username"/>
            </div>

            <div>
                <div style="font-size: 32px;">Password</div>
                <input type="password" name="password"/>
                <button type="submit" class="btn btn-primary d-block" style="font-size: 32px; margin-top: 50px;">Submit</button>
            </div>
        </form>
        <?php 
            if (user_submitted()) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                if (!account_duplicates($db, $username)) {
                    $query = 'INSERT INTO users (username, password) VALUES (?, ?);';
                    $stmnt = $conn->prepare($query);
                    $stmnt->bind_param('ss', $username, $password);
                    $stmnt->execute();
                    header('Location: '. '/');
                }
            }
        ?>
    </div>
</body>
</html>