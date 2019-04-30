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
  <style>
    
    #myBtn
     {
        display: none;
        position: fixed;
        bottom: 50px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 13px;
        border-radius: 4px;
    }

#myBtn:hover {
  background-color: #555;
}
  .carousel-inner
    {
      width: 100%;
      height: 100%;
   }
  .card
   {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
        margin-bottom:10px;
    }
    p 
    {
        float:right;
        padding:0px;
    }


    button:hover, a:hover 
    {
        opacity: 0.7;   
    }
    .container .row a 
    {
        text-decoration:none;
    }
    #image 
    {
       
        padding: 20px;
        background: url('image/cumulus.jpg');
        max-width:100%;
        
        background-repeat: no-repeat;
     
    }
  </style>
</head>
<body>
<?php  include('header.php'); ?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up" style="font-size:36px"></i></button>
   <div class="container mt-3">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/pic3.jpg" alt="Los Angeles" width="100%" height="330px">
        </div>
        <div class="carousel-item">
            <img src="image/pic4.jpg" alt="Chicago" width="100%" height="330px">
        </div>
        <div class="carousel-item">
            <img src="image/pic5.jpg" alt="New York" width="100%" height="330px">
        </div>
        </div>

       </div>
   </div>
   <div class="container mt-4 ">
    <div class="row">
        <div class="col-md-3 col-sm-6 ">
        <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic.jpg" alt="John" style="width:100%">
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pic1.png" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body ">
                        <img src="image/pic.jpg" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pic3.png" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body cover contain">
                        <img src="image/pic6.jpg" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pic6.jpg" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer text text-center">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pic6.jpg" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer text text-center">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <a href="product_detail.php">
                <div class="card">
                    <div class="card-body">
                        <img src="image/pic6.jpg" alt="John" style="width:100%"> 
                    </div>
                    <div class="card-footer text text-center">
                        Product Name
                    </div>                   
                </div>
            </a>
        </div>
    </div>
    <div id="image">
    <ul class="nav">
        <li class="nav-item">
            <h5>any image behinde this row</h5>
        </li>
    </ul>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <h3>interested in ads on our wesite?  50% off <span class="badge badge-secondary">Contact Us</span></h3>
        </li>
    </ul>
    </div>
   </div>
<?php include('footer.php'); ?>
<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
