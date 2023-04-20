<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CountController extends Controller
{
public function index(){

    $teachers=User::where('job','teacher')->count();
    $programers=User::where('job','programer')->count();
    $users=User::all()->count();
    return view('job',compact('teachers','programers','users'));
  
}
}
