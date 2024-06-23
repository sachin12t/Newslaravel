<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Letast News</title>
    <style>
        .ctable{
            display: flex;
            padding-top:3rem; 
            justify-content: center;
        }
        .cadd{
            text-align: center;
            padding:1rem;
        }
        .cadd button{
            padding: 1rem;
            background: green;
            border-radius: 10px;
        }
    </style>
</head>
@include('admin.deshboard')
<body>
    <h2 style="text-align: center; padding:2rem"><a href="{{route('addcategeory')}}" class="cadd"><button>Add Data</button></a></h2>
    <div class="ctable">
   
    <table border="1" style="text-align: center">
        <tr>
            <th>Id</th>
            <th>categeory</th>
            <th>image</th>
            <th>time</th>
            <th>update time</th>
            <th>Action</th>
        </tr>
        @foreach ($categeory as $crecord )
        <tr>
            <td>{{$crecord->id }}</td>
            <td>{{$crecord->categoery }}</td>
            <td><img src="{{asset('images/'.$crecord->cimage)}}" height="100px" width="100px" alt="path iuncarect"></td>
            <td>{{$crecord->created_at }}</td>
            <td>{{$crecord->updated_at }}</td>
            <td>
                <a href=""><button>edit</button></a>
                <a href="{{route('cdelete',$crecord->id)}}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
       
    </table>

</div>
</body>
</html>