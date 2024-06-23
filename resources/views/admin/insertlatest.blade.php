<head>
    <style>
        .container-l{
            display: flex;
            padding-top:3rem; 
            justify-content: center;
        }
    </style>
</head>
@include('admin.deshboard')
<div class="container-l ">
    <form action="insertletastnews" method="post" enctype="multipart/form-data" class="letest">
        @csrf
        <input type="text" name="ltitale" placeholder="Enter title.." style="height: 30%; width:400px; padding:1rem"><br><br>
        <input type="file" name="limage" ><br><br>
        <a href="admin/showletastenews"><input type="submit" class="creat-submit" style="width:100px; padding:1rem"></a>
    </form> 
</div> 