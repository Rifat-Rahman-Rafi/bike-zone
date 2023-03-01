<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>

   .buttonUpdate{
       background-color:#19A2B6;
       border:none;
       font-size:15px;
       padding:10px;
       border-radius:10px;
       color:white;
   }
   .buttonDelete{
       background-color:#DF3446;
       border:none;
       font-size:15px;
       padding:10px;
       border-radius:10px;
       color:white;
   }
   .tableheader{
       font-size:20px;
     

   }


   .navbar-container {
 
 font-size: 22px;
 background-color: black; 
 

}

#navbarNav a{
 color:white;
}
.big{
    font-size:20px;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
  font-size: 20px;
  
}

.topnav a:hover {
  background-color: #ddd; 
   color: black; 
}

.topnav-right a {
  background-color: #27A746; 
  color: white;
}

.topnav-right {
  float: right;
}
.to{
    margin-top:10px;
}





  </style>

</head>
<body>



<div class="topnav">
  <a href=""><img src="images/logo.png" alt=""></a>
  <div class="to">
  <a class="active" href="#home">Home</a>
  <a href="#bajaj">BAJAJ</a>
  <a href="#yamaha">YAMAHA</a>
  <a href="#tvs">TVS</a>
  <a href="#yamaha">HONDA</a>
  <div class="topnav-right">
    
    <a href={{"add/"}}>Add Products</a>
    
  </div>
  </div>
</div>




<!-- <div class="navbar-container" style="margin-bottom:10px">
   
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pulsar">Bajaj</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#yamaha">Yamaha</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#tvs">Tvs</a>
        </li>
       
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#honda">Honda</a>
        </li>
        
      </ul>
      
      
    </div>
  </div>
</nav>        

</div>  -->
   











<br>
<div class="delpage" 
style='background : white;padding-bottom:50px; width:80%;margin:auto; text-align : center; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;'>

<h1 style="padding-top:30px;padding-bottom:30px;

color:#29A841; font-weight : bold;


">Products List</h1>

<div style=" width:90%;margin:auto;">



<table border ="2">

<tr class="tableheader">

  
     <th style="padding-left:30px; padding-right:30px;
    
      
      font-weight : bold;">ID</td> 
    <th style="padding-left:30px; padding-right:30px;
     font-weight : bold;">CATEGORY</th>

    <td style="padding-left:70px; padding-right:70px;
     font-weight : bold;">MODEL</td> 

    <th style="padding-left:70px; padding-right:70px;

font-weight : bold;
    
    ">IMAGE</th>
    
    <td style="padding-left:35px; padding-right:35px;

    font-weight : bold;
    
    ">DELETE</td>
    <td style="padding-left:35px; padding-right:35px; font-weight : bold;">UPDATE</td>

</tr>

@foreach($members as $Product)
<tr>
      
   
    <th class="big">{{$Product['id']}}</th>
    <th class="big">{{$Product['category']}}</th>
    <th class="big">{{$Product['model']}}</th>
    <th><img src={{$Product['pic']}} style="height : 190px;width:95%;" alt=""></th>
    <th><a href={{"deleteProducts/".$Product['id']}}><button class="buttonDelete">DELETE</button></a></th>
    <th><a href={{"edit/".$Product['id']}}><button class="buttonUpdate">UPDATE</button></a></th>
</tr>


@endforeach

</table>


</div>

</div>

<br>
<br>
</body>
</html>