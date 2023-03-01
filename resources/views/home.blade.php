<!DOCTYPE html>
<html lang="en">
<head>
  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Home page</title>

    <style>
   .button {
     margin-top:10px;
     margin-bottom:15px;
  position: relative;
  background-color: #4D9AA2;
  border: none;
  font-size: 20px;
  color: #FFFFFF;
  padding: 5px;
  width: 40%;
  text-align: center;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  border-radius: 10px;
}

.button:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
    </style>
  
    
</head>

<body>
  <!-- <h1 style="color: #FF136F" >$1200</h1>

            <button class="buy-now-button">Buy Now</button> -->

 <div class="navbar-container" style="margin-bottom:10px">
   
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" style='margin-left : 20px;'>
          <a class="nav-link active" aria-current="page" href="#home">HOME</a>
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

<div id="home"></div>



<div class="container">

<div id="carouselExampleControls" class="carousel slide orange-bd" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row align-items-center">
            <div class="col-md-6">
            
            <h1>Yamaha Bike</h1>
            <p>YZF-R1 is a lot like its track brother YZR-M1. With pure MotoGP blood, a crossplane engine, short wheelbase chassis and high-tech electronics, the YZF-R1 is ready to take your riding experience to a whole new level.Developed on the same racing DNA as its elder brother, YZF-R1</p>

            

            </div>
            <div class="col-md-6">
                <img src="images/sl-1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
      </div>
      <div class="carousel-item">
       <div class="row align-items-center">
           <div class="col-md-6">


            <h1>Bajaj Pulsar NS160</h1>

            <p>The Bajaj NS160 gets a BS VI 160.3 cc engine that makes 17.3 BHP and 14.6 Nm of peak torque. It gets disc brakes at both front and rear while also coming with ABS or the anti-lock braking system. The Bajaj Pulsar NS160 looks smart and sporty while weighing roughly 151 Kg.</p>

          

               
            </div>

               <div class="col-md-6">
                <img src="images/sl-14.png" class="d-block w-100" alt="...">
               </div>
       </div>
      </div>
      <div class="carousel-item">
       <div class="row align-items-center">
           <div class="col-md-6">
            <h1>Honda cbr1000rr</h1>
            <p>Honda CBR is always a big name, we are eligible only for this little boy of this CBR series named “Honda CBR 150R”. It’s been long this entry level CBR 150R bikes in Bangladesh, which was Honda CBR 150 & Honda CBR 150R Repsol edition.</p>

          

               </div>
               
               <div class="col-md-6">
                <img src="images/sl-55.jpg" class="d-block w-100" alt="...">
               </div>
       </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>


         



  
  <div class="pulsar" id="pulsar">

  <h1 style="text-align:center; color:white ; font-style: italic;">BAJAJ</h1>
  
  <p style="text-align:center; color:white;font-style: italic;">Bajaj Auto is a leading manufacturer of motorcycles and three-wheelers in India.</p>
   
  <br>
  <div class="sec-1"> 
    
  <div class="row"  style="text-align:center;align-items:center;justify-content:center;">
 


 @foreach($members as $member)


 @if ($member['category']=='BAJAJ')

 <div class="col-md-4 ex">
   <div class="card card-inverse card-primary text-center">
   <img src={{$member['pic']}} style="height : 200px;" alt="">
        
     <!-- <img class="card-img-top" src="images/sl-5.jpg" alt="Card image cap"> -->
     <div class="card-block">
       <!-- <h4 class="card-title">This is Card #2</h4> -->
       <h3 class="card-title">{{$member['model']}}</h3>
       <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
       <a href={{"details/".$member['id']}}> <button class="button">See More</button></a>
   </div>
   </div>
 </div>
 @endif
 @endforeach
    
    </div>
    
    </div>
    
     
    </div>











    <div class="yamaha" id="yamaha">

<h1 style="text-align:center; color:white ; font-style: italic;">YAMAHA</h1>

<p style="text-align:center; color:white;font-style: italic;">Yamaha Auto is a leading manufacturer of motorcycles and three-wheelers in India.</p>
 
<br>
<div class="sec-1"> 
  
<div class="row" style="text-align:center;align-items:center;justify-content:center;">



@foreach($members as $member)


@if ($member['category']=='YAMAHA')

<div class="col-md-4 ex">
 <div class="card card-inverse card-primary text-center" >
 <img src={{$member['pic']}} style="height : 200px;" alt="">
      
   <!-- <img class="card-img-top" src="images/sl-5.jpg" alt="Card image cap"> -->
   <div class="card-block">
     <!-- <h4 class="card-title">This is Card #2</h4> -->
     <h3 class="card-title">{{$member['model']}}</h3>
     <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href={{"details/".$member['id']}}> <button class="button">See More</button></a>
 </div>
 </div>
</div>
@endif
@endforeach
  
  </div>
  
  </div>
  
   
  </div>






  <div class="tvs" id="tvs">

<h1 style="text-align:center; color:white ; font-style: italic;">TVS</h1>

<p style="text-align:center; color:white;font-style: italic;">Tvs Auto is a leading manufacturer of motorcycles and three-wheelers in India.</p>
 
<br>
<div class="sec-1"> 
  
<div class="row" style="text-align:center;align-items:center;justify-content:center;">



@foreach($members as $member)


@if ($member['category']=='TVS')

<div class="col-md-4 ex">
 <div class="card card-inverse card-primary text-center">
 <img src={{$member['pic']}} style="height : 200px;" alt="">
      
   <!-- <img class="card-img-top" src="images/sl-5.jpg" alt="Card image cap"> -->
   <div class="card-block">
     <!-- <h4 class="card-title">This is Card #2</h4> -->
     <h3 class="card-title">{{$member['model']}}</h3>
     <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href={{"details/".$member['id']}}> <button class="button">See More</button></a>
 </div>
 </div>
</div>
@endif
@endforeach
  </div>
  </div>
  </div>






  <div class="honda" id="honda">

<h1 style="text-align:center; color:white ; font-style: italic;">HONDA</h1>

<p style="text-align:center; color:white;font-style: italic;">Honda Auto is a leading manufacturer of motorcycles and three-wheelers in India.</p>
 
<br>
<div class="sec-1"> 
  
<div class="row" style="text-align:center;align-items:center;justify-content:center;">



@foreach($members as $member)


@if ($member['category']=='HONDA')

<div class="col-md-4 ex">
 <div class="card card-inverse card-primary text-center">
 <img src={{$member['pic']}} style="height : 200px;" alt="">
      
   <!-- <img class="card-img-top" src="images/sl-5.jpg" alt="Card image cap"> -->
   <div class="card-block">
     <!-- <h4 class="card-title">This is Card #2</h4> -->
     <h3 class="card-title">{{$member['model']}}</h3>
     <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    <a href={{"details/".$member['id']}}> <button class="button">See More</button></a>
 </div>
 </div>
</div>
@endif
@endforeach
  </div>
  </div>
  </div>

 


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

           


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>