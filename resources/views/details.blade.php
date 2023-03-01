
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .button:hover{ background-color: #3e8e41};
        .zoom{
            transition: transform .3s;
        }
        .zoom:hover
         {
       -ms-transform: scale(1.2); 
      -webkit-transform: scale(1.3);
       transform: scale(1.2); 
       
        }
        .item{

            padding-top:44px;
            /* margin-left:10%;
            margin-right:5%; */
        }
        .card-title{

            
            font-size:18px;
            font-weight:bold;
        }
        body
        {
            background-color:lightgray;
        }
        .wrap{
            margin:auto;
            width:95%;
        }
        .row{
            font-size:17px;
            /* font-weight:bold; */
            color:black;
        }
        .cl{
            color:black;
           
            font-weight:bold;
            font-size:17px;
        }
        .zoominside{
            margin:auto;
            weight:98%;
        }
        .imgset{
            margin:auto;
            width:90%;
            height:308px;
        }

        .navbar-container {
 
 font-size: 22px;
 background-color: rgb(34,43,69); 
 

}

#navbarNav a{
 color:white;
}




.footer-basic {
    padding:40px 0;
    background-color:rgb(34,43,69);
    color:#fefeff;
  }
  
  .footer-basic ul {
    padding:0;
    list-style:none;
    text-align:center;
    font-size:18px;
    line-height:1.6;
    margin-bottom:0;
  }
  
  .footer-basic li {
    padding:0 10px;
  }
  
  .footer-basic ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.8;
  }
  
  .footer-basic ul a:hover {
      color: cyan;
    opacity:1;
  }
  
  .footer-basic .social {
    text-align:center;
    padding-bottom:25px;
  }
  
  .footer-basic .social > a {
    font-size:24px;
    width:40px;
    height:40px;
    line-height:40px;
    display:inline-block;
    text-align:center;
    border-radius:50%;
    border:1px solid #ccc;
    margin:0 8px;
    color:inherit;
    opacity:0.75;
  }
  
  .footer-basic .social > a:hover {
      color: rgb(71, 71, 238);
    opacity:0.9;
  }
  
  .footer-basic .copyright {
    margin-top:15px;
    text-align:center;
    font-size:13px;
    color:rgb(202, 197, 197);
    margin-bottom:0;
  }

 #ccl{
     color:rgb(200, 0, 0);
     font-size:25px;
     font-style:italic;
 }


    </style>
</head>
<body>

   
<div class="navbar-container" style="margin-bottom:10px">
   
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand " id="ccl" href="#">BIKE-ZONE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" style='margin-left : 20px;'>
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item" style='margin-left : 20px;'>
          <a class="nav-link" href="#pulsar">BAJAJ</a>
        </li>
        <li class="nav-item" style='margin-left : 20px;'>
          <a class="nav-link" href="#yamaha">YAMAHA</a>
        </li>
        <li class="nav-item" style='margin-left : 20px;'>
        <a class="nav-link" href="#tvs">TVS</a>
        </li>
       
        </li>
        <li class="nav-item" style='margin-left : 20px;'>
        <a class="nav-link" href="#honda">HONDA</a>
        </li>

      </ul>
    </div>
  </div>
</nav>        

</div> 




<h1 style="padding-top:50px; text-align:center;padding-bottom:50px;
text-shadow: 2px 2px 3px {{strtolower($data['colour'])}}; color :{{strtolower($data['colour'])}}">{{$data['model']}}</h1>

 


<div action="/details" class="wrap" >

<div class="row">

<div class="col-sm-6">
    <div class="zoominside">
    <div class="item">
<img class="zoom imgset" src={{$data['pic']}} alt="">

</div>

    </div>

</div>


@csrf

<div class='container col-6'>

<div class='row'>

<div class='col-sm-4 card-title'>Category</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['category']}}</div>

</div>

<div class='row'>
<div class='col-sm-4 card-title'>Color</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['colour']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>CC</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['cc']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>Gear-Box</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['gearbox']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>Max-Power</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['maxpower']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>Enginetype</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['enginetype']}}</div>
</div>


<div class='row'>
<div class='col-sm-4 card-title'>Fuel Type</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['fueltype']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>Fuel Tank Capacity</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['fueltankcapacity']}}</div>
</div>



<div class='row'>
<div class='col-sm-4 card-title'>Transmission Type</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['transmissiontype']}}</div>
</div>

<div class='row'>
<div class='col-sm-4 card-title'>Made In</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['made']}}</div>
</div>


<div class='row'>
<div class='col-sm-4 card-title'>Price</div>
<div class='col-sm-1 cl'>:</div>
<div class='col-sm-7'>{{$data['price']}}</div>
</div>



 



</div>

</div>
</div>
    <br><br>
    <br>
    <br>


    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">BIKE-ZONE © 2021</p>
        </footer>
    </div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


</body>
</html>

