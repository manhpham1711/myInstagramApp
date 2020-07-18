<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid mt-3">
         <h4 class="mb-2">Add Information Book</h4>
         <form action="/add/book" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="name">Name Book</label>
                  <input type="text" class="form-control"
                     id="name" name="name" placeholder="Name Book">
               </div>
               <div class="form-group col-sm-6">
                  <label for="price">Price</label>
                  <input type="number" class="form-control"
                     id="price" name="price" placeholder="Price">
               </div>
            </div>

            <div class="form-group">
               <label for="inputAddress">Image</label>
               <input type="file" class="form-control"
                  id="myAddress" name="photo">
            </div>

           <!--  <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="myCity">City</label>
                  <input type="text" class="form-control" id="myCity">
               </div>
               <div class="form-group col-sm-4">
                  <label for="myState">State</label>
                  <select id="myState" class="form-control">
                     <option selected>Choose...</option>
                     <option>...</option>
                  </select>
               </div>
               <div class="form-group col-sm-2">
                  <label for="myZip">Zip</label>
                  <input type="text" class="form-control" id="myZip">
               </div>
            </div>
            <div class="form-group">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="myCheck">
                  <label class="form-check-label" for="myCheck">
                  Check me out
                  </label>
               </div>
            </div> -->

            <button type="submit" class="btn btn-primary">Add</button>
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>