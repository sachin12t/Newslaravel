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
    <form action="insertblogs" method="post" enctype="multipart/form-data" class="letest">
        @csrf
        <input type="text" name="btitle" placeholder="Enter title.." style="height: 30%; width:400px; padding:1rem"><br><br>
        <textarea type="text" name="bpara" placeholder="Enter para.." style="height: 30%; width:400px; padding:1rem"></textarea><br><br>
         <input type="file" name="image" ><br><br>
         <input type="text" name="button" placeholder="Enter button.." style="height: 30%; width:400px; padding:1rem"><br><br>

        <a href="admin/showblog"><input type="submit" class="creat-submit" style="width:100px; padding:1rem"></a>
    </form> 
</div> 