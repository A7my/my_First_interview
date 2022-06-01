<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Posts</title>

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
        <th scope="col">Title</th>
        <th scope="col">Go TO Post</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
    </tr>
    </thead>

    <tbody>
@foreach($posts as $post)

    <tr>
        <th >{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td><a href="{{route('post.show' , $post->id)}}"><button type="button" class="btn btn-info">Go To Post</button></a></td>
        <td>

            <form action="{{route('post.destroy' , $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <!-- <input class="btn btn-danger" type="submit" value="Delete" > -->

            <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </td>
        <td><a href="{{route('post.edit' , $post->id)}}"><button type="button" class="btn btn-info">Update</button></a></td>
    </tr>
@endforeach

    </tbody>
</table>








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


@if(Session::has('del_pos'))
<div class="alert alert-danger" role="alert">
{{Session::get('del_pos')}}
</div>
@endif





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
