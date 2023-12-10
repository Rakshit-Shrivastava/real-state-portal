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
            <button><a href="{{route('addBroker')}}">Add</a></button>
            <button><a href="{{route('index')}}">logout</a></button>
    </div>
    </div>
   </nav>
<h1>Available Brokers:</h1>
<section>
   <table>
  <tr>
    <th>Name</th>
    <th>Contact</th>  
    <th>Email</th>
    <th>Experience</th>
    <th>Commission</th>
    <th>Property</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
  @if(count($brokers))
  @foreach($brokers as $index => $broker)
  <tr>
    <td>{{$broker->name}}</td>
    <td>{{$broker->contact}}</td>
    <td>{{$broker->email}}</td>
    <td>{{$broker->experience}} year</td>
    <td>1{{$broker->commisiion}} %</td>
    <td>{{$broker->property}}</td>
    <td>{{$broker->status}}</td>
    <td class='action'>
      <button><a href="{{route('editBroker',$broker->id)}}">Edit</a></button>
      <form action="{{route('deleteBroker',$broker->id)}}" method="post">
        @csrf
        @method('DELETE')
      <button type="submit">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
  @endif
</table>
   </section>
  @include('footer');
</body>
</html>