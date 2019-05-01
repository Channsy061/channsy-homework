<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-bottom:10px;
}
.row .row a 
{
    text-decoration:none;
}
p 
{
    float:right;
    padding:0px;
}


button:hover, a:hover {
  opacity: 0.7;
}
h2 
{
   
    animation-name:discount;
    animation-duration:4s;
    animation-iteration-count: 100;
}
@keyframes discount
{
    0%{color:orange;}
    25%{color:black;}
    50%{color:green;}
    75%{color:yellow;}
    100%{color:black;}
}
.breadcrumb-item
{
    padding-top:26px;
    padding-left:20px;
}
</style>
</head>
<body>
 <?php include('header.php');?>
<div class="container">
    
    <ul class="breadcrumb bg-white">
        <h3>Product</h3>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item">Home</li>
    </ul>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic.jpg" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic1.png" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price : 25$</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic3.png" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price : 20$</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic.jpg" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price 15$</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic.jpg" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price : 25$</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="product_detail.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/pic.jpg" alt="John" style="width:100%">
                                <div style="padding-top:30px"><p>Price : 25$</p></div>  
                            </div>
                            <div class="card-footer">
                                Product Name
                            </div>                   
                        </div>
                    </a>
                </div>
            
            </div>
    
            <ul class="pagination d-flex justify-content-center mt-5">
                 <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
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
               
            </div>
        
    </div>    
</div>
<?php include('footer.php'); ?>

