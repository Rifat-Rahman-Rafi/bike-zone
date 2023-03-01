<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class Yamahacontroller extends Controller
{
    //
    function showYamaha(){


        $data= Member::where('Address','ppp')->get();
        

        return view('list',['membersY'=>$data]);

    }
}
