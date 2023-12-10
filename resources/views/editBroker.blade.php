<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real State Portal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}

a{
    text-decoration: none;
}

nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-radius: 10px;
    background-color: rgb(207, 207, 207);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

button{
    width: 50px;
    border-radius: 5px;
    padding: 5px;
    cursor: pointer;
    padding-left: 2px;
}

section{
    width: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

table tr td, th {
    margin: 5px;
    padding: 5px;
}

table tr th {
    border-bottom: 1px solid grey;
}

table tr:nth-child(even){
    background-color: rgb(219, 219, 212);
}

.action{
    display: flex;
    gap: 5px;
}

h1{
    text-align: center;
    margin: 20px;
}

footer{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    text-align: center;
    background-color: rgb(207, 207, 207);
}

.showBrokerLI li{
    width: 500px;
    list-style: none;
    display: flex;
    padding: 5px;
    margin: 10px;
}

label{
    flex: 1
}

input {
    flex: 2;
    padding: 2px;
    border: none;
    border-bottom: 1px solid grey;
}


    </style>
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
            <button style='margin-right:50px'><a href="adminLogin.php">logout</a></button>
    </div>
    </div>
   </nav>
<h1>Add Brokers:</h1>
<section>
    <form method='post' action="{{route('updateBroker', $broker->id)}}">
        @csrf
        @method('put')
    <ul class='showBrokerLI'>
        <li>
            <label for="">Name</label>
            <input type="text" name='name' value='{{$broker->name}}' >
        </li>
        <li>
            <label for="">Contact</label>
            <input type="text" name='contact' value='{{$broker->contact}}' >
        </li>
        <li>
            <label for="">Email</label>
            <input type="email" name='email' value='{{$broker->email}}' >
        </li>
        <li>
            <label for="">Experience</label>
            <input type="text" name='experience' value='{{$broker->experience}}' >
        </li>
        <li>
            <label for="">Property</label>
            <input type="text" name='property' value='{{$broker->property}}' >
        </li>
        <li>
            <label for="">Commission</label>
            <input type="text" name='commission' value='{{$broker->commission}}' >
        </li>
        <li>
            <label for="">Status</label>
            <input type="text" name='status' value='{{$broker->status}}' >
        </li>   
        <li>
        <button type="submit" style='width: 80px'>Update</button>
        <button type="submit" style='width: 80px'><a href="{{route('showBroker')}}">Cancel</a></button>
        </li>
    </ul>
    </form>
</section>
@include('footer')
</body>
</html>