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
        <h1>Admin</h1>    
    </div>
    <div>
        <h1>Real state portal</h1>
    </div>
    <div>
        <div>
            <button><a href="adminLogin.php">logout</a></button>
    </div>
    </div>
   </nav>
<h1>Add Brokers:</h1>
<section>
    <form method='post' action="{{route('insertBroker')}}">
        @csrf
    <ul class='showBrokerLI'>
        <li>
            <label for="">Name</label>
            <input type="text" name='name' value='' >
        </li>
        <li>
            <label for="">Contact</label>
            <input type="text" name='contact' value='' >
        </li>
        <li>
            <label for="">Email</label>
            <input type="email" name='email' value='' >
        </li>
        <li>
            <label for="">Experience</label>
            <input type="text" name='experience' value='' >
        </li>
        <li>
            <label for="">Property</label>
            <input type="text" name='property' value='' >
        </li>
        <li>
            <label for="">Commission</label>
            <input type="text" name='commission' value='' >
        </li>
        <li>
            <label for="">Status</label>
            <input type="text" name='status' value='' >
        </li>   
        <li>
        <button type="submit">Add</button>
        </li>
    </ul>
    </form>
</section>
@include('footer')
</body>
</html>