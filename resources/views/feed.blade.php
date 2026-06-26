<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <h1>Tout les publications</h1>

    @foreach($posts as $post)
    <h3>{{$post->user->name}}</h3>
   
    <p>{{$post->content}}</p>
    @endforeach

    <img
    src="{{ asset($post->user->image_url) }}"
    alt="Photo de profil"
    class="w-20 h-20 rounded-full object-cover border border-gray-300">
</body>
</html>