<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Container principal centrado -->
    <div class="max-w-4xl mx-auto py-8">
        
        <!-- Título de la página -->
        <h1 class="text-4xl font-bold mb-6 text-center text-indigo-600">Blog Posts</h1>
        
        <!-- Lista de posts -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <ul class="space-y-4">
                @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold text-indigo-500 hover:underline">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</body>
</html>