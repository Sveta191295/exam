<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <body>
        <div class="container">         
            <h4>POSTS</h4>
            <div>            
                @foreach ($posts as $post)
                <div>
                    <h3>{{$post->title}}</h3>
                    <h4>{{$post->created_at}}</h4>
                    <p>{{$post->body}}</p>
                @auth
                    <p>{{$post->comments}}</p>
                @endauth

                
                </div> 
             @endforeach
            </div>     
        </div>
    </body>
</html>
</body>
</html>