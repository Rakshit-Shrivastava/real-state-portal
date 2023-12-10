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
        <h1>Broker</h1>    
    </div>
    <div>
        <h1>Real state portal</h1>
    </div>
    <div>
        <div>
            <button><a href="brokerLogin.php">logout</a></button>
    </div>
    </div>
   </nav>
<h1>Add Properties:</h1>
<section style='margin-top: 40px'>
    <ul class='showBrokerLI'>
        <li>
            <label for="">Name</label>
            <input type="text">
        </li>
        <li>
            <label for="">Contact</label>
            <input type="text">
        </li>
        <li>
            <label for="">Address</label>
            <input type="text">
        </li>
        <li>
            <label for="">City</label>
            <input type="text">
        </li>
        <li>
            <label for="">Zip code</label>
            <input type="text">
        </li>
        <li>
            <label for="">Property type</label>
            <input type="text">
        </li>
        <li>
            <label for="">Area</label>
            <input type="text">
        </li>
        <li>
            <label for="">Total Valuation</label>
            <input type="text">
        </li>
        <li>
            <label for="">Status</label>
            <input type="text">
        </li>
        <li>
        <button><a href="showProperty.php">Add</a></button>
        </li>
    </ul>
</section>
<?php include_once "footer.php" ?>
</body>
</html>