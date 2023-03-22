<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  
  <style>
  html, body {
  height: 100%;
  width: 100%;
  margin: 0;
}
body {
  background-color: ##0F2027; background: -webkit-linear-gradient(to top, #0F2027, #203A43, #2C5364); background: linear-gradient(to top, #0F2027, #203A43, #2C5364);
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
  <body>
    <div class='container border border-primary' style="width:500px; border-radius:25px; background-color:white"> 
        <form method = "post" action="http://localhost/codeigniter/public/process/login" class="mx-auto mt-5" style="max-width:320px">
        
          <h2 class="text-center mb-3"> Welcome! </h2>
        <h3 class="text-center mb-3"> LOGIN </h3>
            <div class="mb-3">
               <label class="form-label">Username</label>
               <input class="form-control" type = "text" name="username"/>
            </div>
            <div class="mb-3">
               <label class="form-label">Password</label>
               <input class="form-control" type = "password" name="pass"/>
            </div>
            <div class="mb-3">
               <button class="btn btn-primary" type="sub">Login</button>
            </div>
            <div class="mb-3 text-end">
                <a href="#register" class="btn btn-secondary">Register</a>
            </div>
            

        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>

  
</html>