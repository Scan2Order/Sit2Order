<?php

namespace App\Http\Controllers;
use App\Rating;
use App\Http\Resources\Rating as RatingResource;

use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function index(){
        return view('rating');
    }
  

public function setrating(Request $request){
    return new RatingResource(Rating:: create([
        'rating_id' => $request->get('rating'),
        'user_id' => $request->get('user'),
    ]));
    

    }
}