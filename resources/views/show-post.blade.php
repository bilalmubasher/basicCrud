<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show all Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    {{-- <h1>All Posts</h1>
    <h3><a href="{{route('post.create')}}">Add Post</a></h3>
    <table style="border:solid 1px">
        <thead>
            <tr>
                <td>Sr#</td>
                <td>Title</td>
                <td>Body</td>
                <td>Action</td>
                <td>Action</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{++$sr}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table> --}}

     <h1>All Posts</h1>
    <h3><a href="{{route('post.create')}}">Add Post</a></h3>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <?php
            $sr = 0; 
        ?>
        <tbody>
            @foreach ($posts as $post)
          <tr>
            <th scope="row">{{++$sr}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a href="{{route('post.edit',[$post->id])}}">Edit</a></td>
            <form action="{{route('post.destroy',[$post->id])}}" method="POST">
                    @method('delete')
                    @csrf
                    <td><button type="submit" value="Delete">Delete</button></td>
            </form>
            
          </tr>
          @endforeach
          
        </tbody>
      </table>





</body>
</html>