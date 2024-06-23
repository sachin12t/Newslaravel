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
    <h2 style="text-align: center; padding:2rem"><a href="{{route('insertlatest')}}" class="ladd"><button>Add Data</button></a></h2>
    <div class="ltable">
   
    <table border="1" style="text-align: center">
        <tr>
            <th>Id</th>
            <th>ltitle</th>
            <th>image</th>
            <th>time</th>
            <th>update time</th>
            <th>Action</th>
        </tr>
        @foreach ($ldata as $lrecord )
        <tr>
            <td>{{$lrecord->id }}</td>
            <td>{{$lrecord->ltitale }}</td>
            <td><img src="{{asset('images/'.$lrecord->limage)}}" height="100px" width="100px" alt="path iuncarect"></td>
            <td>{{$lrecord->created_at }}</td>
            <td>{{$lrecord->updated_at }}</td>
            <td>
                <a href=""><button>edit</button></a>
                <a href="{{route('ldelete',$lrecord->id)}}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
       
    </table>

    

</div>

</body>
</html>