<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <h1 style="text-align:center">Edit Post</h1>

    {{-- <form action="{{route('post.update',[$post->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Enter Title:</label>
            <input type="text" value="{{$post->title}}" name="title">
        </div>
        <br>
        <div>
            <label for="body">Enter body:</label>
            <input type="text" name="body" value="{{$post->body}}">
        </div>
        <br>
        <input type="submit" value="Update Post">
    </form> --}}

    <!-- updated form -->

    <form style="margin-top:50px" action="{{route('post.update',[$post->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Enter Title</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="title" value="{{$post->title}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Enter Body</label>
              <div class="col-sm-10">
              <textarea placeholder="Enter body" type="text" class="form-control" name="body">{{$post->body}}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary " style="margin-left:650px"> Update Post</button>
              </div>
            </div>
    </form>


    <!-- End of updated form -->
    
</body>
</html>