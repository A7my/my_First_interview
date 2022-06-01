<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Post Number {{$post->id}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/backend/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://127.0.0.1:8000/backend/assets/dist/css/adminlte.min.css">
</head>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Post Title</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" readonly value="{{$post->title}}" >
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Post Body</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" readonly rows="3">{{$post->body}}</textarea >
</div>


<h2>#Comments</h2>
@foreach($comment as $comment)
<input class="form-control" value="{{$comment->comment}}" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
<br>
@endforeach












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
