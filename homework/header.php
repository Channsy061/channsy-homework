<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style type="">
    .close
    {
      cursor: pointer;
    }

  </style>
  </head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand ml-5 pb-0 pt-0" href="#"><img src="logo1.png" width="170px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" >
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
              Products
            </a>
            <div class="dropdown-menu mt-2" >
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="#">About Us</a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="#">Contact US</a>
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
                    <table>
                      <form>
                        <tr>
                          <td>Usename &nbsp;&nbsp;</td>
                          <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                          <td>Email&nbsp;&nbsp;</td>
                          <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                          <td>Password&nbsp;&nbsp;</td>
                          <td><input type="text" name=""></td>
                        </tr>
                        <tr>
                          <td colspan="2"><input type="submit" name=""></td>
                        </tr>
                      </form>
                    </table>
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
