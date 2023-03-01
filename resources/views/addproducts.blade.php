<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
  padding: 26px 26px;
   text-decoration: none; 
  font-size: 20px;
  
  
}

/* .aaa a:hover {
  background-color: #ddd; 
   color: black; 
} */

 .bk a {
    color:rgb(200, 0, 0);
     font-size:25px;
     font-style:italic;
  
} 

.topnav-right {
  float: right;
}
/* .to{
  
   
} */
    </style>
</head>

<div class="topnav">
  <!-- <a href=""><img src="images/logo.png" alt=""></a> -->
  <div class="to">
      <div class="bk">
  <a href="#yamaha">BIKE-ZONE</a>
  </div>
  <div class="aaa">
  <a class="active" href="#home">Home</a>
  <a href="#bajaj">BAJAJ</a>
  <a href="#yamaha">YAMAHA</a>
  <a href="#tvs">TVS</a>
  <a href="#yamaha">HONDA</a>
  </div>
  <div class="topnav-right">
    
    <!-- <a href={{"delete"}}>Add Products</a> -->
    <a href="#admin">
        
  <div >@ ADMIN </div>

</a>
   
  </div>
  </div>
</div>

<br>




<div style='width : 100%;min-height:100vh;margin:0px; text-align :center;



'>

<div class="addpage" 
style='background : white;padding-bottom:50px;
 width:70%;margin:auto; text-align : center; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;'>
<h1 style="padding-top:40px; color:#29A841;">Add Products</h1>
<form action="add" method="POST">
    @csrf
    <input style='height:50px;width : 70%; font-size:20px' type="int" name="id" placeholder="Enter ID"><br><br>
    <input style='height:50px;width : 70%; font-size:20px' type="text" name="category" placeholder="Enter Category"><br><br>
    <input style='height:50px;width : 70%;font-size:20px'type="text" name="pic" placeholder="Enter Image"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="model" placeholder="Enter Model"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="colour" placeholder="Enter colour"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="int" name="cc" placeholder="Enter cc"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="int" name="gearbox" placeholder="Enter Gearbox"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="maxpower" placeholder="Enter Max-Power"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="fueltype" placeholder="Enter Fuel Type"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="fueltankcapacity" placeholder="Enter Fuel Tank Capacity"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="enginetype" placeholder="Enter Engine Type"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="transmissiontype" placeholder="Enter Transmission Type"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="made" placeholder="Enter Made"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="details" placeholder="Enter Tyre Type"><br><br>
    <input style='height:50px;width : 70%; font-size:20px'type="text" name="price" placeholder="Enter Price"><br><br>
    <button style='height:55px;width : 200px; margin-top:15px;font-size:25px; color: white;background-color:#29A841;
     border:none'type="submit">Add Product</button>
    <br><br>
    <br>
</form>

</div>

</div>
    
</body>
</html>

