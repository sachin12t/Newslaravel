<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Letast News</title>
    <style>
        .ltable{
            display: flex;
            padding-top:3rem; 
            justify-content: center;
        }
        .ladd{
            text-align: center;
            padding:1rem;
        }
        .ladd button{
            padding: 1rem;
            background: green;
            border-radius: 10px;
        }
    </style>
</head>
@include('admin.deshboard')
<body>
    <h2 style="text-align: center; padding:2rem"><a href="{{route('insertblog')}}" class="ladd"><button>Add Data</button></a></h2>
    <div class="ltable">
   
    <table border="1" style="text-align: center">
        <tr>
            <th>Id</th>
            <th>title</th>
            <th>image</th>
            <th>paragraph</th>
            <th>button</th>
            <th>time</th>
            <th>update time</th>
            <th>Action</th>
        </tr>
        @foreach ($blog as $blogs )
        <tr>
            <td>{{$blogs->id }}</td>
            <td>{{$blogs->btitle }}</td>
            <td><img src="{{asset('images/'.$blogs->image)}}" height="100px" width="100px" alt="path iuncarect"></td>
            <td>{{$blogs->bpara }}</td>
            <td>{{$blogs->button }}</td>
            <td>{{$blogs->created_at }}</td>
            <td>{{$blogs->updated_at }}</td>
            <td>
                <a href=""><button>edit</button></a>
                <a href="{{route('delete',$blogs->id)}}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
       
    </table>

    

</div>

</body>
</html>