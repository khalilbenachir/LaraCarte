<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests\ContactRequest;

use App\Mail\ContactMessageCreated;

use MercurySeries\Flashy\Flashy;
use App\Models\Message;

class contactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }

    public function store(ContactRequest $request){
          $message=new Message;
          $message->name=$request->name;          
          $message->email=$request->email;          
          $message->message=$request->message;      
          $message->save();    
          $mailable=new ContactMessageCreated($message);
          Mail::to(config('laracarte.ADMIN_SUPPORT_MAIL'))->queue($mailable);
          Flashy::message('We gonna get in touch with u as possible as we can!');

          return Redirect()->route('root_path');
        }
    
    
}
