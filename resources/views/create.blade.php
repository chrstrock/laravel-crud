<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Create</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
<body class='antialiased m-10'>
    <h1 class="text-3xl font-bold mb-10">Create Post</h1>

    <form action="{{url('/create')}}" method="POST">
        @csrf

        
        <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

        <textarea name="content" rows="3" class="block border border-gray-500 w-80 mb-3"></textarea>
    

        <button type="submit" class="p-2 rounded-md bg-indigo-500 text-white">Create</button>
    </form>
</body>
</html>