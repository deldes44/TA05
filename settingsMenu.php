<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Parent Menu</title>
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <a class="btn btn-info" href="login.php" role="button">Back to Profiles</a>
        
        <div class="container text-center">
            <h1 class="h1">Parent Settings Menu</h1>
        </div>
        
        <div class="container text-center">
            <form action="settings.php" method="post">
                <input type="submit" value="App Settings" class="btn btn-primary" style="width:300px; height:80px;">
            </form>
            <form action="store.php" method="post">
                <input type="submit" value="Bookstore" class="btn btn-primary" style="width:300px; height:80px;">
            </form>
            <form action="info.php" method="post">
                <input type="submit" value="Account Info" class="btn btn-primary" style="width:300px; height:80px;">
            </form>
        </div>
        
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>