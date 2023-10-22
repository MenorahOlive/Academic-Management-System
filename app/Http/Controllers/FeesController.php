<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeeBalance;

class FeesController extends Controller
{
    //
    public function show_fees(){


        return view('fees');
    }
    public function credit($id,$amount){
        $item=FeeBalance::where('students_id',$id);
        $bal = $item->balance + $amount;
        $item->update(array('balance'=>$amount));
    }
    public function deduct($id,$amount){
        $item=FeeBalance::where('students_id',$id);
        $bal = $item->balance - $amount;
        $item->update(array('balance'=>$amount));
    }

  
}
