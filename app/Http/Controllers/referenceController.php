<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\message;
use Illuminate\Support\Facades\Mail;

class referenceController extends Controller
{
    public function contact(Request $request){
        $data=$request->all();
        Mail::to('murodaliyevabrorbek@gmail.com')->send(new message($data));
        return back()->with('message','Murojatingiz yuborildi!');
    }
}
