<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>
    <p>Created at: {{$post->created_at}}</p>
    <p>Updated at: {{$post->updated_at}}</p>
    <p>Author : {{$post->user->name}}</p>
</body>
</html> 