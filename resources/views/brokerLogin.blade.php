<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div>
        <h1>logo</h1>    
    </div>
    <div>
        <h1>Real state portal</h1>
    </div>
    <div>
        <div>
            <button><a href="adminLogin.php">Admin</a></button>
    </div>
    </div>
   </nav>
    <section>
        <h1>Please login to continue...</h1>
    <ul class='showBrokerLI'>
        <li>
            <label for="">Email</label>
            <input type="email" require>
        </li>
        <li>
            <label for="">Password</label>
            <input type="password" require>
        </li>
        <li>
        <button><a href="showProperty.php">Login</a></button>
        </li>
</ul>
    </section>
    <?php include_once "footer.php" ?>
</body>
</html>