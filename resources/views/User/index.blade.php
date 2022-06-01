<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Users</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/backend/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/backend/assets/dist/css/adminlte.min.css">
</head>


<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
    </tr>
    </thead>

    <tbody>
@foreach($users as $user)

    <tr>
        <th >{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>

            <form action="{{route('user.destroy' , $user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <!-- <input class="btn btn-danger" type="submit" value="Delete" > -->

            <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </td>
        <td><a href="{{route('user.edit' , $user->id)}}"><button type="button" class="btn btn-info">Update</button></a></td>
    </tr>
@endforeach

    </tbody>
</table>

<!-- <a href="{{url('user/create')}}">Create</a> -->

<a href="{{url('user/create')}}"><button type="button" class="btn btn-primary">Add New User</button></a>



<!-- @if(Session::has('add_ms'))
{{Session::get('add_ms')}}
@endif -->
@if(Session::has('add_ms'))
<div class="alert alert-success" role="alert">
{{Session::get('add_ms')}}
</div>
@endif

@if(Session::has('up_ms'))
<div class="alert alert-primary" role="alert">
{{Session::get('up_ms')}}
</div>
@endif

@if(Session::has('com_ms'))
<div class="alert alert-primary" role="alert">
{{Session::get('com_ms')}}
</div>
@endif

@if(Session::has('del_ms'))
<div class="alert alert-danger" role="alert">
{{Session::get('del_ms')}}
</div>
@endif


<!-- jQuery -->
<script src="http://127.0.0.1:8000/backend/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://127.0.0.1:8000/backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="http://127.0.0.1:8000/backend/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="http://127.0.0.1:8000/backend/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://127.0.0.1:8000/backend/assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
