<?php

namespace App\Http\Controllers;

use App\Hobby;
use Illuminate\Http\Request;

class dummyapi extends Controller
{
    public function getdata()
    {
        return ["name"=>"amalanto","email"=>"gfgfgf","address"=>"india"];
    }

    public function list()
    {
        return Hobby::all();
    }
}
