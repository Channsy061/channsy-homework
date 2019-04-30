<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="">
    .close
    {
      cursor: pointer;
    }
     a
    {
      text-decoration:none;
    }
  </style>
  </head>
<body>
  
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <a class="navbar-brand ml-5 pb-0 pt-0" href="index.php"><img src="image/logoss.png" width="170px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" >
          <span class="navbar-toggler-icon"></span>
        </button>
      
      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-lg-auto ">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown text text-white">
            <a class="nav-link dropdown-toggle" href="product.php" data-toggle="dropdown">
              Products
            </a>
            <div class="dropdown-menu mt-2" >
              <a class="dropdown-item" href="product.php">Shirt</a>
              <a class="dropdown-item" href="product.php">Jacket</a>
              <a class="dropdown-item" href="product.php">Tie</a>
            
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" id="login" href="#">Login</a>
            <div id="popup" class="modal ">
              <div class="container" style="width: 400px;margin-top: 50px;margin-top:68px">
                <div class="card">
                  <div class="card-header">
                    Login Form
                    <span class="close">&times;</span>
                  </div>
                  <div class="card-body">
                  <div class="container-fluid">
                    <table>
                        <form action="#">
                            <div class="form-group">
                              <label for="email">Email address:</label>
                              <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="checkbox">
                              <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default bg-primary text text-white" >Submit</button>
                        </form>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>
  </div>
  
  <script type="text/javascript">
    var a=document.getElementById('login');
    var b=document.getElementById('popup');
    var c=document.getElementsByClassName('close')[0];
    a.onclick=function()
    {
        b.style.display="block";
    }
    c.onclick=function()
    {
        b.style.display="none";
    }
    window.onclick = function(event) {
  if (event.target == modal) {
    a.style.display = "none";
     }
    }
  </script>
</body>
</html>
