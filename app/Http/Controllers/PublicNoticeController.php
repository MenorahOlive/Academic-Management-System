<?php

namespace App\Http\Controllers;

use App\Models\PublicNotice;
use Illuminate\Http\Request;

class PublicNoticeController extends Controller
{
    public function index(){
        return PublicNotice::all();
    }

    public function create(Request $request){
        return PublicNotice::create($request->all());
    }
}
