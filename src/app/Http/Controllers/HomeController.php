<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Index() {
       return View('home.index',['title'=>'This is home','name'=>'lauriezc']);
    }
}
