<h1 style="text-align:center;">Products List</h1>

<table border ="1">

<tr>
    
    <th>Category</th>
    <th>Image</th>
    <th>Operation</th>
    

</tr>
@foreach($members as $Product)
<tr>
      
   
    <th>{{$Product['sel']}}</th>
    <th><img src={{$Product['pic']}} style="height : 100px;" alt=""></th>
    <th><a href={{"delete/".$Product['pic']}}>Delete</a></th>
</tr>
@endforeach

</table>