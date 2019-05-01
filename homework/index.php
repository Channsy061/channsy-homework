<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up" style="font-size:36px"></i></button>
<?php include('header.php'); ?>  
<div class="container mt-3">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/pic3.jpg" alt="Los Angeles" width="100%" height="250px">
        </div>
        <div class="carousel-item">
            <img src="image/pic4.jpg" alt="Chicago" width="100%" height="250px">
        </div>
        <div class="carousel-item">
            <img src="image/pic5.jpg" alt="New York" width="100%" height="250px">
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
    <?php include('footer.php') ?>     
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
