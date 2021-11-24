<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CRUD Login</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="m-10">
        @if($errors->any())
            <div class="bg-red-200 p-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="email" class="block">Email:</label>
                <input type="text" id="email" name="email" class="border border-gray-200 p-1">
            </div>
    

            <div class="mb-5">
                <label for="password" class="block">Password:</label>
                <input type="password" name="password" id="password" class="border border-gray-200 p-1">
            </div>

            <button type="submit" class="rounded bg-indigo-500 text-white px-4 py-2">Log In</button>
        </form>
    </body>
</html>