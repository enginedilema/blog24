<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Container principal centrado -->
    <div class="max-w-4xl mx-auto py-8">
        
        <!-- Título del post -->
        <h1 class="text-4xl font-bold mb-4 text-center text-indigo-600">{{ $post->title }}</h1>
                    <!-- Información adicional del post -->
            <div class="flex justify-between items-center mb-4">
                <span class="text-sm text-gray-500">Author: <b>{{ $post->user->name }}</b></span>
                <span class="text-sm text-gray-500">Created at: {{ $post->created_at->format('M d, Y') }}</span>
            </div>
        <!-- Contenido del post -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-lg text-gray-700 mb-6">{{ $post->content }}</p>
            
        </div>

        <!-- Comentarios -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4 text-indigo-500">Comments</h2>
            
            <!-- Tabla de comentarios -->
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-indigo-100">
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Comment</th>
                        <th class="px-4 py-2 text-left font-medium text-gray-700">Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post->comments as $comment)
                        <tr class="border-t">
                            <td class="px-4 py-2 text-gray-700">{{ $comment->content }}</td>
                            <td class="px-4 py-2 font-bold text-gray-900">{{ $comment->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>