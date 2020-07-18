<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: inline-block;
            border: 4px solid lightblue;
            height: auto;
            width:auto;
            margin: 20px;
}
    </style>
</head>
<body>
    <center><h1>Menu Book</h1></center>
<hr>
<form action="/add" method="get">
    <center><button type="submit"> Add Information Book </button></center>
</form>
<br>
    <form action="" method="post">
    @foreach ($db as $infomation) 
           <div><h1> Name Book: {{$infomation->Name}} </h1>
           <h5>Price: {{$infomation->Price}}</h5>
            <p>Image: <img src="{{$infomation->Image}}" width="304" height="236"></p>

           <div class="form-row">
               <div class="form-group col-sm-6">
               <form action = '{{"/delete/".$infomation->ID}} ' method = "POST">
                @csrf
                @method("DELETE")
                <center><button type = "submit">Delete </button></center></form>
               </div>
               <div class="form-group col-sm-4">
               <form action = '{{"/edit/".$infomation->ID}} ' method = "POST">
                @csrf
                @method("DELETE")
                <center><button type = "submit">edit </button></center></form>
               </div>
           </div>
           </div></hr>
        @endforeach
    </form>
</body>
</html>