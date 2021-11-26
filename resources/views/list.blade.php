<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>


    

</head>
<body class="antialised m-10">
    <h1 class="text-3xl font-bold mb-10">Posts</h1>
    <table id="post_table" class="display">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Post Content</th>
                <th>Create/ Update / Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><span class="w-1/5">{{$post->user->name}}</span></td>
                <td><p class="w-2/5">{{ $post->content }}</p></td>
                <td>
                    <div class="w-1/5 flex">
                        <a href="{{url('/create')}}" class="rounded-md bg-green-500 text-white p-2">Create</a>
                        <a href="{{url('/posts/'.$post->id)}}" class="ml-2 rounded-md bg-indigo-500 text-white p-2">Update</a>
                        <form action="{{url('/posts/'.$post->id)}}" method="POST" class="p-2 ml-2 rounded-md bg-red-500 text-white">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
        
                    </div>
                </td>
            </tr>
            @endforeach
            
        </tbody>        
    </table>
    {{-- <ul>
        @foreach ($posts as $post)    
        
        <li class="flex items-center mb-5">
            <span class="w-1/5">{{$post->user->name}}</span>
            <p class="w-2/5">{{ $post->content }}</p>
            <div class="w-1/5 flex">
                <a href="{{url('/posts/'.$post->id)}}" class="rounded-md bg-indigo-500 text-white p-2">Update</a>
                <form action="{{url('/posts/'.$post->id)}}" method="POST" class="p-2 ml-2 rounded-md bg-red-500 text-white">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </div>
        </li>
        @endforeach
        
    </ul> --}}

    <script type="text/javascript">
        $(document).ready( function () {
            $('#post_table').DataTable(
                {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy','excel','pdf'
                    ]
                }
            );
        } );
    </script>
</body>
</html>