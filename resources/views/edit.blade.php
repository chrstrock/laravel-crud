<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Update</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-3xl font-bold mb-10">Update Post</h1>

    <form action="{{url('/posts/'.$post->id)}}" method="POST">
        @csrf
        <textarea name="content" rows="3" class="block border border-gray-500 w-80 mb-3">{{$post->content}}</textarea>
        <button type="submit" class="p-2 rounded-md bg-indigo-500 text-white">Update</button>
    </form>
</body>
</html>