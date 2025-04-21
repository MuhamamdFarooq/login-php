
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
</head>
<body>
    <h1>welcome to php</h1>
    <div class="container mt-4 w-50 border shadow p-3">

    <form method="POST" action="login.php">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Usern Name:</label>

    <input type="text"  class="form-label" name="username" placeholder = "enter username">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name = "password" placeholder = "enter password">
  </div>
  

  <button type="submit" class="btn btn-success" name = "login" >Submit</button>

  <a href="show.php" class = "btn btn-warning">Show Records</a>

</form>


    </div>
</body>
</html>