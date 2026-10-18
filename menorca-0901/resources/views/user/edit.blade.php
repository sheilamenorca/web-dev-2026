<!DOCTYPE html>
<html lang="en">
<head>
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     <link rel = "stylesheet" href = "{{asset('resources/css/custom.css')}}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        #emailInput{
            font: size 20px;
            color:aquamarine;
        }
        .input-email{
            color:green !important;
        }

        h1{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1 style = "font-family: Poppins;background-color:deeppink">Edit User: </span> {{$id}} </span> </h1>
    
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
  
</nav>
<div class="container register-form">
    <div >
        <h1>HELLO</h1>
    </div>
    <div >
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label input-email">Email address</label>
        <input type="email" class="form-control input-email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example text area</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div >
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
</div>
</body>
</html>