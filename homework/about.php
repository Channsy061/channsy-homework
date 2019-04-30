<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    img 
    {
        margin-top:10px;
    }
    #content
    {
        padding:10px;
    }
    th 
    {
        font-size:20px;
        color:black;
    }
    td 
    {
        font-size:17px;
    }
  </style>
</head>
<body>
<?php include('header.php') ?>
<div class="container">
    <div class="bg-primary" id="content">
          <img src="image/logoss.png" class="mx-auto d-block " style="width:60%"> 
          <table class="table table-borderless mt-5">
            <tr>
                <th>Shop's Name </th>
                <td>&quot;Stop And Shop.&quot;</td>
            </tr>
            <tr>
                <th>Owner Name</th>
                <td><b>Chann Sy.<b></td>
            </tr>
            <tr>
                <th>Shop Number</th>
                <td>N<sup>o</sup>&nbsp;<em>AA-100 , AA-101 , AA-102.</em></td>
            </tr>
            <tr>
                <th>Created In</th>
                <td>Year 2000-2001.</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>Orussey Market.</td>
            </tr>
            <tr>
                <th>Address</th>
                <td><address>St 201 , 200 E<sup>o</sup> Khan <i>7 Makara</i> Songkat <i>Tom Nop Tek , </i> Phnom Penh , Cambodia.</address></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>+855 612 779 28 | +855 989 260 14</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td>channsynarins@gmail.com</td>
            </tr>
            <tr>
                <th>Follow Us</th>
                <td>
                    <a href="#" title="Facebook"><i class="fa fa-facebook-square" style="font-size:36px; color:gold"></i></a>
                    <a href="#" title="skype"><i class="fa fa-skype" style="font-size:36px; color:gold"></i></a>
                    <a href="#" title="twitter"><i class="fa fa-twitter-square" style="font-size:36px; color:gold"></i></a>
                    <a href="#" title="whatsapp"><i class="fa fa-whatsapp" style="font-size:36px; color:gold"></i></a>
                    <a href="#" title="tumblr"><i class="fa fa-tumblr-square" style="font-size:36px; color:gold"></i></a>
                </td>
            </tr>
        </table>
    </div>
   
</div>
<?php include('footer.php'); ?>
</body>
</html>
