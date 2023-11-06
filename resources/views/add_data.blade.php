<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>
    
        <form action="{{url('/store-data')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="name" placeholder="Inter Your Full Name">
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
              <div id="nameHelp" class="form-text">We'll never share your Name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email" placeholder="Inter Your Email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>