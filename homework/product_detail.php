<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
  
  .carousel-inner  {
      width: 100%;
      height: 100%;
      margin:0px;
      padding:0px;
     
  }
body 
{
    margin:0px;
    padding:0px;
    background-color:gray;
}
h2 
{
    animation:example;
    animation-duration:3s;
    animation-iteration-count: 100;
}
@keyframes example 
{
    0%{color:red;}
    25%{color:blue;}
    50%{color:green;}
    75%{color:yellow;}
    100%{color:orange;}
}
  </style>
</head>

<?php include('header.php'); ?>
<div class="container">
  
    <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img src="image/pic3.jpg" alt="Los Angeles" width="100%" height="300px">
            </div>
            <div class="carousel-item">
                <img src="image/pic4.jpg" alt="Chicago" width="100%" height="300px">
            </div>
            <div class="carousel-item">
                <img src="image/pic5.jpg" alt="New York" width="100%" height="300px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
            <div class="col-lg-8">
                <div class="col-md-12 bg-light ">
                    <img class="mx-auto d-block pt-5" src="image/pic6.png" width="60%"/>
                    <h3 class="pt-4 pb-3">Detail Of Product</h3>
                   <table class="table  table-hover">
                        <tr>
                            <th>Product Name</th>
                            <td>Man Shirt</td>
                        </tr>
                        <tr>
                            <th>Color </th>
                            <td>Back , Gray , Dark , Blue , Red</td>
                        </tr>
                        <tr>
                            <th>Size</th>
                            <td>S , M , L , XL</td>
                        </tr>
                        <tr>
                            <th>Product From</th>
                            <td>Hong Kong</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>50$</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>+855 612 779 28 | +855 989 260 14</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>channsynarins@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Follow Us</th>
                            <td>
                                <a href="#" title="facebook page"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                                <a href="#" title="istagram"><i class="fa fa-instagram" style="font-size:36px"></i></a>
                                <a href="#" title="linkin"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                                <a href="#" title="snapchat"><i class="fa fa-snapchat-square" style="font-size:36px"></i></a>
                                <a href="#" title="skype"><i class="fa fa-skype" style="font-size:36px"></i></a>
                            </td>
                        </tr>
                   </table>
                </div>
                
            </div>
            <div class="col-lg-4 mb-3">
              <div class="row">
              
                 <div class="col-12 col-sm-12">
                     <div class="card">
                         <div class="card-header bg-dark text-white">
                               Contact &lt;Your SiteName&gt;
                        </div> 
                        <div class="card-body bg-light">
                            <div class="pb-3">Number&lt;+855 061 277 928&gt;</div>
                            <div class="pb-3">Email &lt;channsy@gmail.com&gt;</div>
                            <div class="pb-3">Address &nbsp;&lt;Phnom Penh Cambodia&gt;</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                     <div class="card">
                         <div class="card-header bg-dark text-white">
                               Contact &lt;Your SiteName&gt;
                        </div> 
                        <div class="card-body bg-light">
                            <i class="fa fa-arrow-right pr-3" style="font-size:24px "></i>MENS DRESS SHIRTS<br>
                            <i class="fa fa-arrow-right pr-3" style="font-size:24px "></i>MENS DRESS SHIRTS<br>
                            <i class="fa fa-arrow-right pr-3" style="font-size:24px "></i>MENS DRESS SHIRTS<br>
                            <i class="fa fa-arrow-right pr-3" style="font-size:24px "></i>MENS DRESS SHIRTS<br>
                           
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <img src="image/source.gif" alt="Advertisment" width="100%"/>
                            <h2>Discount 35%</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 mt-5">
                    <div class="card">
                        <div class="card-body bg-dark">
                            <img src="image/source1.gif" alt="Advertisment" width="100%"/>
                            <h2>Discount 20%</h2>
                        </div>
                    </div>
                </div>
            </div>
              </div>
              
           </div>
    </div>
</div>
<?php include('footer.php'); ?>