<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid mt-3">
         <h4 class="mb-2">Edit Information</h4>
        
         <form action="/update/book" method="post" enctype="multipart/form-data">
         @csrf
         @foreach ($dbedit as $infomation) 
       
            <input type="text" name="id" hidden value="{{$infomation->ID}}">
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="name">Name Book</label>
                  <input type="text" class="form-control"
                     id="name" name="nameNew" value="{{$infomation->Name}}">
               </div>
               <div class="form-group col-sm-6">
                  <label for="price">Price</label>
                  <input type="number" class="form-control"
                     id="price" name="priceNew" value="{{$infomation->Price}}">
               </div>
            </div>
            <div class="form-group">
               <label for="inputAddress">Image</label>
               <input type="file" class="form-control"
                  id="file" name="photoNew" value="{{$infomation->Image}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            @endforeach
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
    
</body>
</html>