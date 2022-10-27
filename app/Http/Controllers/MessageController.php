<?php

namespace App\Http\Controllers;

use App\Mail\Message;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
 
    

    public function send(Request $request){

        
        $name = request('name'); 
        $email = request('email');
        $mess = request('message'); 
    

      Mail::to("enidhbc@gmail.com")->send(new Message($name, $email, $mess));

    
        
        return redirect("/thanks");
    }
}
