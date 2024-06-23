<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{

            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        .sidebar a{
            text-decoration: none;
            color: #fff;
            display: block;
            margin-top: 1rem;
           
        }
        .container{
            display: flex;
        }

        .sidebar{
            height: 100vh;
            width:20%;
            background: #363131;
            color: #fff;
            padding:3rem 4rem;
            font-size: 1.2rem;
            position: fixed;
             
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="sidebar">
            <a href="" class="dash-a">Home</a>
            <a href="{{route('lnewstable')}}">Letastnews</a>
            <a href="{{route('showcategeory')}}">Categeory</a>
            <a href="{{route('showblog')}}">Blog</a>
        </div>
      
    </div>
</body>
</html>