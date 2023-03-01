<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class Productcontroller extends Controller
{
    //
    function addData(Request $req)
    {
             $member=new Member;
             $member->id=$req->id;
             $member->category=$req->category;
             $member->pic=$req->pic;
             $member->model=$req->model;
             $member->colour=$req->colour;
             $member->cc=$req->cc;
             $member->gearbox=$req->gearbox;
             $member->maxpower=$req->maxpower;
             $member->fueltype=$req->fueltype;
             $member->fueltankcapacity=$req->fueltankcapacity;
             $member->enginetype=$req->enginetype;
             $member->transmissiontype=$req->transmissiontype;
             $member->made=$req->made;
             $member->details=$req->details;
             $member->price=$req->price;
             $member->save();
             return redirect('add');
    }

    
   
     function show(){

        $data= Member::all();
        //  $data= Member::where('Address','hello')->get();
        

        // return view('list',['members'=>$data]);
        return view('home',['members'=>$data]);

     }



     function delete()
     {
    
      $data= Member::all();
   
      return view('delete',['members'=>$data]);


     }

     function deleteProducts($id)
     {
    
      $data= Member::find($id);
      $data->delete();
      return redirect('delete');
   
     }

     function showProducts($id)
     {
    
      $data= Member::find($id);
      // $data->delete();
       return view('edit',['data'=>$data]);
   
     }


     function update(Request $req){

     $data=Member::find($req->id);
      // $data->id=$req->id;
      $data->category=$req->category;
      $data->pic=$req->pic;
      $data->model=$req->model;
      $data->colour=$req->colour;
      $data->cc=$req->cc;
      $data->gearbox=$req->gearbox;
      $data->maxpower=$req->maxpower;
      $data->fueltype=$req->fueltype;
      $data->fueltankcapacity=$req->fueltankcapacity;
      $data->enginetype=$req->enginetype;
      $data->transmissiontype=$req->transmissiontype;
      $data->made=$req->made;
      $data->details=$req->details;
      $data->price=$req->price;
      $data->save();
      // return redirect('list');
        return redirect('');
     }


     function detailsProducts($id)
     {
    
      $data= Member::find($id);
      // $data->delete();
       return view('details',['data'=>$data]);
   
     }

     function showDetails($id){

      $data= Member::find($id);
      // $data->delete();
       return view('details',['data'=>$data]);


     }


      


    

     
 
}
