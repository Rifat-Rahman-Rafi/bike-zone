
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .button:hover{ background-color: #3e8e41};
    </style>
</head>
<body>
    <br>

<div class="editpage" 
style='background : white;padding-bottom:50px; width:70%;margin:auto; text-align : center; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;'>

<h1 style="padding-top:50px;">Updat Product</h1>
<form action="/edit" method="POST">

@csrf


<img src={{$data['pic']}} style="height : 400px;" alt=""><br><br>


<input style='height:50px;width : 50%;'type="text" name="pic"value={{$data['pic']}} ><br><br>


<input style='height:50px;width : 50%;'type="int" name="id"value={{$data['id']}}><br><br>
<input style='height:50px;width : 50%;'type="text" name="category"value={{$data['category']}} ><br><br>
<!-- <input style='height:100px;width : 50%;'type="text" name="pic"-->

<input style='height:50px;width : 50%;'type="text" name="model"value={{$data['model']}}><br><br>
<input style='height:50px;width : 50%;'type="text" name="colour" value={{$data['colour']}}><br><br>
<input style='height:50px;width : 50%; 'type="int" name="cc" value={{$data['cc']}}><br><br>
<input style='height:50px;width : 50%; 'type="int" name="gearbox"value={{$data['gearbox']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="maxpower"value={{$data['maxpower']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="fueltype"value={{$data['fueltype']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="fueltankcapacity"value={{$data['fueltankcapacity']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="enginetype" value={{$data['enginetype']}}  ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="transmissiontype"value={{$data['transmissiontype']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="made"value={{$data['made']}} ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="details"value={{$data['details']}}  ><br><br>
<input style='height:50px;width : 50%; 'type="text" name="price"value={{$data['price']}} ><br><br><br>
<button class="button" style='height:50px;width : 20%; border:none;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); margin-top:15px;background-color:#219FAE; color: white;font-size:25px'type="submit">UPDATE</button>

<br><br>
    <br>

</form>

</div>
    <br><br>
</body>
</html>

