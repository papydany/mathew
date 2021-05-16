<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Mission;
use App\Vision;
use App\Contact;
use App\Service;
use App\Testimonial;
use Mail;

class FrontendController extends Controller
{
    public function index()
    {
    $m=Mission::first();
    $v=Vision::first();
    $a=AboutUs::first();
    $con=Contact::first();
    $s=Service::get();
    $t=Testimonial::get();
    
    return view('welcome')->withM($m)->withA($a)->withV($v)->withC($con)->withS($s)->withT($t);
    }

    
    
    public function contactmail(Request $request)
    {
   $email =strtolower($request->email);
   $email = preg_replace('/\s+/', '', $email);
   $body =$request->body;
   $name =$request->name;
   $phone =$request->phone;
 
   $data = array('email' => $email,'body' => $body,'name'=>$name,'phone'=>$phone);

  Mail::send(array('html'=>'emails.reply'), $data, function($message) use ($data)  {
                $message->from($data['email'],$data['name']);
                $message->to('info@zoeconsultancy.com',$data['name'],$data['phone'],$data['body']);
                $message->subject("Message From Website");

            });
  $request->session()->flash('success', 'Successful!');
 //return back(); 
        }
}
